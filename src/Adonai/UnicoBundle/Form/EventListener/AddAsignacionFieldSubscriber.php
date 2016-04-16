<?php

namespace Adonai\UnicoBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AddAsignacionFieldSubscriber implements EventSubscriberInterface
{
    private $factory;
    private $docente;
    private $a_lectivo;

    public function __construct(FormFactoryInterface $factory, $docente, $a_lectivo)
    {
        $this->factory = $factory;
        $this->docente = $docente;
        $this->a_lectivo = $a_lectivo;
    }
    
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_BIND     => 'preBind'
            );
    }

    private function addAsignacionForm($form, $grupo)
    { 
        $form->add($this->factory->createNamed('asignacion',EntityType::class, $grupo, array(
            'class' => 'AdonaiUnicoBundle:Asignaciones',
            'auto_initialize' => false,
            'query_builder' => function(\Doctrine\ORM\EntityRepository $er){
                return $er->createQueryBuilder('a')
                ->where('a.docente = ?1')
                ->AndWhere('a.a_lectivo = ?2')
                ->setParameter(1, $this->docente)
                ->setParameter(2, $this->a_lectivo);
            },
            'placeholder' => '-- Seleccione una Asignacion --',
            'required'    => true,
            'label'       => 'Asignacion: ')));
    }

    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (null === $data) {
            return;
        }
        $grupo = ($data->getAsignacion()) ? $data->getAsignacion()->getGrupo() : null ;
        $this->addAsignacionForm($form, $grupo);
    }

    public function preBind(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (null === $data) {
            return;
        }

        $asignacion = array_key_exists('asignacion', $data) ? $data['asignacion'] : null;
        $em = $GLOBALS['kernel']->getContainer()->get('doctrine')->getEntityManager();
        $asignacion = $em->getRepository('AdonaiUnicoBundle:Asignaciones')->find($asignacion);
        $grupo = $asignacion->getGrupo();
        $this->addAsignacionForm($form, $grupo);
    }
}