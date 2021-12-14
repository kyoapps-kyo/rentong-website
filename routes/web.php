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


Route::get('/', 'PagesController@root')->name('pages.root');
Route::get('/about', 'PagesController@about')->name('pages.about');
Route::get('/email', 'PagesController@about')->name('pages.about.to.email');
Route::get('/international_trade','PagesController@international_trade')->name('pages.international_trade');
Route::post('/about/mail','MailsController@store')->name('sendmail');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
