@extends('home/header')
@section('content')
<div id="main">
	<!-- content-panel -->
	<div class="content-panel">
		<div class="page-title">
			<h2>We'd Love to Hear From You, Get In Touch With Us!</h2>
		</div>
	</div>
	<div class="container">
		<!-- content -->
		<div id="content">
			<div class="c1">
				<!-- post-box -->
				<article class="post-box">
				<p>
				Di sini anda akan menemukan kontak untuk <b>Mulia Karya Prima </b>. Terimakasih anda telah menghunjungi website kami, silahkan datang lagi! Untuk informasi lebih lanjut anda dapat menghubungi kami dengan mengisi formulir di bawah ini:
				</p>
				<!-- comment-form -->
				<form method="post" class="comment-form" id="cont_form" action="{{URL::to('contact/save')}}" />

					@if(Session::has('eror-capca'))
						{{Session::get('eror-capca')}}
					@endif

					@if(Session::has('sukses-capca'))
						{{Session::get('sukses-capca')}}
					@endif

					<fieldset>
						<div class="meta">
							<h3>Contact Us</h3>
						</div>
						<div class="row">
							<label for="username">Your Name  (*)</label>
							<span class="text">
							<input type="text" id="username" name="nama" value="" class="text" required="" />
							</span>
						</div>
						<div class="row">
							<label for="email">Your Email  (*)</label>
							<span class="text">
							<input type="text" id="email" name="email" value="" class="tex" required="" />
							</span>
						</div>
						<div class="row">
							<label for="subject">Your Subject</label>
							<span class="text">
							<input type="text" id="subject" name="subjek" value="" class="text" required="" />
							</span>
						</div>
						<div class="row">
							<label for="message">Your Message  (*)</label>
							<span class="textarea">
							<textarea class="w_focus" required="" id="message" name="pesan" cols="30" rows="10"></textarea>
							</span>
						</div>
						<div class="row">
							<label for="message">Input Kode  (*)</label>
							<span>
								{{Form::captcha(array('theme' => 'clean'))}}
							</span>
						</div>
						<br />
						<br />
						<div class="row">
							<span class="submit">
							Send Email
							<input type="submit" value="Send Email" />
							</span>
						</div>
					</fieldset>
				</form>
				</article>
			</div>
		</div>
		<!-- sidebar -->
		<aside id="sidebar">
			<!-- widget -->
			<div class="widget">
			<h2>PT. MULIA KARYA PRIMA</h2>
				<h3>Kantor Pusat</h3>
				<dl>
					<dt>Telephone:</dt>
					<dd>{{$no_telp}}</dd>
					<dt>Fax:</dt>
					<dd>{{$no_fax}}</dd>
					<dt>E-mail:</dt>
					<dd><a href="mailto:{{$email}}">{{$email}}</a></dd>
				</dl>
				<address>{{$alamat}}</address>
			</div>
			<!-- widget -->
			<div class="widget">
				<h3>Our Clients</h3>
				<ul class="links-list">
				@foreach ($assosiasi as $a)
					<li><a href="javascript:void(0)">{{$a->nama_perusahaan}}</a></li>
				@endforeach
				</ul>
			</div>
			<!-- widget -->
			<div class="widget">
				<h3>Lates News and Events</h3>
				<ul class="posts-list">
				@foreach ($berita_sdbar as $b)
					<li>
						<img src="{{URL::to('file/images_news')}}/{{$b->img_header}}" alt="" />
						<div class="text-box">
							<h6>
								<a href="{{URL::to('read/'.$b->slug_articles)}}">{{$b->title}}</a>
							</h6>
							<p>
								{{strip_tags(substr($b->content,0,180))}}...
							</p>
						</div>
					</li>
				@endforeach
				</ul>
			</div>
		</aside>
	</div>
</div>
@stop