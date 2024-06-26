<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::get('/email',function () {
    return new \App\Mail\NewUserWelcomeMail();
} );

Route::get('/', [App\Http\Controllers\PostsController::class, 'index']);

Route::post('/follow/{user}', [App\Http\Controllers\FolllowsController::class, 'store']);

Route::delete('/c/delete/{id}',  [App\Http\Controllers\CommentsController::class,'delete']);

Route::post('/c', [App\Http\Controllers\CommentsController::class, 'store'])->name('comment.store');

Route::delete('/p/delete/{id}',  [App\Http\Controllers\PostsController::class,'delete']);

Route::get('/p/create', [App\Http\Controllers\PostsController::class, 'create']);

Route::put('/p/like/', [App\Http\Controllers\LikesController::class, 'store'])->name('post.like');

Route::post('/p', [App\Http\Controllers\PostsController::class, 'store']);

Route::get('/p/{post}', [App\Http\Controllers\PostsController::class, 'show']);

Route::post('/profile/search/',  [App\Http\Controllers\ProfilesController::class,'search']);

Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');

Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');

Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');

Route::fallback(function() {
   return abort(404);
});
