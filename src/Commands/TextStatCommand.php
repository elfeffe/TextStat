<?php

namespace Elfeffe\TextStat\Commands;

use Illuminate\Console\Command;

class TextStatCommand extends Command
{
    public $signature = 'textstat';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
