<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\PostController;
use App\Jobs\SendMail;
use App\Events\UserRegistered;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/** CRUD ROUTES */

Route::group(['middleware' => 'auth'], function() {
    Route::get('/posts/trash', [PostController::class, 'trashed'])->name('posts.trash');
    Route::get('/posts/{id}/restore', [PostController::class, 'restore'])->name('posts.restore');
    Route::get('/posts/{id}/force-delete', [PostController::class, 'forceDelete'])->name('posts.force_delete');

    Route::resource('posts', PostController::class);
});

Route::get('send-mail', function(){
    SendMail::dispatch();
    dd('success');
});

Route::get('user-register', function(){
    $email = 'user@gmail.com';
    event(new UserRegistered($email));
    dd('success');
});

Route::get('/lang/{locale}', function($locale){
    App::setlocale($locale);
    return view('lang');
})->name('lang');
