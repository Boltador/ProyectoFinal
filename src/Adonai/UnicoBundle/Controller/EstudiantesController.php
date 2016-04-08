<?php

namespace Adonai\UnicoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Adonai\UnicoBundle\Entity\Estudiantes;
use Adonai\UnicoBundle\Form\EstudiantesType;

/**
 * Estudiantes controller.
 *
 * @Route("/estudiantes")
 */
class EstudiantesController extends Controller
{
    /**
     * Lists all Estudiantes entities.
     *
     * @Route("/", name="estudiantes_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $estudiantes = $em->getRepository('AdonaiUnicoBundle:Estudiantes')->findAll();

        return $this->render('estudiantes/index.html.twig', array(
            'estudiantes' => $estudiantes,
        ));
    }

    /**
     * Creates a new Estudiantes entity.
     *
     * @Route("/new", name="estudiantes_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $estudiante = new Estudiantes();
        $form = $this->createForm('Adonai\UnicoBundle\Form\EstudiantesType', $estudiante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($estudiante);
            $em->flush();

            return $this->redirectToRoute('estudiantes_show', array('id' => $estudiante->getIdEst()));
        }

        return $this->render('estudiantes/new.html.twig', array(
            'estudiante' => $estudiante,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Estudiantes entity.
     *
     * @Route("/{id}", name="estudiantes_show")
     * @Method("GET")
     */
    public function showAction(Estudiantes $estudiante)
    {
        $deleteForm = $this->createDeleteForm($estudiante);

        return $this->render('estudiantes/show.html.twig', array(
            'estudiante' => $estudiante,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Estudiantes entity.
     *
     * @Route("/{id}/edit", name="estudiantes_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Estudiantes $estudiante)
    {
        $deleteForm = $this->createDeleteForm($estudiante);
        $editForm = $this->createForm('Adonai\UnicoBundle\Form\EstudiantesType', $estudiante);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($estudiante);
            $em->flush();

            return $this->redirectToRoute('estudiantes_edit', array('id' => $estudiante->getIdEst()));
        }

        return $this->render('estudiantes/edit.html.twig', array(
            'estudiante' => $estudiante,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Estudiantes entity.
     *
     * @Route("/{id}", name="estudiantes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Estudiantes $estudiante)
    {
        $form = $this->createDeleteForm($estudiante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($estudiante);
            $em->flush();
        }

        return $this->redirectToRoute('estudiantes_index');
    }

    /**
     * Creates a form to delete a Estudiantes entity.
     *
     * @param Estudiantes $estudiante The Estudiantes entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Estudiantes $estudiante)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('estudiantes_delete', array('id' => $estudiante->getIdEst())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
