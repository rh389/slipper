<?php

namespace Slipper\Metadata\Yaml;

interface ParserInterface
{
    /**
     * Parses YAML into a PHP array.
     *
     * The parse method, when supplied with a YAML stream (string),
     * will do its best to convert that YAML into a PHP array.
     *
     * @param string  $input                  A string containing YAML
     * @param Boolean $exceptionOnInvalidType True if an exception must be thrown on invalid types false otherwise
     * @param Boolean $objectSupport          True if object support is enabled, false otherwise
     *
     * @return array The YAML converted to a PHP array
     *
     * @throws ParseException If the YAML is not valid
     */
    public function parse($input, $exceptionOnInvalidType = false, $objectSupport = false);
}
