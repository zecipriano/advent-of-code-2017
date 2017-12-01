<?php

namespace App\Puzzles\Day01;

class SimpleNext implements NextIndex
{
    private $stringSize;

    public function __construct(int $stringSize)
    {
        $this->stringSize = $stringSize;
    }

    public function nextIndex(int $currentIndex): int
    {
        return ($currentIndex + 1) % $this->stringSize;
    }
}