<?php
declare(strict_types=1);

namespace PhpKataSetup;

class MarsRover
{
        public int $coordinate_x = 0;
        public int $coordinate_y = 0;
    public function execute(string $string): string
    {


        if (strlen($string) >= 10) return $this->coordinate_x . ":" . $this->coordinate_y . ":" . "N";

        for ($i = 0; $i < strlen($string); $i++) {
           $this->coordinate_y += 1;
        }

        return $this->coordinate_x . ":" . $this->coordinate_y . ":" . "N";

    }
}
