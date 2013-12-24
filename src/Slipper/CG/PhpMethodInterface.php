<?php

namespace Slipper\CG;

interface PhpMethodInterface
{
    /**
     * @param PhpParameterInterface $parameter
     * @return PhpMethodInterface
     */
    public function addParameter($parameter);
}
