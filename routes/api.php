<?php

use App\Http\Controllers\Api\Wiki\ItemController;
use App\Http\Controllers\Api\Wiki\MapController;
use App\Http\Controllers\Api\Wiki\QuestController;
use App\Http\Controllers\Api\WikiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::group([
    'as'     => 'api.'
], function () {

    Route::group([
        'prefix' => '/wiki',
        'as'     => 'wiki.'
    ], function () {
    
        // Route::get('items', [ItemController::class, 'index'])
        //     ->name('items');
    
        // Route::resource('/item', ItemController::class)
        //     ->only(['index', 'show']);
    
    });

});