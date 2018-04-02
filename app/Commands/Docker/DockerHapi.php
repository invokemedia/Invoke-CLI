<?php

namespace App\Commands\Docker;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use LaravelZero\Framework\Commands\Command;

class DockerHapi extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'docker:hapi';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Generate default Docker files for a Hapi application.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        File::copyDirectory(resource_path('hapi-docker'), './');

        chmod('./develop', 777);

        $this->info('Docker files ready for your Hapi application.');
        $this->notify("Docker files ready.", 'Docker files ready for your Hapi application.');
    }
}
