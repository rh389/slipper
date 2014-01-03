<?php

namespace spec\Slipper\Metadata\Yaml;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ParseExceptionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Slipper\Metadata\Yaml\ParseException');
        $this->shouldHaveType('Exception');
    }
}
