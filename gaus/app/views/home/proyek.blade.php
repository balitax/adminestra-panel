@extends('home/header')
@section('content')
<div id="main">
	<!-- content-panel -->
	<div class="content-panel">
		<div class="page-title">
			<h2>Portfolio Three Columns</h2>
			<!-- breadcrumbs -->
			<ul class="breadcrumbs">
				<li><a href="./index.html">Home</a></li>
				<li>/</li>
				<li><a href="#">Portfolio</a></li>
				<li>/</li>
				<li>Portfolio Three Columns</li>
			</ul>
		</div>
	</div>
	<!-- portfolio-section -->
	<div class="portfolio-section alt">
		<!-- portfolio-boxes -->
		<section class="portfolio-boxes col3">
			<div class="portfolio-holder">
			@foreach ($portofolio as $p)
				<aside class="box">
					<div class="box-holder">
						<span class="image">
						<a href="{{URL::to('portofolio')}}/{{$p->slug_porto}}">
							<img src="{{URL::to('file/images_portofolio/'.$p->img_porto)}}" alt="" />
						</a>
						</span>
						<h5><a href="{{URL::to('portofolio')}}/{{$p->slug_porto}}">{{$p->title}}</a></h5>
					</div>
				</aside>
			@endforeach
			</div>
		</section>
		<!-- portfolio-boxes -->
		<div class="divider-portfolio"></div>
		<?php echo $portofolio->links(); ?>
	</div>

</div>
@stop