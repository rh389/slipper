<?php

namespace spec\Slipper\CG;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class JMSCGBuilderFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Slipper\CG\JMSCGBuilderFactory');
        $this->shouldImplement('Slipper\CG\CGBuilderFactoryInterface');
    }

    function it_creates_php_classes()
    {
        $this->createPhpClass('foo')->shouldImplement('Slipper\CG\PhpClassInterface');
    }

    function it_creates_php_parameters()
    {
        $this->createPhpParameter('foo')->shouldImplement('Slipper\CG\PhpParameterInterface');
    }

    function it_creates_php_methods()
    {
        $this->createPhpMethod('foo')->shouldImplement('Slipper\CG\PhpMethodInterface');
    }

    function it_creates_php_property()
    {
        $this->createPhpProperty('foo')->shouldImplement('Slipper\CG\PhpPropertyInterface');
    }
}
