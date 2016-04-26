<?php

namespace Adonai\UnicoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Adonai\UnicoBundle\Form\EventListener\AddMatriculaFieldSubscriber;
use Adonai\UnicoBundle\Form\EventListener\AddAsignacionFieldSubscriber;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class NotasType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function __construct($docente, $a_lectivo, $fecha_in_per) {
        $this->docente = $docente;
        $this->a_lectivo = $a_lectivo;
        $this->fecha_in_per = $fecha_in_per;
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $factory = $builder->getFormFactory();
        $matriculaSubscriber = new AddMatriculaFieldSubscriber($factory);
        $builder->addEventSubscriber($matriculaSubscriber);
        $asignacionSubscriber = new AddAsignacionFieldSubscriber($factory, $this->docente, $this->a_lectivo);
        $builder->addEventSubscriber($asignacionSubscriber);
        $builder->add('periodo', EntityType::class, array(
            'class' => 'AdonaiUnicoBundle:Periodos',
            'choice_label' => 'numero',
            'query_builder' => function(\Doctrine\ORM\EntityRepository $er) {
                return $er->createQueryBuilder('p')
                                ->where('p.fechaInPer = ?1')
                                ->setParameter(1, $this->fecha_in_per);
            },
            'required' => true,
            'label' => 'Periodo: '));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Adonai\UnicoBundle\Entity\Notas'
        ));
    }

    public function getBlockPrefix() {
        return 'nota';
    }

}
