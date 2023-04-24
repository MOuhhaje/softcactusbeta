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

// Route::get('/', function () {
//     return view('frontOffice.home');
// });

Route::get('/', function () {
    return view('coming');
})->name('comingsoon');
Route::group(['prefix' => '/v2.0'/* ,'middleware'=>['auth'] */],function(){
    Route::get('/', function () {
        return view('frontOffice.home');
    })->name('home');
    Route::get('/about', function () {
        return view('frontOffice.whoweare');
    })->name('about');
    Route::get('/contact', function () {
        return view('frontOffice.contact');
    })->name('contact');

    // Route::get('/services', function () {
    //     return view('frontOffice.services');
    // })->name('services');
    Route::get('/branding', function () {
        return view('frontOffice.service-branding');
    })->name('Branding');
    Route::get('/web-development', function () {
        return view('frontOffice.service-development');
    })->name('WebDevelopment');
    Route::get('/consulting', function () {
        return view('frontOffice.service-consulting');
    })->name('Consulting');
    Route::get('/community-management', function () {
        return view('frontOffice.service-managment');
    })->name('CommunityManagement');
    Route::get('/career', function () {
        return view('frontOffice.career');
    })->name('career');
    Route::get('/career/details', function () {
        return view('frontOffice.careerDetails');
    })->name('careerDetails');

    Route::get('/blog', function () {
        return view('frontOffice.blog');
    })->name('blog');
});

