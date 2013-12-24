<?php

namespace Slipper\CG;

interface PhpMethodInterface
{
    /**
     * @param PhpParameterInterface $parameter
     * @return PhpMethodInterface
     */
    public function addParameter($parameter);

    /**
     * @param string $body
     * @return PhpMethodInterface
     */
    public function setBody($body);
}
