<?php

namespace ClaudioDekker\WordGenerator;

use ClaudioDekker\WordGenerator\Words\Adjective;
use ClaudioDekker\WordGenerator\Words\Noun;
use LengthException;

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
     * @param string $separator
     * @param int $length
     * @return string
     */
    public static function generate(string $separator = ' ', int $length = 2): string
    {
        if ($length < 2) {
            throw new LengthException('Minimum length is 2');
        }

        $word = '';
        for ($i = 0; $i < $length - 1; $i++) {
            $word .= Adjective::random().$separator;
        }

        return $word.Noun::random();
    }
}
