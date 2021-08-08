<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkShortenerController;
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
Route::get('shortenedLink', [LinkShortenerController::class, 'index']);
Route::post('shortenedLink', [LinkShortenerController::class, 'storeShortenedLink'])->name('shortenedLink');
Route::get('{code}', [LinkShortenerController::class, 'getShortenedLink'])->name('goToShortenedLink');
