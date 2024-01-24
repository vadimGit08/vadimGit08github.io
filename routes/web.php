<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
//    *********CRUD**********
Route::group(['namespace' => 'message'], function (){
    Route::get('/message', [\App\Http\Controllers\Message\IndexController::class, '__invoke'])->name('message.index');
    Route::get('/message/create', [\App\Http\Controllers\Message\CreateController::class, '__invoke'])->name('message.create');
    Route::post('/message', [\App\Http\Controllers\Message\StoreController::class, '__invoke'])->name('message.store');
    Route::get('/message/{sergl}', [\App\Http\Controllers\Message\ShowController::class, '__invoke'])->name('message.show');
    Route::get('/message/{sergl}/edit', [\App\Http\Controllers\Message\EditController::class, '__invoke'])->name('message.edit');
    Route::patch('/message/{sergl}', [\App\Http\Controllers\Message\UpdateController::class, '__invoke'])->name('message.update');
    Route::delete('/message/{sergl}', [\App\Http\Controllers\Message\DestroyController::class, '__invoke'])->name('message.destroy');
});
//    *********CRUD**********




//    *********ADMIN*********
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::group(['namespace' => 'message'], function () {
        Route::get('/message', [\App\Http\Controllers\Admin\Message\AIndexController::class, '__invoke'])->name('admin.message.index');
        Route::get('/message/create', [\App\Http\Controllers\Admin\Message\ACreateController::class, '__invoke'])->name('admin.message.create');
        Route::post('/message', [\App\Http\Controllers\Admin\Message\AStoreController::class, '__invoke'])->name('admin.message.store');
        Route::get('/message/{sergl}', [\App\Http\Controllers\Admin\Message\AShowController::class, '__invoke'])->name('admin.message.show');
        Route::get('/message/{sergl}/edit', [\App\Http\Controllers\Admin\Message\AEditController::class, '__invoke'])->name('admin.message.edit');
        Route::patch('/message/{sergl}', [\App\Http\Controllers\Admin\Message\AUpdateController::class, '__invoke'])->name('admin.message.update');
        Route::delete('/message/{sergl}', [\App\Http\Controllers\Admin\Message\ADestroyController::class, '__invoke'])->name('admin.message.destroy');

    });
    Route::group(['namespace' => 'message'], function () {
        Route::get('/recentlyDeleted', [\App\Http\Controllers\Admin\RecentlyDeleted\RDIndexController::class, '__invoke'])->name('admin.RDIndex');
        Route::get('/recentlyDeleted{sergl}', [\App\Http\Controllers\Admin\RecentlyDeleted\RDShowController::class, '__invoke'])->name('admin.RDShow');
        Route::post('restore/{sergl}', [\App\Http\Controllers\Admin\RecentlyDeleted\RDRestoreController::class, '__invoke'])->withTrashed()->name('admin.RDRestore');
        Route::delete('/forceDelete/{sergl}', [\App\Http\Controllers\Admin\RecentlyDeleted\RDForceDeleteController::class, '__invoke'])->withTrashed()->name('admin.RDForceDelete');
    });
});
//    *********ADMIN*********


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
