<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.home.home');
});


Route::get('login', [AuthenController::class, 'login'])->name('login');
Route::post('login', [AuthenController::class, 'postLogin'])->name('postLogin');
Route::get('logout', [AuthenController::class, 'logout'])->name('logout');
Route::get('register', [AuthenController::class, 'register'])->name('register');
Route::post('register', [AuthenController::class, 'postRegister'])->name('postRegister');


Route::get('fogot-pass', [AuthenController::class, 'forgotPass'])->name('forgotPass');
Route::post('fogot-pass', [AuthenController::class, 'forgotPassPost'])->name('forgotPassPost');

Route::get('reset-pass/{token}', [AuthenController::class, 'resetPass'])->name('resetPass');
Route::post('reset-pass', [AuthenController::class, 'resetPostPass'])->name('resetPostPass');

//user
// Route::prefix('user')->group(function () {
//     Route::get('home', function () {
//         return view('user.home.home')->name('home');
//     });
// });

//admin
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    // 'middleware' => 'checkAdmin'
], function () {
    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::get('list_user', [UserController::class, 'listUser'])->name('listUser');
    });
});
