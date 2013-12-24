<?php

namespace Slipper\CG;

interface CGBuilderFactoryInterface
{
    /**
     * @param string $name
     * @return PhpParameterInterface
     */
    public function createPhpParameter($name);

    /**
     * @param string $name
     * @return PhpClassInterface
     */
    public function createPhpClass($name);

    /**
     * @param string $name
     * @return PhpMethodInterface
     */
    public function createPhpMethod($name);

    /**
     * @param string $name
     * @return PhpPropertyInterface
     */
    public function createPhpProperty($name);
}
