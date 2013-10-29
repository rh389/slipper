<?php

namespace spec\Slipper\Construction;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DeserializationConstructorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Slipper\Construction\DeserializationConstructor');
        $this->shouldImplement('Slipper\Construction\ConstructorInterface');
    }

    function it_constructs_defined_classes()
    {
        $this->construct('Fixtures\Resource\Course')->shouldHaveType('Fixtures\Resource\Course');
    }
}
