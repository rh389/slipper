<?php

namespace Slipper\CG;

use CG\Generator\PhpClass as ExternalPhpClass;

class JMSPhpClass implements PhpClassInterface
{
    /**
     * @var \CG\Generator\PhpClass
     */
    private $jmsPhpClass;

    /**
     * @param ExternalPhpClass $jmsPhpClass
     */
    public function __construct(ExternalPhpClass $jmsPhpClass)
    {
        $this->jmsPhpClass = $jmsPhpClass;
    }


    /**
     * A property of this class
     *
     * @param PhpPropertyInterface|PhpProperty $property
     * @return PhpClassInterface
     */
    public function addProperty($property)
    {
        return $this->jmsPhpClass->setProperty($property);
    }

    /**
     * A method on this class
     *
     * @param PhpMethodInterface|PhpMethod $method
     * @return PhpClassInterface
     */
    public function addMethod($method)
    {
        return $this->jmsPhpClass->setMethod($method);
    }

    public function getJmsPhpClass()
    {
        return $this->jmsPhpClass;
    }

    /**
     * Name of the class which this class should extend
     *
     * @param string $name
     * @return PhpClassInterface
     */
    public function setParentClassName($name)
    {
        $this->jmsPhpClass->setParentClassName($name);
        return $this;
    }

    /**
     * Name of an interface which this class should implement
     *
     * @param string $name
     * @return PhpClassInterface
     */
    public function addInterfaceName($name)
    {
        $this->jmsPhpClass->addInterfaceName($name);
        return $this;
    }
}
