<?php

namespace Adonai\UnicoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Adonai\UnicoBundle\Entity\Coordinadores;
use Adonai\UnicoBundle\Form\CoordinadoresType;

/**
 * Coordinadores controller.
 *
 * @Route("/coordinadores")
 */
class CoordinadoresController extends Controller
{
    /**
     * Lists all Coordinadores entities.
     *
     * @Route("/", name="coordinadores_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $coordinadores = $em->getRepository('AdonaiUnicoBundle:Coordinadores')->findAll();

        return $this->render('coordinadores/index.html.twig', array(
            'coordinadores' => $coordinadores,
        ));
    }

    /**
     * Creates a new Coordinadores entity.
     *
     * @Route("/new", name="coordinadores_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $coordinador = new Coordinadores();
        $form = $this->createForm('Adonai\UnicoBundle\Form\CoordinadoresType', $coordinador);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($coordinador);
            $em->flush();

            return $this->redirectToRoute('coordinadores_show', array('id' => $coordinador->getIdCor()));
        }

        return $this->render('coordinadores/new.html.twig', array(
            'coordinador' => $coordinador,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Coordinadores entity.
     *
     * @Route("/{id}", name="coordinadores_show")
     * @Method("GET")
     */
    public function showAction(Coordinadores $coordinador)
    {
        $deleteForm = $this->createDeleteForm($coordinador);

        return $this->render('coordinadores/show.html.twig', array(
            'coordinador' => $coordinador,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Coordinadores entity.
     *
     * @Route("/{id}/edit", name="coordinadores_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Coordinadores $coordinador)
    {
        $deleteForm = $this->createDeleteForm($coordinador);
        $editForm = $this->createForm('Adonai\UnicoBundle\Form\CoordinadoresType', $coordinador);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($coordinador);
            $em->flush();

            return $this->redirectToRoute('coordinadores_edit', array('id' => $coordinador->getIdCor()));
        }

        return $this->render('coordinadores/edit.html.twig', array(
            'coordinador' => $coordinador,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Coordinadores entity.
     *
     * @Route("/{id}", name="coordinadores_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Coordinadores $coordinador)
    {
        $form = $this->createDeleteForm($coordinador);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($coordinador);
            $em->flush();
        }

        return $this->redirectToRoute('coordinadores_index');
    }

    /**
     * Creates a form to delete a Coordinadores entity.
     *
     * @param Coordinadores $coordinador The Coordinadores entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Coordinadores $coordinador)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('coordinadores_delete', array('id' => $coordinador->getIdCor())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
