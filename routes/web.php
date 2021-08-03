<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::group(['middleware' => ['page-cache']], function () {
    Route::view('/', 'welcome')->name('home');
    Route::view('/credit', 'credit')->name('credit');

    Route::view('aszf', 'aszf')->name('aszf');
    Route::view('barion', 'barion')->name('barion');
    Route::view('jobb-jegyek-10-lepesben-hackeld-meg-az-agyad', 'jobb-jegyek')->name('jobb-jegyek');

    // Categories
    Route::get('kategoria/tanulas', [CategoryController::class, 'tanulas'])->name('categories.tanulas');
    Route::get('kategoria/penz', [CategoryController::class, 'penz'])->name('categories.penz');
    Route::get('kategoria/kollegium', [CategoryController::class, 'kollegium'])->name('categories.kollegium');

    Route::get('cikkek/{slug}', [ArticleController::class, 'publicShow'])->name('articles.public_show');
});

Route::resource('articles', ArticleController::class);

Route::get('payment', [PaymentController::class, 'index'])->name('payment.index');
Route::get('payment/thankyou', [PaymentController::class, 'thankyou'])->name('payment.thankyou');
Route::post('payment/callback', [PaymentController::class, 'callback'])->name('payment.callback');
Route::post('payment/store', [PaymentController::class, 'store'])->name('payment.store');

Route::domain('tudastar.beosztom.hu')->group(function () {
    Route::get('legyen-tobb-penzed-mint-a-szuleidnek')->name('beosztom.diak');
});

Route::get('/adnap', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/adnap', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');
