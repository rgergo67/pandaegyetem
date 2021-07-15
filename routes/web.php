<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PaymentController;

Route::group(['middleware' => ['page-cache']], function () {
    Route::view('/', 'welcome')->name('home');
    Route::view('/credit', 'credit')->name('credit');

    Route::view('aszf', 'aszf')->name('aszf');
    Route::view('barion', 'barion')->name('barion');
    Route::view('jobb-jegyek-10-lepesben-hackeld-meg-az-agyad', 'jobb-jegyek')->name('jobb-jegyek');

    // Categories
    Route::view('kategoria/tanulas', 'categories.tanulas', [
        'articles' => Article::where('category', 'tanulas')->orderBy('id', 'desc')->get()
    ])->name('categories.tanulas');
    Route::view('kategoria/penz', 'categories.penz', [
        'articles' => Article::where('category', 'penz')->orderBy('id', 'desc')->get()
    ])->name('categories.penz');
    Route::view('kategoria/kollegium', 'categories.kollegium', [
        'articles' => Article::where('category', 'kollegium')->orderBy('id', 'desc')->get()
    ])->name('categories.kollegium');

    Route::get('cikkek/{slug}', [ArticleController::class, 'publicShow'])->name('articles.public_show');
});

Route::resource('articles', ArticleController::class);
Route::view('test', 'articles.test')->name('articles.test');

Route::get('payment', [PaymentController::class, 'index'])->name('payment.index');
Route::get('payment/thankyou', [PaymentController::class, 'thankyou'])->name('payment.thankyou');
Route::post('payment/callback', [PaymentController::class, 'callback'])->name('payment.callback');
Route::post('payment/store', [PaymentController::class, 'store'])->name('payment.store');
