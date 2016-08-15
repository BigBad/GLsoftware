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

Route::get('/', function () {

    $scores = [77,85,90];

    $handicap = new \GLsoftware\Golf\Handicap($scores);

    return $handicap->getDifferential();
    return view('welcome');
});

