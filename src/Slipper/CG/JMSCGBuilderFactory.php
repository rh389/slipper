<?php

namespace Slipper\CG;

use CG\Generator\PhpClass;
use CG\Generator\PhpMethod;
use CG\Generator\PhpParameter;
use CG\Generator\PhpProperty;

class JMSCGBuilderFactory implements CGBuilderFactoryInterface
{
    /**
     * @param string $name
     * @return PhpParameterInterface
     */
    public function createPhpParameter($name)
    {
        return new JMSPhpParameter(new PhpParameter($name));
    }

    /**
     * @param string $name
     * @return PhpClassInterface
     */
    public function createPhpClass($name)
    {
        return new JMSPhpClass(new PhpClass($name));
    }

    /**
     * @param string $name
     * @return PhpMethodInterface
     */
    public function createPhpMethod($name)
    {
        return new JMSPhpMethod(new PhpMethod($name));
    }

    /**
     * @param string $name
     * @return PhpPropertyInterface
     */
    public function createPhpProperty($name)
    {
        return new JMSPhpProperty(new PhpProperty($name));
    }
}
