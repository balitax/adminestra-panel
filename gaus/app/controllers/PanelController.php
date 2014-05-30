<?php

class PanelController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /panel
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function login()
	{
		$data = array(
			'title'		=> 'Selamat Datang Administrator - Mitra Panel',
		);
		return View::make('panel.index',$data);
	}

	public function keluar()
	{
		Auth::logout();
		$logout = '
			<div class="alert fade in alert-success">
	            <i class="icon-remove close" data-dismiss="alert"></i>
	            Anda Berhasil Logout.
	        </div>
		';
		return Redirect::to('panel')->with('logout',$logout);
	}

	public function doLogin()
	{
		$data = array(
			'username'		=> Input::get('username'),
			'password'		=> Input::get('password'),
		);

		if(Auth::attempt($data)){
			return Redirect::to('panel/home');
		}
		else {
			$eror = '
			<div class="alert fade in alert-danger">
	            <i class="icon-remove close" data-dismiss="alert"></i>
	            Username / Password Anda Salah.
	        </div>
			';
			return Redirect::to('panel')->
				with('eror',$eror);
		}
	}

	public function home()
	{
		$data = array(
			'title'		=> 'Panel Administrator - Mitra Desain',
		);
		return View::make('panel.home',$data);
	}
	/**
	 * Show the form for creating a new resource.
	 * GET /panel/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /panel
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /panel/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /panel/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /panel/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /panel/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}