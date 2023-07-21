<?php

namespace ClaudioDekker\WordGenerator;

use ClaudioDekker\WordGenerator\Words\Adjective;
use ClaudioDekker\WordGenerator\Words\Noun;

class Generator
{
    /**
     * Reset the adjectives and nouns to their original word lists.
     */
    public static function reset(): void
    {
        Adjective::setWordList();
        Noun::setWordList();
    }

    /**
     * Override the adjectives and nouns that should be used when
     * generating random phrases.
     *
     * @param  string[]  $adjectives
     * @param  string[]  $nouns
     */
    public static function setWordLists(array $adjectives, array $nouns): void
    {
        Adjective::setWordList($adjectives);
        Noun::setWordList($nouns);
    }

    /**
     * Generate a random phrase.
     */
    public static function generate(string $separator = ' '): string
    {
        return Adjective::random().$separator.Noun::random();
    }
}
