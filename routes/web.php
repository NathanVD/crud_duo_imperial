<?php

use Illuminate\Support\Facades\Route;
use App\Caption;
use App\Subscribe;
use App\Service;
use App\Testimonial;
use App\Message;
use App\Contact;

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
    $contact = Contact::find(1);

    return view('index',compact('captions','subscribeLink','services','testimonials','contact'));
});

Route::get('/admin', function () {

    $testimonials_count = Testimonial::count();
    $services_count = Service::count();
    $messages_count = Message::count();
    $last_message = Message::latest('created_at')->first();

    return view('admin.index',compact('testimonials_count','services_count','messages_count','last_message'));
})->name('admin');

//Subscribe (admin)
Route::get('/admin/subscribe', 'SubscribeController@edit')->name('subscribe');
Route::post('/admin/subscribe/update', 'SubscribeController@update')->name('subscribe.update');

//Services (admin)
Route::resource('/admin/services', 'ServiceController');

//Testimonials (admin)
Route::resource('/admin/testimonials', 'TestimonialController');

//Messages (admin)
Route::resource('/admin/messages', 'MessageController');
//Contacts infos (admin)
Route::get('/admin/contact', 'ContactController@edit')->name('contact');
Route::post('/admin/contact/update', 'ContactController@update')->name('contact.update');

//Sections captions (admin)
Route::get('/admin/captions', 'CaptionController@edit')->name('captions');
Route::post('/admin/captions/update', 'CaptionController@update')->name('captions.update');