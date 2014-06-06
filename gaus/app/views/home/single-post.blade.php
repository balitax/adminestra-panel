@extends('home/header')
@section('content')
<div id="main">
	<!-- content-panel -->
	<div class="content-panel">
		<div class="page-title">
			<h2>News And Events</h2>
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
					<p>Posted by <a href="#">Adminintrator</a>  on {{$date_post}}</p>
				</div>
				<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
				<script type="text/javascript">stLight.options({publisher: "ce92a639-1e24-4484-88fc-66e4e66ca575", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
				<span class='st_facebook_hcount' displayText='Facebook'></span>
				<span class='st_twitter_hcount' displayText='Tweet'></span>
				<span class='st_googleplus_hcount' displayText='Google +'></span>

				<br /> <br />
				<span class="image center">
				<img src="{{URL::to('file/images_news')}}/{{$img_post}}" alt="{{$title_post}}" />
				</span>
				<p>{{$content_post}}.</p>

				<br />
				<span class='st_facebook_vcount' displayText='Facebook'></span>
				<span class='st_twitter_vcount' displayText='Tweet'></span>
				<span class='st_linkedin_vcount' displayText='LinkedIn'></span>
				<span class='st_googleplus_vcount' displayText='Google +'></span>
				<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ce92a639-1e24-4484-88fc-66e4e66ca575", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

				</article>

				<!-- articles -->
				<section class="articles">
					<h3>Related articles:</h3>
					<div class="art-boxes">
					@foreach ($other_news as $o)
						<aside class="box">
							<div class="holder">
								<span class="image">
									<img src="{{URL::to('file/images_news')}}/{{$o->img_header}}" alt="" />
								</span>
								<p><a href="{{URL::to('read')}}/{{$o->slug_articles}}">{{$o->title}}</a></p>
							</div>
						</aside>
					@endforeach
					</div>
				</section>

				    <div id="disqus_thread"></div>
					    <script type="text/javascript">
					        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
					        var disqus_shortname = 'ptmuliakaryaprima'; // required: replace example with your forum shortname

					        /* * * DON'T EDIT BELOW THIS LINE * * */
					        (function() {
					            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
					            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
					            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
					        })();
					    </script>
					    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
					    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
					    
				
				
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