<?php

namespace ISeekplant\Ui;

use Illuminate\Console\Command;

class UiCommand extends Command
{
    protected $signature = 'iseekplant:bootstrap-ui';

    protected $description = 'Front-end scaffolding for the application';

    public function handle()
    {
        Presets\React::install();
        $this->info('React scaffolding installed successfully.');
        $this->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
    }
}
