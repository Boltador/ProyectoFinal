<?php

namespace Adonai\UnicoBundle\Controller;


use Adonai\UnicoBundle\Entity\Asignaciones;
use Adonai\UnicoBundle\Entity\ALectivos;
use Adonai\UnicoBundle\Entity\Periodos;
use Adonai\UnicoBundle\Entity\Grupos;
use Adonai\UnicoBundle\Entity\Planeadores;
use Adonai\UnicoBundle\Entity\Temas;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Adonai\UnicoBundle\Form\PlaneadoresType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Planeadores controller.
 *
 * @Route("/planeadores")
 */
class PlaneadoresController extends Controller
{
    /**
     * Lists all Planeadores entities.
     *
     * @Route("/", name="planeadores_index")
     * @Method("GET")
     */
    public function indexAction()
    {
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

        $planeador = new Planeadores();
        $form = $this->createForm(new PlaneadoresType($docente, $al_actual, $periodo_actual->getFechaInPer()), $planeador);

        return $this->render('AdonaiUnicoBundle:Planeadores:planeador_docente.html.twig', array('docente' => $docente,
            'lista_asignaciones' => $lista_asignaciones,
            'al_actual' => $al_actual, 'periodo_actual' => $periodo_actual,
            'periodos' => $periodos,
            'grupo_dir' => $grupo_dir,
            'form' => $form->createView()));
    }

    /**
     * Creates a new Planeadores entity.
     *
     * @Route("/new", name="planeadores_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request){
        $al_actual = new ALectivos();
        $al_actual = $al_actual->getAñoLectivoActual();
        $docente = $this->comprobarUsuarioAction();
        $periodo_actual = new Periodos();
        $periodo_actual = $periodo_actual->getPeriodoActual();

        $planeador = new Planeadores();
        $form = $this->createForm(new PlaneadoresType($docente, $al_actual, $periodo_actual->getFechaInPer()), $planeador);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $nomTemas = $request->get("nomTema");
            $fechasIn = $request->get("fechaIn");
            $fechasFin = $request->get("fechaFin");

            $em = $this->getDoctrine()->getManager();
            $em->persist($planeador);
            $em->flush();
            $query = $em->createQuery("SELECT plan FROM AdonaiUnicoBundle:Planeadores plan WHERE plan.asignacion = :asignacion AND plan.periodo = :periodo");
            $query->setParameter('asignacion', $planeador->getAsignacion());
            $query->setParameter('periodo', $planeador->getPeriodo());
            $planeador_get = $query->getSingleResult();
            for($i = 0; $i < sizeof($nomTemas); $i++){
                $tema = new Temas();
                $tema->setPlaneador($planeador_get);
                $tema->setNomTema($nomTemas[$i]);
                $date_in = new \DateTime("$fechasIn[$i]");
                $tema->setFechaInTema($date_in->format('Y-m-d'));
                $date_fin = new \DateTime("$fechasFin[$i]");
                $tema->setFechaFinTema($date_fin->format('Y-m-d'));
                $em->persist($tema);
                $em->flush();
            }
        }
        return $this->render('planeadores/new.html.twig', array(
            'planeador' => $planeador,
            'form' => $form->createView(),
            ));
    }

    /**
     * Finds and displays a Planeadores entity.
     *
     * @Route("/{id}", name="planeadores_show")
     * @Method("GET")
     */
    public function showAction(Planeadores $planeador)
    {
        $deleteForm = $this->createDeleteForm($planeador);

        return $this->render('planeadores/show.html.twig', array(
            'planeador' => $planeador,
            'delete_form' => $deleteForm->createView(),
            ));
    }

    /**
     * Displays a form to edit an existing Planeadores entity.
     *
     * @Route("/edit", name="planeadores_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $planeador = $request->get("idPlaneador");

        $query = $em->createQuery("SELECT plan FROM AdonaiUnicoBundle:Planeadores plan WHERE plan.idPlan = :id_planeador");
        $query->setParameter('id_planeador', $planeador);
        $planeador = $query->getSingleResult();

        $query = $em->createQuery("SELECT tema FROM AdonaiUnicoBundle:Temas tema WHERE tema.planeador = :planeador");
        $query->setParameter('planeador', $planeador);
        $temas = $query->getResult();

        for ($i = 0; $i < sizeof($temas); $i++) {
            $em->remove($temas[$i]);
            $em->flush();
        }


        $nomTemas = $request->get("nomTema");
        $fechasIn = $request->get("fechaIn");
        $fechasFin = $request->get("fechaFin");
        for($i = 0; $i < sizeof($nomTemas); $i++){
            $tema = new Temas();
            $tema->setPlaneador($planeador);
            $tema->setNomTema($nomTemas[$i]);
            $date_in = new \DateTime("$fechasIn[$i]");
            $tema->setFechaInTema($date_in->format('Y-m-d'));
            $date_fin = new \DateTime("$fechasFin[$i]");
            $tema->setFechaFinTema($date_fin->format('Y-m-d'));
            $em->persist($tema);
            $em->flush();
        }

        $response = new Response(\json_encode(false));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * Deletes a Planeadores entity.
     *
     * @Route("/{id}", name="planeadores_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Planeadores $planeador)
    {
        $form = $this->createDeleteForm($planeador);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($planeador);
            $em->flush();
        }

        return $this->redirectToRoute('planeadores_index');
    }

    /**
     * Creates a form to delete a Planeadores entity.
     *
     * @param Planeadores $planeador The Planeadores entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Planeadores $planeador)
    {
        return $this->createFormBuilder()
        ->setAction($this->generateUrl('planeadores_delete', array('id' => $planeador->getIdPlan())))
        ->setMethod('DELETE')
        ->getForm()
        ;
    }

    /**
     * @Route("/planeador_existente", name="planeador_existente")
     */
    public function planeadorExistenteAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $asignacion = $em->getRepository('AdonaiUnicoBundle:Asignaciones')->findByIdAsignacion($request->get("asignacion_id"));
        $periodo = $em->getRepository('AdonaiUnicoBundle:Periodos')->findByIdPeriodo($request->get("periodo_id"));

        $query = $em->createQuery("SELECT plan FROM AdonaiUnicoBundle:Planeadores plan WHERE plan.asignacion = :asignacion AND plan.periodo = :periodo");
        $query->setParameter('asignacion', $asignacion);
        $query->setParameter('periodo', $periodo);
        $resultado = $query->getResult();


        if(!empty($resultado)){

            $query = $em->createQuery("SELECT tema FROM AdonaiUnicoBundle:Temas tema WHERE tema.planeador = :planeador");
            $query->setParameter('planeador', $resultado[0]);
            $resultado = $query->getResult();

            $temas_response = array();

            foreach($resultado as $tema){
                $tema_add = array("id" => $tema->getIdTema(), "nombre" => $tema->getNomTema(), "fecha_inicio" => $tema->getFechaInTema(), "fecha_final" => $tema->getFechaFinTema(), "id_planeador" => $tema->getPlaneador()->getIdPlan());
                $temas_response[] = $tema_add;
            }

            $response = new Response(\json_encode($temas_response));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        } else {
            $response = new Response(\json_encode(false));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }
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
}
