<?php

namespace Proxies\__CG__\Adonai\UnicoBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Notas extends \Adonai\UnicoBundle\Entity\Notas implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Notas' . "\0" . 'idNota', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Notas' . "\0" . 'nota', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Notas' . "\0" . 'asignacion', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Notas' . "\0" . 'competencia', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Notas' . "\0" . 'matricula', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Notas' . "\0" . 'periodo');
        }

        return array('__isInitialized__', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Notas' . "\0" . 'idNota', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Notas' . "\0" . 'nota', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Notas' . "\0" . 'asignacion', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Notas' . "\0" . 'competencia', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Notas' . "\0" . 'matricula', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Notas' . "\0" . 'periodo');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Notas $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdNota()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdNota();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdNota', array());

        return parent::getIdNota();
    }

    /**
     * {@inheritDoc}
     */
    public function setNota($nota)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNota', array($nota));

        return parent::setNota($nota);
    }

    /**
     * {@inheritDoc}
     */
    public function getNota()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNota', array());

        return parent::getNota();
    }

    /**
     * {@inheritDoc}
     */
    public function setAsignacion(\Adonai\UnicoBundle\Entity\Asignaciones $asignacion = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAsignacion', array($asignacion));

        return parent::setAsignacion($asignacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getAsignacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAsignacion', array());

        return parent::getAsignacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompetencia(\Adonai\UnicoBundle\Entity\Competencias $competencia = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompetencia', array($competencia));

        return parent::setCompetencia($competencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompetencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompetencia', array());

        return parent::getCompetencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setMatricula(\Adonai\UnicoBundle\Entity\Matriculas $matricula = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatricula', array($matricula));

        return parent::setMatricula($matricula);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatricula()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatricula', array());

        return parent::getMatricula();
    }

    /**
     * {@inheritDoc}
     */
    public function setPeriodo(\Adonai\UnicoBundle\Entity\Periodos $periodo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPeriodo', array($periodo));

        return parent::setPeriodo($periodo);
    }

    /**
     * {@inheritDoc}
     */
    public function getPeriodo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPeriodo', array());

        return parent::getPeriodo();
    }

}
