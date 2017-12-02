<?php

namespace App\Puzzles\Day02;

class Spreadsheet
{
    private $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function checksum(): int
    {
        $checksum = 0;

        foreach ($this->array as $line) {
            $checksum += max($line) - min($line);
        }

        return $checksum;
    }
}
