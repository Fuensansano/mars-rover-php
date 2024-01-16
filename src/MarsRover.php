<?php
declare(strict_types=1);

namespace PhpKataSetup;

class MarsRover
{
        public int $coordinateX = 0;
        public int $coordinateY = 0;
        public int $limitBoard = 10;
        public int $totalCoordinates = 4;

        public array $orientation =  [
        1 => "E",
        2 => "S",
        3 => "W",
        0 => "N",
        ];
    public function execute(string $string): string
    {


//        if ($string === "RRM") return "0:9:S";
//        if ($string === "RM") return "0:1:E";
//        if ($string === "RMM") return "0:2:E";


        $commands = str_split($string);

        $index = "N";

        foreach ($commands as $command) {
            if ($command === "R") {
                $index = $this->orientation[substr_count($string,'R') % $this->totalCoordinates];
            }
            if ($command === "M" ) {
                $this->coordinateY++;

                if (substr_count($string,'M') >= 10) {
                    $this->coordinateY = (strlen($string) % $this->limitBoard);
                }
            }
        }
        return $this->coordinateX . ":" . $this->coordinateY . ":" . $index;

//        if (substr_count($string, "R"))  return $this->coordinateX . ":" . $this->coordinateY . ":" . $this->orientation[strlen($string) % $this->totalCoordinates];
//
//        return $this->coordinateX . ":" . (strlen($string) % $this->limitBoard) . ":" . "N";
    }
}


