<?php

namespace Tests\Day02;

use Tests\TestCase;
use App\Puzzles\Day02\Values;

class ValuesTest extends TestCase
{
    /**
     * @test
     * @dataProvider numbers
     * @param $array
     * @param $expectedDivisors
     * @param $expectedResult
     */
    public function it_identifies_the_two_numbers_where_one_evenly_divides_the_other(
        $array,
        $expectedDivisors,
        $expectedResult
    ) {
        $values = new Values($array);
        $this->assertEquals($expectedDivisors, $values->evenlyDivisionNumbers());
        $this->assertEquals($expectedResult, $values->divisionResult());
    }

    public function numbers()
    {
        return [
            [[5, 9, 2, 8], [8, 2], 4],
            [[9, 4, 7, 3], [9, 3], 3],
            [[3, 8, 6, 5], [6, 3], 2],
        ];
    }
}
