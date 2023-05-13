<?php

use App\Http\Controllers\ChatsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/chat', [ChatsController::class, 'index'])->name('chat');
Route::get('/account', [UserController::class, 'myAccount'])->name('account');
Route::patch('/account', [UserController::class, 'patchUser'])->name('account.patch');
Route::get('/messages', [ChatsController::class, 'fetchMessages']);
Route::post('/messages', [ChatsController::class, 'sendMessage']);
Route::delete('/messages', [ChatsController::class, 'deleteMessage']);
