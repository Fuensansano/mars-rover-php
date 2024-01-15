<?php
declare(strict_types=1);

namespace Tests;

use PhpKataSetup\MarsRover;
use PHPUnit\Framework\TestCase;

class MarsRoverTest extends TestCase
{
    /** @test */
    public function given_a_M_command_then_rovers_should_be_in_0_1_N_position(): void
    {
        $marsRover = new MarsRover();

        $marsRover->execute("M");

        self::assertEquals($marsRover->execute("M"), "0:1:N");
    }
}
