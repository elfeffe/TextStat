<?php

namespace Elfeffe\TextStat;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Elfeffe\TextStat\Commands\TextStatCommand;

class TextStatServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('textstat')
            ->hasConfigFile()
            ->hasCommand(TextStatCommand::class);
    }
}
