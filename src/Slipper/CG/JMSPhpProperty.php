<?php

namespace Slipper\CG;

use CG\Generator\PhpProperty as ExternalPhpProperty;
use CG\Generator\PhpProperty;

class JMSPhpProperty implements PhpPropertyInterface
{
    /**
     * @var \CG\Generator\PhpProperty
     */
    private $jmsPhpProperty;

    /**
     * @param PhpProperty $jmsPhpProperty
     */
    public function __construct(PhpProperty $jmsPhpProperty)
    {
        $this->jmsPhpProperty = $jmsPhpProperty;
    }

    /**
     * @return PhpProperty
     */
    public function getJmsPhpProperty()
    {
        return $this->jmsPhpProperty;
    }

    /**
     * @param mixed $value
     * @return PhpPropertyInterface
     */
    public function setDefaultValue($value)
    {
        $this->jmsPhpProperty->setDefaultValue($value);
        return $this;
    }
}
