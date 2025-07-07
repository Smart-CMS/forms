<?php

namespace SmartCms\Forms;

use Filament\Contracts\Plugin;
use Filament\Panel;
use SmartCms\Forms\Admin\Resources\ContactForms\ContactFormResource;
use SmartCms\Forms\Admin\Resources\Forms\FormResource;

class FormsPlugin implements Plugin
{
    public function getId(): string
    {
        return 'forms';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            FormResource::class,
            ContactFormResource::class,
        ]);
    }

    public function boot(Panel $panel): void {}

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
