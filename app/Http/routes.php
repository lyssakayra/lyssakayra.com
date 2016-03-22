<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/






/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    if (env('COMING_SOON') == true) {
        Route::get('/', function () {
            return view('coming_soon');
        });        
    } else {
        Route::get('/', function () {
            return view('welcome');
        });

        Route::get('/about', function () {
            return view('about');
        });

        Route::get('/gallery', function () {
            return view('gallery');
        });
        Route::get('contact', ['as' => 'contact', function () {
            return view('contact');
        }]);    
        Route::post('contact_request','ContactController@getContactUsForm');        
    }

});
