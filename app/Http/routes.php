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

Route::get('/artists', function () {
    return view('artists');
});

Route::get('/lps/{id_artist}', function ($id_artist) {
    return view('lps', ['id_artist' => $id_artist]);
});

Route::get('/delete_artist/{id_artist}', function ($id_artist) {
    return view('delete_artist', ['id_artist' => $id_artist]);
});

Route::get('/create_artist', function () {
    return view('create_artist');
});

Route::get('/update_artist/{id_artist}', function ($id_artist) {
    return view('update_artist', ['id_artist' => $id_artist]);
});

Route::get('/create_lp', function () {
    return view('create_lp');
});

Route::get('lps/delete_lp/{id_lp}', function ($id_lp) {
    return view('delete_lp', ['id_lp' => $id_lp]);
});