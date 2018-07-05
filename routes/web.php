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

Route::post('/',function() {
	return view('FYP');
});
Route::get('/', function () {
    return view('FYP');
});
Route::get('FYP', function () {
    return view('FYP');
});
Route::get('appeal', function () {
    return view('appeal');
});
Route::post('/pinverify', 'appealController@index');

Route::get('/details', function(){
	return view('details');
});

Route::post('/submitapp', 'appealController@submit');
