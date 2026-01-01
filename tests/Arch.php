<?php

declare(strict_types=1);

arch('strict types')
    ->expect('App')
    ->toUseStrictTypes();

arch('no debugging functions')
    ->expect(['dd', 'dump', 'ray', 'var_dump'])
    ->not->toBeUsed();

arch('models extend Eloquent')
    ->expect('App\Models')
    ->toExtend('Illuminate\Database\Eloquent\Model')
    ->toOnlyBeUsedIn([
        'App\Http\Controllers',
        'App\Livewire',
        'App\Services',
        'App\Actions',
        'Database\Factories',
        'Database\Seeders',
    ]);

arch('controllers have correct suffix')
    ->expect('App\Http\Controllers')
    ->toHaveSuffix('Controller');

arch('livewire components are classes')
    ->expect('App\Livewire')
    ->toBeClasses();

arch('providers extend ServiceProvider')
    ->expect('App\Providers')
    ->toExtend('Illuminate\Support\ServiceProvider');

arch('no globals usage')
    ->expect(['App'])
    ->not->toUse(['global', 'eval', 'extract']);
