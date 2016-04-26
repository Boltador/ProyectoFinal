<?php

namespace Adonai\UnicoBundle\Controller;


use Adonai\UnicoBundle\Entity\Asignaciones;
use Adonai\UnicoBundle\Entity\ALectivos;
use Adonai\UnicoBundle\Entity\Periodos;
use Adonai\UnicoBundle\Entity\Grupos;
use Adonai\UnicoBundle\Entity\Planeadores;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Adonai\UnicoBundle\Form\PlaneadoresType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Planeadores controller.
 *
 * @Route("/planeadores")
 */
class PlaneadoresController extends Controller
{
    /**
     * Lists all Planeadores entities.
     *
     * @Route("/", name="planeadores_index")
     * @Method("GET")
     */
    public function indexAction()
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
        $periodos = $periodo_actual->getPeriodosActuales($al_actual);
        $grupo_dir = new Grupos();
        $grupo_dir = $grupo_dir->comprobarDirectorDocente($docente);


        return $this->render('AdonaiUnicoBundle:Planeadores:planeador_docente.html.twig', array('docente' => $docente,
            'lista_asignaciones' => $lista_asignaciones,
            'al_actual' => $al_actual, 'periodo_actual' => $periodo_actual,
            'periodos' => $periodos,
            'grupo_dir' => $grupo_dir));
    }

    /**
     * Creates a new Planeadores entity.
     *
     * @Route("/new", name="planeadores_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
       $al_actual = new ALectivos();
       $al_actual = $al_actual->getAñoLectivoActual();
       $docente = $this->comprobarUsuarioAction();
       $periodo_actual = new Periodos();
       $periodo_actual = $periodo_actual->getPeriodoActual();

       $planeador = new Planeadores();
       $form = $this->createForm(new PlaneadoresType($docente, $al_actual, $periodo_actual->getFechaInPer()), $planeador);
       $form->handleRequest($request);

       if ($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($planeador);
        $em->flush();

        return $this->redirectToRoute('planeadores_show', array('id' => $planeador->getIdPlan()));
    }

    return $this->render('planeadores/new.html.twig', array(
        'planeador' => $planeador,
        'form' => $form->createView(),
        ));
}

    /**
     * Finds and displays a Planeadores entity.
     *
     * @Route("/{id}", name="planeadores_show")
     * @Method("GET")
     */
    public function showAction(Planeadores $planeador)
    {
        $deleteForm = $this->createDeleteForm($planeador);

        return $this->render('planeadores/show.html.twig', array(
            'planeadore' => $planeador,
            'delete_form' => $deleteForm->createView(),
            ));
    }

    /**
     * Displays a form to edit an existing Planeadores entity.
     *
     * @Route("/{id}/edit", name="planeadores_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Planeadores $planeador)
    {
        $deleteForm = $this->createDeleteForm($planeador);
        $editForm = $this->createForm('Adonai\UnicoBundle\Form\PlaneadoresType', $planeador);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($planeador);
            $em->flush();

            return $this->redirectToRoute('planeadores_edit', array('id' => $planeador->getIdPlan()));
        }

        return $this->render('planeadores/edit.html.twig', array(
            'planeadore' => $planeador,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            ));
    }

    /**
     * Deletes a Planeadores entity.
     *
     * @Route("/{id}", name="planeadores_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Planeadores $planeador)
    {
        $form = $this->createDeleteForm($planeador);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($planeador);
            $em->flush();
        }

        return $this->redirectToRoute('planeadores_index');
    }

    /**
     * Creates a form to delete a Planeadores entity.
     *
     * @param Planeadores $planeador The Planeadores entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Planeadores $planeador)
    {
        return $this->createFormBuilder()
        ->setAction($this->generateUrl('planeadores_delete', array('id' => $planeador->getIdPlan())))
        ->setMethod('DELETE')
        ->getForm()
        ;
    }

    public function comprobarUsuarioAction() {
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
