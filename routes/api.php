<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);

});

Route::group(['namespace' => 'message', 'middleware' => 'jwt.auth'], function (){
    Route::get('/message', [\App\Http\Controllers\Message\IndexController::class, '__invoke'])->name('message.index');
    Route::get('/message/create', [\App\Http\Controllers\Message\CreateController::class, '__invoke'])->name('message.create');
    Route::post('/message', [\App\Http\Controllers\Message\StoreController::class, '__invoke'])->name('message.store');
    Route::get('/message/{sergl}', [\App\Http\Controllers\Message\ShowController::class, '__invoke'])->name('message.show');
    Route::get('/message/{sergl}/edit', [\App\Http\Controllers\Message\EditController::class, '__invoke'])->name('message.edit');
    Route::patch('/message/{sergl}', [\App\Http\Controllers\Message\UpdateController::class, '__invoke'])->name('message.update');
    Route::delete('/message/{sergl}', [\App\Http\Controllers\Message\DestroyController::class, '__invoke'])->name('message.destroy');
});
