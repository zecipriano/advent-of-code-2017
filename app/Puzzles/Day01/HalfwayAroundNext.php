<?php

namespace App\Puzzles\Day01;

class HalfwayAroundNext implements NextIndex
{
    private $stringSize;

    public function __construct(int $stringSize)
    {
        $this->stringSize = $stringSize;
    }

    public function nextIndex(int $currentIndex): int
    {
        return ($currentIndex + ($this->stringSize / 2)) % $this->stringSize;
    }
}