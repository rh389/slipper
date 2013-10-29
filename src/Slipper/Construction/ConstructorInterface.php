<?php

namespace Slipper\Construction;

interface ConstructorInterface
{
    /**
     * Construct an object of type $className
     *
     * @param $className
     * @return mixed
     */
    public function construct($className);
}
