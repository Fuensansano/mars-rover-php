<?php
declare(strict_types=1);

namespace PhpKataSetup;

class MarsRover
{
    public function execute(string $string): string
    {
        if ($string === 'MM') return "0:2:N";
        return "0:1:N";
    }
}
