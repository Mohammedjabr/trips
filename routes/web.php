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

use App\Trip;

Route::get('/', function () {

    $trip = Trip::where('id', '>', 1)->where('active', true)->first();
    $trip->title = "رحلة جديدة";
    $trip->save();
    dd($trip);

    /*$trip = new Trip();
    $trip->title = "Trip to Istanbul";
    $trip->description = "Trip to Istanbul .. 3 days";
    $trip->details = "Trip to Istanbul .. 3 days Trip to Istanbul .. 3 days ";
    $trip->price = 450;
    $trip->trans_method = "plane";
    $trip->from = "2019-03-20";
    $trip->to = "2019-03-25";
    $trip->user_id = 1;
    $trip->category_id = 1;
    $trip->save();*/

    dd($trip);


    /*config(['example.a'=>'Hello World']);
    return config('example.a');*/
//    return view('welcome');
});
