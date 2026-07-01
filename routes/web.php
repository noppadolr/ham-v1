<?php

use App\Livewire\Dashboard\Index as DashboardIndex;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

//Route::middleware(['auth', 'verified'])->group(function () {
//    Route::view('dashboard', 'dashboard')->name('dashboard');
//});

require __DIR__.'/settings.php';

Route::middleware(['auth'])->group(function (): void {
    Route::get('/dashboard', DashboardIndex::class)->name('dashboard');
});
