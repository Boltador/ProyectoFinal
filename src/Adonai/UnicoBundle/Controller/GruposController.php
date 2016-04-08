<?php

namespace Adonai\UnicoBundle\Controller;

use Adonai\UnicoBundle\Entity\Matriculas;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Adonai\UnicoBundle\Entity\Grupos;
use Adonai\UnicoBundle\Form\GruposType;

/**
 * Grupos controller.
 *
 * @Route("/grupos")
 */
class GruposController extends Controller
{
    /**
     * Lists all Grupos entities.
     *
     * @Route("/", name="grupos_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $grupos = $em->getRepository('AdonaiUnicoBundle:Grupos')->findAll();

        return $this->render('grupos/index.html.twig', array(
            'grupos' => $grupos,
            ));
    }

    /**
     * Creates a new Grupos entity.
     *
     * @Route("/new", name="grupos_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $grupo = new Grupos();
        $form = $this->createForm('Adonai\UnicoBundle\Form\GruposType', $grupo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($grupo);
            $em->flush();

            return $this->redirectToRoute('grupos_show', array('id' => $grupo->getIdGrupo()));
        }

        return $this->render('grupos/new.html.twig', array(
            'grupo' => $grupo,
            'form' => $form->createView(),
            ));
    }

    /**
     * Finds and displays a Grupos entity.
     *
     * @Route("/{id}", name="grupos_show")
     * @Method("GET")
     */
    public function showAction(Grupos $grupo)
    {
        $deleteForm = $this->createDeleteForm($grupo);

        return $this->render('grupos/show.html.twig', array(
            'grupo' => $grupo,
            'delete_form' => $deleteForm->createView(),
            ));
    }

    /**
     * Devuelve lista de matriculas de un grupo.
     *
     * @Route("/{id}/listamats", name="lista_mats_show")
     * @Method("GET")
     */
    public function listaMatriculasAction(Grupos $grupo)
    {
        $em = $this->getDoctrine()->getManager();

        $lista_mats = new Matriculas();

        return $this->render('grupos/lista_mats.html.twig', array('lista_mats' => $lista_mats->getListaMatriculas($grupo, $em)));
    }


    /**
     * Displays a form to edit an existing Grupos entity.
     *
     * @Route("/{id}/edit", name="grupos_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Grupos $grupo)
    {
        $deleteForm = $this->createDeleteForm($grupo);
        $editForm = $this->createForm('Adonai\UnicoBundle\Form\GruposType', $grupo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($grupo);
            $em->flush();

            return $this->redirectToRoute('grupos_edit', array('id' => $grupo->getIdGrupo()));
        }

        return $this->render('grupos/edit.html.twig', array(
            'grupo' => $grupo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            ));
    }

    /**
     * Deletes a Grupos entity.
     *
     * @Route("/{id}", name="grupos_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Grupos $grupo)
    {
        $form = $this->createDeleteForm($grupo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($grupo);
            $em->flush();
        }

        return $this->redirectToRoute('grupos_index');
    }

    /**
     * Creates a form to delete a Grupos entity.
     *
     * @param Grupos $grupo The Grupos entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Grupos $grupo)
    {
        return $this->createFormBuilder()
        ->setAction($this->generateUrl('grupos_delete', array('id' => $grupo->getIdGrupo())))
        ->setMethod('DELETE')
        ->getForm()
        ;
    }
}
