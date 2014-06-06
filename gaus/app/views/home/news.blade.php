@extends('home/header')
@section('content')
<div id="main">
	<!-- content-panel -->
	<div class="content-panel">
		<div class="page-title">
			<h2>Our Blog</h2>
			<!-- breadcrumbs -->
			<ul class="breadcrumbs">
				<li><a href="./index.html">Home</a></li>
				<li>/</li>
				<li>Blog</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<!-- content -->
		<div id="content">
			<div class="c1">
				<div class="posts">
					@foreach ($news as $n)
					<article class="post-box">
					<span class="image alignleft listing">
						<img src="{{URL::to('file/images_news')}}/{{$n->img_header}}" style="width:215px;height:120px" alt="" />
					</span>
					<div class="text-box">
						<div class="meta">
							<h3>
								<a href="{{URL::to('read/'.$n->slug_articles)}}">{{$n->title}}</a>
							</h3>
							<p>by <a href="#">Administrator</a> {{$n->date}}</p>
						</div>
						<p>
							{{strip_tags(substr($n->content,0,340))}}...
						</p>
						<p><a href="{{URL::to('read/'.$n->slug_articles)}}">Read More..</a></p>
					</div>
					</article>
					@endforeach
					
					
				</div>
				<?php echo $news->links(); ?>

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