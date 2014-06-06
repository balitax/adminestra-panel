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
			'no_fax'			=> $identitas->no_fax,
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
		$no_fax 		= Input::get('no_fax');
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
				'no_fax'			=> $no_fax,
				'meta_deskripsi'	=> $meta_deskripsi,
				'meta_keyword'		=> $meta_keyword,
				'favicon'			=> $filename
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
				'no_fax'			=> $no_fax,
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

	public function gambar_webs()
	{

		$gbr_webs = DB::table('gbr_webs')->first();
		$data = array(
			'title'			=> 'Gambar Website - Bee Panel',
			'id'			=> $gbr_webs->id,
			'logo_webs'		=> $gbr_webs->gbr_logo,
			'bg_webs'		=> $gbr_webs->gbr_bg
		);
		return View::make('panel.gambar',$data);

	}

	function gambar_webs_save()
	{
		$id 		= Input::get('id');
		$logo_webs 	= Input::file('logo_webs');
		$bg_webs 	= Input::file('bg_webs');

		if(empty($logo_webs)){

			$gbr_lama2 = DB::table('gbr_webs')->select('gbr_bg')->where('id',$id)->first();
			File::delete('file/images/'.$gbr_lama2->gbr_bg);

			$bg_webs 			= Input::file('bg_webs');
			$destinationPath 	= 'file/images';
			$filename1 			= $bg_webs;
			$filename1 			= $bg_webs->getClientOriginalName();
			$upload 			= Input::file('bg_webs')->move($destinationPath,$filename1);

			DB::table('gbr_webs')
		 	->where('id',$id)
		 	->update(array(
		 		'gbr_bg'		=> $filename1,
		 	));

		 	$berhasil = '
			<div class="alert alert-success fade in">
				<i class="icon-remove close" data-dismiss="alert"></i>
				Data Berhasil Di Perbarui.
			</div>
			';
			return Redirect::to('panel/gambar_webs')->
				with('sukses',$berhasil);

		}
		elseif(empty($bg_webs)){
			$gbr_lama = DB::table('gbr_webs')->select('gbr_logo')->where('id',$id)->first();
			File::delete('file/images/'.$gbr_lama->gbr_logo);

			$logo 				= Input::file('logo_webs');
			$destinationPath 	= 'file/images';
			$filename1 			= $logo;
			$filename1 			= $logo->getClientOriginalName();
			$upload 			= Input::file('logo_webs')->move($destinationPath,$filename1);

		 	DB::table('gbr_webs')
		 	->where('id',$id)
		 	->update(array(
		 		'gbr_logo'		=> $filename1,
		 	));

		 	$berhasil = '
			<div class="alert alert-success fade in">
				<i class="icon-remove close" data-dismiss="alert"></i>
				Data Berhasil Di Perbarui.
			</div>
			';
			return Redirect::to('panel/gambar_webs')->
				with('sukses',$berhasil);
		}
		else {

			$gbr_lama = DB::table('gbr_webs')->select('gbr_logo')->where('id',$id)->first();
			File::delete('file/images/'.$gbr_lama->gbr_logo);

			$logo 				= Input::file('logo_webs');
			$destinationPath 	= 'file/images';
			$filename1 			= $logo;
			$filename1 			= $logo->getClientOriginalName();
			$upload 			= Input::file('logo_webs')->move($destinationPath,$filename1);

			$gbr_lama2 = DB::table('gbr_webs')->select('gbr_bg')->where('id',$id)->first();
			File::delete('file/images/'.$gbr_lama2->gbr_bg);

			$bg_webs 			= Input::file('bg_webs');
			$destinationPath 	= 'file/images';
			$filename2 			= $bg_webs;
			$filename2 			= $bg_webs->getClientOriginalName();
			$upload 			= Input::file('bg_webs')->move($destinationPath,$filename2);

			DB::table('gbr_webs')
		 	->where('id',$id)
		 	->update(array(
		 		'gbr_logo'		=> $filename1,
		 		'gbr_bg'		=> $filename2,
		 	));

		 	$berhasil = '
			<div class="alert alert-success fade in">
				<i class="icon-remove close" data-dismiss="alert"></i>
				Data Berhasil Di Perbarui.
			</div>
			';
			return Redirect::to('panel/gambar_webs')->
				with('sukses',$berhasil);

		}


	}

	public function pages()
	{

		$pages = DB::table('pages')->get();
		$data = array(
			'title'		=> 'Pages Website - Bee Panel',
			'pages'		=> $pages,
		);
		return View::make('panel.pages',$data);

	}

	public function pages_add()
	{
		$data = array(
			'title'			=> 'Tambah Halaman - Bee Panel',
			'status'		=> 'baru',
			'id_halaman'	=> '',
			'judul_halaman'	=> '',
			'konten_halaman'=> '',

		);
		return View::make('panel.pages_form',$data);
	}

	function pages_del($kode = '')
	{

		DB::table('pages')
		->where('id',$kode)
		->delete();

		$berhasil = '
			<div class="alert alert-success fade in">
				<i class="icon-remove close" data-dismiss="alert"></i>
				Data Berhasil Di Hapus.
			</div>
			';
			return Redirect::to('panel/pages')->
				with('sukses',$berhasil);

	}

	public function pages_edit($kode = '')
	{
		$pages 	= DB::table('pages')->where('id',$kode)->first(); 
		$data 	= array(
			'title'			=> 'Edit Halaman - Bee Panel',
			'status'		=> 'edit',
			'id_halaman'	=> $pages->id,
			'judul_halaman'	=> $pages->title,
			'konten_halaman'=> $pages->content,
		);
		return View::make('panel.pages_form',$data);
	}

	function pages_save()
	{
		$id_halaman 	= Input::get('id_halaman');
		$status 		= Input::get('status');
		$judul_halaman 	= Input::get('judul_halaman');
		$konten_halaman = Input::get('konten_halaman');
		$status_hal		= Input::get('status_hal');

		$slug = Input::get('judul_halaman');
	    setlocale(LC_ALL, 'en_US.UTF8');
	    $delimiter = '-';
	    $slug = iconv('UTF-8', 'ASCII//TRANSLIT', $slug);
	    $slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $slug);
	    $slug = preg_replace("/[\/_|+ -]+/", $delimiter, $slug);
	    $slug = strtolower(trim($slug, $delimiter));

		if($status == 'baru'){

			echo "STATUS HALAMAN BARU";
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
			echo "STATUS HALAMAN LAMA";

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

	public function slider()
	{
		$slider = DB::table('slider')->get();
		$data = array(
			'title'		=> 'Slider Website - Bee Panel',
			'slider'	=> $slider,
		);
		return View::make('panel.slider',$data);
	}

	public function slider_add()
	{
		$data = array(
			'title'			=> 'Tambah Slider - Bee Panel',
			'status'		=> 'baru',
			'id'			=> '',
			'judul'			=> '',
			'deskripsi'		=> ''

		);
		return View::make('panel.slider_form',$data);
	}

	public function slider_edit($kode = '')
	{
		$slider = DB::table('slider')->where('id',$kode)->first();
		$data = array(
			'title'			=> 'Edit Slider - Bee Panel',
			'status'		=> 'edit',
			'id'			=> $slider->id,
			'judul'			=> $slider->nama_slider,
			'deskripsi'		=> $slider->deskripsi

		);
		return View::make('panel.slider_form',$data);
	}

	function delete_slider($kode = '')
	{

		$slide_lama = DB::table('slider')->select('image_slider')->where('id',$kode)->first();
		File::delete('file/images/'.$slide_lama->image_slider);
		DB::table('slider')->where('id',$kode)->delete();
		$berhasil = '
			<div class="alert alert-success fade in">
				<i class="icon-remove close" data-dismiss="alert"></i>
				Data Berhasil Di Hapus.
			</div>
			';
			return Redirect::to('panel/slider')->
				with('sukses',$berhasil);

	}

	function slider_save()
	{
		$id 		= Input::get('id');
		$status 	= Input::get('status');
		$judul 		= Input::get('judul');
		$deskripsi  = Input::get('deskripsi');
		$slid_file 	= Input::file('img_slider');

		 if($status == 'baru'){

		 	$slide = Input::file('img_slider');
			$destinationPath = 'file/images';
			$filename = $slide;
			$filename = $slide->getClientOriginalName();
			$upload = Input::file('img_slider')->move($destinationPath,$filename);

		 	DB::table('slider')
		 	->insert(array(
		 		'nama_slider'	=> $judul,
		 		'image_slider'	=> $filename,
		 		'deskripsi'		=> $deskripsi
		 	));

		 	$berhasil = '
			<div class="alert alert-success fade in">
				<i class="icon-remove close" data-dismiss="alert"></i>
				Data Berhasil Di Simpan.
			</div>
			';
			return Redirect::to('panel/slider')->
				with('sukses',$berhasil);

		 }
		 else {

		 	if(empty($slid_file)){
		 		DB::table('slider')
			 	->where('id',$id)
			 	->update(
			 		array(
			 		'nama_slider'	=> $judul,
			 		'deskripsi'		=> $deskripsi
			 	));

			 	$berhasil = '
				<div class="alert alert-success fade in">
					<i class="icon-remove close" data-dismiss="alert"></i>
					Data Berhasil Di Perbarui.
				</div>
				';
				return Redirect::to('panel/slider')->
					with('sukses',$berhasil);
		 	}
		 	else {

		 		$slide_lama = DB::table('slider')->select('image_slider')->where('id',$id)->first();
				File::delete('file/images/'.$slide_lama->image_slider);

				$slide = Input::file('img_slider');
				$destinationPath = 'file/images';
				$filename = $slide;
				$filename = $slide->getClientOriginalName();
				$upload = Input::file('img_slider')->move($destinationPath,$filename);

			 	DB::table('slider')
			 	->where('id',$id)
			 	->update(array(
			 		'nama_slider'	=> $judul,
			 		'image_slider'	=> $filename,
			 		'deskripsi'		=> $deskripsi
			 	));

			 	$berhasil = '
				<div class="alert alert-success fade in">
					<i class="icon-remove close" data-dismiss="alert"></i>
					Data Berhasil Di Perbarui.
				</div>
				';
				return Redirect::to('panel/slider')->
					with('sukses',$berhasil);

		 	}

		 }
	}

	public function contact_me()
	{
		$contact = DB::table('contact')->get();
		$data = array(
			'title'			=> 'Kontak Masuk - Bee Panel',
			'contact'		=> $contact,
		);
		return View::make('panel.contact',$data);
	}

	public function contact_me_rep($kode = '')
	{
		$contact = DB::table('contact')->where('id',$kode)->first();
		$data = array(
			'title'			=> 'Balas Pesan Masuk - Bee Panel',
			'id'			=> $contact->id,
			'nama'			=> $contact->nama,
			'email'			=> $contact->email,
			'subjek'		=> $contact->subjek,
			'pesan'			=> $contact->pesan
		);
		return View::make('panel.rep_contact',$data);
	}

	public function rep_contact_aksi()
	{	
		$user = array(
		  'email'	=> Input::get('email_rep'),
		  'name'	=> Input::get('nama')
		);
		 
		$data = array(
		  'pesan'	=> Input::get('pesan_rep'),
		  'name'  	=> $user['name'],
		  'nama_com'=> 'PT Mulia Karya Prima'
		);
		 
		Mail::send('emails.welcome', $data, function($message) use ($user)
		{
		  $message->from('muliakaryaprima@msn.com ', 'PT Mulia Karya Prima');
		  $message->to($user['email'], $user['name'])->subject(Input::get('subjek_rep'));
		});

		$berhasil = '
			<div class="alert alert-success fade in">
				<i class="icon-remove close" data-dismiss="alert"></i>
				Email Berhasil Di Kirim.
			</div>
			';
			return Redirect::to('panel/contact-me')->
				with('sukses',$berhasil);

	}

	public function menu()
	{
		$menu = DB::table('menu')->get();
		$data = array(
			'title'		=> 'Menu Website - Bee Panel',
			'menu'		=> $menu,
		);
		return View::make('panel.menu',$data);
	}

	public function save_menu()
	{
		$kode			= Input::get('kode');
		$status			= Input::get('status');
		$menu_name		= Input::get('menu_name');
		$parent_id		= Input::get('parent_id');
		$content_id		= Input::get('content_id');
		$view_type 		= Input::get('view_type');
		$status_menu	= Input::get('status_menu');
		$slug 			= \Str::slug($menu_name);

		if($status == 'baru'){
			DB::table('menu')->insert(array(
				'menu_name'		=> $menu_name,
				'menu_url'		=> $slug,
				'parent_id'		=> $parent_id,
				'content_id'	=> $content_id,
				'view_type'		=> $view_type,
				'status'		=> $status_menu
			));

			$berhasil = '
			<div class="alert alert-success fade in">
				<i class="icon-remove close" data-dismiss="alert"></i>
				Data Berhasil Di Simpan.
			</div>
			';
			return Redirect::to('panel/menu')->
				with('sukses',$berhasil);
		}
		else {
			DB::table('menu')->where('menu_id',$kode)->update(array(
				'menu_name'		=> $menu_name,
				'menu_url'		=> $slug,
				'parent_id'		=> $parent_id,
				'content_id'	=> $content_id,
				'view_type'		=> $view_type,
				'status'		=> $status_menu
			));

			$berhasil = '
			<div class="alert alert-success fade in">
				<i class="icon-remove close" data-dismiss="alert"></i>
				Data Berhasil Di Simpan.
			</div>
			';
			return Redirect::to('panel/menu')->
				with('sukses',$berhasil);
		}
	}

	public function add_menu($value='')
	{
		$menus = DB::table('menu')->get();
		$data = array(
			'title'			=> 'Tambah Menu - Bee Panel',
			'status'		=> 'baru',
			'kode'			=> '',
			'menu_name'		=> '',
			'content_id'	=> '',
			'menus'			=> $menus

		);
		return View::make('panel.menu_form',$data);
	}

	public function edit_menu($kode ='')
	{
		$menus 		= DB::table('menu')->get();
		$menu_edit 	= DB::table('menu')->where('menu_id',$kode)->first();
		$data = array(
			'title'			=> 'Edit Menu - Bee Panel',
			'status'		=> 'edit',
			'kode'			=> $menu_edit->menu_id,
			'menu_name'		=> $menu_edit->menu_name,
			'content_id'	=> $menu_edit->content_id,
			'menus'			=> $menus

		);
		return View::make('panel.menu_form',$data);
	}

	public function del_menu($kode='')
	{
		DB::table('menu')
		->where('menu_id',$kode)
		->delete();


		$berhasil = '
			<div class="alert alert-success fade in">
				<i class="icon-remove close" data-dismiss="alert"></i>
				Data Berhasil Di Hapus.
			</div>
			';
			return Redirect::to('panel/menu')->
				with('sukses',$berhasil);
	}

	public function news()
	{
		$news = DB::table('articles')->get();
		$data = array(
			'title'		=> 'News and Events Website - Bee Panel',
			'news'		=> $news,
		);
		return View::make('panel.news',$data);
	}

	public function news_add()
	{
		$data = array(
			'title'			=> 'Tambah Artikel - Bee Panel',
			'status'		=> 'baru',
			'id'			=> '',
			'judul'			=> '',
			'konten'		=> ''

		);
		return View::make('panel.news_form',$data);
	}

	public function news_edit($kode = '')
	{
		$news = DB::table('articles')->where('id',$kode)->first();
		$data = array(
			'title'			=> 'Tambah Artikel - Bee Panel',
			'status'		=> 'edit',
			'id'			=> $news->id,
			'judul'			=> $news->title,
			'konten'		=> $news->content

		);
		return View::make('panel.news_form',$data);
	}

	function news_save()
	{

		$id 			= Input::get('id');
		$status 		= Input::get('status');
		$judul 			= Input::get('judul');
		$img_header 	= Input::file('img_header');
		$konten 		= Input::get('konten');
		$kategori		= Input::get('kategori');
		$status_news 	= Input::get('status_news');
		$slug 			= \Str::slug($judul);

		if($status == 'baru'){

			$img_news = Input::file('img_header');
			$destinationPath = 'file/images_news';
			$filename = $img_news;
			$filename = $img_news->getClientOriginalName();
			$upload = Input::file('img_header')->move($destinationPath,$filename);

			DB::table('articles')->insert(array(
				'title'			=> $judul,
				'slug_articles'	=> $slug,
				'date'			=> date('y-m-d'),
				'time'			=> date('h:m:s'),
				'img_header'	=> $filename,
				'content'		=> $konten,
				'category'		=> $kategori,
				'status'		=> $status_news
			));

			$berhasil = '
				<div class="alert alert-success fade in">
					<i class="icon-remove close" data-dismiss="alert"></i>
					Data Berhasil Di Perbarui.
				</div>
				';
				return Redirect::to('panel/news')->
					with('sukses',$berhasil);


		}
		else {

			if(empty($img_header)){

				DB::table('articles')
				->where('id',$id)
				->update(array(
				'title'			=> $judul,
				'slug_articles'	=> $slug,
				'date'			=> date('y-m-d'),
				'time'			=> date('h:m:s'),
				'content'		=> $konten,
				'category'		=> $kategori,
				'status'		=> $status_news
			));

			$berhasil = '
				<div class="alert alert-success fade in">
					<i class="icon-remove close" data-dismiss="alert"></i>
					Data Berhasil Di Perbarui.
				</div>
				';
				return Redirect::to('panel/news')->
					with('sukses',$berhasil);

			}
			else {

				$news_lama = DB::table('articles')->select('img_header')->where('id',$kode)->first();
				File::delete('file/images_news/'.$news_lama->img_header);

				$img_news = Input::file('img_header');
				$destinationPath = 'file/images_news';
				$filename = $img_news;
				$filename = $img_news->getClientOriginalName();
				$upload = Input::file('img_header')->move($destinationPath,$filename);

				DB::table('articles')
				->where('id',$id)
				->update(array(
					'title'			=> $judul,
					'slug_articles'	=> $slug,
					'date'			=> date('y-m-d'),
					'time'			=> date('h:m:s'),
					'img_header'	=> $filename,
					'content'		=> $konten,
					'category'		=> $kategori,
					'status'		=> $status_news
				));

				$berhasil = '
				<div class="alert alert-success fade in">
					<i class="icon-remove close" data-dismiss="alert"></i>
					Data Berhasil Di Perbarui.
				</div>
				';
				return Redirect::to('panel/news')->
					with('sukses',$berhasil);


			}

		}


	}

	function news_del($kode = '')
	{

		$news_lama = DB::table('articles')->select('img_header')->where('id',$kode)->first();
		File::delete('file/images_news/'.$news_lama->img_header);

		DB::table('articles')
		->where('id',$kode)
		->delete();


		$berhasil = '
			<div class="alert alert-success fade in">
				<i class="icon-remove close" data-dismiss="alert"></i>
				Data Berhasil Di Hapus.
			</div>
			';
			return Redirect::to('panel/news')->
				with('sukses',$berhasil);

	}

	public function portofolio()
	{
		$porto  = DB::table('portofolio')->get();
		$data = array(
			'title'		=> 'Portofolio - Bee Panel',
			'porto'		=> $porto,
		);
		return View::make('panel.porto',$data);
	}

	public function portofolio_add()
	{
		$data = array(
			'title'			=> 'Tambah Portofolio - Bee Panel',
			'status'		=> 'baru',
			'id'			=> '',
			'judul'			=> '',
			'deskripsi'		=> '',

		);
		return View::make('panel.porto_form',$data);
	}

	public function portofolio_edit($kode = '')
	{

		$porto = DB::table('portofolio')->where('id',$kode)->first();
		$data = array(
			'title'			=> 'Edit Portofolio - Bee Panel',
			'status'		=> 'edit',
			'id'			=> $porto->id,
			'judul'			=> $porto->title,
			'deskripsi'		=> $porto->description,

		);
		return View::make('panel.porto_form',$data);
	}

	public function portofolio_del($kode = '')
	{
		$porto_lama = DB::table('portofolio')->select('img_porto')->where('id',$kode)->first();
		File::delete('file/images_portofolio/'.$porto_lama->img_porto);

		DB::table('portofolio')
		->where('id',$kode)
		->delete();


		$berhasil = '
			<div class="alert alert-success fade in">
				<i class="icon-remove close" data-dismiss="alert"></i>
				Data Berhasil Di Hapus.
			</div>
			';
			return Redirect::to('panel/portofolio')->
				with('sukses',$berhasil);
	}

	function portofolio_save()
	{

		$id 			= Input::get('id');
		$status 		= Input::get('status');
		$judul 			= Input::get('judul');
		$img_porto 		= Input::file('img_porto');
		$deskripsi 		= Input::get('deskripsi');
		$status_porto 	= Input::get('status_porto');
		$slug 			= \Str::slug($judul);

		if($status == 'baru'){

			$img_news = Input::file('img_porto');
			$destinationPath = 'file/images_portofolio';
			$filename = $img_news;
			$filename = $img_news->getClientOriginalName();
			$upload = Input::file('img_porto')->move($destinationPath,$filename);

			DB::table('portofolio')->insert(array(
				'title'			=> $judul,
				'slug_porto'	=> $slug,
				'img_porto'		=> $filename,
				'description'	=> $deskripsi,
				'date'			=> date('y-m-d'),
				'status'		=> $status_porto
			));

			$berhasil = '
				<div class="alert alert-success fade in">
					<i class="icon-remove close" data-dismiss="alert"></i>
					Data Berhasil Di Perbarui.
				</div>
				';
				return Redirect::to('panel/portofolio')->
					with('sukses',$berhasil);


		}
		else {

			if(empty($img_porto)){

				DB::table('portofolio')
				->where('id',$id)
				->update(array(
				'title'			=> $judul,
				'slug_porto'	=> $slug,
				'description'	=> $deskripsi,
				'date'			=> date('y-m-d'),
				'status'		=> $status_porto
			));

			$berhasil = '
				<div class="alert alert-success fade in">
					<i class="icon-remove close" data-dismiss="alert"></i>
					Data Berhasil Di Perbarui.
				</div>
				';
				return Redirect::to('panel/portofolio')->
					with('sukses',$berhasil);

			}
			else {

				$porto_lama = DB::table('portofolio')->select('img_porto')->where('id',$id)->first();
				File::delete('file/images_portofolio/'.$porto_lama->img_porto);

				$img_news = Input::file('img_porto');
				$destinationPath = 'file/images_portofolio';
				$filename = $img_news;
				$filename = $img_news->getClientOriginalName();
				$upload = Input::file('img_porto')->move($destinationPath,$filename);

				DB::table('portofolio')
				->where('id',$id)
				->update(array(
					'title'			=> $judul,
					'slug_porto'	=> $slug,
					'img_porto'		=> $filename,
					'description'	=> $deskripsi,
					'date'			=> date('y-m-d'),
					'status'		=> $status_porto
				));

				$berhasil = '
				<div class="alert alert-success fade in">
					<i class="icon-remove close" data-dismiss="alert"></i>
					Data Berhasil Di Perbarui.
				</div>
				';
				return Redirect::to('panel/portofolio')->
					with('sukses',$berhasil);


			}

		}


	}

	public function association()
	{
		$association  = DB::table('association')->get();
		$data = array(
			'title'				=> 'Association - Bee Panel',
			'association'		=> $association,
		);
		return View::make('panel.client',$data);
	}

	public function association_add()
	{
		$data = array(
			'title'					=> 'Tambah Association - Bee Panel',
			'status'				=> 'baru',
			'id'					=> '',
			'nama_perusahaan'		=> '',

		);
		return View::make('panel.client_form',$data);
	}

	function association_edit($kode = '')
	{

		$asso = DB::table('association')->where('id',$kode)->first();
		$data = array(
			'title'					=> 'Edit Association - Bee Panel',
			'status'				=> 'edit',
			'id'					=>  $asso->id,
			'nama_perusahaan'		=>  $asso->nama_perusahaan,
			'image_perusahaan'		=> $asso->image_perusahaan,

		);
		return View::make('panel.client_form',$data);
	}

	public function assosiasi_del($kode = '')
	{
		$asso_lama = DB::table('association')->select('image_perusahaan')->where('id',$kode)->first();
		File::delete('file/img_assosiasi/'.$asso_lama->image_perusahaan);

		DB::table('association')
		->where('id',$kode)
		->delete();


		$berhasil = '
			<div class="alert alert-success fade in">
				<i class="icon-remove close" data-dismiss="alert"></i>
				Data Berhasil Di Hapus.
			</div>
			';
			return Redirect::to('panel/association')->
				with('sukses',$berhasil);
	}

	function association_save()
	{

		$id 				= Input::get('id');
		$status 			= Input::get('status');
		$nama_perusahaan 	= Input::get('nama_perusahaan');
		$gambar 			= Input::file('img_perusahaan');

		if($status == 'baru'){

			$img_perusahaan = Input::file('img_perusahaan');
			$destinationPath = 'file/img_assosiasi';
			$filename = $img_perusahaan;
			$filename = $img_perusahaan->getClientOriginalName();
			$upload = Input::file('img_perusahaan')->move($destinationPath,$filename);

			DB::table('association')->insert(array(
				'nama_perusahaan'	=> $nama_perusahaan,
				'image_perusahaan'	=> $filename
			));

			$berhasil = '
				<div class="alert alert-success fade in">
					<i class="icon-remove close" data-dismiss="alert"></i>
					Data Berhasil Di Simpan.
				</div>
				';
				return Redirect::to('panel/association')->
					with('sukses',$berhasil);
		}
		else {

			if(empty($gambar)){

				DB::table('association')
				->where('id',$id)
				->update(array(
					'nama_perusahaan'	=> $nama_perusahaan,
				));

			$berhasil = '
				<div class="alert alert-success fade in">
					<i class="icon-remove close" data-dismiss="alert"></i>
					Data Berhasil Di Perbarui.
				</div>
				';
				return Redirect::to('panel/association')->
					with('sukses',$berhasil);

			}
			else {

				$asso_lama = DB::table('association')->select('image_perusahaan')->where('id',$id)->first();
				File::delete('file/img_assosiasi/'.$asso_lama->image_perusahaan);

				$img_perus = Input::file('img_perusahaan');
				$destinationPath = 'file/img_assosiasi';
				$filename2 = $img_perus;
				$filename2 = $img_perus->getClientOriginalName();
				$upload = Input::file('img_perusahaan')->move($destinationPath,$filename2);

				DB::table('association')
				->where('id',$id)
				->update(array(
					'nama_perusahaan'	=> $nama_perusahaan,
					'image_perusahaan'	=> $filename2
				));

				$berhasil = '
				<div class="alert alert-success fade in">
					<i class="icon-remove close" data-dismiss="alert"></i>
					Data Berhasil Di Perbarui.
				</div>
				';
				return Redirect::to('panel/association')->
					with('sukses',$berhasil);


			}

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