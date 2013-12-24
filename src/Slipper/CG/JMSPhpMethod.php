<?php

namespace Slipper\CG;

use CG\Generator\PhpMethod;

class JMSPhpMethod implements PhpMethodInterface
{
    /**
     * @var \CG\Generator\PhpMethod
     */
    private $jmsPhpMethod;

    /**
     * @param PhpMethod $jmsPhpMethod
     */
    public function __construct(PhpMethod $jmsPhpMethod)
    {
        $this->jmsPhpMethod = $jmsPhpMethod;
    }

    /**
     * @param PhpParameterInterface|JMSPhpParameter $parameter
     * @return PhpMethodInterface
     */
    public function addParameter($parameter)
    {
        $this->jmsPhpMethod->addParameter($parameter->getJmsPhpParameter());
        return $this;
    }

    /**
     * @return PhpMethod
     */
    public function getJmsPhpMethod()
    {
        return $this->jmsPhpMethod;
    }
}
