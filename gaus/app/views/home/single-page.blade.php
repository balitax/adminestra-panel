@extends('home/header')
@section('content')
<div id="main">
	<!-- content-panel -->
	<div class="content-panel">
		<div class="page-title">
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
				<p>{{$content_post}}.</p>
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