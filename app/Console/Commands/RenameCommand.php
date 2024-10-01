<?php

namespace Inmanturbo\Renamer\Console\Commands;

use Illuminate\Console\Command;
use Inmanturbo\Renamer\Rename;
use Inmanturbo\Renamer\RenameCommandHandler;

class RenameCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rename-app {app-path?} {--from-vendor-namespace=} {--to-vendor-namespace=} {--from-app-namespace=} {--to-app-namespace=} {--name=}';

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
        app(RenameCommandHandler::class)(new Rename(
            $this->argument('app-path'),
            $this->option('from-app-namespace'),
            $this->option('to-app-namespace'),
            $this->option('from-vendor-namespace'),
            $this->option('to-vendor-namespace'),
            $this->option('name'),
        ));
    }
}
