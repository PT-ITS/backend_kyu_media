<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CaraOrderController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\KeunggulanController;
use App\Http\Controllers\ManfaatController;
use App\Http\Controllers\MediaPartnerController;
use App\Http\Controllers\SyaratKetentuanController;
use App\Http\Controllers\TentangKamiController;

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::group([
        'middleware' => 'auth:api'
    ], function () {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::get('me', [AuthController::class, 'me']);
        Route::group([
            'middleware' => 'auth:api'
        ], function () {
            // api secure

        });
    });
});

Route::group([
    'prefix' => 'beranda'
], function () {
    Route::get('list', [BerandaController::class, 'list']);
    Route::post('create', [BerandaController::class, 'create']);
    Route::post('update/{id}', [BerandaController::class, 'update']);
    Route::delete('delete/{id}', [BerandaController::class, 'delete']);
});

Route::group([
    'prefix' => 'info'
], function () {
    Route::get('list', [InfoController::class, 'list']);
    Route::post('create', [InfoController::class, 'create']);
    Route::post('update/{id}', [InfoController::class, 'update']);
    Route::delete('delete/{id}', [InfoController::class, 'delete']);
});

Route::group([
    'prefix' => 'manfaat'
], function () {
    Route::get('list', [ManfaatController::class, 'list']);
    Route::post('create', [ManfaatController::class, 'create']);
    Route::post('update/{id}', [ManfaatController::class, 'update']);
    Route::delete('delete/{id}', [ManfaatController::class, 'delete']);
});

Route::group([
    'prefix' => 'keunggulan'
], function () {
    Route::get('list', [KeunggulanController::class, 'list']);
    Route::post('create', [KeunggulanController::class, 'create']);
    Route::post('update/{id}', [KeunggulanController::class, 'update']);
    Route::delete('delete/{id}', [KeunggulanController::class, 'delete']);
});

Route::group([
    'prefix' => 'tentang-kami'
], function () {
    Route::get('list', [TentangKamiController::class, 'list']);
    Route::post('create', [TentangKamiController::class, 'create']);
    Route::post('update/{id}', [TentangKamiController::class, 'update']);
    Route::delete('delete/{id}', [TentangKamiController::class, 'delete']);
});

Route::group([
    'prefix' => 'syarat-ketentuan'
], function () {
    Route::get('list', [SyaratKetentuanController::class, 'list']);
    Route::post('create', [SyaratKetentuanController::class, 'create']);
    Route::post('update/{id}', [SyaratKetentuanController::class, 'update']);
    Route::delete('delete/{id}', [SyaratKetentuanController::class, 'delete']);
});

Route::group([
    'prefix' => 'media-partner'
], function () {
    Route::get('list', [MediaPartnerController::class, 'list']);
    Route::post('create', [MediaPartnerController::class, 'create']);
    Route::post('update/{id}', [MediaPartnerController::class, 'update']);
    Route::delete('delete/{id}', [MediaPartnerController::class, 'delete']);
});

Route::group([
    'prefix' => 'cara-order'
], function () {
    Route::get('list', [CaraOrderController::class, 'list']);
    Route::post('create', [CaraOrderController::class, 'create']);
    Route::post('update/{id}', [CaraOrderController::class, 'update']);
    Route::delete('delete/{id}', [CaraOrderController::class, 'delete']);
});

Route::group([
    'prefix' => 'faq'
], function () {
    Route::get('list', [FaqController::class, 'list']);
    Route::post('create', [FaqController::class, 'create']);
    Route::post('update/{id}', [FaqController::class, 'update']);
    Route::delete('delete/{id}', [FaqController::class, 'delete']);
});
