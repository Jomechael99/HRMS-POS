<?php

use Illuminate\Support\Facades\Route;


Route::get('/', App\Livewire\Guest\Homepage::class);

Route::middleware('guest')->group(function () {
    Route::get('/login', App\Livewire\Auth\Login::class);
    Route::get('/register', App\Livewire\Auth\Register::class);
});

Route::middleware('auth')->group(function () {
    Route::group(['middleware' => ['role:admin']], function () {
        Route::prefix('/admin')->name('')->group(function () {
            Route::get('/', App\Livewire\Admin\Homepage::class);


            Route::prefix('/room')->name('')->group(function () {
                Route::get('/', App\Livewire\Admin\Room\Index::class);
            });

        });


    });
});

