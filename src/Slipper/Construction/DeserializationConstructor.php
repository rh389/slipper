<?php

namespace Slipper\Construction;

use Slipper\Metadata\ResourceMetadataInterface;

class DeserializationConstructor implements ConstructorInterface
{
    /**
     * Construct an object of type $className
     *
     * @param ResourceMetadataInterface $metadata
     * @return mixed
     */
    public function construct(ResourceMetadataInterface $metadata)
    {
        $className = $metadata->getName();
        $serialized = sprintf('O:%d:"%s":0:{}', strlen($className), $className);
        return unserialize($serialized);
    }
}
