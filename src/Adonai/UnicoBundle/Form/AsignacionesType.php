<?php

namespace Adonai\UnicoBundle\Form;

use Adonai\UnicoBundle\Entity\ALectivos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AsignacionesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
        ->add('asignatura', 'entity', array(
            'class'       => 'AdonaiUnicoBundle:Asignaturas',
            'property'    => 'nomAsig',
            'empty_value' => 'Seleccione un Asignatura',
            'required'    => false,
            'label'       => 'Asignatura: '))
        ->add('docente', 'entity', array( 
            'class'       => 'AdonaiUnicoBundle:Docentes',
            'property'    => 'nomDoc',
            'empty_value' => 'Seleccione un Docente',
            'required'    => false,
            'label'       => 'Docente: '))
        ->add('grupo', 'entity', array( 
            'class'       => 'AdonaiUnicoBundle:Grupos',
            'property'    => 'grado',
            'empty_value' => 'Seleccione un Grupo',
            'required'    => false,
            'label'       => 'Grupo: '))
        ->add('a_lectivo', 'entity' , array( 
            'class'       => 'AdonaiUnicoBundle:ALectivos',
            'property'    => 'fecha_inicio',
            'empty_value' => 'Seleccione un Año Lectivo',
            'required'    => false,
            'label'       => 'Año Lectivo: '))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Adonai\UnicoBundle\Entity\Asignaciones'
            ));
    }
}
