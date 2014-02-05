<?php

namespace Slipper\Construction;

use Slipper\CG\CGBuilderFactoryInterface;
use Slipper\CG\GeneratorStrategyInterface;
use Slipper\Metadata\ResourceMetadataInterface;

class ProxyConstructor implements ConstructorInterface
{
    /**
     * @var \Slipper\CG\CGBuilderFactoryInterface
     */
    private $cgBuilderFactory;

    /**
     * @var \Slipper\CG\GeneratorStrategyInterface
     */
    private $generator;

    public function __construct(CGBuilderFactoryInterface $cgBuilderFactory, GeneratorStrategyInterface $generator)
    {
        $this->cgBuilderFactory = $cgBuilderFactory;
        $this->generator = $generator;
    }

    /**
     * Construct an object of type $className
     *
     * @param ResourceMetadataInterface $metadata
     * @return mixed
     */
    public function construct(ResourceMetadataInterface $metadata)
    {
        $className = $metadata->getName();
        $proxyClassName = sprintf("__CGSlipper__%sProxy", str_replace('\\', '_', $className));

        if (!class_exists($proxyClassName, false)) {
            eval($this->generateDefinition($metadata, $proxyClassName));
        }

        $instance = new $proxyClassName;
        //$instance->__CGInterception__setLoader();
        return $instance;
    }

    protected function generateDefinition(ResourceMetadataInterface $metadata, $proxyClassName)
    {
        $className = $metadata->getName();

        $phpClass = $this->cgBuilderFactory->createPhpClass($proxyClassName);
        $phpClass->setParentClassName($className);
        $phpClass->addInterfaceName('\Slipper\Proxy\ProxyInterface');

        //$interceptorBuilder = new \CG\Proxy\InterceptionGenerator();
        //$interceptorBuilder->generate(new \ReflectionClass($className), $phpClass);

        $property = $this->cgBuilderFactory->createPhpProperty('__CGSlipper__initializedProperties');
        $property->setDefaultValue([]);
        $phpClass->addProperty($property);

        $method = $this->cgBuilderFactory->createPhpMethod('__CGSlipper__initializeProperty');
        $method->addParameter($this->cgBuilderFactory->createPhpParameter('propertyName'));
        $method->addParameter($this->cgBuilderFactory->createPhpParameter('value'));
        $method->setBody('$this->__CGSlipper__initializedProperties[$propertyName] = true; $this->$propertyName = $value;');
        $phpClass->addMethod($method);

        $method = $this->cgBuilderFactory->createPhpMethod('__CGSlipper__hasInitializedProperty');
        $method->addParameter($this->cgBuilderFactory->createPhpParameter('propertyName'));
        $method->setBody('return isset($this->__CGSlipper__initializedProperties[$propertyName]);');
        $phpClass->addMethod($method);

        return $this->generator->generate($phpClass);
    }
}
