<?php

use Illuminate\Support\Facades\Route;
use App\Hero;
use App\About;

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
    $about = About::find(1);
    $hero = Hero::find(1);
    return view('index', compact('hero', 'about'));
});

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');

//Hero (admin)
//Route::resource('/admin/hero', 'HeroController');

Route::get('/admin/hero', 'HeroController@edit')->name('hero');
Route::post('/admin/hero/update', 'HeroController@update')->name('hero.update');

Route::get('/admin/about', 'AboutController@edit')->name('about');
Route::post('/admin/about/update', 'AboutController@update')->name('about.update');
