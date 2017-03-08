<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['uses'=>'PagesController@Index','as'=>'index']);
Route::get('/about', ['uses'=>'PagesController@About','as'=>'about']);
Route::get('/destinations', ['uses'=>'PagesController@Destinations','as'=>'destinations']);
Route::get('/adventures', ['uses'=>'PagesController@Adventures','as'=>'adventures']);
Route::get('/fitness', ['uses'=>'PagesController@Fitness','as'=>'fitness']);
Route::get('/gallery', ['uses'=>'PagesController@Gallery','as'=>'gallery']);
Route::get('/contact', ['uses'=>'PagesController@Contact','as'=>'contact']);
Route::post('/contact', 'PagesController@sendMessage');
Route::get('/home', ['uses'=>'PagesController@Home','as'=>'home']);

// ===============Administrator Authentication Routes=====================================================
Route::get('/owner','AccountController@index');
Route::post('/owner','AccountController@signin');
Route::get('/account','AccountController@account');
Route::post('/account','AccountController@signup');

// ===============Administrator Routes=====================================================
Route::get('/dashboard', ['uses'=>'OwnerController@dashboard','as'=>'dashboard']);
Route::get('/logout','OwnerController@logout');
Route::get('/owner/adventures', ['uses'=>'OwnerController@adventures','as'=>'Adventure']);
Route::get('/deleteAdventure/{id}', ['uses'=>'OwnerController@deleteAdventure','as'=>'deleteAdventure']);
Route::get('/editAdventure/{id}', ['uses'=>'OwnerController@editAdventure','as'=>'editAdventure']);
Route::post('/editAdventure/{id}', ['uses'=>'OwnerController@updateAdventure','as'=>'updateAdventure']);
Route::get('/owner/destinations', ['uses'=>'OwnerController@destinations','as'=>'Destination']);
Route::get('/deleteDestination/{id}', ['uses'=>'OwnerController@deleteDestination','as'=>'deleteDestination']);
Route::get('/editDestination/{id}', ['uses'=>'OwnerController@editDestination','as'=>'editDestination']);
Route::post('/editDestination/{id}', ['uses'=>'OwnerController@updateDestination','as'=>'updateDestination']);
Route::get('/owner/messages', ['uses'=>'OwnerController@messages','as'=>'Message']);
Route::get('/deleteMessage/{id}', ['uses'=>'OwnerController@deleteMessage','as'=>'deleteMessage']);
Route::get('/owner/addAdventure', ['uses'=>'OwnerController@addAdventure','as'=>'addAdventure']);
Route::post('/owner/addAdventure', ['uses'=>'OwnerController@postAdventure','as'=>'postAdventure']);
Route::get('/owner/addDestination', ['uses'=>'OwnerController@addDestination','as'=>'addDestination']);
Route::post('/owner/addDestination', ['uses'=>'OwnerController@postDestination','as'=>'postDestination']);
Route::get('/owner/users', ['uses'=>'OwnerController@users','as'=>'User']);
Route::get('/deleteUser/{id}', ['uses'=>'OwnerController@deleteUser','as'=>'deleteUser']);
////////////////////////////////// BANNER ROUTES ///////////////////////////////////////////////
Route::get('/owner/banners', ['uses'=>'OwnerController@banners','as'=>'banners']);
Route::get('/owner/addbanner', ['uses'=>'OwnerController@addbanner','as'=>'addbanner']);
Route::post('/owner/addbanner', ['uses'=>'OwnerController@postBanner','as'=>'postBanner']);
Route::get('/editbanner/{id}', ['uses'=>'OwnerController@editBanner','as'=>'editbanner']);
Route::post('/editbanner/{id}', ['uses'=>'OwnerController@updateBanner','as'=>'updateBanner']);

////////////////////////////////// PHOTO GALLERY URL ROUTES ///////////////////////////////////////////////
Route::get('/owner/getUrls', ['uses'=>'OwnerController@getUrls','as'=>'getUrls']);
Route::get('/owner/addUrl', ['uses'=>'OwnerController@addUrl','as'=>'addUrl']);
Route::post('/owner/addUrl', ['uses'=>'OwnerController@postUrl','as'=>'postUrl']);
Route::get('/editUrl/{id}', ['uses'=>'OwnerController@editUrl','as'=>'editbanner']);
Route::post('/editUrl/{id}', ['uses'=>'OwnerController@updateUrl','as'=>'updateUrl']);



