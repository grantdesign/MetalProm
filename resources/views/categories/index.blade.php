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
<div class="register">
	<div class="container">
		<div class="register-top heading">
			<h2>{{ $title }}</h2>
		</div>
		@if(!$categories->isEmpty())
		<div class="about"> 
			<div class="container">
				<div class="about-top grid-1">
					@foreach($categories as $category)
						<div class="col-md-4 about-left">
							<a href="{{ route('posts.index', [$category->parent->slug, $category->slug]) }}">
								<figure class="effect-bubba">
									<img class="img-responsive" src="{{ asset('storage/'.$category->image) }}" alt=""/>
									<figcaption>
										<h2>{{ $category->name }}</h2>
										<h5>Объявления: {{ $category->posts->count() }}</h5>
									</figcaption>
								</figure>
							</a>
						</div>
					@endforeach
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		@else
		<br><br><h4>Нет подкатегорий.</h4>
		@endif
	</div>
</div>
@endsection