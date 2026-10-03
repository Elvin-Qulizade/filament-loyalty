<?php

namespace ElvinQulizade\Loyalty;

use ElvinQulizade\Loyalty\Support\LoyaltyRuleRegistrar;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LoyaltyServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-loyalty';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasConfigFile()
            ->hasMigrations($this->getMigrations())
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->publishMigrations()
                    ->askToRunMigrations()
                    ->askToStarRepoOnGitHub('elvin-qulizade/filament-loyalty');
            });
    }

    public function packageBooted(): void
    {
        LoyaltyRuleRegistrar::boot();
    }

    /**
     * @return array<string>
     */
    protected function getMigrations(): array
    {
        return [
            'create_loyalty_transactions_table',
            'create_loyalty_rewards_table',
        ];
    }
}
