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

Route::get('/panel',array ('as' => 'panel','uses'=>'PanelController@login'));
Route::get('/login',array ('as' => 'panel','uses'=>'PanelController@login'));
Route::get('/panel/home',array ('before'=>'auth','as' => 'panel-home','uses'=>'PanelController@home'));

Route::get('panel/home/out',array('as' =>'logout','uses'=>'PanelController@keluar'));
Route::post('/auth','PanelController@doLogin');