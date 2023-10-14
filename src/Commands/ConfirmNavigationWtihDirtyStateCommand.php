<?php

namespace JSn1nj4\ConfirmNavigationWtihDirtyState\Commands;

use Illuminate\Console\Command;

class ConfirmNavigationWtihDirtyStateCommand extends Command
{
    public $signature = 'filament-confirm-nav-with-dirty-state';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
