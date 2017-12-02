<?php

namespace App\Commands;

use App\Puzzles\Day02\Spreadsheet;
use App\Utils\FileReader;
use LaravelZero\Framework\Commands\Command;

class Day02 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'days:day02 {inputFile}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run day 02 puzzles.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        try {
            $file = (new FileReader($this->argument('inputFile')))->getArrayOfLines();
            $spreadsheetValues = $this->convertToInts($file);

            $spreadsheet = new Spreadsheet($spreadsheetValues);
            $checksum = $spreadsheet->checksum();

            $this->info("The first puzzle answer is $checksum.");
        } catch (\RuntimeException $e) {
            $this->error('File not found or not readable.');
        }
    }

    /**
     * Convert each line to an array of ints.
     *
     * @param $file
     * @return array
     */
    private function convertToInts(array $file): array
    {
        $spreadsheetValues = [];

        foreach ($file as $line) {
            $values = preg_split('/\s+/', $line);
            $values = array_map(function ($value) {
                return (int)$value;
            }, $values);

            $spreadsheetValues[] = $values;
        }
        return $spreadsheetValues;
    }
}
