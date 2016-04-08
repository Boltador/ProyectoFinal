<?php

namespace Adonai\UnicoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Adonai\UnicoBundle\Entity\Docentes;
use Adonai\UnicoBundle\Form\DocentesType;

/**
 * Docentes controller.
 *
 * @Route("/docentes")
 */
class DocentesController extends Controller
{
    /**
     * Lists all Docentes entities.
     *
     * @Route("/", name="docentes_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $docentes = $em->getRepository('AdonaiUnicoBundle:Docentes')->findAll();

        return $this->render('docentes/index.html.twig', array(
            'docentes' => $docentes,
        ));
    }

    /**
     * Creates a new Docentes entity.
     *
     * @Route("/new", name="docentes_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $docente = new Docentes();
        $form = $this->createForm('Adonai\UnicoBundle\Form\DocentesType', $docente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($docente);
            $em->flush();

            return $this->redirectToRoute('docentes_show', array('id' => $docente->getIdDoc()));
        }

        return $this->render('docentes/new.html.twig', array(
            'docente' => $docente,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Docentes entity.
     *
     * @Route("/{id}", name="docentes_show")
     * @Method("GET")
     */
    public function showAction(Docentes $docente)
    {
        $deleteForm = $this->createDeleteForm($docente);

        return $this->render('docentes/show.html.twig', array(
            'docente' => $docente,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Docentes entity.
     *
     * @Route("/{id}/edit", name="docentes_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Docentes $docente)
    {
        $deleteForm = $this->createDeleteForm($docente);
        $editForm = $this->createForm('Adonai\UnicoBundle\Form\DocentesType', $docente);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($docente);
            $em->flush();

            return $this->redirectToRoute('docentes_edit', array('id' => $docente->getIdDoc()));
        }

        return $this->render('docentes/edit.html.twig', array(
            'docente' => $docente,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Docentes entity.
     *
     * @Route("/{id}", name="docentes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Docentes $docente)
    {
        $form = $this->createDeleteForm($docente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($docente);
            $em->flush();
        }

        return $this->redirectToRoute('docentes_index');
    }

    /**
     * Creates a form to delete a Docentes entity.
     *
     * @param Docentes $docente The Docentes entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Docentes $docente)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('docentes_delete', array('id' => $docente->getIdDoc())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
