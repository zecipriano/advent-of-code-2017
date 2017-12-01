<?php

namespace App\Commands\Day01;

use App\Puzzles\Day01\Captcha;
use App\Utils\FileReader;
use LaravelZero\Framework\Commands\Command;

class Puzzle01 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'days:d01p01 {inputFile}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run puzzle 01 of day 01.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(): void
    {
        try {
            $string = (new FileReader($this->argument('inputFile')))->getString();
            $sum = (new Captcha($string))->resolve();

            $this->info("The puzzle answer is $sum.");
        } catch (\RuntimeException $e) {
            $this->error('File not found or not readable.');
        }
    }
}
