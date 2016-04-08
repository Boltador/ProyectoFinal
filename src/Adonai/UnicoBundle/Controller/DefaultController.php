<?php

namespace Adonai\UnicoBundle\Controller;

use Adonai\UnicoBundle\Entity\Asignaciones;
use Adonai\UnicoBundle\Entity\ALectivos;
use Adonai\UnicoBundle\Entity\Periodos;
use Adonai\UnicoBundle\Entity\Grupos;
use Adonai\UnicoBundle\Entity\Matriculas;
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
        $em = $this->getDoctrine()->getManager();
        $usuario_login = $this->comprobarUsuarioAction();
        $a_lectivo = new ALectivos();
        $añol_actual = $a_lectivo->getAñoLectivoActual($em);
        $gr = new Grupos();
        $lista_grupos = $gr->getListaGruposActual($em);
        return $this->render('AdonaiUnicoBundle:Default:index.html.twig', array('usuario_login' => $usuario_login, 'añol_actual' => $añol_actual, 'lista_grupos' => $lista_grupos));
    }

    public function adminAction()
    {
        $em = $this->getDoctrine()->getManager();
        $coordinador = $this->comprobarUsuarioAction();
        if (!$coordinador) {
            throw $this->createNotFoundException(
                'No se encontró el coordinador con ID: ' . $coordinador->getIdCor()
                );
        }
        $al_actual = new ALectivos();
        $al_actual = $al_actual->getAñoLectivoActual($em);
        $periodo_actual = new Periodos();
        $periodo_actual = $periodo_actual->getPeriodoActual($em);
        $lista_grupos = new Grupos();
        $lista_grupos = $lista_grupos->getListaGruposActual($em);
        $matricula = new Matriculas();
        $total_est =  $matricula->getTotalMatriculasActual($lista_grupos, $em);

        return $this->render('AdonaiUnicoBundle:Default:admin.html.twig', array('coordinador' => $coordinador,
            'lista_grupos' => $lista_grupos,
            'al_actual' => $al_actual, 'periodo_actual' => $periodo_actual,
            'total_est' => $total_est));
    }


    public function docenteAction()
    {
        $em = $this->getDoctrine()->getManager();
        $docente = $this->comprobarUsuarioAction();
        if (!$docente) {
            throw $this->createNotFoundException(
                'No se encontró el docente con ID: ' . $docente->getIdDoc()
                );
        }
        $lista_asignaciones = new Asignaciones();
        $lista_asignaciones = $lista_asignaciones->getListaAsignacionesActual($docente, $em);
        $al_actual = new ALectivos();
        $al_actual = $al_actual->getAñoLectivoActual($em);
        $periodo_actual = new Periodos();
        $periodo_actual = $periodo_actual->getPeriodoActual($em);
        $grupo_dir = new Grupos();
        $grupo_dir = $grupo_dir->comprobarDirectorDocente($docente, $em);
        
        return $this->render('AdonaiUnicoBundle:Default:docente.html.twig', array('docente' => $docente,
            'lista_asignaciones' => $lista_asignaciones,
            'al_actual' => $al_actual, 'periodo_actual' => $periodo_actual,
            'grupo_dir' => $grupo_dir));
    }

    public function notasDocenteAction(){
        $em = $this->getDoctrine()->getManager();
        $docente = $this->comprobarUsuarioAction();
        if (!$docente) {
            throw $this->createNotFoundException(
                'No se encontró el docente con ID: ' . $docente->getIdDoc()
                );
        }
        $lista_asignaciones = new Asignaciones();
        $lista_asignaciones = $lista_asignaciones->getListaAsignacionesActual($docente, $em);
        $al_actual = new ALectivos();
        $al_actual = $al_actual->getAñoLectivoActual($em);
        $periodo_actual = new Periodos();
        $periodo_actual = $periodo_actual->getPeriodoActual($em);
        $grupo_dir = new Grupos();
        $grupo_dir = $grupo_dir->comprobarDirectorDocente($docente, $em);
        
        return $this->render('AdonaiUnicoBundle:Default:notas_docente.html.twig', array('docente' => $docente,
            'lista_asignaciones' => $lista_asignaciones,
            'al_actual' => $al_actual, 'periodo_actual' => $periodo_actual,
            'grupo_dir' => $grupo_dir));
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
