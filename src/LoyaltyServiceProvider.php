<?php

namespace ElvinQulizade\Loyalty;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LoyaltyServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-loyalty';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->publishMigrations()
                    ->askToRunMigrations()
                    ->askToStarRepoOnGitHub('elvin-qulizade/filament-loyalty');
            });
    }

    public function packageBooted(): void {}
}
