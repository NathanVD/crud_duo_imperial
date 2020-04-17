<?php

use Illuminate\Support\Facades\Route;
use App\Hero;

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
    $hero = Hero::find(1);
    return view('index', compact('hero'));
});

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');

//Hero (admin)
//Route::resource('/admin/hero', 'HeroController');

Route::get('/admin/hero', 'HeroController@edit')->name('hero');
Route::post('/admin/hero/update', 'HeroController@update')->name('hero.update');