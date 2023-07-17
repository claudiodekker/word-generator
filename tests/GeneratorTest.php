<?php

namespace ClaudioDekker\WordGenerator\Tests;

use ClaudioDekker\WordGenerator\Generator;
use PHPUnit\Framework\TestCase;

class GeneratorTest extends TestCase
{
    /** @test */
    public function it_accepts_a_custom_separator(): void
    {
        $wordA = Generator::generate('-');
        $wordB = Generator::generate('%');

        $partsA = explode('-', $wordA);
        $this->assertCount(2, $partsA);
        $this->assertNotNull($partsA[0]);
        $this->assertNotNull($partsA[1]);

        $partsB = explode('%', $wordB);
        $this->assertCount(2, $partsB);
        $this->assertNotNull($partsB[0]);
        $this->assertNotNull($partsB[1]);

        $this->assertCount(1, explode('%', $wordA));
        $this->assertCount(1, explode('-', $wordB));
    }

    /** @test */
    public function it_separates_using_a_space_by_default(): void
    {
        $word = Generator::generate();

        $parts = explode(' ', $word);
        $this->assertCount(2, $parts);
        $this->assertNotNull($parts[0]);
        $this->assertNotNull($parts[1]);
    }

    /** @test */
    public function it_generates_a_different_combination_each_time(): void
    {
        $wordA = Generator::generate();
        $wordB = Generator::generate();

        $this->assertNotSame($wordA, $wordB);
    }

    /** @test */
    public function it_can_use_custom_word_lists(): void
    {
        $adjectives = ['foo'];
        $nouns = ['bar'];

        Generator::setWordLists($adjectives, $nouns);

        $this->assertSame('foo bar', Generator::generate());
    }

    /** @test */
    public function it_can_be_reinitialized(): void
    {
        Generator::setWordLists(['foo'], ['bar']);
        Generator::init();

        $this->assertNotSame('foo bar', Generator::generate());
    }

    /** @test */
    public function it_can_use_multiple_adjectives(): void
    {
        Generator::init();

        $stringA = Generator::generate('-', 3);
        $parts = explode('-', $stringA);

        $isStringValid = true;

        foreach($parts as $part) {
            $isStringValid = strlen($part) > 0;
        }

        $this->assertEquals(3, substr_count($stringA, '-'));
        $this->assertTrue($isStringValid);
    }

    /** @test */
    public function it_can_use_a_max_of_10_adjectives(): void
    {
        Generator::init();

        $stringA = Generator::generate('-', 12);
        $parts = explode('-', $stringA);

        $isStringValid = true;

        foreach($parts as $part) {
            $isStringValid = strlen($part) > 0;
        }

        $this->assertEquals(10, substr_count($stringA, '-'));
        $this->assertCount(11, $parts);
    }
}
