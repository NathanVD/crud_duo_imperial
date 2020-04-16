<?php

use Illuminate\Support\Facades\Route;
use App\Subscribe;

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

Route::get('/', function () {

    $subscribeLink = Subscribe::find(1);

    return view('index',compact('subscribeLink'));
});

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');

//Subscribe (admin)
Route::get('/admin/subscribe', 'SubscribeController@edit')->name('subscribe');
Route::post('/admin/subscribe/update', 'SubscribeController@update')->name('subscribe.update');