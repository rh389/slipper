<?php

namespace Slipper\CG;

interface GeneratorStrategyInterface
{
    /**
     * @param PhpClassInterface $phpClassBuilder
     * @return GeneratorStrategyInterface
     */
    public function generate(PhpClassInterface $phpClassBuilder);
}
