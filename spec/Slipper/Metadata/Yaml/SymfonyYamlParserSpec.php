<?php

namespace spec\Slipper\Metadata\Yaml;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\Yaml\Parser;

class SymfonyYamlParserSpec extends ObjectBehavior
{
    function let(Parser $symfonyYamlParser)
    {
        $this->beConstructedWith($symfonyYamlParser);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Slipper\Metadata\Yaml\SymfonyYamlParser');
        $this->shouldImplement('Slipper\Metadata\Yaml\ParserInterface');
    }

    function it_should_parse_using_the_symfony_parser(
        $symfonyYamlParser,
        $arg1,
        $arg2,
        $arg3,
        $return
    )
    {
        $symfonyYamlParser->parse($arg1, $arg2, $arg3)->shouldBeCalled()->willReturn($return);
        $this->parse($arg1, $arg2, $arg3)->shouldReturn($return);
    }

    function it_should_convert_symfony_exceptions_to_local_exceptions(
        $symfonyYamlParser
    )
    {
        $exception = new \Symfony\Component\Yaml\Exception\ParseException("message");
        $symfonyYamlParser->parse(Argument::cetera())->willThrow($exception);
        $this->shouldThrow('Slipper\Metadata\Yaml\ParseException')->duringParse("test", false, false);
    }
}
