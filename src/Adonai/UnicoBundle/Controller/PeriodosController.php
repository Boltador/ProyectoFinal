<?php

namespace Adonai\UnicoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Adonai\UnicoBundle\Entity\Periodos;
use Adonai\UnicoBundle\Form\PeriodosType;

/**
 * Periodos controller.
 *
 * @Route("/periodos")
 */
class PeriodosController extends Controller
{
    /**
     * Lists all Periodos entities.
     *
     * @Route("/", name="periodos_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $periodos = $em->getRepository('AdonaiUnicoBundle:Periodos')->findAll();

        return $this->render('periodos/index.html.twig', array(
            'periodos' => $periodos,
            ));
    }

    /**
     * Creates a new Periodos entity.
     *
     * @Route("/new", name="periodos_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $periodo = new Periodos();
        $form = $this->createForm('Adonai\UnicoBundle\Form\PeriodosType', $periodo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($periodo);
            $em->flush();

            return $this->redirectToRoute('periodos_show', array('id' => $periodo->getIdPeriodo()));
        }

        return $this->render('periodos/new.html.twig', array(
            'periodo' => $periodo,
            'form' => $form->createView(),
            ));
    }

    /**
     * Finds and displays a Periodos entity.
     *
     * @Route("/{id}", name="periodos_show")
     * @Method("GET")
     */
    public function showAction(Periodos $periodo)
    {
        $deleteForm = $this->createDeleteForm($periodo);

        return $this->render('periodos/show.html.twig', array(
            'periodo' => $periodo,
            'delete_form' => $deleteForm->createView(),
            ));
    }

    /**
     * Displays a form to edit an existing Periodos entity.
     *
     * @Route("/{id}/edit", name="periodos_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Periodos $periodo)
    {
        $deleteForm = $this->createDeleteForm($periodo);
        $editForm = $this->createForm('Adonai\UnicoBundle\Form\PeriodosType', $periodo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($periodo);
            $em->flush();

            return $this->redirectToRoute('periodos_edit', array('id' => $periodo->getIdPeriodo()));
        }

        return $this->render('periodos/edit.html.twig', array(
            'periodo' => $periodo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            ));
    }

    /**
     * Deletes a Periodos entity.
     *
     * @Route("/{id}", name="periodos_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Periodos $periodo)
    {
        $form = $this->createDeleteForm($periodo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($periodo);
            $em->flush();
        }

        return $this->redirectToRoute('periodos_index');
    }

    /**
     * Creates a form to delete a Periodos entity.
     *
     * @param Periodos $periodo The Periodos entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Periodos $periodo)
    {
        return $this->createFormBuilder()
        ->setAction($this->generateUrl('periodos_delete', array('id' => $periodo->getIdPeriodo())))
        ->setMethod('DELETE')
        ->getForm()
        ;
    }

    /**
     * @Route("/periodo_actual", name="select_periodo_actual")
     */
     public function periodoActualAction(Request $request)
     {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery("SELECT p FROM AdonaiUnicoBundle:Periodos p WHERE :fecha >= p.fechaInPer AND :fecha <= p.fechaFinPer");
        $query->setParameter('fecha', date_format(new \DateTime('now'), 'Y-m-d'));
        $periodo = $query->getSingleResult();

        $response = new Response(\json_encode($periodo));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
