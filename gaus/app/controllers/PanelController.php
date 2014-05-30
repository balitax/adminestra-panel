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
			'title'		=> 'Dashboard - Bee Panel',
		);
		return View::make('panel.home',$data);
	}

	public function edit_profil()
	{
		$sesi = Auth::user();
		$user = DB::table('users')->where('username',$sesi->username)->first();
		$data = array(
			'title'		=> 'Edit Profil - Bee Panel',
			'id'		=> $user->id, 
			'nama'		=> $user->name,
			'username'	=> $user->username,
			'email'		=> $user->email,
		);
		return View::make('panel.edit_profil',$data);
	}

	function edit_profil_save()
	{
		$id = Input::get('id');
		$password = Input::get('password');

		if(!empty($password)){
			DB::table('users')
			->where('id',$id)
			->update(array(
				'name'		=> Input::get('nama'),
				'username'	=> Input::get('username'),
				'password'	=> Hash::make(Input::get('password')),
				'email'		=> Input::get('email'),
			));
			$berhasil = '
			<div class="alert alert-success fade in">
				<i class="icon-remove close" data-dismiss="alert"></i>
				Data Berhasil Di Perbarui.
			</div>
			';
			return Redirect::to('panel/edit_profil')->
				with('sukses',$berhasil);
		}
		else {
			DB::table('users')
			->where('id',$id)
			->update(array(
				'name'		=> Input::get('nama'),
				'username'	=> Input::get('username'),
				'password'	=> 'HADE',
				'email'		=> Input::get('email'),
			));
			$berhasil = '
			<div class="alert alert-success fade in">
				<i class="icon-remove close" data-dismiss="alert"></i>
				Data Berhasil Di Perbarui.
			</div>
			';
			return Redirect::to('panel/edit_profil')->
				with('sukses',$berhasil);
		}
	}

	public function identitas_webs()
	{

		$identitas = DB::table('identitas')->first();
		$data = array(
			'title'				=> 'Identitas Website - Bee Panel',
			'id_identitas'		=> $identitas->id_identitas,
			'nama_website'		=> $identitas->nama_website,
			'email'				=> $identitas->email,
			'url_webs'			=> $identitas->url,
			'facebook'			=> $identitas->facebook,
			'twitter'			=> $identitas->twitter,
			'alamat'			=> $identitas->alamat,
			'no_telp'			=> $identitas->no_telp,
			'meta_deskripsi'	=> $identitas->meta_deskripsi,
			'meta_keyword'		=> $identitas->meta_keyword,
			'favicon'			=> $identitas->favicon,

		);
		return View::make('panel.identitas_webs',$data);
	}

	function identitas_webs_save()
	{
		$id_identitas 	= Input::get('id_identitas');
		$nama_website 	= Input::get('nama_website');
		$email 			= Input::get('email');
		$url_webs		= Input::get('url_webs');
		$facebook 		= Input::get('facebook');
		$twitter 		= Input::get('twitter');
		$alamat			= Input::get('alamat');
		$no_telp		= Input::get('no_telp');
		$meta_deskripsi	= Input::get('meta_deskripsi');
		$meta_keyword	= Input::get('meta_keyword');
		$favicon 		= Input::file('favicon');

		if(!empty($favicon)){

			$favicon_lama = DB::table('identitas')->select('favicon')->first();
			File::delete($favicon_lama->favicon);

			$favicon = Input::file('favicon');
			$destinationPath = 'file/images';
			$filename = $favicon;
			$filename = $favicon->getClientOriginalName();
			$upload = Input::file('favicon')->move($destinationPath,$filename);

			
			DB::table('identitas')
			->where('id_identitas',$id_identitas)
			->update(array(
				'nama_website'		=> $nama_website,
				'email'				=> $email,
				'url'				=> $url_webs,
				'facebook'			=> $facebook,
				'twitter'			=> $twitter,
				'alamat'			=> $alamat,
				'no_telp'			=> $no_telp,
				'meta_deskripsi'	=> $meta_deskripsi,
				'meta_keyword'		=> $meta_keyword,
				'favicon'			=> $upload
			));
			$berhasil = '
			<div class="alert alert-success fade in">
				<i class="icon-remove close" data-dismiss="alert"></i>
				Data Berhasil Di Perbarui.
			</div>
			';
			return Redirect::to('panel/identitas_webs')->
				with('sukses',$berhasil);
		}
		else {

			DB::table('identitas')
			->where('id_identitas',$id_identitas)
			->update(array(
				'nama_website'		=> $nama_website,
				'email'				=> $email,
				'url'				=> $url_webs,
				'facebook'			=> $facebook,
				'twitter'			=> $twitter,
				'alamat'			=> $alamat,
				'no_telp'			=> $no_telp,
				'meta_deskripsi'	=> $meta_deskripsi,
				'meta_keyword'		=> $meta_keyword,
			));
			$berhasil = '
			<div class="alert alert-success fade in">
				<i class="icon-remove close" data-dismiss="alert"></i>
				Data Berhasil Di Perbarui.
			</div>
			';
			return Redirect::to('panel/identitas_webs')->
				with('sukses',$berhasil);

		}

	}

	public function pages()
	{

		$data = array(
			'title'		=> 'Pages Website - Bee Panel',
		);
		return View::make('panel.pages',$data);

	}

	public function pages_add()
	{
		$data = array(
			'title'			=> 'Tambah Halaman - Bee Panel',
			'status'		=> 'new',
			'id_halaman'	=> '',
			'judul_halaman'	=> '',
			'konten_halaman'=> '',

		);
		return View::make('panel.pages_form',$data);
	}

	function pages_save()
	{
		$id_halaman 	= Input::get('id_halaman');
		$status 		= Input::get('status');
		$judul_halaman 	= Input::get('judul_halaman');
		$konten_halaman = Input::get('konten_halaman');
		$status_hal		= Input::get('status');

		$slug = Input::get('judul_halaman');
	    setlocale(LC_ALL, 'en_US.UTF8');
	    $delimiter = '.';
	    $slug = iconv('UTF-8', 'ASCII//TRANSLIT', $slug);
	    $slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $slug);
	    $slug = preg_replace("/[\/_|+ -]+/", $delimiter, $slug);
	    $slug = strtolower(trim($slug, $delimiter));

		if(Input::get('status') =='new'){

			DB::table('pages')
			->insert(array(
				'title'			=> $judul_halaman,
				'slug_pages'	=> $slug,
				'content'		=> $konten_halaman,
				'status'		=> $status_hal
			));

			$berhasil = '
			<div class="alert alert-success fade in">
				<i class="icon-remove close" data-dismiss="alert"></i>
				Data Berhasil Di Perbarui.
			</div>
			';
			return Redirect::to('panel/pages')->
				with('sukses',$berhasil);

		}
		else {

			DB::table('pages')
			->where('id',$id_halaman)
			->update(array(
				'title'			=> $judul_halaman,
				'slug_pages'	=> $slug,
				'content'		=> $konten_halaman,
				'status'		=> $status_hal
			));

			$berhasil = '
			<div class="alert alert-success fade in">
				<i class="icon-remove close" data-dismiss="alert"></i>
				Data Berhasil Di Perbarui.
			</div>
			';
			return Redirect::to('panel/pages')->
				with('sukses',$berhasil);
		}
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