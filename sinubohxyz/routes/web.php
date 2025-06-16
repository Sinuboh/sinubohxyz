<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Livewire\Volt\Volt;

Route::get('/', function () {
    $socials = DB::table('socials')->get();
    return view('sinubohxyz.home', ['socials' => $socials]);
})->name('home');

Route::get('/card', function () {
    return view('sinubohxyz.card', ['social_name' => 'Twitch', 'social_link' => 'https://www.twitch.tv/sinuboh', 'display_text' => 'hello', 'image_path' => 'GO5yHMSXMAAP6Wg.jpg']);
});


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
