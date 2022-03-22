<?php

namespace ClaudioDekker\WordGenerator;

use ClaudioDekker\WordGenerator\Words\Adjective;
use ClaudioDekker\WordGenerator\Words\Noun;

class Generator
{
    /**
     * Generate a random phrase.
     *
     * @param  string  $separator
     * @return string
     */
    public static function generate(string $separator = ' '): string
    {
        return Adjective::random().$separator.Noun::random();
    }
}
