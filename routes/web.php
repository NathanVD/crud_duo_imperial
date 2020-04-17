<?php

use Illuminate\Support\Facades\Route;
use App\Caption;
use App\Subscribe;
use App\Service;
use App\Testimonial;

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
    
    $captions = Caption::find(1);
    $subscribeLink = Subscribe::find(1);
    $services = Service::all();
    $testimonials = Testimonial::all();

    return view('index',compact('captions','subscribeLink','services','testimonials'));
});

Route::get('/admin', function () {

    $testimonials_count = Testimonial::count();
    $services_count = Service::count();

    return view('admin.index',compact('testimonials_count','services_count'));
})->name('admin');

//Subscribe (admin)
Route::get('/admin/subscribe', 'SubscribeController@edit')->name('subscribe');
Route::post('/admin/subscribe/update', 'SubscribeController@update')->name('subscribe.update');

//Services (admin)
Route::resource('/admin/services', 'ServiceController');

//Testimonials (admin)
Route::resource('/admin/testimonials', 'TestimonialController');

//Sections captions (admin)
Route::get('/admin/captions', 'CaptionController@edit')->name('captions');
Route::post('/admin/captions/update', 'CaptionController@update')->name('captions.update');