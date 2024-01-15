<?php
declare(strict_types=1);

namespace Tests;

use PhpKataSetup\MarsRover;
use PHPUnit\Framework\TestCase;

class MarsRoverTest extends TestCase
{
    private $marsRover;

    public function setUp(): void
    {
        $this->marsRover = new MarsRover();
    }


    /** @test */
    public function given_a_M_command_then_rovers_should_be_in_0_1_N_position(): void
    {
        self::assertEquals("0:1:N", $this->marsRover->execute("M"));
    }

    /** @test */
    public function given_a_MM_command_then_rovers_should_be_in_0_1_N_position(): void
    {
        self::assertEquals("0:2:N", $this->marsRover->execute("MM"));
    }

    /** @test */
    public function given_a_10_M_command_then_rovers_should_be_in_0_0_N_position(): void
    {
        self::assertEquals("0:0:N", $this->marsRover->execute("MMMMMMMMMM"));
    }
}
