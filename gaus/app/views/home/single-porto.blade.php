@extends('home/header')
@section('content')
<div id="main">
	<!-- content-panel -->
	<div class="content-panel">
		<div class="page-title">
			<h2>{{$title_post}}</h2>
			<!-- breadcrumbs -->
			<ul class="breadcrumbs">
				<li><a href="{{URL::to('')}}">Home</a></li>
				<li>/</li>
				<li>{{$title_post}}</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<!-- content -->
		<div id="content">
			<div class="c1">
				<!-- post-box -->
				<article class="post-box">
				<div class="meta">
					<h3><a href="{{URL::to('')}}">{{$title_post}}</a></h3>
				</div>
				<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
				<script type="text/javascript">stLight.options({publisher: "ce92a639-1e24-4484-88fc-66e4e66ca575", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
				<span class='st_facebook_hcount' displayText='Facebook'></span>
				<span class='st_twitter_hcount' displayText='Tweet'></span>
				<span class='st_googleplus_hcount' displayText='Google +'></span>

				<br /> <br />
				<span class="image center">
				<img src="{{URL::to('file/images_portofolio')}}/{{$img_porto}}" alt="{{$title_post}}" />
				</span>

				<p>{{$deskripsi}}.</p>
				</article>

				
			</div>
		</div>
		<!-- sidebar -->
		<aside id="sidebar">
			<div class="widget">
				<!-- search-form -->
				<form action="#" class="search-form" />
					<fieldset>
						<input type="submit" value="submit" />
						<span class="text"><input type="text" placeholder="Click or type here to search" /></span>
					</fieldset>
				</form>
			</div>

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