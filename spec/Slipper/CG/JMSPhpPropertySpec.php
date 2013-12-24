<?php

namespace spec\Slipper\CG;

use CG\Generator\PhpProperty;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class JMSPhpPropertySpec extends ObjectBehavior
{
    function let(
        PhpProperty $jmsPhpProperty
    )
    {
        $this->beConstructedWith($jmsPhpProperty);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Slipper\CG\JMSPhpProperty');
        $this->shouldImplement('Slipper\CG\PhpPropertyInterface');
    }

    function it_provides_the_underlying_jms_php_property($jmsPhpProperty)
    {
        $this->getJmsPhpProperty()->shouldReturn($jmsPhpProperty);
    }

    function it_can_have_a_default_value($value, $jmsPhpProperty)
    {
        $jmsPhpProperty->setDefaultValue($value)->shouldBeCalled();
        $this->setDefaultValue($value)->shouldReturn($this);
    }
}
