<?php

namespace JSn1nj4\ConfirmNavigationWtihDirtyState;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentIcon;
use Illuminate\Filesystem\Filesystem;
use Livewire\Features\SupportTesting\Testable;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use JSn1nj4\ConfirmNavigationWtihDirtyState\Commands\ConfirmNavigationWtihDirtyStateCommand;
use JSn1nj4\ConfirmNavigationWtihDirtyState\Testing\TestsConfirmNavigationWtihDirtyState;

class ConfirmNavigationWtihDirtyStateServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-confirm-nav-with-dirty-state';

    public static string $viewNamespace = 'filament-confirm-nav-with-dirty-state';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name(static::$name)
            ->hasCommands($this->getCommands())
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->publishMigrations()
                    ->askToRunMigrations()
                    ->askToStarRepoOnGitHub('jsn1nj4/filament-confirm-nav-with-dirty-state');
            });

        $configFileName = $package->shortName();

        if (file_exists($package->basePath("/../config/{$configFileName}.php"))) {
            $package->hasConfigFile();
        }

        if (file_exists($package->basePath('/../database/migrations'))) {
            $package->hasMigrations($this->getMigrations());
        }

        if (file_exists($package->basePath('/../resources/lang'))) {
            $package->hasTranslations();
        }

        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }
    }

    public function packageRegistered(): void
    {
    }

    public function packageBooted(): void
    {
        // Asset Registration
        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName()
        );

        FilamentAsset::registerScriptData(
            $this->getScriptData(),
            $this->getAssetPackageName()
        );

        // Icon Registration
        FilamentIcon::register($this->getIcons());

        // Handle Stubs
        if (app()->runningInConsole()) {
            foreach (app(Filesystem::class)->files(__DIR__ . '/../stubs/') as $file) {
                $this->publishes([
                    $file->getRealPath() => base_path("stubs/filament-confirm-nav-with-dirty-state/{$file->getFilename()}"),
                ], 'filament-confirm-nav-with-dirty-state-stubs');
            }
        }

        // Testing
        Testable::mixin(new TestsConfirmNavigationWtihDirtyState());
    }

    protected function getAssetPackageName(): ?string
    {
        return 'jsn1nj4/filament-confirm-nav-with-dirty-state';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
            // AlpineComponent::make('filament-confirm-nav-with-dirty-state', __DIR__ . '/../resources/dist/components/filament-confirm-nav-with-dirty-state.js'),
            Css::make('filament-confirm-nav-with-dirty-state-styles', __DIR__ . '/../resources/dist/filament-confirm-nav-with-dirty-state.css'),
            Js::make('filament-confirm-nav-with-dirty-state-scripts', __DIR__ . '/../resources/dist/filament-confirm-nav-with-dirty-state.js'),
        ];
    }

    /**
     * @return array<class-string>
     */
    protected function getCommands(): array
    {
        return [
            ConfirmNavigationWtihDirtyStateCommand::class,
        ];
    }

    /**
     * @return array<string>
     */
    protected function getIcons(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getRoutes(): array
    {
        return [];
    }

    /**
     * @return array<string, mixed>
     */
    protected function getScriptData(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getMigrations(): array
    {
        return [
            'create_filament-confirm-nav-with-dirty-state_table',
        ];
    }
}
