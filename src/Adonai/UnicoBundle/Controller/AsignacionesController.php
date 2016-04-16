<?php

namespace Adonai\UnicoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Adonai\UnicoBundle\Entity\Asignaciones;
use Adonai\UnicoBundle\Form\AsignacionesType;

/**
 * Acudientes controller.
 *
 * @Route("/asignaciones")
 */
class AsignacionesController extends Controller
{
    /**
     * Lists all Asignaciones entities.
     *
     * @Route("/", name="asignaciones_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $asignaciones = $em->getRepository('AdonaiUnicoBundle:Asignaciones')->findAll();

        return $this->render('asignaciones/index.html.twig', array(
            'asignaciones' => $asignaciones,
            ));
    }

    /**
     * Creates a new Asignaciones entity.
     *
     * @Route("/new", name="asignaciones_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $asignacion = new Asignaciones();
        $form = $this->createForm('Adonai\UnicoBundle\Form\AsignacionesType', $asignacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($asignacion);
            $em->flush();

            return $this->redirectToRoute('asignaciones_show', array('id' => $asignacion->getIdAsignacion()));
        }

        return $this->render('asignaciones/new.html.twig', array(
            'asignacion' => $asignacion,
            'form' => $form->createView(),
            ));
    }

    /**
     * Finds and displays a Asignaciones entity.
     *
     * @Route("/{id}", name="asignaciones_show")
     * @Method("GET")
     */
    public function showAction(Asignaciones $asignacion)
    {
        $deleteForm = $this->createDeleteForm($asignacion);

        return $this->render('asignaciones/show.html.twig', array(
            'asignacion' => $asignacion,
            'delete_form' => $deleteForm->createView(),
            ));
    }

    /**
     * Displays a form to edit an existing Asignaciones entity.
     *
     * @Route("/{id}/edit", name="asignaciones_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Asignaciones $asignacion)
    {
        $deleteForm = $this->createDeleteForm($asignacion);
        $editForm = $this->createForm('Adonai\UnicoBundle\Form\AsignacionesType', $asignacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($asignacion);
            $em->flush();

            return $this->redirectToRoute('asignaciones_edit', array('id' => $asignacion->getIdAsignacion()));
        }

        return $this->render('asignaciones/edit.html.twig', array(
            'asignacion' => $asignacion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            ));
    }

    /**
     * Deletes a Asignaciones entity.
     *
     * @Route("/{id}", name="asignaciones_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Asignaciones $asignacion)
    {
        $form = $this->createDeleteForm($asignacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($asignacion);
            $em->flush();
        }

        return $this->redirectToRoute('asignaciones_index');
    }

    /**
     * Creates a form to delete a Asignaciones entity.
     *
     * @param Asignaciones $asignacion The Asignaciones entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Asignaciones $asignacion)
    {
        return $this->createFormBuilder()
        ->setAction($this->generateUrl('asignaciones_delete', array('id' => $asignacion->getIdAsignacion())))
        ->setMethod('DELETE')
        ->getForm()
        ;
    }


    /**
     * Buscar
     *
     * @Route("/buscar_asignacion", name="buscar_asignacion")
     * 
     */
    public function buscarAsignacion($id){
        $em = $this->getDoctrine()->getManager();
        $asignacion = $em->getRepository('AdonaiUnicoBundle:Asignaciones')->find($id);
        return $asignacion;
    }
}
