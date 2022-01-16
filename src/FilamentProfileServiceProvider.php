<?php

namespace RyanChandler\FilamentProfile;

use Filament\PluginServiceProvider;
use Livewire\Livewire;
use RyanChandler\FilamentProfile\Pages\Profile;

class FilamentProfileServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-profile';

    public function packageBooted(): void
    {
        parent::packageBooted();

        Livewire::component(Profile::getName(), Profile::class);
    }
}
