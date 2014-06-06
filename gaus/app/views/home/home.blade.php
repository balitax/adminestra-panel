@extends('home/header')
@section('content')
<div id="main">
	<!-- Carousel Slider -->
	<div class="gallery banner-mobile"><img src="{{asset('assets/ska/images/slider-carousel-3.jpg')}}" alt="" /></div>
	<div class="gallery" id="gallery-carousel">
		<div class="slider_list_carousel">
			<ul class="gallery-list" id="carouFredSel">
				@foreach ($slider as $s)
				<li><img src="{{URL::to('file/images')}}/{{$s->image_slider}}" title="{{$s->nama_slider}}" /></li>
				@endforeach
			</ul>
			<div class="clearfix"></div>
			<div id="timer_carousel" class="timer"></div>
		</div>
	</div>
	<div class="main-container">
		<div class="divider">
		</div>
		<!-- grid-cols -->
		<div class="grid-cols">
			<!-- col67 -->
			<div class="col67">
				<div class="col-holder">
					<span class="image alignleft">
					<img src="{{asset('file/images/mkp.jpg')}}" style="width: 300px;height: 190px;" alt="" />
					</span>
					<h3>{{$title_about}}</h3>
					<p>
					{{$about}}...
					</p>
					<a href="{{URL::to('')}}/pages/{{$url_about}}">More Abous Us</a>
				</div>
			</div>
			<!-- col33 -->
			<div class="col33">
				<div class="col-holder testimonials">
					<!-- testimonials-item -->
					<h3>Lates News and Events</h3>
					<ul class="check-color">
						@foreach ($news as $n)
						<li>
							<a title="{{$n->title}}" href="{{URL::to('read')}}/{{$n->slug_articles}}">
							{{substr($n->title,0,40)}}
							</a>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="portfolio-section gallery2">
		<div class="meta">
			<h3>Latest projects</h3>
		</div>
		<!-- portfolio-boxes -->
		<section class="portfolio-boxes col3">
			<div class="gallery2-holder">
				<ul>
					<li>
						<div class="portfolio-holder">
							@foreach ($portofolio as $p)
							<aside class="box">
								<div class="box-holder">
									<span class="image">
									<a href="{{URL::to('portofolio')}}/{{$p->slug_porto}}">
									<img src="{{URL::to('file/images_portofolio')}}/{{$p->img_porto}}" alt="" />
									</a>
									</span>
									<h5><a href="{{URL::to('portofolio')}}/{{$p->slug_porto}}">{{$p->title}}</a></h5>
								</div>
							</aside>
							@endforeach
						</div>
					</li>
				</ul>
			</div>
		</section>
	</div>
	<section class="clients">
		<div class="holder">
			<div class="heading left">
				<h3>Our Association</h3>
			</div>
			<!-- sponsors -->
			<ul class="sponsors">
				@foreach ($assosiasi as $a)
				<li>
					<a href="javascript:void(0)">
					<span>
					<img src="{{URL::to('file/img_assosiasi')}}/{{$a->image_perusahaan}}" alt="" />
					<img class="hover" src="{{URL::to('file/img_assosiasi')}}/{{$a->image_perusahaan}}" alt="" />
					</span>
					</a>
				</li>
				@endforeach
			</ul>
		</div>
	</section>
</div>
@stop