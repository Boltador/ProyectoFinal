<?php

namespace Adonai\UnicoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Adonai\UnicoBundle\Entity\Competencias;
use Adonai\UnicoBundle\Form\CompetenciasType;

/**
 * Competencias controller.
 *
 * @Route("/competencias")
 */
class CompetenciasController extends Controller
{
    /**
     * Lists all Competencias entities.
     *
     * @Route("/", name="competencias_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $competencias = $em->getRepository('AdonaiUnicoBundle:Competencias')->findAll();

        return $this->render('competencias/index.html.twig', array(
            'competencias' => $competencias,
        ));
    }

    /**
     * Creates a new Competencias entity.
     *
     * @Route("/new", name="competencias_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $competencia = new Competencias();
        $form = $this->createForm('Adonai\UnicoBundle\Form\CompetenciasType', $competencia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($competencia);
            $em->flush();

            return $this->redirectToRoute('competencias_show', array('id' => $competencia->getId()));
        }

        return $this->render('competencias/new.html.twig', array(
            'competencia' => $competencia,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Competencias entity.
     *
     * @Route("/{id}", name="competencias_show")
     * @Method("GET")
     */
    public function showAction(Competencias $competencia)
    {
        $deleteForm = $this->createDeleteForm($competencia);

        return $this->render('competencias/show.html.twig', array(
            'competencia' => $competencia,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Competencias entity.
     *
     * @Route("/{id}/edit", name="competencias_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Competencias $competencia)
    {
        $deleteForm = $this->createDeleteForm($competencia);
        $editForm = $this->createForm('Adonai\UnicoBundle\Form\CompetenciasType', $competencia);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($competencia);
            $em->flush();

            return $this->redirectToRoute('competencias_edit', array('id' => $competencia->getId()));
        }

        return $this->render('competencias/edit.html.twig', array(
            'competencia' => $competencia,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Competencias entity.
     *
     * @Route("/{id}", name="competencias_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Competencias $competencia)
    {
        $form = $this->createDeleteForm($competencia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($competencia);
            $em->flush();
        }

        return $this->redirectToRoute('competencias_index');
    }

    /**
     * Creates a form to delete a Competencias entity.
     *
     * @param Competencias $competencia The Competencias entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Competencias $competencia)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('competencias_delete', array('id' => $competencia->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
