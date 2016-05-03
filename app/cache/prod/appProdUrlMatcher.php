<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/alectivos')) {
                // alectivos_index
                if (rtrim($pathinfo, '/') === '/alectivos') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_alectivos_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'alectivos_index');
                    }

                    return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\ALectivosController::indexAction',  '_route' => 'alectivos_index',);
                }
                not_alectivos_index:

                // alectivos_new
                if ($pathinfo === '/alectivos/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_alectivos_new;
                    }

                    return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\ALectivosController::newAction',  '_route' => 'alectivos_new',);
                }
                not_alectivos_new:

                // alectivos_show
                if (preg_match('#^/alectivos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_alectivos_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'alectivos_show')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\ALectivosController::showAction',));
                }
                not_alectivos_show:

                // alectivos_edit
                if (preg_match('#^/alectivos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_alectivos_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'alectivos_edit')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\ALectivosController::editAction',));
                }
                not_alectivos_edit:

                // alectivos_delete
                if (preg_match('#^/alectivos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_alectivos_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'alectivos_delete')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\ALectivosController::deleteAction',));
                }
                not_alectivos_delete:

                // alectivo_actual
                if ($pathinfo === '/alectivos/alectivo_actual') {
                    return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\ALectivosController::getPeriodoActual',  '_route' => 'alectivo_actual',);
                }

            }

            if (0 === strpos($pathinfo, '/acudientes')) {
                // acudientes_index
                if (rtrim($pathinfo, '/') === '/acudientes') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_acudientes_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'acudientes_index');
                    }

                    return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\AcudientesController::indexAction',  '_route' => 'acudientes_index',);
                }
                not_acudientes_index:

                // acudientes_new
                if ($pathinfo === '/acudientes/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_acudientes_new;
                    }

                    return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\AcudientesController::newAction',  '_route' => 'acudientes_new',);
                }
                not_acudientes_new:

                // acudientes_show
                if (preg_match('#^/acudientes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_acudientes_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acudientes_show')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\AcudientesController::showAction',));
                }
                not_acudientes_show:

                // acudientes_edit
                if (preg_match('#^/acudientes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_acudientes_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acudientes_edit')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\AcudientesController::editAction',));
                }
                not_acudientes_edit:

                // acudientes_delete
                if (preg_match('#^/acudientes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_acudientes_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acudientes_delete')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\AcudientesController::deleteAction',));
                }
                not_acudientes_delete:

            }

            if (0 === strpos($pathinfo, '/asigna')) {
                if (0 === strpos($pathinfo, '/asignaciones')) {
                    // asignaciones_index
                    if (rtrim($pathinfo, '/') === '/asignaciones') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_asignaciones_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'asignaciones_index');
                        }

                        return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\AsignacionesController::indexAction',  '_route' => 'asignaciones_index',);
                    }
                    not_asignaciones_index:

                    // asignaciones_new
                    if ($pathinfo === '/asignaciones/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_asignaciones_new;
                        }

                        return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\AsignacionesController::newAction',  '_route' => 'asignaciones_new',);
                    }
                    not_asignaciones_new:

                    // asignaciones_show
                    if (preg_match('#^/asignaciones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_asignaciones_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'asignaciones_show')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\AsignacionesController::showAction',));
                    }
                    not_asignaciones_show:

                    // asignaciones_edit
                    if (preg_match('#^/asignaciones/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_asignaciones_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'asignaciones_edit')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\AsignacionesController::editAction',));
                    }
                    not_asignaciones_edit:

                    // asignaciones_delete
                    if (preg_match('#^/asignaciones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_asignaciones_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'asignaciones_delete')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\AsignacionesController::deleteAction',));
                    }
                    not_asignaciones_delete:

                    // buscar_asignacion
                    if ($pathinfo === '/asignaciones/buscar_asignacion') {
                        return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\AsignacionesController::buscarAsignacion',  '_route' => 'buscar_asignacion',);
                    }

                }

                if (0 === strpos($pathinfo, '/asignaturas')) {
                    // asignaturas_index
                    if (rtrim($pathinfo, '/') === '/asignaturas') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_asignaturas_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'asignaturas_index');
                        }

                        return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\AsignaturasController::indexAction',  '_route' => 'asignaturas_index',);
                    }
                    not_asignaturas_index:

                    // asignaturas_new
                    if ($pathinfo === '/asignaturas/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_asignaturas_new;
                        }

                        return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\AsignaturasController::newAction',  '_route' => 'asignaturas_new',);
                    }
                    not_asignaturas_new:

                    // asignaturas_show
                    if (preg_match('#^/asignaturas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_asignaturas_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'asignaturas_show')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\AsignaturasController::showAction',));
                    }
                    not_asignaturas_show:

                    // asignaturas_edit
                    if (preg_match('#^/asignaturas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_asignaturas_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'asignaturas_edit')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\AsignaturasController::editAction',));
                    }
                    not_asignaturas_edit:

                    // asignaturas_delete
                    if (preg_match('#^/asignaturas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_asignaturas_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'asignaturas_delete')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\AsignaturasController::deleteAction',));
                    }
                    not_asignaturas_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/co')) {
            if (0 === strpos($pathinfo, '/competencias')) {
                // competencias_index
                if (rtrim($pathinfo, '/') === '/competencias') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_competencias_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'competencias_index');
                    }

                    return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\CompetenciasController::indexAction',  '_route' => 'competencias_index',);
                }
                not_competencias_index:

                // competencias_new
                if ($pathinfo === '/competencias/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_competencias_new;
                    }

                    return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\CompetenciasController::newAction',  '_route' => 'competencias_new',);
                }
                not_competencias_new:

                // competencias_show
                if (preg_match('#^/competencias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_competencias_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'competencias_show')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\CompetenciasController::showAction',));
                }
                not_competencias_show:

                // competencias_edit
                if (preg_match('#^/competencias/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_competencias_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'competencias_edit')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\CompetenciasController::editAction',));
                }
                not_competencias_edit:

                // competencias_delete
                if (preg_match('#^/competencias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_competencias_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'competencias_delete')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\CompetenciasController::deleteAction',));
                }
                not_competencias_delete:

            }

            if (0 === strpos($pathinfo, '/coordinadores')) {
                // coordinadores_index
                if (rtrim($pathinfo, '/') === '/coordinadores') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_coordinadores_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'coordinadores_index');
                    }

                    return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\CoordinadoresController::indexAction',  '_route' => 'coordinadores_index',);
                }
                not_coordinadores_index:

                // coordinadores_new
                if ($pathinfo === '/coordinadores/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_coordinadores_new;
                    }

                    return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\CoordinadoresController::newAction',  '_route' => 'coordinadores_new',);
                }
                not_coordinadores_new:

                // coordinadores_show
                if (preg_match('#^/coordinadores/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_coordinadores_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coordinadores_show')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\CoordinadoresController::showAction',));
                }
                not_coordinadores_show:

                // coordinadores_edit
                if (preg_match('#^/coordinadores/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_coordinadores_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coordinadores_edit')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\CoordinadoresController::editAction',));
                }
                not_coordinadores_edit:

                // coordinadores_delete
                if (preg_match('#^/coordinadores/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_coordinadores_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coordinadores_delete')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\CoordinadoresController::deleteAction',));
                }
                not_coordinadores_delete:

            }

        }

        // adonai_unico_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'adonai_unico_default_index');
            }

            return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'adonai_unico_default_index',);
        }

        if (0 === strpos($pathinfo, '/docentes')) {
            // docentes_index
            if (rtrim($pathinfo, '/') === '/docentes') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_docentes_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'docentes_index');
                }

                return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\DocentesController::indexAction',  '_route' => 'docentes_index',);
            }
            not_docentes_index:

            // docentes_new
            if ($pathinfo === '/docentes/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_docentes_new;
                }

                return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\DocentesController::newAction',  '_route' => 'docentes_new',);
            }
            not_docentes_new:

            // docentes_show
            if (preg_match('#^/docentes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_docentes_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'docentes_show')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\DocentesController::showAction',));
            }
            not_docentes_show:

            // docentes_edit
            if (preg_match('#^/docentes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_docentes_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'docentes_edit')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\DocentesController::editAction',));
            }
            not_docentes_edit:

            // docentes_delete
            if (preg_match('#^/docentes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_docentes_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'docentes_delete')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\DocentesController::deleteAction',));
            }
            not_docentes_delete:

        }

        if (0 === strpos($pathinfo, '/estudiantes')) {
            // estudiantes_index
            if (rtrim($pathinfo, '/') === '/estudiantes') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_estudiantes_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'estudiantes_index');
                }

                return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\EstudiantesController::indexAction',  '_route' => 'estudiantes_index',);
            }
            not_estudiantes_index:

            // estudiantes_new
            if ($pathinfo === '/estudiantes/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_estudiantes_new;
                }

                return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\EstudiantesController::newAction',  '_route' => 'estudiantes_new',);
            }
            not_estudiantes_new:

            // estudiantes_show
            if (preg_match('#^/estudiantes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_estudiantes_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estudiantes_show')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\EstudiantesController::showAction',));
            }
            not_estudiantes_show:

            // estudiantes_edit
            if (preg_match('#^/estudiantes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_estudiantes_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estudiantes_edit')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\EstudiantesController::editAction',));
            }
            not_estudiantes_edit:

            // estudiantes_delete
            if (preg_match('#^/estudiantes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_estudiantes_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estudiantes_delete')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\EstudiantesController::deleteAction',));
            }
            not_estudiantes_delete:

        }

        if (0 === strpos($pathinfo, '/gr')) {
            if (0 === strpos($pathinfo, '/grados')) {
                // grados_index
                if (rtrim($pathinfo, '/') === '/grados') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_grados_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'grados_index');
                    }

                    return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\GradosController::indexAction',  '_route' => 'grados_index',);
                }
                not_grados_index:

                // grados_new
                if ($pathinfo === '/grados/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_grados_new;
                    }

                    return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\GradosController::newAction',  '_route' => 'grados_new',);
                }
                not_grados_new:

                // grados_show
                if (preg_match('#^/grados/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_grados_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'grados_show')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\GradosController::showAction',));
                }
                not_grados_show:

                // grados_edit
                if (preg_match('#^/grados/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_grados_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'grados_edit')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\GradosController::editAction',));
                }
                not_grados_edit:

                // grados_delete
                if (preg_match('#^/grados/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_grados_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'grados_delete')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\GradosController::deleteAction',));
                }
                not_grados_delete:

            }

            if (0 === strpos($pathinfo, '/grupos')) {
                // grupos_index
                if (rtrim($pathinfo, '/') === '/grupos') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_grupos_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'grupos_index');
                    }

                    return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\GruposController::indexAction',  '_route' => 'grupos_index',);
                }
                not_grupos_index:

                // grupos_new
                if ($pathinfo === '/grupos/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_grupos_new;
                    }

                    return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\GruposController::newAction',  '_route' => 'grupos_new',);
                }
                not_grupos_new:

                // grupos_show
                if (preg_match('#^/grupos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_grupos_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'grupos_show')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\GruposController::showAction',));
                }
                not_grupos_show:

                // lista_mats_show
                if (preg_match('#^/grupos/(?P<id>[^/]++)/listamats$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_lista_mats_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lista_mats_show')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\GruposController::listaMatriculasAction',));
                }
                not_lista_mats_show:

                // grupos_edit
                if (preg_match('#^/grupos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_grupos_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'grupos_edit')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\GruposController::editAction',));
                }
                not_grupos_edit:

                // grupos_delete
                if (preg_match('#^/grupos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_grupos_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'grupos_delete')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\GruposController::deleteAction',));
                }
                not_grupos_delete:

            }

        }

        if (0 === strpos($pathinfo, '/matriculas')) {
            // matriculas_index
            if (rtrim($pathinfo, '/') === '/matriculas') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_matriculas_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'matriculas_index');
                }

                return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\MatriculasController::indexAction',  '_route' => 'matriculas_index',);
            }
            not_matriculas_index:

            // matriculas_new
            if ($pathinfo === '/matriculas/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_matriculas_new;
                }

                return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\MatriculasController::newAction',  '_route' => 'matriculas_new',);
            }
            not_matriculas_new:

            // matriculas_show
            if (preg_match('#^/matriculas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_matriculas_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matriculas_show')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\MatriculasController::showAction',));
            }
            not_matriculas_show:

            // matriculas_edit
            if (preg_match('#^/matriculas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_matriculas_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matriculas_edit')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\MatriculasController::editAction',));
            }
            not_matriculas_edit:

            // matriculas_delete
            if (preg_match('#^/matriculas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_matriculas_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matriculas_delete')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\MatriculasController::deleteAction',));
            }
            not_matriculas_delete:

            // buscarListaMats
            if ($pathinfo === '/matriculas/buscarListaMats') {
                return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\MatriculasController::buscarListaMatriculas',  '_route' => 'buscarListaMats',);
            }

        }

        if (0 === strpos($pathinfo, '/notas')) {
            // notas_index
            if (rtrim($pathinfo, '/') === '/notas') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_notas_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'notas_index');
                }

                return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\NotasController::indexAction',  '_route' => 'notas_index',);
            }
            not_notas_index:

            // notas_new
            if ($pathinfo === '/notas/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_notas_new;
                }

                return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\NotasController::newAction',  '_route' => 'notas_new',);
            }
            not_notas_new:

            // notas_show
            if (preg_match('#^/notas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_notas_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notas_show')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\NotasController::showAction',));
            }
            not_notas_show:

            // notas_delete
            if (preg_match('#^/notas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_notas_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notas_delete')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\NotasController::deleteAction',));
            }
            not_notas_delete:

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/periodos')) {
                // periodos_index
                if (rtrim($pathinfo, '/') === '/periodos') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_periodos_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'periodos_index');
                    }

                    return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\PeriodosController::indexAction',  '_route' => 'periodos_index',);
                }
                not_periodos_index:

                // periodos_new
                if ($pathinfo === '/periodos/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_periodos_new;
                    }

                    return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\PeriodosController::newAction',  '_route' => 'periodos_new',);
                }
                not_periodos_new:

                // periodos_show
                if (preg_match('#^/periodos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_periodos_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'periodos_show')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\PeriodosController::showAction',));
                }
                not_periodos_show:

                // periodos_edit
                if (preg_match('#^/periodos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_periodos_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'periodos_edit')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\PeriodosController::editAction',));
                }
                not_periodos_edit:

                // periodos_delete
                if (preg_match('#^/periodos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_periodos_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'periodos_delete')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\PeriodosController::deleteAction',));
                }
                not_periodos_delete:

                if (0 === strpos($pathinfo, '/periodos/periodo')) {
                    // select_periodo_actual
                    if ($pathinfo === '/periodos/periodo_actual') {
                        return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\PeriodosController::periodoActualAction',  '_route' => 'select_periodo_actual',);
                    }

                    // periodos_actuales
                    if ($pathinfo === '/periodos/periodos_actuales') {
                        return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\PeriodosController::getPeriodosActuales',  '_route' => 'periodos_actuales',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/planeadores')) {
                // planeadores_index
                if (rtrim($pathinfo, '/') === '/planeadores') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_planeadores_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'planeadores_index');
                    }

                    return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\PlaneadoresController::indexAction',  '_route' => 'planeadores_index',);
                }
                not_planeadores_index:

                // planeadores_new
                if ($pathinfo === '/planeadores/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_planeadores_new;
                    }

                    return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\PlaneadoresController::newAction',  '_route' => 'planeadores_new',);
                }
                not_planeadores_new:

                // planeadores_show
                if (preg_match('#^/planeadores/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_planeadores_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'planeadores_show')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\PlaneadoresController::showAction',));
                }
                not_planeadores_show:

                // planeadores_edit
                if (preg_match('#^/planeadores/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_planeadores_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'planeadores_edit')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\PlaneadoresController::editAction',));
                }
                not_planeadores_edit:

                // planeadores_delete
                if (preg_match('#^/planeadores/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_planeadores_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'planeadores_delete')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\PlaneadoresController::deleteAction',));
                }
                not_planeadores_delete:

            }

        }

        if (0 === strpos($pathinfo, '/temas')) {
            // temas_index
            if (rtrim($pathinfo, '/') === '/temas') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_temas_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'temas_index');
                }

                return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\TemasController::indexAction',  '_route' => 'temas_index',);
            }
            not_temas_index:

            // temas_new
            if ($pathinfo === '/temas/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_temas_new;
                }

                return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\TemasController::newAction',  '_route' => 'temas_new',);
            }
            not_temas_new:

            // temas_show
            if (preg_match('#^/temas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_temas_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'temas_show')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\TemasController::showAction',));
            }
            not_temas_show:

            // temas_edit
            if (preg_match('#^/temas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_temas_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'temas_edit')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\TemasController::editAction',));
            }
            not_temas_edit:

            // temas_delete
            if (preg_match('#^/temas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_temas_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'temas_delete')), array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\TemasController::deleteAction',));
            }
            not_temas_delete:

        }

        if (0 === strpos($pathinfo, '/usuarios')) {
            // usuarios_index
            if (rtrim($pathinfo, '/') === '/usuarios') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuarios_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuarios_index');
                }

                return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\UsuariosController::indexAction',  '_route' => 'usuarios_index',);
            }
            not_usuarios_index:

            // usuarios_new
            if ($pathinfo === '/usuarios/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuarios_new;
                }

                return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\UsuariosController::newAction',  '_route' => 'usuarios_new',);
            }
            not_usuarios_new:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // AdonaiUsuarios_admin
        if ($pathinfo === '/admin_panel') {
            return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\DefaultController::adminAction',  '_route' => 'AdonaiUsuarios_admin',);
        }

        // AdonaiUsuarios_docente
        if ($pathinfo === '/docente_panel') {
            return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\DefaultController::docenteAction',  '_route' => 'AdonaiUsuarios_docente',);
        }

        // AdonaiUsuarios_inicio
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'AdonaiUsuarios_inicio',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\DefaultController::adminAction',  '_route' => 'login_check',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // select_matriculas
        if ($pathinfo === '/matriculas_select') {
            return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\MatriculasController::matriculasSelectAction',  '_route' => 'select_matriculas',);
        }

        // select_competencias
        if ($pathinfo === '/competencias_select') {
            return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\CompetenciasController::competenciasSelectAction',  '_route' => 'select_competencias',);
        }

        if (0 === strpos($pathinfo, '/nota')) {
            // notas_edit
            if ($pathinfo === '/notas/edit') {
                return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\NotasController::editAction',  '_route' => 'notas_edit',);
            }

            // nota_existente
            if ($pathinfo === '/nota_existente') {
                return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\NotasController::notasExistentesAction',  '_route' => 'nota_existente',);
            }

        }

        // comprobar_registros
        if ($pathinfo === '/comprobar_registros') {
            return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\NotasController::comprobarRegistrosAction',  '_route' => 'comprobar_registros',);
        }

        // todas_notas
        if ($pathinfo === '/todas_notas') {
            return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\NotasController::devolverTodasNotasAction',  '_route' => 'todas_notas',);
        }

        // planeador_existente
        if ($pathinfo === '/planeador_existente') {
            return array (  '_controller' => 'Adonai\\UnicoBundle\\Controller\\PlaneadoresController::planeadorExistenteAction',  '_route' => 'planeador_existente',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
