<?php

namespace App\Puzzles\Day01;

interface NextIndex
{
    public function __construct(int $stringSize);

    public function nextIndex(int $currentIndex);
}