<?php

namespace ClaudioDekker\WordGenerator\Words;

class Adjective
{
    /**
     * The default list of adjectives.
     *
     * @var string[]
     */
    protected const DEFAULT_ADJECTIVES = [
        'aged', 'amber', 'ancient', 'autumn', 'azure', 'beaming', 'billowing', 'bitter',
        'blazing', 'bleak', 'blended', 'blue', 'blushing', 'bright', 'brisk', 'bronze',
        'bubbling', 'calm', 'cautious', 'celestial', 'cerulean', 'charming', 'clear', 'cloudy',
        'cobalt', 'cold', 'cool', 'cozy', 'crimson', 'crinkled', 'crisp', 'curved',
        'damp', 'dancing', 'dawn', 'dazzling', 'deciduous', 'delicate', 'dewy', 'distant',
        'divine', 'dotted', 'dreamy', 'drifting', 'dry', 'dusty', 'eager', 'earthen',
        'earthy', 'echoing', 'elusive', 'emerald', 'empty', 'enchanting', 'endless', 'ethereal',
        'evening', 'exquisite', 'fading', 'faint', 'fair', 'faithful', 'falling', 'familiar',
        'feathery', 'fierce', 'flickering', 'floral', 'flowing', 'fluffy', 'fluttering', 'fragrant',
        'frosted', 'frosty', 'frozen', 'gentle', 'glassy', 'glistening', 'glowing', 'golden',
        'graceful', 'grateful', 'green', 'gusty', 'harmonious', 'hazy', 'heavenly', 'humble',
        'icy', 'illuminated', 'indigo', 'infinite', 'inky', 'invigorating', 'inviting', 'jade',
        'jovial', 'joyful', 'late', 'lively', 'long', 'luminous', 'lush', 'magnetic',
        'majestic', 'marbled', 'mellow', 'melodic', 'midnight', 'mild', 'misty', 'modest',
        'moonlit', 'morning', 'muddy', 'murmuring', 'muted', 'mysterious', 'mystical', 'nameless',
        'natural', 'nautical', 'nebulous', 'nocturnal', 'pastel', 'patient', 'peaceful', 'pearly',
        'pensive', 'perceptive', 'plush', 'polished', 'pristine', 'proud', 'purple', 'quaint',
        'quiet', 'quivering', 'radiant', 'red', 'reflective', 'reserved', 'resilient', 'restless',
        'reverent', 'rhythmic', 'rippled', 'roaring', 'rosy', 'ruby', 'ruffled', 'sable',
        'satin', 'scenic', 'serene', 'shaded', 'shimmering', 'silent', 'silver', 'silvery',
        'sleek', 'slumbering', 'small', 'snowy', 'solitary', 'solstice', 'soothing', 'sparkling',
        'spongy', 'spring', 'starlit', 'stellar', 'still', 'stormy', 'strong', 'sultry',
        'summer', 'sunny', 'swaying', 'temperate', 'tender', 'tranquil', 'twilight', 'twinkling',
        'undulating', 'valiant', 'velvety', 'verdant', 'vibrant', 'vivid', 'wavy', 'weathered',
        'whimsical', 'whispered', 'windy', 'winter', 'wispy', 'woven', 'yawning', 'zealous',
    ];

    /**
     * The currently configured adjectives.
     *
     * @var string[]
     */
    protected static $adjectives = [];

    /**
     * Get a random adjective.
     */
    public static function random(): string
    {
        if (empty(self::$adjectives)) {
            self::setWordList(self::DEFAULT_ADJECTIVES);
        }

        return self::$adjectives[array_rand(self::$adjectives)];
    }

    /**
     * Set the possible adjectives that can be returned.
     *
     * @param  string[]  $adjectives
     */
    public static function setWordList(array $adjectives = []): void
    {
        self::$adjectives = $adjectives;
    }
}
