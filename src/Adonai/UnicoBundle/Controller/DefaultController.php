<?php

namespace Adonai\UnicoBundle\Controller;

use Adonai\UnicoBundle\Entity\Asignaciones;
use Adonai\UnicoBundle\Entity\ALectivos;
use Adonai\UnicoBundle\Entity\Periodos;
use Adonai\UnicoBundle\Entity\Grupos;
use Adonai\UnicoBundle\Entity\Notas;
use Adonai\UnicoBundle\Entity\Matriculas;
use Adonai\UnicoBundle\Form\NotasType;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $usuario_login = $this->comprobarUsuarioAction();
        $a_lectivo = new ALectivos();
        $añol_actual = $a_lectivo->getAñoLectivoActual();
        $gr = new Grupos();
        $lista_grupos = $gr->getListaGruposActual();
        return $this->render('AdonaiUnicoBundle:Default:index.html.twig', array('usuario_login' => $usuario_login, 'añol_actual' => $añol_actual, 'lista_grupos' => $lista_grupos));
    }

    public function adminAction()
    {
        $coordinador = $this->comprobarUsuarioAction();
        if (!$coordinador) {
            throw $this->createNotFoundException(
                'No se encontró el coordinador con ID: ' . $coordinador->getIdCor()
                );
        }
        $al_actual = new ALectivos();
        $al_actual = $al_actual->getAñoLectivoActual();
        $periodo_actual = new Periodos();
        $periodo_actual = $periodo_actual->getPeriodoActual();
        $lista_grupos = new Grupos();
        $lista_grupos = $lista_grupos->getListaGruposActual();
        $matricula = new Matriculas();
        $total_est =  $matricula->getTotalMatriculasActual($lista_grupos);

        return $this->render('AdonaiUnicoBundle:Default:admin.html.twig', array('coordinador' => $coordinador,
            'lista_grupos' => $lista_grupos,
            'al_actual' => $al_actual, 'periodo_actual' => $periodo_actual,
            'total_est' => $total_est));
    }


    public function docenteAction()
    {
        $docente = $this->comprobarUsuarioAction();
        if (!$docente) {
            throw $this->createNotFoundException(
                'No se encontró el docente con ID: ' . $docente->getIdDoc()
                );
        }
        $lista_asignaciones = new Asignaciones();
        $lista_asignaciones = $lista_asignaciones->getListaAsignacionesActual($docente);
        $al_actual = new ALectivos();
        $al_actual = $al_actual->getAñoLectivoActual();
        $periodo_actual = new Periodos();
        $periodo_actual = $periodo_actual->getPeriodoActual();
        $grupo_dir = new Grupos();
        $grupo_dir = $grupo_dir->comprobarDirectorDocente($docente);

        
        return $this->render('AdonaiUnicoBundle:Default:docente.html.twig', array('docente' => $docente,
            'lista_asignaciones' => $lista_asignaciones,
            'al_actual' => $al_actual, 'periodo_actual' => $periodo_actual,
            'grupo_dir' => $grupo_dir));
    }


    public function notasDocenteAction(){
        $docente = $this->comprobarUsuarioAction();
        if (!$docente) {
            throw $this->createNotFoundException(
                'No se encontró el docente con ID: ' . $docente->getIdDoc()
                );
        }
        $lista_asignaciones = new Asignaciones();
        $lista_asignaciones = $lista_asignaciones->getListaAsignacionesActual($docente);
        $al_actual = new ALectivos();
        $al_actual = $al_actual->getAñoLectivoActual();
        $periodo_actual = new Periodos();
        $periodo_actual = $periodo_actual->getPeriodoActual();
        $periodos = $periodo_actual->getPeriodosActuales($al_actual);
        $grupo_dir = new Grupos();
        $grupo_dir = $grupo_dir->comprobarDirectorDocente($docente);

        $nota = new Notas();
        $form = $this->createForm(new NotasType($docente, $al_actual, $periodo_actual->getFechaInPer()), $nota);

        return $this->render('AdonaiUnicoBundle:Default:notas_docente.html.twig', array('docente' => $docente,
            'lista_asignaciones' => $lista_asignaciones,
            'al_actual' => $al_actual, 'periodo_actual' => $periodo_actual,
            'periodos' => $periodos,
            'grupo_dir' => $grupo_dir,
            'nota' => $nota,
            'form' => $form->createView()));
    }


    public function comprobarUsuarioAction()
    {
        $coordinador = null;
        $docente = null;
        $usuario = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        if (true === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            $coordinador = $em->getRepository('AdonaiUnicoBundle:Coordinadores')
            ->findOneByUsuario($usuario);

        } elseif (true === $this->get('security.authorization_checker')->isGranted('ROLE_DOCENTE')) {
            $docente = $em->getRepository('AdonaiUnicoBundle:Docentes')
            ->findOneByUsuario($usuario);
        }
        if (!$coordinador) {
            return $docente;
        } else {
            return $coordinador;
        }
    }
}
