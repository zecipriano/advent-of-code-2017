<?php

namespace App\Puzzles\Day01;

class Captcha
{
    protected $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function resolveNext(): int
    {
        $next = new SimpleNext(\strlen($this->string));
        return $this->resolve($next);
    }

    public function resolveHalfwayAround(): int
    {
        $next = new HalfwayAroundNext(\strlen($this->string));
        return $this->resolve($next);
    }

    private function resolve(NextIndex $next): int
    {
        $sum = 0;
        $stringArray = str_split($this->string);

        foreach ($stringArray as $index => $char) {
            $nextIndex = $next->nextIndex($index);

            if ($char === $stringArray[$nextIndex]) {
                $sum += (int)$char;
            }
        }

        return $sum;
    }
}
