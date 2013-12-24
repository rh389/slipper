<?php

namespace spec\Slipper\CG;

use CG\Generator\PhpParameter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class JMSPhpParameterSpec extends ObjectBehavior
{
    function let(
        PhpParameter $jmsPhpParameter
    )
    {
        $this->beConstructedWith($jmsPhpParameter);
    }

    function it_provides_the_underlying_jms_php_parameter($jmsPhpParameter)
    {
        $this->getJmsPhpParameter()->shouldReturn($jmsPhpParameter);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Slipper\CG\JMSPhpParameter');
        $this->shouldImplement('Slipper\CG\PhpParameterInterface');
    }
}
