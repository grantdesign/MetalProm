@extends('layouts.app')

@section('content')
<!--start-breadcrumbs-->
<div class="breadcrumbs">
	<div class="container">
		<div class="breadcrumbs-main">
			<ol class="breadcrumb">
				<li><a href="{{ route('home') }}">Главная</a></li>
				<li class="active">{{ $title }}</li>
			</ol>
		</div>
	</div>
</div>
<!--end-breadcrumbs-->
<!--start-single-->
<div class="single contact">
	<div class="container">
		<div class="single-main">
			<div class="col-md-12 single-main-left">
				<div class="sngl-top">
					<div class="col-lg-5 single-top-left">	
						<div class="flexslider">
							<div class="img-fluid">
								<img src="{{ asset('storage/'.$post->image) }}" data-imagezoom="true" class="img-responsive" alt=""/>
							</div>
						</div>
						<!-- FlexSlider -->
						<script src="{{ asset('assets/js/imagezoom.js') }}"></script>
						<script defer src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
						<link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}" type="text/css" media="screen" />
						<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
						$('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						});
					});
				</script>
			</div>	
			<div class="col-md-7 single-top-right">
				<div class="single-para simpleCart_shelfItem">
					<h2>{{ $post->title }}</h2>
					<div class="clearfix"> </div>
					<h5 class="item_price">{{ $post->price }} ₽</h5>
					<p>{{ $post->text }}</p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="tabs">
			<ul class="menu_drop">
				<li class="item1"><a href="#"><img src="{{ asset('assets/images/arrow.png') }}" alt="">Компания</a>
					<ul>
						<li><a>{{ $post->user->description }}</a></li>
					</ul>
				</li>

				<li class="item2"><a href="#"><img src="{{ asset('assets/images/arrow.png') }}" alt="">Контакты</a>
					<ul>
						<li><a>{{ $post->user->person }} <br> Email: {{ $post->user->email }}</a></li>
					</ul>
				</li>

				<li class="item3"><a href="#"><img src="{{ asset('assets/images/arrow.png') }}" alt="">Телефон</a>
					<ul>
						<li><a>{{ $post->user->phone }}</a></li>
					</ul>
				</li>

				<li class="item4"><a href="#"><img src="{{ asset('assets/images/arrow.png') }}" alt="">Сайт</a>
					<ul>
						<li><a href="{{ $post->user->site }}" target="_blank">{{ $post->user->site }}</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div class="clearfix"> </div>
</div>
</div>
</div>
<!--end-single-->
@endsection