<?php

namespace ElvinQulizade\Loyalty\Tests;

use ElvinQulizade\Loyalty\LoyaltyServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Orchestra\Testbench\Concerns\WithWorkbench;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    use LazilyRefreshDatabase;
    use WithWorkbench;

    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'ElvinQulizade\\Loyalty\\Database\\Factories\\' . class_basename($modelName) . 'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LoyaltyServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app): void
    {
        $app['config']->set('database.default', 'testing');
        $app['config']->set('app.key', 'base64:' . base64_encode(str_repeat('x', 32)));
    }

    protected function defineDatabaseMigrations(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/Fixtures/migrations');

        $tempMigrationsDir = sys_get_temp_dir() . '/filament-loyalty-test-migrations';

        if (! is_dir($tempMigrationsDir)) {
            mkdir($tempMigrationsDir, 0777, true);
        }

        foreach (glob(__DIR__ . '/../database/migrations/*.php.stub') ?: [] as $stub) {
            $target = $tempMigrationsDir . '/' . basename($stub, '.stub');

            if (! is_file($target)) {
                copy($stub, $target);
            }
        }

        $this->loadMigrationsFrom($tempMigrationsDir);
    }
}
