<?php

namespace Slipper\Construction;

use Slipper\Metadata\ResourceMetadataInterface;

interface ConstructorInterface
{
    /**
     * Construct an object of type $className
     *
     * @param ResourceMetadataInterface $metadata
     * @return mixed
     */
    public function construct(ResourceMetadataInterface $metadata);
}
