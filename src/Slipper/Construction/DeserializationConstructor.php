<?php

namespace Slipper\Construction;

class DeserializationConstructor implements ConstructorInterface
{
    /**
     * @param string $className
     * @return mixed
     */
    public function construct($className)
    {
        $serialized = sprintf('O:%d:"%s":0:{}', strlen($className), $className);
        return unserialize($serialized);
    }
}
