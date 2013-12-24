<?php

namespace Slipper\CG;

use CG\Generator\PhpParameter;

class JMSPhpParameter implements PhpParameterInterface
{
    /**
     * @var PhpParameter
     */
    private $jmsPhpParameter;

    /**
     * @param PhpParameter $jmsPhpParameter
     */
    public function __construct(PhpParameter $jmsPhpParameter)
    {
        $this->jmsPhpParameter = $jmsPhpParameter;
    }

    public function getJmsPhpParameter()
    {
        return $this->jmsPhpParameter;
    }
}
