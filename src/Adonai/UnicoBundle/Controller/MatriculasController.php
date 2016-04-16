<?php

namespace Adonai\UnicoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Adonai\UnicoBundle\Entity\Matriculas;
use Adonai\UnicoBundle\Form\MatriculasType;

/**
 * Matriculas controller.
 *
 * @Route("/matriculas")
 */
class MatriculasController extends Controller
{
    /**
     * Lists all Matriculas entities.
     *
     * @Route("/", name="matriculas_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $matriculas = $em->getRepository('AdonaiUnicoBundle:Matriculas')->findAll();

        return $this->render('matriculas/index.html.twig', array(
            'matriculas' => $matriculas,
            ));
    }

    /**
     * Creates a new Matriculas entity.
     *
     * @Route("/new", name="matriculas_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $matricula = new Matriculas();
        $form = $this->createForm('Adonai\UnicoBundle\Form\MatriculasType', $matricula);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($matricula);
            $em->flush();

            return $this->redirectToRoute('matriculas_show', array('id' => $matricula->getIdMat()));
        }

        return $this->render('matriculas/new.html.twig', array(
            'matricula' => $matricula,
            'form' => $form->createView(),
            ));
    }

    /**
     * Finds and displays a Matriculas entity.
     *
     * @Route("/{id}", name="matriculas_show")
     * @Method("GET")
     */
    public function showAction(Matriculas $matricula)
    {
        $deleteForm = $this->createDeleteForm($matricula);

        return $this->render('matriculas/show.html.twig', array(
            'matricula' => $matricula,
            'delete_form' => $deleteForm->createView(),
            ));
    }

    /**
     * Displays a form to edit an existing Matriculas entity.
     *
     * @Route("/{id}/edit", name="matriculas_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Matriculas $matricula)
    {
        $deleteForm = $this->createDeleteForm($matricula);
        $editForm = $this->createForm('Adonai\UnicoBundle\Form\MatriculasType', $matricula);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($matricula);
            $em->flush();

            return $this->redirectToRoute('matriculas_edit', array('id' => $matricula->getIdMat()));
        }

        return $this->render('matriculas/edit.html.twig', array(
            'matricula' => $matricula,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            ));
    }

    /**
     * Deletes a Matriculas entity.
     *
     * @Route("/{id}", name="matriculas_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Matriculas $matricula)
    {
        $form = $this->createDeleteForm($matricula);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($matricula);
            $em->flush();
        }

        return $this->redirectToRoute('matriculas_index');
    }

    /**
     * Creates a form to delete a Matriculas entity.
     *
     * @param Matriculas $matricula The Matriculas entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Matriculas $matricula)
    {
        return $this->createFormBuilder()
        ->setAction($this->generateUrl('matriculas_delete', array('id' => $matricula->getIdMat())))
        ->setMethod('DELETE')
        ->getForm()
        ;
    }

    /**
     * Obtiene una Lista de Matriculas
     *
     * @Route("/buscarListaMats", name="buscarListaMats")
     * 
     */
    public function buscarListaMatriculas(Request $request){
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("SELECT gr FROM AdonaiUnicoBundle:Grupos gr WHERE gr.idGrupo = :id_grupo");
        $query->setParameter('id_grupo', $request->get("id"));
        $grupo = $query->getSingleResult();

        $query_otra = $em->createQuery("SELECT mt FROM AdonaiUnicoBundle:Matriculas mt WHERE mt.grupo = :grupo");
        $query_otra->setParameter('grupo', $grupo);
        $resultados = $query_otra->getResult();

        $lista_mats_response = array();

        foreach($resultados as $matricula){
            $matricula_response = array("id" => $matricula->getIdMat(), "nombre" => (string) $matricula->getEstudiante()->getNomEst(),
                "grado" => $matricula->getGrupo()->getGrado()->getGrado(), "grupo" => $matricula->getGrupo()->getNomenclatura());
            $lista_mats_response[] = $matricula_response;
        }

        $response = new Response(\json_encode($lista_mats_response));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

     /**
     * @Route("/matriculas_select", name="select_matriculas")
     */
     public function matriculasSelectAction(Request $request)
     {
        $em = $this->getDoctrine()->getManager();

        $asignacion = $em->getRepository('AdonaiUnicoBundle:Asignaciones')->find($request->get("asignacion_id"));
        $grupo = $asignacion->getGrupo();

        $query_otra = $em->createQuery("SELECT mt FROM AdonaiUnicoBundle:Matriculas mt WHERE mt.grupo = :grupo");
        $query_otra->setParameter('grupo', $grupo);
        $resultados = $query_otra->getResult();

        $lista_mats_response = array();

        foreach($resultados as $matricula){
            $matricula_response = array("id" => $matricula->getIdMat(), "nombre" => (string) $matricula->getEstudiante()->getNomEst(),
                "grado" => $matricula->getGrupo()->getGrado()->getGrado(), "grupo" => $matricula->getGrupo()->getNomenclatura());
            $lista_mats_response[] = $matricula_response;
        }

        $response = new Response(\json_encode($lista_mats_response));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
