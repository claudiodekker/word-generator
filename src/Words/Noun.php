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
        'bird', 'breeze', 'brook', 'bush', 'butterfly', 'cherry', 'cloud', 'darkness',
        'dawn', 'dew', 'dream', 'dust', 'feather', 'field', 'fire', 'firefly', 'flower',
        'fog', 'forest', 'frog', 'frost', 'galaxy', 'glade', 'glitter', 'grass', 'haze',
        'hill', 'lake', 'leaf', 'light', 'meadow', 'moon', 'morning', 'mountain', 'night',
        'oasis', 'paper', 'pine', 'pond', 'rain', 'resonance', 'river', 'sea', 'sea',
        'shadow', 'shadow', 'shape', 'silence', 'sky', 'smoke', 'snow', 'snowflake',
        'sound', 'spark', 'star', 'sun', 'sunset', 'surf', 'thunder', 'tree', 'violet',
        'voice', 'water', 'waterfall', 'wave', 'wildflower', 'willow', 'wind', 'wood',
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

    /**
     * Set the possible nouns that can be returned.
     *
     * @param string[] $nouns
     * @return void
     */
    public static function setWordList(array $nouns): void
    {
        self::$nouns = $nouns;
    }
}
