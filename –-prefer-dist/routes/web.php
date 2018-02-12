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

Route::get('index/', 'DatadownloadControler@staffpick');

Route::get('/about/{id?}', 'DatadownloadControler@showdetail');

Route::get('/abouts/{id?}', 'DatauploadControler@showdetail');


Route::get('/aboutus/', function () {
    return view('about');
});

Route::get('/account-dashboard/', function () {
    return view('account-dashboard');
});

Route::get('/account-notifications/', function () {
    return view('account-notifications');
});

Route::get('/account-payment/', function () {
    return view('account-payment');
});

Route::get('/explore/', function () {
    return view('explore');
});

Route::get('/account-profile/', function () {
    return view('account-profile');
});

Route::get('/contact/', function () {
    return view('contact');
});

Route::get('/edit/', function () {
     return view('edit');
});

Route::post('/editdata/', 'DatauploadControler@edit');


Route::get('/edit-perks/', function () {
    return view('edit-perks');
});

Route::post('/edit-perksdata/','DatauploadControler@editperks');

Route::get('/edit-story/', function () {
    return view('edit-story');
});

Route::post('/edit-storydata/', 'DatauploadControler@editstory');

Route::get('/edit-discard/', 'DatauploadControler@editdiscard');


Route::get('/edit-about/', function () {
    return view('edit-about');
});

Route::get('/edit-accounts/', function () {
    return view('edit-accounts');
});



Route::get('/explore/', function () {
    return view('explore');
});

Route::get('/faqs/', function () {
    return view('faqs');
});

Route::post('/login/', 'LoginControler@insert');

Route::get('/logout/', 'LoginControler@logout');

Route::get('/pricing/', function () {
    return view('pricing');
});

Route::get('/project/', function () {
    return view('project');
});

Route::post('/register/','RegisterControler@insert');

Route::get('/start/', function () {
    return view('start');
});

Route::get('/testimonials/', function () {
    return view('testimonials');
});

Route::get('/tour - Copy/', function () {
    return view('tour - Copy');
});

Route::get('/tour/', function () {
    return view('tour');
});

Route::get('/typography/', function () {
    return view('typography');
});


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

