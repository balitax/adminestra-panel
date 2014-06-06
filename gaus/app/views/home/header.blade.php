<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>{{$title}}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="{{$m_deskripsi}}">
<meta name="keyword" content="{{$m_keyword}}">

<link href="{{URL::to('file/images/'.$icon)}}" rel="icon">

<meta name="author" content="Mitra Desain, Agus Cahyono">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600italic,600,400italic,300italic,300,700,700italic,800,800italic' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css' />
{{HTML::style('assets/ska/css/all.css')}}
{{HTML::style('assets/ska/css/carousel/carousel.css')}}
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
{{HTML::script('assets/ska/js/jquery.main.js')}}
{{HTML::script('assets/ska/js/carousel/jquery.carouFredSel-5.5.0.js')}}
<script type="text/javascript">
$(function() {
//	Basic carousel + timer
$('#carouFredSel').carouFredSel({
auto: {
pauseOnHover: 'resume',
onPauseStart: function( percentage, duration ) {
$(this).trigger( 'configuration', ['width', function( value ) {
$('#timer_carousel').stop().animate({
width: value
}, {
duration: duration,
easing: 'linear'
});
}]);
},
onPauseEnd: function( percentage, duration ) {
$('#timer_carousel').stop().width( 0 );
},
onPausePause: function( percentage, duration ) {
$('#timer_carousel').stop();
}
}
});
$('.gallery1').carouFredSel({
prev: '.port-gall .btn-prev',
next: '.port-gall .btn-next',
auto: false
});
});
</script>
<!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="./css/ie.css" /><![endif]-->
{{HTML::style('assets/ska/demo/theme_style.css')}}
</head>
<body class="inner" style="background:url({{URL::to('file/images')}}/{{$gbr_bg}}) fixed">
<div id="wrapper">
<div class="w1">
<div class="w2">
<!-- header -->
<header id="header">
	<!-- section -->
	<div class="section">
		<h1 class="logo">
		<a href="{{URL::to('')}}">
			<img src="{{URL::to('file/images')}}/{{$logo_webs}}" />
		</a>
		</h1>
		<div class="contact-box">
			<strong class="phone">{{$telpon}}</strong>
			<!-- social -->
			<ul class="social">
				<li><a href="{{$twitter}}" class="twitter">twitter</a></li>
				<li><a href="{{$facebook}}" class="facebook">facebook</a></li>
				<li><a href="{{URL::to('')}}" class="rss">rss</a></li>
			</ul>
		</div>
	</div>
	<!-- nav-box -->
	<nav class="nav-box">
		<!-- nav -->
		<ul id="nav">
			<li class="active"><a href="{{URL::to('')}}">Home</a></li></li></li>
			<?php
                    $menu = DB::table('menu')->where('status', '1')
                        ->where('parent_id', 0)
                        ->orderby('menu_id')->get();
                    ?>
                    @foreach($menu as $mn)
                        <?php
                        $submenu = DB::table('menu')->where('status', '1')
                            ->where('parent_id', $mn->menu_id)
                            ->orderby('menu_id')->get();
                        ?>
                        @if(count($submenu))
                        <li class="dropdown">
                        	@if($mn->view_type == '1')
                            	<a href="{{URL::to(''.$mn->content_id)}}" class="dropdown-toggle">{{$mn->menu_name}}</a>
                            @else 
                            	<a href="{{URL::to('pages/'.$mn->content_id)}}" class="dropdown-toggle">{{$mn->menu_name}}</a>
                            @endif
                            <ul class="dropdown-menu">
                                @foreach($submenu as $sm)
                                @if($sm->view_type == '1')
                                	<li><a href="{{URL::to(''.$sm->content_id)}}">{{$sm->menu_name}}</a></li>
                                @else
                                	<li><a href="{{URL::to('pages/'.$sm->content_id)}}">{{$sm->menu_name}}</a></li>
                                @endif
                                @endforeach
                            </ul>
                        </li>
                        @else
                        <li>
                           @if($mn->view_type == '1')
                            	<a href="{{URL::to(''.$mn->content_id)}}" class="dropdown-toggle">{{$mn->menu_name}}</a>
                            @else 
                            	<a href="{{URL::to('pages/'.$mn->content_id)}}" class="dropdown-toggle">{{$mn->menu_name}}</a>
                            @endif
                        </li>
                        @endif
                    @endforeach
		</ul>
		<select class="mobile-menu">
			<option value="index.html" />Home
				<option value="#" />Layouts
					<option value="index-2.html" />- Home Version 2
					</select>
				</nav>
			</header>
			
			 @yield('content')
			
		</div>
	</div>
	<div id="footer">
		<div class="footer-holder">
			<div class="add-block">
				<div class="holder">
					<div class="by">
						<a  href="{{URL::to('')}}">Home</a>
						<a  href="{{URL::to('pages/career')}}">Career</a>
						<a  href="{{URL::to('pages/contact')}}">Contact Us</a>
						&nbsp;
						&nbsp;
						&nbsp;
						Developed by <a target="_blank" href="http://mitradesain.co.id">Mitra Desain</a>
					</div>
				</div>
		</div>
		</div>
	</div>
</div>
</body>
</html>