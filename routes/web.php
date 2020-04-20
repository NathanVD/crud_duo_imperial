<?php

use Illuminate\Support\Facades\Route;
use App\Hero;
use App\About;
use App\Team;
use App\Portfolio;
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

    $about = About::find(1);
    $hero = Hero::find(1);
    $team = Team::All();
    $portfolios = Portfolio::All();

    return view('index', compact('hero', 'about', 'team','captions','subscribeLink','services','testimonials','contact','portfolios'));
    //return view('portfolio', compact('portfolio'));
});

Route::get('/admin', function () {

    $testimonials_count = Testimonial::count();
    $services_count = Service::count();
    $messages_count = Message::count();
    $portfolios_count = Portfolio::count();

    $last_testimonial = Testimonial::latest('created_at')->first();
    $last_service = Service::latest('created_at')->first();
    $last_message = Message::latest('created_at')->first();
    $last_portfolio = Portfolio::latest('created_at')->first();

    return view('admin.index',compact('testimonials_count','services_count','messages_count','portfolios_count','last_testimonial','last_service','last_message','last_portfolio'));
})->name('admin');

// Route::any('/search', function (Request $request) {

//     $search = request('search');

//     $projects = Portfolio::where('nom','LIKE',"%{$search}%")->get();//->orWhere('description','LIKE','%'.$project.'%')->get();
    
//     return view('admin.portfolio.search_result',compact('search','projects'));//->withDetails($project)->withQuery($search);
// }); 

//routes antoine
//Hero (admin)
Route::get('/admin/hero', 'HeroController@edit')->name('hero');
Route::post('/admin/hero/update', 'HeroController@update')->name('hero.update');

Route::get('/admin/about', 'AboutController@edit')->name('about');
Route::post('/admin/about/update', 'AboutController@update')->name('about.update');

Route::resource('/admin/team', 'TeamController');

Route::post('/admin/portfolio/search', 'PortfolioController@search')->name('portfolio.search');
Route::resource('admin/portfolio', 'PortfolioController');

//routes nathan
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
