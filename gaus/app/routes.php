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
Route::get('/','HomeController@indexHome');
Route::get('/read/{slug}','HomeController@singePost');
Route::get('/pages/{slug}','HomeController@singePage');
Route::get('/portofolio/{slug}','HomeController@singePortofolio');
Route::get('/news','HomeController@news');
Route::get('/portofolio', 'HomeController@proyek');
Route::get('/contact','HomeController@contact');

// Admin Panel

Route::get('/panel',array ('as' => 'panel','uses'=>'PanelController@login'));
Route::get('/login',array ('as' => 'panel','uses'=>'PanelController@login'));
Route::get('/panel/home',array ('before'=>'auth','as' => 'panel-home','uses'=>'PanelController@home'));
Route::get('/panel/edit_profil',array ('before'=>'auth','as' => 'edit-profil','uses'=>'PanelController@edit_profil'));
Route::get('/panel/identitas_webs',array('before'=>'auth','uses' => 'PanelController@identitas_webs'));
Route::get('/panel/home/out',array('as' =>'logout','uses'=>'PanelController@keluar'));
Route::get('/panel/pages',array('as'=>'pages','uses'=>'PanelController@pages'));
Route::get('/panel/pages/add',array('before'=>'auth','uses'=>'PanelController@pages_add'));
Route::get('/panel/pages/del/{id}',array('before'=> 'auth','uses'=>'PanelController@pages_del'));
Route::get('/panel/pages/edit/{id}',array('before'=> 'auth','uses'=>'PanelController@pages_edit'));
Route::get('/panel/slider',array('before'=>'auth','uses'=>'PanelController@slider'));
Route::get('/panel/slider/add',array('before','auth','uses'=>'PanelController@slider_add'));
Route::get('/panel/slider/edit/{id}',array('before'=> 'auth' , 'uses' => 'PanelController@slider_edit'));
Route::get('/panel/slider/del/{id}',array('before'=> 'auth' , 'uses' => 'PanelController@delete_slider'));
Route::get('/panel/news',array('before' => 'auth', 'uses' => 'PanelController@news'));
Route::get('/panel/news/add',array('before' => 'auth', 'uses' => 'PanelController@news_add'));
Route::get('/panel/news/edit/{id}',array('before' => 'auth', 'uses' => 'PanelController@news_edit'));
Route::get('/panel/news/del/{id}',array('before' => 'auth', 'uses' => 'PanelController@news_del'));
Route::get('/panel/portofolio',array('before' => 'auth', 'uses' => 'PanelController@portofolio'));
Route::get('/panel/portofolio/add',array('before' => 'auth' , 'uses' => 'PanelController@portofolio_add'));
Route::get('/panel/portofolio/edit/{id}',array('before'=> 'auth','uses' => 'PanelController@portofolio_edit'));
Route::get('/panel/portofolio/del/{id}',array('before' => 'auth', 'uses' => 'PanelController@portofolio_del'));
Route::get('/panel/association',array('before' => 'auth','uses' => 'PanelController@association'));
Route::get('/panel/association/add',array('before' => 'auth', 'uses' => 'PanelController@association_add'));
Route::get('/panel/association/edit/{id}',array('before' => 'auth', 'uses' => 'PanelController@association_edit'));
Route::get('/panel/association/del/{id}',array('before' => 'auth', 'uses' => 'PanelController@assosiasi_del'));
Route::get('/panel/gambar_webs',array ('before' => 'auth', 'uses' => 'PanelController@gambar_webs'));
Route::get('/panel/menu',array ('before' => 'auth', 'uses' => 'PanelController@menu'));
Route::get('/panel/menu/del/{id}',array ('before' => 'auth', 'uses' => 'PanelController@del_menu'));
Route::get('/panel/menu/add',array ('before' => 'auth', 'uses' => 'PanelController@add_menu'));
Route::get('/panel/menu/edit/{id}',array ('before' => 'auth', 'uses' => 'PanelController@edit_menu'));
Route::get('/panel/contact-me',array ('before' => 'auth', 'uses' => 'PanelController@contact_me'));
Route::get('/panel/contact-me/replay/{id}',array ('before' => 'auth', 'uses' => 'PanelController@contact_me_rep'));

// POST ROUTE
Route::post('/auth','PanelController@doLogin');
Route::post('/panel/edit_profil/save','PanelController@edit_profil_save');
Route::post('/panel/identitas_webs/save','PanelController@identitas_webs_save');
Route::post('/panel/pages/save','PanelController@pages_save');
Route::post('/panel/slider/save','PanelController@slider_save');
Route::post('/panel/news/save','PanelController@news_save');
Route::post('/panel/portofolio/save','PanelController@portofolio_save');
Route::post('/panel/association/save','PanelController@association_save');
Route::post('/contact/save','HomeController@contact_save');
Route::post('/panel/menu/save','PanelController@save_menu');
Route::post('/panel/gambar_webs/save','PanelController@gambar_webs_save');
Route::post('/panel/contact-me/save','PanelController@rep_contact_aksi');