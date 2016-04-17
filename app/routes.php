<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
/*
Route::post('request', function() 
{
	//$data = Input::all();
	DB::table('requests')->insert(array('lat' => '1', 'long' => '2'));
	return "Uploaded";
});*/
Route::put('request', function()
{
	//$data = Input::all();
	//DB::table('requests')->insert(array('lat' => '4', 'long' => $data));
	return "upload";
});
