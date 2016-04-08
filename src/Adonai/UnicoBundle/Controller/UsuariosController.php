<?php

namespace Adonai\UnicoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Adonai\UnicoBundle\Entity\Usuarios;
use Adonai\UnicoBundle\Form\UsuariosType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Usuarios controller.
 *
 * @Route("/usuarios")
 */
class UsuariosController extends Controller
{
    /**
     * Lists all Usuarios entities.
     *
     * @Route("/", name="usuarios_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $usuarios = $em->getRepository('AdonaiUnicoBundle:Usuarios')->findAll();

        return $this->render('usuarios/index.html.twig', array(
            'usuarios' => $usuarios,
            ));
    }

    /**
     * Creates a new Usuarios entity.
     *
     * @Route("/new", name="usuarios_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $rol = $this->getDoctrine()
        ->getRepository('AdonaiUnicoBundle:Roles')
        ->find('2');

        $usuario = new Usuarios();
        $usuario->setUsername('docente1');
        $cadena_salt = md5(uniqid(null, true));
        $usuario->setSalt($cadena_salt);
        $hash = password_hash('profe', PASSWORD_DEFAULT);
        $usuario->setPassword($hash);
        $usuario->setIsActive(True);
        $usuario->addRole($rol);

        $em = $this->getDoctrine()->getManager();
        $em->persist($usuario);
        $em->flush();

        return new Response('Usuario Creado id: '.$usuario->getId());
    }
}