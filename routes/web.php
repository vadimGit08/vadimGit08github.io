<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SerglController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/message', [SerglController::class, 'index'])->name('message.index');
Route::get('/message/create', [SerglController::class, 'create'])->name('message.create');
Route::post('/message', [SerglController::class, 'store'])->name('message.store');
Route::get('/message/{sergl}', [SerglController::class, 'show'])->name('message.show');
Route::get('/message/{sergl}/edit', [SerglController::class, 'edit'])->name('message.edit');
Route::patch('/message/{sergl}', [SerglController::class, 'update'])->name('message.update');
Route::delete('/message/{sergl}', [SerglController::class, 'destroy'])->name('message.destroy');

