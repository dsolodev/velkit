<?php

declare(strict_types = 1);

namespace App\Providers;

use App\Providers\Filament\FilamentComponents;
use Filament\Support\Facades\FilamentView;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Opcodes\LogViewer\Facades\LogViewer;

final class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        parent::register();
        // Hot reload Vite assets in Filament admin panel
        FilamentView::registerRenderHook(
            'panels::body.end',
            fn(): string => Blade::render("@vite('resources/js/app.js')")
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::shouldBeStrict();
        Model::unguard();

        LogViewer::auth(fn(Request $request): bool => $request->user()->is_developer);

        FilamentComponents::configure();
    }
}
