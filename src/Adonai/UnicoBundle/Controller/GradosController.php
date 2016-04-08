<?php

namespace Adonai\UnicoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Adonai\UnicoBundle\Entity\Grados;
use Adonai\UnicoBundle\Form\GradosType;

/**
 * Grados controller.
 *
 * @Route("/grados")
 */
class GradosController extends Controller
{
    /**
     * Lists all Grados entities.
     *
     * @Route("/", name="grados_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $grados = $em->getRepository('AdonaiUnicoBundle:Grados')->findAll();

        return $this->render('grados/index.html.twig', array(
            'grados' => $grados,
        ));
    }

    /**
     * Creates a new Grados entity.
     *
     * @Route("/new", name="grados_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $grado = new Grados();
        $form = $this->createForm('Adonai\UnicoBundle\Form\GradosType', $grado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($grado);
            $em->flush();

            return $this->redirectToRoute('grados_show', array('id' => $grado->getIdGrado()));
        }

        return $this->render('grados/new.html.twig', array(
            'grado' => $grado,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Grados entity.
     *
     * @Route("/{id}", name="grados_show")
     * @Method("GET")
     */
    public function showAction(Grados $grado)
    {
        $deleteForm = $this->createDeleteForm($grado);

        return $this->render('grados/show.html.twig', array(
            'grado' => $grado,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Grados entity.
     *
     * @Route("/{id}/edit", name="grados_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Grados $grado)
    {
        $deleteForm = $this->createDeleteForm($grado);
        $editForm = $this->createForm('Adonai\UnicoBundle\Form\GradosType', $grado);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($grado);
            $em->flush();

            return $this->redirectToRoute('grados_edit', array('id' => $grado->getIdGrado()));
        }

        return $this->render('grados/edit.html.twig', array(
            'grado' => $grado,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Grados entity.
     *
     * @Route("/{id}", name="grados_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Grados $grado)
    {
        $form = $this->createDeleteForm($grado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($grado);
            $em->flush();
        }

        return $this->redirectToRoute('grados_index');
    }

    /**
     * Creates a form to delete a Grados entity.
     *
     * @param Grados $grado The Grados entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Grados $grado)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('grados_delete', array('id' => $grado->getIdGrado())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
