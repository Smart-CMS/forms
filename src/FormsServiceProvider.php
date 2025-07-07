<?php

namespace SmartCms\Forms;

use Livewire\Features\SupportTesting\Testable;
use Livewire\Livewire;
use SmartCms\Forms\Components\FormComponent;
use SmartCms\Forms\Testing\TestsForms;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FormsServiceProvider extends PackageServiceProvider
{
    public static string $name = 'forms';

    public static string $viewNamespace = 'forms';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasConfigFile()
            ->hasMigration('create_forms_table')
            ->hasTranslations()
            ->hasViews('forms')
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->publishMigrations()
                    ->askToRunMigrations()
                    ->askToStarRepoOnGitHub('smartcms/forms');
            });
    }

    public function packageRegistered(): void
    {
        Livewire::component('form', FormComponent::class);
    }

    public function packageBooted(): void
    {
        Testable::mixin(new TestsForms);
    }
}
