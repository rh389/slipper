<?php

namespace Slipper\CG;

use CG\Core\GeneratorStrategyInterface as JMSGeneratorStrategyInterface;

class JMSGeneratorStrategy implements GeneratorStrategyInterface
{
    /**
     * @var \CG\Core\GeneratorStrategyInterface
     */
    private $strategy;

    /**
     * @param JMSGeneratorStrategyInterface $strategy
     */
    function __construct(JMSGeneratorStrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @param PhpClassInterface|JMSPhpClass $phpClassBuilder
     * @return GeneratorStrategyInterface
     */
    public function generate(PhpClassInterface $phpClassBuilder)
    {
        return $this->strategy->generate($phpClassBuilder->getJmsPhpClass());
    }
}
