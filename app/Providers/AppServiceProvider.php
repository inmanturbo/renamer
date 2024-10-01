<?php

namespace Inmanturbo\Renamer\Providers;

use Illuminate\Support\ServiceProvider;
use Inmanturbo\Renamer\Console\Commands\RenameCommand;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                RenameCommand::class,
            ]);
        }
    }
}
