<?php

namespace Tests\Day01;

use App\Puzzles\Day01\Captcha;
use Tests\TestCase;

class CaptchaTest extends TestCase
{
    /**
     * @test
     * @dataProvider captchaProvider
     * @param $string
     * @param $expected
     */
    public function it_returns_the_correct_sum($string, $expected): void
    {
        $captcha = new Captcha($string);
        $this->assertEquals($expected, $captcha->resolve());
    }

    public function captchaProvider()
    {
        return [
            ['1122', 3],
            ['1111', 4],
            ['1234', 0],
            ['91212129', 9],
        ];
    }
}
