<?php

use App\Http\Controllers\MessagesController;
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

Route::prefix('/messages')->group(function() {
    Route::get('/create', [MessagesController::class, 'create'])->name('messages.create');
    Route::get('/', [MessagesController::class, 'index'])->name('messages.index');
    Route::post('/', [MessagesController::class, 'store'])->name('messages.store');
});