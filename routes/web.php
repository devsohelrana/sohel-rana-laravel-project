<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/', 'frontend.home')
    ->name('home');

Volt::route('dashboard', 'backend.dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Volt::route('profile', 'backend.profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
