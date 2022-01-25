<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
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



Route::group(['middleware'=>'set.locale'], function () {
    Route::get('/', 'PagesController@root')->name('pages.root');
    Route::get('/about', 'PagesController@about')->name('pages.about');
    Route::get('/email', 'PagesController@about')->name('pages.about.to.email');
    Route::get('/international_trade', 'PagesController@international_trade')->name('pages.international_trade');
    Route::post('/about/mail', 'MailsController@store')->name('sendmail');
    Route::get('/setlocale/{locale}', function($locale) {
        session()->put('locale', $locale);
        Log::info($locale . "locale");
        return redirect()->back();
    })->name('locale');
    Route::resource('topics', 'TopicsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__ . '/auth.php';

