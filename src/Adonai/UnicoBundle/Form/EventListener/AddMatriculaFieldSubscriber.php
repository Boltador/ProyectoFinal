<?php

namespace Adonai\UnicoBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;
use Adonai\UnicoBundle\Entity\Grupos;
use Adonai\UnicoBundle\Entity\Asignaciones;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AddMatriculaFieldSubscriber implements EventSubscriberInterface
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

    private function addMatriculaForm($form, $grupo)
    {
        $form->add($this->factory->createNamed('matricula',EntityType::class, null, array(
            'class'         => 'AdonaiUnicoBundle:Matriculas',
            'auto_initialize' => false,
            'query_builder' => function (EntityRepository $repository) use ($grupo) {
                $qb = $repository->createQueryBuilder('matricula')
                ->innerJoin('matricula.grupo', 'grupo');
                if ($grupo instanceof Grupos) {
                    $qb->where('matricula.grupo = :grupo')
                    ->setParameter('grupo', $grupo);
                }
                return $qb;
            }, 
            'placeholder'   => '-- Seleccione un Estudiante --',
            'required'    => true,
            'label'       => 'Estudiante: '
            )));
    }

    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (null === $data) {
            return;
        }
        $grupo = ($data->getAsignacion()) ? $data->getAsignacion()->getGrupo() : null;
        $this->addMatriculaForm($form, $grupo);
    }

    public function preBind(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (null === $data) {
            return;
        }

        $asignacion = array_key_exists('asignacion', $data) ? $data['asignacion'] : null; // Esto es un id
        $em = $GLOBALS['kernel']->getContainer()->get('doctrine')->getManager();
        $asignacion = $em->getRepository('AdonaiUnicoBundle:Asignaciones')->find($asignacion);
        $grupo = $asignacion->getGrupo();
        $this->addMatriculaForm($form, $grupo);
    }
}