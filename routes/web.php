<?php

use Illuminate\Support\Facades\Route;


Route::get('/', App\Livewire\Guest\Homepage::class);
Route::get('/register', App\Livewire\Auth\Register::class);
