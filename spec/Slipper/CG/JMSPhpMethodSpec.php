<?php

namespace spec\Slipper\CG;

use CG\Generator\PhpMethod;
use CG\Generator\PhpParameter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Slipper\CG\JMSPhpParameter;

class JMSPhpMethodSpec extends ObjectBehavior
{
    function let(
        PhpMethod $jmsPhpMethod
    )
    {
        $this->beConstructedWith($jmsPhpMethod);
    }

    function it_provides_the_underlying_jms_php_method($jmsPhpMethod)
    {
        $this->getJmsPhpMethod()->shouldReturn($jmsPhpMethod);
    }

    function it_can_have_parameters_added_to_it(
        $jmsPhpMethod,
        JMSPhpParameter $parameter,
        PhpParameter $underlying
    )
    {
        $parameter->getJmsPhpParameter()->willReturn($underlying);
        $jmsPhpMethod->addParameter($underlying)->shouldBeCalled();
        $this->addParameter($parameter)->shouldReturn($this);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Slipper\CG\JMSPhpMethod');
        $this->shouldImplement('Slipper\CG\PhpMethodInterface');
    }
}
