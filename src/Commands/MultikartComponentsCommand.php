<?php

namespace Upgrade\MultikartComponents\Commands;

use Illuminate\Console\Command;

class MultikartComponentsCommand extends Command
{
    public $signature = 'multikart-components';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
