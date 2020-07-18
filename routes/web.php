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

Route::get('/', 'Front\PagesController@home')->name('front.pages.home');
Route::get('/offers-housings', 'Front\PagesController@offers')->name('front.pages.offers');
Route::get('/demands', 'Front\PagesController@demands')->name('front.pages.demands');

Route::group(['prefix' => 'account', 'middleware' => 'auth'], function () {
    Route::get('/profile', 'Front\ProfileController@profile')->name('front.account.profile');
    Route::get('/offers', 'Front\OfferController@index')->name('front.account.offers.index');
    Route::get('/offers/create', 'Front\OfferController@create')->name('front.account.offers.create');
    Route::post('/offers/store', 'Front\OfferController@store')->name('front.account.offers.store');
    Route::get('/offers/{offer}', 'Front\OfferController@show')->name('front.account.offers.show');
    Route::delete('/offers/{offer}', 'Front\OfferController@destroy')->name('front.account.offers.delete');
    Route::get('/demands', 'Front\DemandController@index')->name('front.account.demands.index');
    Route::get('/demands/create', 'Front\DemandController@create')->name('front.account.demands.create');
    Route::post('/demands/store', 'Front\DemandController@store')->name('front.account.demands.store');
    Route::get('/demands/{demand}', 'Front\DemandController@destroy')->name('front.account.demands.delete');
});


Route::get('/test-22', 'HomeController@index');
