<?php

declare(strict_types=1);

namespace StdGroup\LaravelGenerator;

use PHPUnit\Framework\TestCase;

class SkeletonTest extends TestCase
{
    public function testEchoPhraseReturnPhrase()
    {
        $skeleton = new Skeleton;
        $phrase = 'Hello World';

        $this->assertEquals($phrase, $skeleton->echoPhrase($phrase));
    }
}
