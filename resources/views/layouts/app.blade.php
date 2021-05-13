<!DOCTYPE html>
<html>
<head>
<title>@yield('title', $title)</title>
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<script src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />	
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="{{ asset('assets/js/simpleCart.min.js') }}"> </script>
<link href="{{ asset('assets/css/memenu.css') }}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{ asset('assets/js/memenu.js') }}"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="{{ asset('assets/js/jquery.easydropdown.js') }}"></script>
<script type="text/javascript">
	$(function() {
	
	    var menu_ul = $('.menu_drop > li > ul'),
	           menu_a  = $('.menu_drop > li > a');
	    
	    menu_ul.hide();
	
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });
	
	});
</script>
</head>
<body>
	<!--top-header-->
	<div class="top-header">
		<div class="container">
			<div class="top-header-main">
				<div class="col-md-6 top-header-left">
					<div class="drop nav-item">

						@if(session()->has('status'))
							<div class="alert alert-success" role="alert">
								{{ session('status') }}
							</div>
						@endif

						@if ($errors->any())
						    <div class="alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif

						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 top-header-left">
					<div class="cart box_1 text-center">
						@guest
						<a href="{{ route('companies.create') }}">Регистрация</a><br>
						<a href="{{ route('login') }}">Авторизация</a>
						@endguest

						@auth
						<a href="{{ route('companies.show', Auth::user()->id) }}">{{ Auth::user()->name }}</a><br>
						<a href="{{ route('logout') }}">Выйти</a>
						@endauth
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--top-header-->
	<!--start-logo-->
	<div class="logo">
		<a href="{{ route('home') }}"><h1>Metal Prom</h1></a>
	</div>
	<!--start-logo-->
	<!--bottom-header-->
	<div class="header-bottom">
		@include('layouts.nav')
	</div>
	<!--bottom-header-->
	
	@yield('content')

	@include('layouts.footer');	
</body>
</html>