<?php

namespace ClaudioDekker\WordGenerator;

use ClaudioDekker\WordGenerator\Words\Adjective;
use ClaudioDekker\WordGenerator\Words\Noun;

class Generator
{
    /**
     * @return void
     */
    public static function init(): void
    {
        Adjective::setWordList([]);
        Noun::setWordList([]);
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
     *
     * @param string $separator
     * @param int $adjectives
     * @return string
     */
    public static function generate(string $separator = ' ', int $adjectives = 1): string
    {
        $generatedString = '';

        if($adjectives > 10) {
            $adjectives = 10;
        }

        for($i=0; $i<$adjectives; $i++) {
            if($i !== 0) {
                $generatedString .= $separator;
            }

            $generatedString .= Adjective::random();
        }

        return $generatedString.$separator.Noun::random();
    }
}
