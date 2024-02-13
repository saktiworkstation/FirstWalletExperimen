<?php

use App\Http\Controllers\BeneficiariesController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\TopUpAndWithdrawal;
use App\Http\Controllers\WalletController;
use App\Models\Wallet;
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
    return view('dashboard.index', [
        'wallets' => Wallet::where('user_id', auth()->user()->id)->get()
    ]);
})->middleware('auth');

Route::resource('dashboard/wallets', WalletController::class)->middleware('auth');

Route::get('/dashboard/topup-and-withdrawal', [TopUpAndWithdrawal::class, 'index'])->middleware('auth');
Route::put('/dashboard/topup-and-withdrawal/top-up', [TopUpAndWithdrawal::class, 'storeTopUp'])->middleware('auth');
Route::put('/dashboard/topup-and-withdrawal/withdrawal', [TopUpAndWithdrawal::class, 'storeWithdrawal'])->middleware('auth');

Route::resource('dashboard/bills', BillController::class)->middleware('auth');

Route::get('/dashboard/beneficiaries', [BeneficiariesController::class, 'index'])->middleware('auth');
Route::get('/dashboard/beneficiaries/add-wallet', [BeneficiariesController::class, 'addWallet'])->middleware('auth');
Route::post('/dashboard/beneficiaries/add-wallet', [BeneficiariesController::class, 'storeWallet'])->middleware('auth');
