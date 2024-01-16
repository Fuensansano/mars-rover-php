<?php
declare(strict_types=1);

namespace PhpKataSetup;

class MarsRover
{
        public int $coordinateX = 0;
        public int $coordinateY = 0;
        public int $limitBoard = 10;
    public function execute(string $string): string
    {
        $orientation =  [
            1 => "E",
            2 => "S",
            3 => "W",
            0 => "N",
        ];

        if (substr_count($string, "R"))  return $this->coordinateX . ":" . $this->coordinateY . ":" . $orientation[strlen($string) % 4];

        return $this->coordinateX . ":" . (strlen($string) % $this->limitBoard) . ":" . "N";
    }
}
