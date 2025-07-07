<?php

namespace SmartCms\Forms\Commands;

use Illuminate\Console\Command;

class FormsCommand extends Command
{
    public $signature = 'forms';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
