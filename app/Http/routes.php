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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vue', 'ClientsController@vue');
Route::get('/jquery', 'ClientsController@jquery');

Route::get('/clients', function() {
    $term = Input::get('term');
    $query = new App\Client;

    if (isset($term)) {
        $query = $query
                    ->where('name', 'like', "$term%")
                    ->orWhere('email', 'like', "$term%");
    }

    return $query->simplePaginate(10);
});


