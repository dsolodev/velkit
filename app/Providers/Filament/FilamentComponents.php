<?php

declare(strict_types = 1);

namespace App\Providers\Filament;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Livewire\Notifications;
use Filament\Support\Enums\VerticalAlignment;

abstract class FilamentComponents
{
    final public static function configure(): void
    {
        Notifications::verticalAlignment(VerticalAlignment::End);

        TextInput::configureUsing(fn(TextInput $component): TextInput => $component->columnSpanFull());

        Select::configureUsing(fn(Select $component): Select => $component->columnSpanFull());
    }
}
