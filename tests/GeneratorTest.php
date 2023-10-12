<?php

namespace ClaudioDekker\WordGenerator\Tests;

use ClaudioDekker\WordGenerator\Generator;
use LengthException;
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
        Generator::setWordLists(['foo'], ['bar']);

        $this->assertSame('foo bar', Generator::generate());
    }

    /** @test */
    public function it_can_reset_the_custom_word_lists(): void
    {
        Generator::setWordLists(['foo'], ['bar']);

        Generator::reset();

        $this->assertNotSame('foo bar', Generator::generate());
    }

    /** @test  */
    public function it_can_generate_words_of_varying_length(): void
    {
        $this->assertCount(2, \explode(' ', Generator::generate(' ')));
        $this->assertCount(3, \explode(' ', Generator::generate(' ', 3)));
        $this->assertCount(4, \explode(' ', Generator::generate(' ', 4)));
        $this->assertCount(5, \explode(' ', Generator::generate(' ', 5)));
        $this->assertCount(6, \explode(' ', Generator::generate(' ', 6)));
    }

    /** @test  */
    public function it_throws_an_error_on_invalid_length(): void
    {
        $this->expectException(LengthException::class);

        Generator::generate(' ', 1);
    }
}
