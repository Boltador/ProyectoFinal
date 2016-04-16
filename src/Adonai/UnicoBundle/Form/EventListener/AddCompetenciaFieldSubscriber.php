<?php

namespace Adonai\UnicoBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\ORM\EntityRepository;
use Adonai\UnicoBundle\Entity\Grupos;
use Adonai\UnicoBundle\Entity\Asignaciones;
use Adonai\UnicoBundle\Entity\Asignaturas;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AddCompetenciaFieldSubscriber implements EventSubscriberInterface
{
    private $factory;

    public function __construct(FormFactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_BIND     => 'preBind'
            );
    }

    private function addCompetenciaForm($form, $asignatura, $grado)
    {
        $form->add($this->factory->createNamed('competencia',EntityType::class, null, array(
            'class'         => 'AdonaiUnicoBundle:Competencias',
            'placeholder'   => '-- Seleccione una Competencia --',
            'auto_initialize' => false,
            'query_builder' => function (EntityRepository $repository) use ($asignatura, $grado) {
                $qb = $repository->createQueryBuilder('comp');
                if ($grado instanceof Grados && $asignatura instanceof Asignaturas) {
                    $qb->where('comp.grado = :grado')
                    ->AndWhere('comp.asignatura = :asignatura')
                    ->setParameter('grado', $grado)
                    ->setParameter('asignatura', $asignatura);
                }
                return $qb;
            }, 
            'required'    => false,
            'label'       => 'Competencia: '
            )));
    }

    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (null === $data) {
            return;
        }      
        $grado = ($data->getAsignacion()) ? $data->getAsignacion()->getGrupo()->getGrado() : null ;
        $asignatura = ($data->getAsignacion()) ? $data->getAsignacion()->getAsignatura() : null ;
        $this->addCompetenciaForm($form, $asignatura, $grado);
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
        $grado = $asignacion->getGrupo()->getGrado();
        $asignatura = $asignacion->getAsignatura();
        $this->addCompetenciaForm($form, $asignatura, $grado);
    }
}