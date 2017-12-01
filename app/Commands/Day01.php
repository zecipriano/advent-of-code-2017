<?php

namespace App\Commands;

use App\Puzzles\Day01\Captcha;
use App\Utils\FileReader;
use LaravelZero\Framework\Commands\Command;

class Day01 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'days:day01 {inputFile}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run day 01 puzzles.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        try {
            $string = (new FileReader($this->argument('inputFile')))->getString();

            $captcha = new Captcha($string);

            $firstPuzzleAnswer = $captcha->resolveNext();
            $secondPuzzleAnswer = $captcha->resolveHalfwayAround();

            $this->info("The first puzzle answer is $firstPuzzleAnswer.");
            $this->info("The second puzzle answer is $secondPuzzleAnswer.");
        } catch (\RuntimeException $e) {
            $this->error('File not found or not readable.');
        }
    }
}
