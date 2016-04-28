<?php

namespace Adonai\UnicoBundle\Controller;

use Adonai\UnicoBundle\Entity\Asignaciones;
use Adonai\UnicoBundle\Entity\ALectivos;
use Adonai\UnicoBundle\Entity\Periodos;
use Adonai\UnicoBundle\Entity\Grupos;
use Adonai\UnicoBundle\Entity\Notas;
use Adonai\UnicoBundle\Entity\Matriculas;
use Adonai\UnicoBundle\Entity\Competencias;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Adonai\UnicoBundle\Form\NotasType;
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
        $docente = $this->comprobarUsuarioAction();
        if (!$docente) {
            throw $this->createNotFoundException(
                'No se encontró el docente con ID: ' . $docente->getIdDoc()
                );
        }
        $lista_asignaciones = new Asignaciones();
        $lista_asignaciones = $lista_asignaciones->getListaAsignacionesActual($docente);
        $al_actual = new ALectivos();
        $al_actual = $al_actual->getAñoLectivoActual();
        $periodo_actual = new Periodos();
        $periodo_actual = $periodo_actual->getPeriodoActual();
        $periodos = $periodo_actual->getPeriodosActuales($al_actual);
        $grupo_dir = new Grupos();
        $grupo_dir = $grupo_dir->comprobarDirectorDocente($docente);

        $nota = new Notas();
        $form = $this->createForm(new NotasType($docente, $al_actual, $periodo_actual->getFechaInPer()), $nota);

        return $this->render('AdonaiUnicoBundle:Notas:notas_docente.html.twig', array('docente' => $docente,
            'lista_asignaciones' => $lista_asignaciones,
            'al_actual' => $al_actual, 'periodo_actual' => $periodo_actual,
            'periodos' => $periodos,
            'grupo_dir' => $grupo_dir,
            'nota' => $nota,
            'form' => $form->createView()));
    }

    /**
     * @Route("/new", name="notas_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $notas = $request->get("notas");
        $em = $this->getDoctrine()->getManager();
        $al_actual = new ALectivos();
        $al_actual = $al_actual->getAñoLectivoActual();
        $docente = $this->comprobarUsuarioAction();
        $nota = new Notas();
        $periodo_actual = new Periodos();
        $periodo_actual = $periodo_actual->getPeriodoActual();
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
        $al_actual = $al_actual->getAñoLectivoActual();
        $docente = $this->comprobarUsuarioAction();
        $nota = new Notas();
        $periodo_actual = new Periodos();
        $periodo_actual = $periodo_actual->getPeriodoActual();
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
    public function notasExistentesAction(Request $request) {

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
            if($request->get("devolver_todas") == 1){
                return $lista_notas_and_prom;
            } else {
                $response = new Response(\json_encode($lista_notas_and_prom));
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }
        } else {
            $response = new Response(\json_encode(false));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }
    }

    /**
     * @Route("/comprobar_registros", name="comprobar_registros")
    */
    public function comprobarRegistrosAction(Request $request) {

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

        if(empty($resultados)){
            $response = new Response(\json_encode(false));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }
        $response = new Response(\json_encode(true));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }


    /**
     * @Route("/todas_notas", name="todas_notas")
     */
    public function devolverTodasNotasAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $asignacion = $em->getRepository('AdonaiUnicoBundle:Asignaciones')->find($request->get("asignacion_id"));

        $query = $em->createQuery("SELECT mt FROM AdonaiUnicoBundle:Matriculas mt WHERE mt.grupo = :grupo");
        $query->setParameter('grupo', $asignacion->getGrupo());
        $matriculas = $query->getResult();

        $lista_notas_response = array();

        $request->attributes->set("devolver_todas", 1);
        foreach($matriculas as $matricula){
            $request->attributes->set("matricula_id", $matricula->getIdMat());
            $notas_estudiante = $this->notasExistentesAction($request);
            $nota = array("id" => $matricula->getIdMat(), 
                "nombre" => $matricula->getEstudiante()->getNomEst(),
                "notas" => $notas_estudiante);
            $lista_notas_response[] = $nota;
        }

        if(!empty($lista_notas_response)){
            $response = new Response(\json_encode($lista_notas_response));
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
