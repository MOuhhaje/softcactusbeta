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

    //refs
        // chandelles
        Route::get('/chandelles', function () {
            return view('frontOffice.refs.Chandelles');
        })->name('chandelles');
        //LLF
        Route::get('/llf', function () {
            return view('frontOffice.refs.LLF');
        })->name('LLF');
        //BHS
        Route::get('/bhs', function () {
            return view('frontOffice.refs.BHS');
        })->name('BHS');
        //Cleanco
        Route::get('/cleanco', function () {
            return view('frontOffice.refs.Cleanco');
        })->name('Cleanco');
        //GD
        Route::get('/gd', function () {
            return view('frontOffice.refs.GD');
        })->name('GD');
        //PL
        Route::get('/pl', function () {
            return view('frontOffice.refs.PL');
        })->name('PL');
        //Kockpit-Konsulting
        Route::get('/kockpit-konsulting', function () {
            return view('frontOffice.refs.Kockpit-konsulting');
        })->name('Kockpit-konsulting');
        //SupCanada
        Route::get('/supcanada', function () {
            return view('frontOffice.refs.SupCanada');
        })->name('SupCanada');
        //SupMTI
        Route::get('/supmti', function () {
            return view('frontOffice.refs.SupMTI');
        })->name('SupMTI');
        //Trasso
        Route::get('/trasso', function () {
            return view('frontOffice.refs.Trasso');
        })->name('Trasso');
        //ref
        Route::get('/ref', function () {
            return view('frontOffice.ref');
        })->name('ref');

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
//////////////////////////admin//////////////////////////
Route::group(['prefix' => '/admin'/* ,'middleware'=>['auth'] */],function(){
    Route::get('/', function () {
        return view('backOffice.dashboard');
    })->name('dashboard');
});

