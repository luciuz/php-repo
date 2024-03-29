<?php

declare(strict_types=1);

namespace Luciuz\PhpRepo;

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    /**
     * @covers Sample::getTrue
     */
    public function testSampleCanGetTrue(): void
    {
        $sample = new Sample();
        self::assertTrue($sample->getTrue());
    }

    /**
     * @covers Sample::getFalse
     */
    public function testSampleCanGetFalse(): void
    {
        $sample = new Sample();
        self::assertFalse($sample->getFalse());
    }
}
