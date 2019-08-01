<?php

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
    $home = App\Home::where('name', '=', 'Home')->firstOrFail();
    $continents = App\Continent::all();
    $tours = App\Tour::where('cover', '=', 'option2')->get(); 
    $offers = App\Tour::where('offer', '=', 'option2')->get();    
    return view('home', compact('continents', 'tours', 'offers', 'home'));
});

Route::get('tour/{slug}', function($slug){
	$tour = App\Tour::where('slug', '=', $slug)->firstOrFail();
	return view('tour', compact('tour'));
});

Route::get('destinos/{slug}', function($slug){
    $home = App\Home::where('name', '=', 'Home')->firstOrFail();
    $continent = App\Continent::where('slug', '=', $slug)->firstOrFail();
    $countries = App\Country::where('continent_id', '=', $continent->id)->get();
	return view('continent', compact('continent', 'countries', 'home'));
});

Route::get('destinos/{continent_slug}/{country_slug}', function($continent_slug, $country_slug){
    $home = App\Home::where('name', '=', 'Home')->firstOrFail();
    $country = App\Country::where('slug', '=', $country_slug)->firstOrFail();
    $continent = App\Continent::where('slug', '=', $continent_slug)->firstOrFail();
    $tours = App\Tour::where('country_id', '=', $country->id)->get();
	return view('country', compact('country', 'continent', 'tours', 'home'));
});

Route::get('contacto', function(){
    $contact = App\Contact::where('page', '=', 'Contacto')->firstOrFail();
    $home = App\Home::where('name', '=', 'Home')->firstOrFail();
    return view('contacto', compact('contact', 'home'));
});

Route::get('nosotros', function(){
    $aboutus = App\Aboutus::where('name', '=', 'Nosotros')->firstOrFail();
    $home = App\Home::where('name', '=', 'Home')->firstOrFail();
    return view('aboutus', compact('aboutus', 'home'));
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
