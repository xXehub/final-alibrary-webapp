<?php

use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Client\CharController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\WikiItemController;
use App\Http\Controllers\Client\WikiMapController;
use App\Http\Controllers\Client\WikiMonsterController;
use App\Http\Controllers\Client\WikiQuestController;
use App\Http\Controllers\Client\WikiShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

// Route::get('/char/{username}', [CharController::class, 'index'])
//     ->name('char');

Route::resource('/char', CharController::class)
    ->only(['index', 'show']);

Route::group([
    'prefix' => '/wiki',
    'as'     => 'wiki.'
], function () {

    // Route::resource('/items', [WikiController::class, 'items'])
    //     ->only(['index', 'show']);

    Route::resource('/item', WikiItemController::class)
        ->only(['index', 'show']);

    Route::resource('/map', WikiMapController::class)
        ->only(['index', 'show']);

    Route::resource('/quest', WikiQuestController::class)
        ->only(['index', 'show']);

    Route::resource('/monster', WikiMonsterController::class)
        ->only(['index', 'show']);

    Route::resource('/shop', WikiShopController::class)
        ->only(['index', 'show']);

});

