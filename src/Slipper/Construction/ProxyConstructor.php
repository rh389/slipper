<?php

namespace Slipper\Construction;

use Slipper\Metadata\ResourceMetadataInterface;

class ProxyConstructor implements ConstructorInterface
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
        $proxyClassName = sprintf("__Slipper__%sProxy", str_replace('\\', '_', $className));

        if (!class_exists($proxyClassName, false)) {
            $definition = sprintf("class %s extends %s implements %s {}",
                $proxyClassName,
                $className,
                '\Slipper\Proxy\ProxyInterface'
            );
            eval($definition);
        }

        return new $proxyClassName;
    }
}
