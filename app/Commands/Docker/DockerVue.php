<?php

namespace App\Commands\Docker;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use LaravelZero\Framework\Commands\Command;

class DockerVue extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'docker:vue';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Generate default Docker files for a Vue.js application.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        File::copyDirectory(resource_path('vue-docker'), './');

        chmod('./develop', 777);

        $this->info('Docker files ready for your Vue.js application.');
        $this->notify("Docker files ready.", 'Docker files ready for your Vue.js application.');
    }
}
