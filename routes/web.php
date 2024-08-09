<?php

use App\Livewire\HomeComponent;
use App\Livewire\GaleriaComponent;
use App\Livewire\NosotrosComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;

Route::get('/',HomeComponent::class)->name('home');
Route::get('/galeria',GaleriaComponent::class)->name('galeria');
Route::get('/nosotros',NosotrosComponent::class)->name('nosotros');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [InicioController::class, 'index'])->name('back.index');
    Route::get('/image/add', [InicioController::class, 'create'])->name('addImage');
    Route::get('/imagenes/{image}/edit', [InicioController::class, 'edit'])->name('back.edit');
});
