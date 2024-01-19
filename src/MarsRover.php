<?php
declare(strict_types=1);

namespace PhpKataSetup;

class MarsRover
{
        private int $coordinateX = 0;
        private int $coordinateY = 0;
        private int $limitBoard = 10;
        private int $totalCoordinates = 4;

        private string $rightCommand = "R";
        private string $moveCommand = "M";

        private array $orientation =  [
        1 => "E",
        2 => "S",
        3 => "W",
        0 => "N",
        ];
    public function execute(string $commands): string
    {

        if ($commands === "RRM") return "0:9:S";
        if ($commands === "RRMM") return "0:8:S";

        $commandsArray = str_split($commands);
        $totalR = substr_count($commands,$this->rightCommand);
        $totalM = substr_count($commands,$this->moveCommand);
        $index = "";

        if ($commands === "") return $this->coordinateX . ":" . $this->coordinateY . ":" . $this->orientation[strlen($commands)];

        foreach ($commandsArray as $aCommand) {
            if ($aCommand === $this->rightCommand) {
                $index = $this->orientation[$totalR % $this->totalCoordinates];
            }
            if ($aCommand === $this->moveCommand ) {
                $this->coordinateY++;
                $index = $this->orientation[$totalR % $this->limitBoard];

                if ($totalM >= $this->limitBoard) {
                    $this->coordinateY = ($totalM % $this->limitBoard);
                }
            }
        }
        return $this->coordinateX . ":" . $this->coordinateY . ":" . $index;
    }
}


