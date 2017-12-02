<?php

namespace App\Puzzles\Day02;

class Values
{
    private $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function evenlyDivisionNumbers(): array
    {
        foreach ($this->array as $dividendIndex => $dividend) {
            foreach ($this->array as $divisorIndex => $divisor) {
                if ($dividend % $divisor === 0 && $dividendIndex !== $divisorIndex) {
                    return [$dividend, $divisor];
                }
            }
        }

        return [-1, -1];
    }

    public function divisionResult(): int
    {
        $numbers = $this->evenlyDivisionNumbers();
        return $numbers[0] / $numbers[1];
    }
}
