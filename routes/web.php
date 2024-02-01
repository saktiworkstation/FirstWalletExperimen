<?php

use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
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
    return view('home');
});

Route::get('/sign-in', [SignInController::class, 'index'])->name('sign-in')->middleware('guest');
Route::post('/sign-in', [SignInController::class, 'authenticate']);
Route::post('/sign-out', [SignInController::class, 'signOut']);

Route::get('/sign-up', [SignUpController::class, 'index'])->middleware('guest');
Route::post('/sign-up', [SignUpController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');
