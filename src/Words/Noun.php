<?php

namespace ClaudioDekker\WordGenerator\Words;

class Noun
{
    /**
     * A list of nouns.
     *
     * @var string[]
     */
    protected static $nouns = [
        'waterfall', 'river', 'breeze', 'moon', 'rain', 'wind', 'sea', 'morning',
        'snow', 'lake', 'sunset', 'pine', 'shadow', 'leaf', 'dawn', 'glitter',
        'forest', 'hill', 'cloud', 'meadow', 'sun', 'glade', 'bird', 'brook',
        'butterfly', 'bush', 'dew', 'dust', 'field', 'fire', 'flower', 'firefly',
        'feather', 'grass', 'haze', 'mountain', 'night', 'pond', 'darkness',
        'snowflake', 'silence', 'sound', 'sky', 'shape', 'surf', 'thunder',
        'violet', 'water', 'wildflower', 'wave', 'water', 'resonance', 'sun',
        'wood', 'dream', 'cherry', 'tree', 'fog', 'frost', 'voice', 'paper',
        'frog', 'smoke', 'star', 'spark', 'grass', 'sun', 'moon', 'light',
    ];

    /**
     * Get a random noun.
     *
     * @return string
     */
    public static function random(): string
    {
        return self::$nouns[array_rand(self::$nouns)];
    }
}
