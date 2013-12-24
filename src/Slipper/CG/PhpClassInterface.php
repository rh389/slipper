<?php

namespace Slipper\CG;

interface PhpClassInterface
{
    /**
     * Name of the class which this class should extend
     *
     * @param string $name
     * @return PhpClassInterface
     */
    public function setParentClassName($name);

    /**
     * Name of an interface which this class should implement
     *
     * @param string $name
     * @return PhpClassInterface
     */
    public function addInterfaceName($name);

    /**
     * A property of this class
     *
     * @param PhpPropertyInterface $property
     * @return PhpClassInterface
     */
    public function addProperty($property);

    /**
     * A method on this class
     *
     * @param PhpMethodInterface $method
     * @return PhpClassInterface
     */
    public function addMethod($method);
}
