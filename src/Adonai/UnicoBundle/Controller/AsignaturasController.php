<?php

namespace Adonai\UnicoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Adonai\UnicoBundle\Entity\Asignaturas;
use Adonai\UnicoBundle\Form\AsignaturasType;

/**
 * Asignaturas controller.
 *
 * @Route("/asignaturas")
 */
class AsignaturasController extends Controller
{
    /**
     * Lists all Asignaturas entities.
     *
     * @Route("/", name="asignaturas_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $asignaturas = $em->getRepository('AdonaiUnicoBundle:Asignaturas')->findAll();

        return $this->render('asignaturas/index.html.twig', array(
            'asignaturas' => $asignaturas,
        ));
    }

    /**
     * Creates a new Asignaturas entity.
     *
     * @Route("/new", name="asignaturas_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $asignatura = new Asignaturas();
        $form = $this->createForm('Adonai\UnicoBundle\Form\AsignaturasType', $asignatura);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($asignatura);
            $em->flush();

            return $this->redirectToRoute('asignaturas_show', array('id' => $asignatura->getIdAsig()));
        }

        return $this->render('asignaturas/new.html.twig', array(
            'asignatura' => $asignatura,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Asignaturas entity.
     *
     * @Route("/{id}", name="asignaturas_show")
     * @Method("GET")
     */
    public function showAction(Asignaturas $asignatura)
    {
        $deleteForm = $this->createDeleteForm($asignatura);

        return $this->render('asignaturas/show.html.twig', array(
            'asignatura' => $asignatura,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Asignaturas entity.
     *
     * @Route("/{id}/edit", name="asignaturas_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Asignaturas $asignatura)
    {
        $deleteForm = $this->createDeleteForm($asignatura);
        $editForm = $this->createForm('Adonai\UnicoBundle\Form\AsignaturasType', $asignatura);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($asignatura);
            $em->flush();

            return $this->redirectToRoute('asignaturas_edit', array('id' => $asignatura->getIdAsig()));
        }

        return $this->render('asignaturas/edit.html.twig', array(
            'asignatura' => $asignatura,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Asignaturas entity.
     *
     * @Route("/{id}", name="asignaturas_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Asignaturas $asignatura)
    {
        $form = $this->createDeleteForm($asignatura);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($asignatura);
            $em->flush();
        }

        return $this->redirectToRoute('asignaturas_index');
    }

    /**
     * Creates a form to delete a Asignaturas entity.
     *
     * @param Asignaturas $asignatura The Asignaturas entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Asignaturas $asignatura)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('asignaturas_delete', array('id' => $asignatura->getIdAsig())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
