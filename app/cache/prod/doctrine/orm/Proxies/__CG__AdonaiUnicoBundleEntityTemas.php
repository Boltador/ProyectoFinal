<?php

namespace Proxies\__CG__\Adonai\UnicoBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Temas extends \Adonai\UnicoBundle\Entity\Temas implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Temas' . "\0" . 'idTema', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Temas' . "\0" . 'nomTema', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Temas' . "\0" . 'fechaInTema', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Temas' . "\0" . 'fechaFinTema', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Temas' . "\0" . 'planeador');
        }

        return array('__isInitialized__', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Temas' . "\0" . 'idTema', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Temas' . "\0" . 'nomTema', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Temas' . "\0" . 'fechaInTema', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Temas' . "\0" . 'fechaFinTema', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Temas' . "\0" . 'planeador');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Temas $proxy) {
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
    public function getIdTema()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdTema();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdTema', array());

        return parent::getIdTema();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomTema($nomTema)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomTema', array($nomTema));

        return parent::setNomTema($nomTema);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomTema()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomTema', array());

        return parent::getNomTema();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaInTema($fechaInTema)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaInTema', array($fechaInTema));

        return parent::setFechaInTema($fechaInTema);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaInTema()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaInTema', array());

        return parent::getFechaInTema();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaFinTema($fechaFinTema)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaFinTema', array($fechaFinTema));

        return parent::setFechaFinTema($fechaFinTema);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaFinTema()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaFinTema', array());

        return parent::getFechaFinTema();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlaneador(\Adonai\UnicoBundle\Entity\Planeadores $planeador = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlaneador', array($planeador));

        return parent::setPlaneador($planeador);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlaneador()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlaneador', array());

        return parent::getPlaneador();
    }

}