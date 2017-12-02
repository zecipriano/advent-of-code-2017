<?php

namespace Tests\Day02;

use Tests\TestCase;
use App\Puzzles\Day02\Spreadsheet;

class SpreadsheetTest extends TestCase
{
    /** @test */
    public function it_calculates_the_spreadsheet_checksum()
    {
        $spreadsheetValues = [
            [5, 1, 9, 5],
            [7, 5, 3],
            [2, 4, 6, 8]
        ];

        $spreadsheet = new Spreadsheet($spreadsheetValues);

        $this->assertEquals(18, $spreadsheet->checksum());
    }

    /** @test */
    public function it_calculates_the_division_checksum()
    {
        $spreadsheetValues = [
            [5, 9, 2, 8],
            [9, 4, 7, 3],
            [3, 8, 6, 5]
        ];

        $spreadsheet = new Spreadsheet($spreadsheetValues);

        $this->assertEquals(9, $spreadsheet->divisionChecksum());
    }
}
