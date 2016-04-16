<?php

namespace Adonai\UnicoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CoordinadoresType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nuip')
            ->add('nomCor')
            ->add('dir')
            ->add('tel')
            ->add('movil')
            ->add('email')
            ->add('usuario', EntityType::class, array( //provare a mettere una querybuiler
            'class'       => 'AdonaiUnicoBundle:Usuarios',
            'property'    => 'username',
            'empty_value' => 'Seleccione un ID',
            'required'    => false,
            'label'       => 'ID Usuario: '))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Adonai\UnicoBundle\Entity\Coordinadores'
        ));
    }
}
