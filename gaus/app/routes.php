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

// GET ROUTE
Route::get('/', function()
{
	$identitas = DB::table('identitas')->first();
	$data = array(
			'title'			=> 'Hello World',
			'icon'			=> $identitas->favicon,
			'm_deskripsi'	=> $identitas->meta_deskripsi,
			'm_keyword'	=> $identitas->meta_keyword,
	);

	return View::make('hello',$data);
});

Route::get('/panel',array ('as' => 'panel','uses'=>'PanelController@login'));
Route::get('/login',array ('as' => 'panel','uses'=>'PanelController@login'));
Route::get('/panel/home',array ('before'=>'auth','as' => 'panel-home','uses'=>'PanelController@home'));
Route::get('/panel/edit_profil',array ('before'=>'auth','as' => 'edit-profil','uses'=>'PanelController@edit_profil'));
Route::get('/panel/identitas_webs',array('before'=>'auth','uses' => 'PanelController@identitas_webs'));
Route::get('/panel/home/out',array('as' =>'logout','uses'=>'PanelController@keluar'));
Route::get('/panel/pages',array('as'=>'pages','uses'=>'PanelController@pages'));
Route::get('/panel/pages/add',array('before'=>'auth','uses'=>'PanelController@pages_add'));

// POST ROUTE
Route::post('/auth','PanelController@doLogin');
Route::post('/panel/edit_profil/save','PanelController@edit_profil_save');
Route::post('/panel/identitas_webs/save','PanelController@identitas_webs_save');
Route::post('/panel/pages/save','PanelController@pages_save');