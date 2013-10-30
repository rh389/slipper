<?php

namespace spec\Slipper\Construction;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Slipper\Metadata\ResourceMetadataInterface;

class DeserializationConstructorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Slipper\Construction\DeserializationConstructor');
        $this->shouldImplement('Slipper\Construction\ConstructorInterface');
    }

    function it_constructs_defined_classes(ResourceMetadataInterface $metadata)
    {
        $metadata->getName()->willReturn('Fixtures\Resource\Course');
        $this->construct($metadata)->shouldHaveType('Fixtures\Resource\Course');
    }
}
