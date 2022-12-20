<?php

namespace ClaudioDekker\WordGenerator;

use ClaudioDekker\WordGenerator\Words\Adjective;
use ClaudioDekker\WordGenerator\Words\Noun;

class Generator
{
    /**
     * Override the adjectives and nouns that should be used when
     * generating random phrases.
     *
     * @param  string[]  $adjectives
     * @param  string[]  $nouns
     * @return void
     */
    public static function setWordLists(array $adjectives, array $nouns): void
    {
        Adjective::setWordList($adjectives);
        Noun::setWordList($nouns);
    }

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
