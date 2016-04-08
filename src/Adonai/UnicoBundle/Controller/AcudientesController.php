<?php

namespace Adonai\UnicoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Adonai\UnicoBundle\Entity\Acudientes;
use Adonai\UnicoBundle\Form\AcudientesType;

/**
 * Acudientes controller.
 *
 * @Route("/acudientes")
 */
class AcudientesController extends Controller
{
    /**
     * Lists all Acudientes entities.
     *
     * @Route("/", name="acudientes_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $acudientes = $em->getRepository('AdonaiUnicoBundle:Acudientes')->findAll();

        return $this->render('acudientes/index.html.twig', array(
            'acudientes' => $acudientes,
        ));
    }

    /**
     * Creates a new Acudientes entity.
     *
     * @Route("/new", name="acudientes_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $acudiente = new Acudientes();
        $form = $this->createForm('Adonai\UnicoBundle\Form\AcudientesType', $acudiente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($acudiente);
            $em->flush();

            return $this->redirectToRoute('acudientes_show', array('id' => $acudiente->getIdAcu()));
        }

        return $this->render('acudientes/new.html.twig', array(
            'acudiente' => $acudiente,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Acudientes entity.
     *
     * @Route("/{id}", name="acudientes_show")
     * @Method("GET")
     */
    public function showAction(Acudientes $acudiente)
    {
        $deleteForm = $this->createDeleteForm($acudiente);

        return $this->render('acudientes/show.html.twig', array(
            'acudiente' => $acudiente,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Acudientes entity.
     *
     * @Route("/{id}/edit", name="acudientes_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Acudientes $acudiente)
    {
        $deleteForm = $this->createDeleteForm($acudiente);
        $editForm = $this->createForm('Adonai\UnicoBundle\Form\AcudientesType', $acudiente);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($acudiente);
            $em->flush();

            return $this->redirectToRoute('acudientes_edit', array('id' => $acudiente->getIdAcu()));
        }

        return $this->render('acudientes/edit.html.twig', array(
            'acudiente' => $acudiente,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Acudientes entity.
     *
     * @Route("/{id}", name="acudientes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Acudientes $acudiente)
    {
        $form = $this->createDeleteForm($acudiente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($acudiente);
            $em->flush();
        }

        return $this->redirectToRoute('acudientes_index');
    }

    /**
     * Creates a form to delete a Acudientes entity.
     *
     * @param Acudientes $acudiente The Acudientes entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Acudientes $acudiente)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('acudientes_delete', array('id' => $acudiente->getIdAcu())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
