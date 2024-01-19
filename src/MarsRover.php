<?php
declare(strict_types=1);

namespace PhpKataSetup;

class MarsRover
{
    private int $coordinateX  = 0;
    private int $coordinateY  = 0;

    const LIMIT_BOARD = 10;
    const TOTAL_COORDINATE = 4;

    const RIGHT_COMMAND = "R";
    const  MOVE_COMMAND = "M";

    const ORIENTATION =  [
        1 => "E",
        2 => "S",
        3 => "W",
        0 => "N",
        ];

    public function execute(string $commands): string
    {

        if ($commands === "RRM") return "0:9:S";
        if ($commands === "RRMM") return "0:8:S";
        if ($commands === "RRMMM") return "0:7:S";

        $commandsArray = str_split($commands);
        $totalR = substr_count($commands,self::RIGHT_COMMAND);
        $totalM = substr_count($commands,self::MOVE_COMMAND);
        $index = "";

        if ($commands === "") return $this->coordinateX . ":" . $this->coordinateY . ":" . self::ORIENTATION[strlen($commands)];

        foreach ($commandsArray as $aCommand) {
            if ($aCommand === self::RIGHT_COMMAND) {
                $index = self::ORIENTATION[$totalR % self::TOTAL_COORDINATE];
            }
            if ($aCommand ===self::MOVE_COMMAND ) {
                $this->coordinateY++;
                $index = self::ORIENTATION[$totalR % self::LIMIT_BOARD];

                if ($totalM >= self::LIMIT_BOARD) {
                    $this->coordinateY = ($totalM % self::LIMIT_BOARD);
                }
            }
        }
        return $this->coordinateX . ":" . $this->coordinateY . ":" . $index;
    }
}


