<?php
declare(strict_types=1);

namespace Tests;

use PhpKataSetup\ChangeMe;
use PHPUnit\Framework\TestCase;

class ChangeMeTest extends TestCase
{
    public function test_change_me(): void
    {
        $changeMe = new ChangeMe();

        self::assertTrue($changeMe->change());
    }
}
