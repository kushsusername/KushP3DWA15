<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', 'HomeController@getHome');
    Route::get('/home', 'HomeController@getHome');

    Route::get('/xkcdpassword', 'ToolsController@getXkcdPassword');
    Route::post('/xkcdpassword', 'ToolsController@postXkcdPassword');

    Route::get('/loremipsum', 'ToolsController@getLoremIpsum');
    Route::get('/randomuser', 'ToolsController@getRandomUser');

});
