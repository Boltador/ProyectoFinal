<?php

namespace Adonai\UnicoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Adonai\UnicoBundle\Entity\Temas;
use Adonai\UnicoBundle\Form\TemasType;

/**
 * Temas controller.
 *
 * @Route("/temas")
 */
class TemasController extends Controller
{
    /**
     * Lists all Temas entities.
     *
     * @Route("/", name="temas_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $temas = $em->getRepository('AdonaiUnicoBundle:Temas')->findAll();

        return $this->render('temas/index.html.twig', array(
            'temas' => $temas,
        ));
    }

    /**
     * Creates a new Temas entity.
     *
     * @Route("/new", name="temas_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tema = new Temas();
        $form = $this->createForm('Adonai\UnicoBundle\Form\TemasType', $tema);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tema);
            $em->flush();

            return $this->redirectToRoute('temas_show', array('id' => $tema->getIdTema()));
        }

        return $this->render('temas/new.html.twig', array(
            'tema' => $tema,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Temas entity.
     *
     * @Route("/{id}", name="temas_show")
     * @Method("GET")
     */
    public function showAction(Temas $tema)
    {
        $deleteForm = $this->createDeleteForm($tema);

        return $this->render('temas/show.html.twig', array(
            'tema' => $tema,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Temas entity.
     *
     * @Route("/{id}/edit", name="temas_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Temas $tema)
    {
        $deleteForm = $this->createDeleteForm($tema);
        $editForm = $this->createForm('Adonai\UnicoBundle\Form\TemasType', $tema);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tema);
            $em->flush();

            return $this->redirectToRoute('temas_edit', array('id' => $tema->getId()));
        }

        return $this->render('temas/edit.html.twig', array(
            'tema' => $tema,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Temas entity.
     *
     * @Route("/{id}", name="temas_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Temas $tema)
    {
        $form = $this->createDeleteForm($tema);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tema);
            $em->flush();
        }

        return $this->redirectToRoute('temas_index');
    }

    /**
     * Creates a form to delete a Temas entity.
     *
     * @param Temas $tema The Temas entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Temas $tema)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('temas_delete', array('id' => $tema->getIdTema())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
