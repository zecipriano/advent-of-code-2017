<?php

namespace App\Puzzles\Day01;

class Captcha
{
    protected $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function resolve(): int
    {
        $sum = 0;
        $stringArray = str_split($this->string);
        $lastIndex = \count($stringArray) - 1;

        foreach ($stringArray as $index => $char) {
            $nextChar = $stringArray[0];

            if ($index < $lastIndex) {
                $nextChar = $stringArray[$index + 1];
            }

            if ($char === $nextChar) {
                $sum += (int)$char;
            }
        }

        return $sum;
    }
}
