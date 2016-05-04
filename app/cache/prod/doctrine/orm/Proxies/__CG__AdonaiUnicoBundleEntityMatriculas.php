<?php

namespace Proxies\__CG__\Adonai\UnicoBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Matriculas extends \Adonai\UnicoBundle\Entity\Matriculas implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Matriculas' . "\0" . 'idMat', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Matriculas' . "\0" . 'estudiante', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Matriculas' . "\0" . 'grupo', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Matriculas' . "\0" . 'a_lectivo');
        }

        return array('__isInitialized__', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Matriculas' . "\0" . 'idMat', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Matriculas' . "\0" . 'estudiante', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Matriculas' . "\0" . 'grupo', '' . "\0" . 'Adonai\\UnicoBundle\\Entity\\Matriculas' . "\0" . 'a_lectivo');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Matriculas $proxy) {
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
    public function getIdMat()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdMat();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdMat', array());

        return parent::getIdMat();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstudiante(\Adonai\UnicoBundle\Entity\Estudiantes $estudiante = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstudiante', array($estudiante));

        return parent::setEstudiante($estudiante);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstudiante()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstudiante', array());

        return parent::getEstudiante();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrupo(\Adonai\UnicoBundle\Entity\Grupos $grupo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrupo', array($grupo));

        return parent::setGrupo($grupo);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrupo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrupo', array());

        return parent::getGrupo();
    }

    /**
     * {@inheritDoc}
     */
    public function setALectivo(\Adonai\UnicoBundle\Entity\ALectivos $aLectivo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setALectivo', array($aLectivo));

        return parent::setALectivo($aLectivo);
    }

    /**
     * {@inheritDoc}
     */
    public function getALectivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getALectivo', array());

        return parent::getALectivo();
    }

    /**
     * {@inheritDoc}
     */
    public function getListaMatriculas($grupo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getListaMatriculas', array($grupo));

        return parent::getListaMatriculas($grupo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalMatriculasActual($lista_grupos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalMatriculasActual', array($lista_grupos));

        return parent::getTotalMatriculasActual($lista_grupos);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}