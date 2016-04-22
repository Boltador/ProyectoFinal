<?php

namespace Adonai\UnicoBundle\Controller;

use Adonai\UnicoBundle\Entity\ALectivos;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Adonai\UnicoBundle\Entity\Notas;
use Adonai\UnicoBundle\Form\NotasType;
use Adonai\UnicoBundle\Entity\Periodos;
use Adonai\UnicoBundle\Entity\Competencias;
use Symfony\Component\HttpFoundation\Response;

/**
 * Notas controller.
 *
 * @Route("/notas")
 */
class NotasController extends Controller {

    /**
     * Lists all Notas entities.
     *
     * @Route("/", name="notas_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $notas = $em->getRepository('AdonaiUnicoBundle:Notas')->findAll();

        return $this->render('notas/index.html.twig', array(
            'notas' => $notas,
            ));
    }

    /**
     * @Route("/new", name="notas_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $notas = $request->get("notas");
        $em = $this->getDoctrine()->getManager();
        $al_actual = new ALectivos();
        $al_actual = $al_actual->getAñoLectivoActual($em);
        $docente = $this->comprobarUsuarioAction();
        $nota = new Notas();
        $periodo_actual = new Periodos();
        $periodo_actual = $periodo_actual->getPeriodoActual($em);
        $form = $this->createForm(new NotasType($docente, $al_actual, $periodo_actual->getFechaInPer()), $nota);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $c = new Competencias();
            $lista = $c->getCompetenciasGradoAsig($nota->getAsignacion()->getAsignatura(), $nota->getAsignacion()->getGrupo()->getGrado(), $em);
            for ($i = 0; $i < sizeof($notas); $i++) {
                $nota_persist = new Notas();
                $nota_persist->setAsignacion($nota->getAsignacion());
                $nota_persist->setCompetencia($lista[$i]);
                $nota_persist->setMatricula($nota->getMatricula());
                $nota_persist->setPeriodo($nota->getPeriodo());
                $nota_persist->setNota($notas[$i]);
                $em->persist($nota_persist);
            }
            $em->flush();
            //return $this->redirectToRoute('notas_show', array('id' => $nota->getIdNota()));
            //throw new \Exception($nota->getMatricula()." - "."Si o que?");
        }

        return $this->render('notas/new.html.twig', array(
            'nota' => $nota,
            'form' => $form->createView(),
            ));
    }

    /**
     * Finds and displays a Notas entity.
     *
     * @Route("/{id}", name="notas_show")
     * @Method("GET")
     */
    public function showAction(Notas $nota) {
        $deleteForm = $this->createDeleteForm($nota);

        return $this->render('notas/show.html.twig', array(
            'nota' => $nota,
            'delete_form' => $deleteForm->createView(),
            ));
    }

    /**
     * Displays a form to edit an existing Notas entity.
     *
     * @Route("/edit", name="notas_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request) {
        $notas = $request->get("notas");
        $em = $this->getDoctrine()->getManager();
        $al_actual = new ALectivos();
        $al_actual = $al_actual->getAñoLectivoActual($em);
        $docente = $this->comprobarUsuarioAction();
        $nota = new Notas();
        $periodo_actual = new Periodos();
        $periodo_actual = $periodo_actual->getPeriodoActual($em);
        $editForm = $this->createForm(new NotasType($docente, $al_actual, $periodo_actual->getFechaInPer()), $nota);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->actualizarNotasExistentes($nota, $notas);
        }

        return $this->render('notas/edit.html.twig', array(
            'nota' => $nota,
            'edit_form' => $editForm->createView(),
            ));
    }

    /**
     * Deletes a Notas entity.
     *
     * @Route("/{id}", name="notas_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Notas $nota) {
        $form = $this->createDeleteForm($nota);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($nota);
            $em->flush();
        }

        return $this->redirectToRoute('notas_index');
    }

    /**
     * Creates a form to delete a Notas entity.
     *
     * @param Notas $nota The Notas entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Notas $nota) {
        return $this->createFormBuilder()
        ->setAction($this->generateUrl('notas_delete', array('id' => $nota->getIdNota())))
        ->setMethod('DELETE')
        ->getForm()
        ;
    }

    public function comprobarUsuarioAction() {
        $coordinador = null;
        $docente = null;
        $usuario = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        if (true === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            $coordinador = $em->getRepository('AdonaiUnicoBundle:Coordinadores')
            ->findOneByUsuario($usuario);
        } elseif (true === $this->get('security.authorization_checker')->isGranted('ROLE_DOCENTE')) {
            $docente = $em->getRepository('AdonaiUnicoBundle:Docentes')
            ->findOneByUsuario($usuario);
        }
        if (!$coordinador) {
            return $docente;
        } else {
            return $coordinador;
        }
    }

    /**
     * @Route("/nota_existente", name="nota_existente")
     */
    public function notasExistentes(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $asignacion = $em->getRepository('AdonaiUnicoBundle:Asignaciones')->findByIdAsignacion($request->get("asignacion_id"));
        $periodo = $em->getRepository('AdonaiUnicoBundle:Periodos')->findByIdPeriodo($request->get("periodo_id"));
        $matricula = $em->getRepository('AdonaiUnicoBundle:Matriculas')->findByIdMat($request->get("matricula_id"));

        $query = $em->createQuery("SELECT nt FROM AdonaiUnicoBundle:Notas nt WHERE nt.asignacion = :asignacion 
            AND nt.matricula = :matricula AND nt.periodo = :periodo");
        $query->setParameter('asignacion', $asignacion);
        $query->setParameter('matricula', $matricula);
        $query->setParameter('periodo', $periodo);
        $resultados = $query->getResult();

        $lista_notas_response = array();

        $promedio = 0;
        foreach($resultados as $nota){
            $promedio += $nota->getNota();
            $nota_response = array("id" => $nota->getIdNota(),
                "competencia" => $nota->getCompetencia(),
                "nota" => $nota->getNota());
            $lista_notas_response[] = $nota_response;
        }

        if(!empty($lista_notas_response)){
            $promedio = $promedio / sizeof($lista_notas_response);
            $lista_notas_and_prom = array();
            $lista_notas_and_prom[] = $lista_notas_response;
            $lista_notas_and_prom[] = $promedio;
            $response = new Response(\json_encode($lista_notas_and_prom));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        } else {
            $response = new Response(\json_encode(false));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }
    }


    public function actualizarNotasExistentes($nota_base, $notas_nuevas) {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("SELECT nt FROM AdonaiUnicoBundle:Notas nt WHERE nt.asignacion = :asignacion 
            AND nt.matricula = :matricula AND nt.periodo = :periodo");
        $query->setParameter('asignacion', $nota_base->getAsignacion());
        $query->setParameter('matricula', $nota_base->getMatricula());
        $query->setParameter('periodo', $nota_base->getPeriodo());
        $resultados = $query->getResult();

        for($i = 0; $i < sizeof($notas_nuevas); $i++){
            $resultados[$i]->setNota($notas_nuevas[$i]);
        }
        $em->flush();
    }
}
