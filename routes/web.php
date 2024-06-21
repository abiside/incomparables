<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Homepage;
use App\Livewire\Post;

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

Route::get('/', Homepage::class);
Route::prefix('noticias')->group(function () {
    Route::get('/{year}/{month}/{day}/{slug}', Post::class);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
