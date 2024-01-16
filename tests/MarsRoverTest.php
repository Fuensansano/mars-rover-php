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

    public function commandM() {
        return [
            'given_a_M_command_then_rovers_should_be_in_0_1_N_position' =>  ["M","0:1:N"],
            'given_a_2_M_command_then_rovers_should_be_in_0_2_N_position' => ["MM","0:2:N"],
            'given_a_10_M_command_then_rovers_should_be_in_0_0_N_position' => ["MMMMMMMMMM","0:0:N"],
        ];
    }

    public function commandR() {
        return [
            'given_a_1_R_command_then_rovers_should_be_in_0_0_E_position' =>  ["R","0:0:E"],
            'given_a_2_R_command_then_rovers_should_be_in_0_0_S_position' =>  ["RR","0:0:S"],
            'given_a_3_R_command_then_rovers_should_be_in_0_0_W_position' =>  ["RRR","0:0:W"],
            'given_a_4_R_command_then_rovers_should_be_in_0_0_W_position' =>  ["RRRR","0:0:N"],
        ];
    }


    /** @test
     * @dataProvider commandM
     */
    public function M_command($command, $finalPosition): void
    {
        self::assertEquals($finalPosition, $this->marsRover->execute($command));
    }

    /** @test
     * @dataProvider commandR
     */
    public function R_command($command, $finalPosition): void
    {
        self::assertEquals($finalPosition, $this->marsRover->execute($command));
    }

    /** @test */
    public function given_any_command_then_rovers_should_be_in_0_0_N_position(): void
    {
        self::assertEquals("0:0:N", $this->marsRover->execute(""));
    }

}
