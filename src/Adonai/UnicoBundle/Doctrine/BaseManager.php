<?php


namespace Fundacion\Bundle\PalmiraBundle\Doctrine;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Fundacion\Exception\FundacionException;


/**
 * Description of BaseManager
 *
 * @author 
 */
Abstract class BaseManager  {

    /**
     * Gestiona los objetos con la base de datos, ORM
     * @var type EntityManager
     */
    protected $entityManager;

    /**
     * Clase a gestionar
     * @var string nombre de la clase ubicada en la carpeta entity 
     */
    protected $class;

    /**
     * Repositorio a gestionar
     * @var mixed contenedor de dependencias.
     */
    protected $repository;

    /**
     * Contenedor de dependencias
     * @var mixed contenedor de dependencias.
     */
    protected $container;

    /**
     * Disparador de eventos
     * @var EventDispatcherInterface 
     */
    protected $dispatcher;

    /**
     * Recibe la interfaz del ORM y el disparador de eventos
     * @param string $class nombre de la entidad a gestionar
     * @param \Symfony\Component\EventDispatcher\EventDispatcherInterface  $dispatcher disparador de eventos
     */
    function __construct(\Doctrine\Common\Persistence\ObjectManager $objectManager, EventDispatcherInterface $dispatcher) {

        $this->entityManager = $objectManager;

        $this->dispatcher = $dispatcher;
    }

    public function setContainer($container) {
        $this->container = $container;
    }

    /**
     * Se encarga de obtener un servicio siempre y cuando esté definido el contenedor de servicios
     * @param string $id nombre de servicio
     * @return mixed
     * @throws \LogicException Servicio no encontrado
     */
    protected function getService($id) {

        $service = $this->container->get($id);
        if (!$service) {
            throw new \LogicException('Servicio no encontrado');
        }
        return $service;
    }

    /**
     * Crea una instancia de la entidad administrada
     * @return entity
     */
    public function create() {
        return new $this->class;
    }

    /**
     * Obtiene el repositorio
     * @return class
     */
    protected function getRepository() {
        return $this->repository;
    }

    /*
     * Métodos para interactuar con la base de datos,
     * son las funciones basicas, son protegidas porque solo van a tener alcance
     * en el manager, se recomienda mirar los otros metodos publicos a los que se le agregan eventos
     */

    /**
     * 	funcion básica para guardar
     */
    protected function _save($model, $flush = true) {
        try {
            $this->entityManager->persist($model);
            if ($flush) {
                $this->entityManager->flush();
            }
        } catch (\Exception $exc) {
            throw new FundacionException(500, "Ocurrio un problema: " . $exc->getMessage());
        }
    }

    public function save($model, $flush = true) {
        return $this->_save($model, $flush);
    }

    /**
     * Función básica para eliminar
     * @param type $model
     * @param type $flush
     * @throws SGIEException Si ha ocurrido un error al eliminar 
     */
   protected function _delete($model, $flush = true) {
        try {
            $this->entityManager->remove($model);
            if ($flush) {
                $this->entityManager->flush();
            }
        } catch (\Exception $exc) {
            throw new FundacionException(500, "Ocurrio un problema: " . $exc->getMessage());
        }
    }

    public function delete($model, $flush = true) {
        return $this->_delete($model, $flush);
    }

    /**
     * Funcion básica para Buscar un elemento por un criterio 
     * @param array $criterio
     * @return entity
     * @throws SGIEException Si ha ocurrido un error
     */
    protected function _findOneBy(array $criterio) {

        $entity = $this->repository->findOneBy($criterio);
        if (!$entity ) {
            throw new FundacionException(404, $this->class . " no encontrada");
        }
        return $entity;
    }

    public function findOneBy(array $criterio) {
        return $this->_findOneBy($criterio);
    }

    public function findOneById($id) {
        return $this->findOneBy(array("id" => $id));
    }

    /**
     * Funcion básica para Buscar elementos por un criterio 
     * @param array $criterio
     * @return entity
     */
    protected function _findBy(array $criterio) {
        return $this->repository->findBy($criterio);
    }

    public function findBy(array $criterio) {
        return $this->_findBy($criterio);
    }

    /**
     * Función Básica para obtener todos los elementos
     * @return type
     */
    protected function _findAll() {
        return $this->repository->findAll();
    }

    public function findAll() {
        return $this->_findAll();
    }

    /**
     * Establece la clase a gestionar
     * Ejemplo: FundacionSolicitudCuposBundle:Sede
     * 
     * @param string $class Entidad
     */
    public function setClass($class) {
        $this->repository = $this->entityManager->getRepository($class);
        $metadata = $this->entityManager->getClassMetadata($class);
        $this->class = $metadata->getName();
    }

    /**
     * 
     * @return EntityManager
     */
    public function getEntityManager() {
        return $this->entityManager;
    }

}