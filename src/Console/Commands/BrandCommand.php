<?php

namespace Ossqo\Collector\Console\Commands;

use Illuminate\Console\Command;

class BrandCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'collector:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $ask = $this->ask('Начать установку?');
        dd($ask);
    }
}
