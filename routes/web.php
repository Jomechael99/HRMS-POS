<?php

use App\Livewire\Guest\AboutUs;
use App\Livewire\Guest\OurRooms;
use App\Livewire\Guest\OurServices;
use App\Livewire\Guest\Reservations;
use Illuminate\Support\Facades\Route;


Route::get('/', App\Livewire\Guest\Homepage::class);

Route::get('/about-us', AboutUs::class)->name('about-us');
Route::get('/our-rooms', OurRooms::class)->name('our-rooms');
Route::get('/our-services', OurServices::class)->name('our-services');
Route::get('/reservations', Reservations::class)->name('reservations');

Route::middleware('guest')->group(function () {
    Route::get('/login', App\Livewire\Auth\Login::class);
    Route::get('/register', App\Livewire\Auth\Register::class);
});

Route::middleware('auth')->group(function () {
    Route::group(['middleware' => ['role:admin']], function () {
        Route::prefix('/admin')->name('')->group(function () {
            Route::get('/', App\Livewire\Admin\Homepage::class);

            Route::prefix('/user')->name('')->group(function () {
                Route::get('/', App\Livewire\Admin\User\Index::class)->name('user.index');
                Route::get('/create', App\Livewire\Admin\User\Create::class)->name('user.create');
                Route::get('/edit/{id}', App\Livewire\Admin\User\Edit::class)->name('user.edit');
            });

            Route::prefix('/room')->name('')->group(function () {
                Route::get('/', App\Livewire\Admin\Room\Index::class)->name('room.index');
                Route::get('/create', App\Livewire\Admin\Room\Create::class)->name('room.create');
                Route::get('/edit/{id}', App\Livewire\Admin\Room\Edit::class)->name('room.edit');
            });

            /*Route::prefix('/roomtype')->name('')->group(function () {
                Route::get('/', App\Livewire\Admin\RoomType\Index::class)->name('roomtype.index');
                Route::get('/create', App\Livewire\Admin\RoomType\Create::class)->name('roomtype.create');
                Route::get('/edit/{id}', App\Livewire\Admin\RoomType\Edit::class)->name('roomtype.edit');
            });*/

            Route::prefix('/services')->name('')->group(function () {
                Route::get('/', App\Livewire\Admin\Services\Index::class)->name('services.index');
                Route::get('/create', App\Livewire\Admin\Services\Create::class)->name('services.create');
                Route::get('/edit/{id}', App\Livewire\Admin\Services\Edit::class)->name('services.edit');
            });

        });


    });
});

