<?php

namespace ClaudioDekker\WordGenerator\Words;

class Adjective
{
    /**
     * A list of adjectives.
     *
     * @var string[]
     */
    protected static $adjectives = [
        'autumn', 'hidden', 'bitter', 'misty', 'silent', 'empty', 'dry', 'dark',
        'summer', 'icy', 'delicate', 'quiet', 'hollow', 'cool', 'spring', 'winter',
        'patient', 'twilight', 'dawn', 'crimson', 'wispy', 'weathered', 'blue',
        'billowing', 'broken', 'cold', 'damp', 'falling', 'frosty', 'green',
        'long', 'late', 'lingering', 'bold', 'little', 'morning', 'muddy',
        'old', 'red', 'rough', 'still', 'small', 'sparkling', 'resilient',
        'shy', 'wandering', 'withered', 'wild', 'indigo', 'young', 'holy',
        'solitary', 'fragrant', 'aged', 'snowy', 'proud', 'floral', 'restless',
        'divine', 'polished', 'ancient', 'purple', 'lively', 'nameless',
    ];

    /**
     * Get a random adjective.
     *
     * @return string
     */
    public static function random(): string
    {
        return self::$adjectives[array_rand(self::$adjectives)];
    }
}
