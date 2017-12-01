<?php

namespace Tests\Day01;

use App\Puzzles\Day01\Captcha;
use Tests\TestCase;

class CaptchaTest extends TestCase
{
    /**
     * @test
     * @dataProvider captchaNext
     * @param $string
     * @param $expected
     */
    public function it_returns_the_correct_sum_with_next_digit_match($string, $expected): void
    {
        $captcha = new Captcha($string);
        $this->assertEquals($expected, $captcha->resolveNext());
    }

    /**
     * @test
     * @dataProvider captchaHalfwayAround
     * @param $string
     * @param $expected
     */
    public function it_returns_the_correct_sum_with_halfway_around_digit_match($string, $expected): void
    {
        $captcha = new Captcha($string);
        $this->assertEquals($expected, $captcha->resolveHalfwayAround());
    }

    public function captchaNext()
    {
        return [
            ['1122', 3],
            ['1111', 4],
            ['1234', 0],
            ['91212129', 9],
        ];
    }

    public function captchaHalfwayAround()
    {
        return [
            ['1212', 6],
            ['1221', 0],
            ['123425', 4],
            ['123123', 12],
            ['12131415', 4],
        ];
    }
}
