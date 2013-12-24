<?php

namespace Slipper\CG;

interface PhpPropertyInterface
{
    /**
     * @param mixed $value
     * @return PhpPropertyInterface
     */
    public function setDefaultValue($value);
}
