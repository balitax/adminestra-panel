<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function indexHome()
	{
		$identitas  = DB::table('identitas')->first();
		$slider 	= DB::table('slider')->get();
		$about_home = DB::table('pages')->where('id',2)->first();
		$news 		= DB::table('articles')->paginate(7);
		$porto 		= DB::table('portofolio')->orderby('id','desc')->paginate(3);
		$assosiasi 	= DB::table('association')->orderby('id','desc')->get();
		$gbr_webs 	= DB::table('gbr_webs')->first();
		$menu 		= DB::table('menu')->get();
		$menu_drop  = DB::table('menu')->where('parent_id','!= 0')->get();
		
		$data = array(
			'title'			=> $identitas->nama_website,
			'icon'			=> $identitas->favicon,
			'm_deskripsi'	=> $identitas->meta_deskripsi,
			'm_keyword'		=> $identitas->meta_keyword,
			'telpon'		=> $identitas->no_telp,
			'facebook'		=> $identitas->facebook,
			'twitter'		=> $identitas->twitter,
			'slider'		=> $slider,
			'title_about'	=> $about_home->title,
			'about'			=> strip_tags(substr($about_home->content,0,350)),
			'url_about'		=> $about_home->slug_pages,
			'news'			=> $news,
			'portofolio'	=> $porto,
			'assosiasi'		=> $assosiasi,
			'logo_webs'		=> $gbr_webs->gbr_logo,
			'gbr_bg'		=> $gbr_webs->gbr_bg,
			'menu'			=> $menu,
			'menu_drop'		=> $menu_drop
		);	

	return View::make('home/home',$data);
	}

	public function singePost($slug='')
	{
		$post = DB::table('articles')->where('slug_articles',$slug)->first();
		$identitas  = DB::table('identitas')->first();
		$slider 	= DB::table('slider')->get();
		$news 		= DB::table('articles')->paginate(7);
		$porto 		= DB::table('portofolio')->orderby('id','desc')->paginate(3);
		$assosiasi 	= DB::table('association')->orderby('id','desc')->get();
		$gbr_webs 	= DB::table('gbr_webs')->first();

		$other_news = DB::table('articles')->where('slug_articles','!=',$slug)->paginate(4);
		$news_sdbar = DB::table('articles')->orderby('id','desc')->paginate(4);

		$data = array(
			'title'			=> $post->title,
			'icon'			=> $identitas->favicon,
			'm_deskripsi'	=> strip_tags(substr($post->content,0,400)),
			'm_keyword'		=> $post->title,
			'telpon'		=> $identitas->no_telp,
			'facebook'		=> $identitas->facebook,
			'twitter'		=> $identitas->twitter,
			'news'			=> $news,
			'portofolio'	=> $porto,
			'assosiasi'		=> $assosiasi,
			'title_post'	=> $post->title,
			'date_post'		=> $post->date,
			'img_post'		=> $post->img_header,
			'content_post'	=> $post->content,
			'other_news'	=> $other_news,
			'logo_webs'		=> $gbr_webs->gbr_logo,
			'gbr_bg'		=> $gbr_webs->gbr_bg,
			'berita_sdbar'	=> $news_sdbar
		);	
		return View::make('home/single-post',$data);

	}

	public function singePage($slug='')
	{
		$post = DB::table('pages')->where('slug_pages',$slug)->first();
		$identitas  = DB::table('identitas')->first();
		$news 		= DB::table('articles')->paginate(7);
		$porto 		= DB::table('portofolio')->orderby('id','desc')->paginate(3);
		$assosiasi 	= DB::table('association')->orderby('id','desc')->get();
		$gbr_webs 	= DB::table('gbr_webs')->first();
		$news_sdbar = DB::table('articles')->orderby('id','desc')->paginate(4);
		$other_news = DB::table('articles')->where('slug_articles','!=',$slug)->paginate(4);

		$data = array(
			'title'			=> $post->title. ' - '. $identitas->nama_website,
			'icon'			=> $identitas->favicon,
			'm_deskripsi'	=> strip_tags(substr($post->content,0,400)),
			'm_keyword'		=> $post->title,
			'telpon'		=> $identitas->no_telp,
			'facebook'		=> $identitas->facebook,
			'twitter'		=> $identitas->twitter,
			'news'			=> $news,
			'portofolio'	=> $porto,
			'assosiasi'		=> $assosiasi,
			'title_post'	=> $post->title,
			'content_post'	=> $post->content,
			'logo_webs'		=> $gbr_webs->gbr_logo,
			'gbr_bg'		=> $gbr_webs->gbr_bg,
			'berita_sdbar'	=> $news_sdbar

		);	
		return View::make('home/single-page',$data);

	}

	public function singePortofolio($slug='')
	{
		$portof 		= DB::table('portofolio')->where('slug_porto',$slug)->first();
		$identitas  = DB::table('identitas')->first();
		$slider 	= DB::table('slider')->get();
		$news 		= DB::table('articles')->paginate(7);
		$porto 		= DB::table('portofolio')->orderby('id','desc')->paginate(3);
		$assosiasi 	= DB::table('association')->orderby('id','desc')->get();
		$gbr_webs 	= DB::table('gbr_webs')->first();
		$news_sdbar = DB::table('articles')->orderby('id','desc')->paginate(4);


		$data = array(
			'title'			=> $portof->title. ' - '. $identitas->nama_website,
			'icon'			=> $identitas->favicon,
			'm_deskripsi'	=> strip_tags(substr($portof->description,0,400)),
			'm_keyword'		=> $portof->title,
			'telpon'		=> $identitas->no_telp,
			'facebook'		=> $identitas->facebook,
			'twitter'		=> $identitas->twitter,
			'news'			=> $news,
			'portofolio'	=> $porto,
			'assosiasi'		=> $assosiasi,
			'title_post'	=> $portof->title,
			'deskripsi'		=> $portof->description,
			'img_porto'		=> $portof->img_porto,
			'logo_webs'		=> $gbr_webs->gbr_logo,
			'gbr_bg'		=> $gbr_webs->gbr_bg,
			'berita_sdbar'	=> $news_sdbar
		);	
		return View::make('home/single-porto',$data);

	}

	public function news()
	{

		$identitas  = DB::table('identitas')->first();
		$slider 	= DB::table('slider')->get();
		$gbr_webs 	= DB::table('gbr_webs')->first();
		$berita 	= DB::table('articles')->paginate(5);
		$news_sdbar = DB::table('articles')->orderby('id','desc')->paginate(4);
		$menu 		= DB::table('menu')->get();


		$data = array(
			'title'			=> 'News and Events - '. $identitas->nama_website,
			'icon'			=> $identitas->favicon,
			'm_deskripsi'	=> 'News and Events - '. $identitas->nama_website,
			'm_keyword'		=> 'News and Events - '. $identitas->nama_website,
			'telpon'		=> $identitas->no_telp,
			'facebook'		=> $identitas->facebook,
			'twitter'		=> $identitas->twitter,
			'logo_webs'		=> $gbr_webs->gbr_logo,
			'gbr_bg'		=> $gbr_webs->gbr_bg,
			'news'			=> $berita,
			'berita_sdbar'	=> $news_sdbar,
			'menu'			=> $menu
		);	
		return View::make('home/news',$data);
	}

	public function proyek()
	{

		$identitas  = DB::table('identitas')->first();
		$slider 	= DB::table('slider')->get();
		$gbr_webs 	= DB::table('gbr_webs')->first();
		$proyek 	= DB::table('portofolio')->paginate(3);
		$news_sdbar = DB::table('articles')->orderby('id','desc')->paginate(4);


		$data = array(
			'title'			=> 'Projek Kami - '. $identitas->nama_website,
			'icon'			=> $identitas->favicon,
			'm_deskripsi'	=> 'Projek Kami - '. $identitas->nama_website,
			'm_keyword'		=> 'Projek Kami - '. $identitas->nama_website,
			'telpon'		=> $identitas->no_telp,
			'facebook'		=> $identitas->facebook,
			'twitter'		=> $identitas->twitter,
			'logo_webs'		=> $gbr_webs->gbr_logo,
			'gbr_bg'		=> $gbr_webs->gbr_bg,
			'portofolio' 	=> $proyek,
			'berita_sdbar'	=> $news_sdbar
		);	
		return View::make('home/proyek',$data);
	}

	public function contact()
	{

		$identitas  = DB::table('identitas')->first();
		$slider 	= DB::table('slider')->get();
		$gbr_webs 	= DB::table('gbr_webs')->first();
		$proyek 	= DB::table('portofolio')->paginate(3);
		$news_sdbar = DB::table('articles')->orderby('id','desc')->paginate(4);
		$assosiasi  = DB::table('association')->get();


		$data = array(
			'title'			=> 'Projek Kami - '. $identitas->nama_website,
			'icon'			=> $identitas->favicon,
			'm_deskripsi'	=> 'Projek Kami - '. $identitas->nama_website,
			'm_keyword'		=> 'Projek Kami - '. $identitas->nama_website,
			'telpon'		=> $identitas->no_telp,
			'facebook'		=> $identitas->facebook,
			'twitter'		=> $identitas->twitter,
			'logo_webs'		=> $gbr_webs->gbr_logo,
			'gbr_bg'		=> $gbr_webs->gbr_bg,
			'portofolio' 	=> $proyek,
			'berita_sdbar'	=> $news_sdbar,
			'assosiasi'		=> $assosiasi,
			'alamat'		=> $identitas->alamat,
			'no_telp'		=> $identitas->no_telp,
			'no_fax'		=> $identitas->no_fax,
			'email'			=> $identitas->email
		);	
		return View::make('home/contact',$data);
	}

	public function contact_save()
	{

		$nama 		= Input::get('nama');
		$email 		= Input::get('email');
		$subjek 	= Input::get('subjek');
		$pesan 		= Input::get('pesan');

		$rules = array(
        	'recaptcha_response_field' => 'required|recaptcha',
    	);

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
        {
            $eror = '<div class="msg-box error">
						<a href="#" data-dismiss="alert" class="btn-close">close</a>
						<div class="text-box">
							<strong>Wrong Captcha Code. Please Input Correct Code.
						</div>
					</div>';

					return Redirect::to('contact')->with('eror-capca',$eror);
        }
        else
        {
           DB::table('contact')->insert(array(
           		'nama'		=> $nama,
           		'email'		=> $email,
           		'subjek'	=> $subjek,
           		'pesan'		=> $pesan
           ));

           $eror = '<div class="msg-box success">
						<a href="#" data-dismiss="alert" class="btn-close">close</a>
						<div class="text-box">
							<strong> Thanks For Your Message. We Will Read Soon
						</div>
					</div>';

					return Redirect::to('contact')->with('sukses-capca',$eror);
        }


	}

}
