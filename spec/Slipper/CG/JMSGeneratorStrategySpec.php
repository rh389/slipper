<?php

namespace spec\Slipper\CG;

use CG\Core\DefaultGeneratorStrategy;
use CG\Generator\PhpClass;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Slipper\CG\JMSPhpClass;

class JMSGeneratorStrategySpec extends ObjectBehavior
{
    function let(
        DefaultGeneratorStrategy $strategy
    )
    {
        $this->beConstructedWith($strategy);
    }


    function it_is_initializable()
    {
        $this->shouldHaveType('Slipper\CG\JMSGeneratorStrategy');
        $this->shouldImplement('Slipper\CG\GeneratorStrategyInterface');
    }

    function it_generates_php_classes_using_the_provided_strategy($strategy,
        JMSPhpClass $classToGenerate,
        PhpClass $underlyingClass
    )
    {
        $classToGenerate->getJmsPhpClass()->willReturn($underlyingClass);
        $strategy->generate($underlyingClass)->shouldBeCalled()->willReturn('foo');
        $this->generate($classToGenerate)->shouldReturn('foo');
    }
}
