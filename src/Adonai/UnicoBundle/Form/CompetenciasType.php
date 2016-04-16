<?php

namespace Adonai\UnicoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Adonai\UnicoBundle\Form\EventListener\AddCompetenciaFieldSubscriber;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CompetenciasType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $factory = $builder->getFormFactory();
        $builder
        ->add('grado', EntityType::class, array( 
            'class'       => 'AdonaiUnicoBundle:Grados',
            'property'    => 'grado',
            'empty_value' => 'Seleccione un Grado',
            'required'    => false,
            'label'       => 'Grado: '))
        ->add('asignatura', 'entity', array( 
            'class'       => 'AdonaiUnicoBundle:Asignaturas',
            'property'    => 'nomAsig',
            'empty_value' => 'Seleccione una asignatura',
            'required'    => false,
            'label'       => 'Asignatura: '))
        ->add('contenido')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Adonai\UnicoBundle\Entity\Competencias'
            ));
    }
}
