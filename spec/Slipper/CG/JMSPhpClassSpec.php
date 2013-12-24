<?php

namespace spec\Slipper\CG;

use CG\Generator\PhpClass;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class JMSPhpClassSpec extends ObjectBehavior
{
    function let(
        PhpClass $jmsPhpClass
    )
    {
        $this->beConstructedWith($jmsPhpClass);
    }

    function it_provides_the_underlying_jms_php_class($jmsPhpClass)
    {
        $this->getJmsPhpClass()->shouldReturn($jmsPhpClass);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Slipper\CG\JMSPhpClass');
        $this->shouldImplement('Slipper\CG\PhpClassInterface');
    }
}
