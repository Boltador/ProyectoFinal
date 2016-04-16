<?php

namespace Adonai\UnicoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Adonai\UnicoBundle\Entity\ALectivos;
use Adonai\UnicoBundle\Form\ALectivosType;

/**
 * ALectivos controller.
 *
 * @Route("/alectivos")
 */
class ALectivosController extends Controller
{
    /**
     * Lists all ALectivos entities.
     *
     * @Route("/", name="alectivos_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $aLectivos = $em->getRepository('AdonaiUnicoBundle:ALectivos')->findAll();

        return $this->render('alectivos/index.html.twig', array(
            'aLectivos' => $aLectivos,
            ));
    }

    /**
     * Creates a new ALectivos entity.
     *
     * @Route("/new", name="alectivos_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $aLectivo = new ALectivos();
        $form = $this->createForm('Adonai\UnicoBundle\Form\ALectivosType', $aLectivo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($aLectivo);
            $em->flush();

            return $this->redirectToRoute('alectivos_show', array('id' => $aLectivo->getIdALectivo()));
        }

        return $this->render('alectivos/new.html.twig', array(
            'aLectivo' => $aLectivo,
            'form' => $form->createView(),
            ));
    }

    /**
     * Finds and displays a ALectivos entity.
     *
     * @Route("/{id}", name="alectivos_show")
     * @Method("GET")
     */
    public function showAction(ALectivos $aLectivo)
    {
        $deleteForm = $this->createDeleteForm($aLectivo);

        return $this->render('alectivos/show.html.twig', array(
            'aLectivo' => $aLectivo,
            'delete_form' => $deleteForm->createView(),
            ));
    }

    /**
     * Displays a form to edit an existing ALectivos entity.
     *
     * @Route("/{id}/edit", name="alectivos_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ALectivos $aLectivo)
    {
        $deleteForm = $this->createDeleteForm($aLectivo);
        $editForm = $this->createForm('Adonai\UnicoBundle\Form\ALectivosType', $aLectivo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($aLectivo);
            $em->flush();

            return $this->redirectToRoute('alectivos_edit', array('id' => $aLectivo->getIdALectivo()));
        }

        return $this->render('alectivos/edit.html.twig', array(
            'aLectivo' => $aLectivo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            ));
    }

    /**
     * Deletes a ALectivos entity.
     *
     * @Route("/{id}", name="alectivos_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ALectivos $aLectivo)
    {
        $form = $this->createDeleteForm($aLectivo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($aLectivo);
            $em->flush();
        }

        return $this->redirectToRoute('alectivos_index');
    }

    /**
     * Creates a form to delete a ALectivos entity.
     *
     * @param ALectivos $aLectivo The ALectivos entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ALectivos $aLectivo)
    {
        return $this->createFormBuilder()
        ->setAction($this->generateUrl('alectivos_delete', array('id' => $aLectivo->getIdALectivo())))
        ->setMethod('DELETE')
        ->getForm()
        ;
    }

    /**
     * Obtener año lectivo actual
     *
     * @Route("/alectivo_actual", name="alectivo_actual")
     * 
     */
    public function getPeriodoActual(){
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("SELECT p FROM AdonaiUnicoBundle:Periodos p WHERE :fecha >= p.fechaInPer AND :fecha <= p.fechaFinPer");
        $query->setParameter('fecha', date_format(new \DateTime('now'), 'Y-m-d'));
        $periodo = $query->getSingleResult();
        $response = new Response(\json_encode($periodo));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
