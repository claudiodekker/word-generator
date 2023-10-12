<?php

namespace ClaudioDekker\WordGenerator\Words;

class Noun
{
    /**
     * The default list of nouns.
     *
     * @var string[]
     */
    protected const DEFAULT_NOUNS = [
        'acorn','algae','alpenglow','apex','arc','aurora','balloon','beacon',
        'beam','bird','bloom','blush','bough','boulder','bramble','breeze',
        'brook','butterfly','candle','canopy','canyon','cascade','cinder','cliff',
        'cloud','constellation','cove','creek','crest','cricket','crystal','dandelion',
        'dapple','dawn','dell','dew','dewdrop','dream','drizzle','dust',
        'eagle','ember','estuary','expanse','fawn','feather','fern','field',
        'fire','firefly','flame','flare','flower','fluff','foam','fog',
        'forest','fox','fragment','frog','frost','galaxy','glade','glen',
        'glimmer','glitter','glow','grass','grove','hail','harbor','haven',
        'haze','hearth','hedge','hill','horizon','hummingbird','isle','jewel',
        'jungle','lagoon','lake','landmark','lantern','lark','leaf','lichen',
        'light','lily','lotus','lullaby','marble','marsh','meadow','meander',
        'mirage','moon','morning','moss','mountain','murmur','nebula','nest',
        'night','oak','oasis','ocean','orchard','orchid','palm','panorama',
        'paper','peak','pebble','penguin','penumbra','petal','pine','plateau',
        'pond','prairie','rain','ravine','reef','resonance','ridge','rift',
        'ripple','river','rosette','sanctuary','sand','sapphire','savanna','sea',
        'seashell','sediment','shade','shape','shard','shelter','shimmer','silence',
        'sky','snow','snowflake','solace','songbird','sound','spark','spindle',
        'spire','splash','spray','sprig','sprout','squirrel','star','stone',
        'strand','stream','summit','sun','sunset','surf','swirl','thunder',
        'tide','trail','tree','tundra','twig','umbra','vale','valley',
        'vapor','veil','violet','vista','voice','vortex','water','waterfall',
        'wave','wildflower','willow','wind','wisp','wood','zenith','zest',
    ];

    /**
     * The currently configured nouns.
     *
     * @var string[]
     */
    protected static $nouns = [];

    /**
     * Get a random noun.
     */
    public static function random(): string
    {
        if (empty(self::$nouns)) {
            self::setWordList(self::DEFAULT_NOUNS);
        }

        return self::$nouns[array_rand(self::$nouns)];
    }

    /**
     * Set the possible nouns that can be returned.
     *
     * @param  string[]  $nouns
     */
    public static function setWordList(array $nouns = []): void
    {
        self::$nouns = $nouns;
    }
}
