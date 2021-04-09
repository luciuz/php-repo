<?php

declare(strict_types=1);

namespace Luciuz\PhpRepo;

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    /**
     * @covers Sample
     */
    public function testSampleCanGetTrue(): void
    {
        $sample = new Sample();
        self::assertTrue($sample->getTrue());
    }
}
