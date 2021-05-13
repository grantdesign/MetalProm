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
		@if(!$posts->isEmpty())
		<div class="register-main">
			<div class="col-md-12 account-left">
				<h4>По запросу «{{ Request::get('s') }}» найдено:</h4><br>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Название</th>
							<th>Компания</th>
							<th>Изображение</th>
						</tr>
					</thead>
					<tbody>
						@foreach($posts as $post)
						<tr>
							<td>
								<a href="{{ route('posts.show', $post->id) }}" style="color: #73B6E1;">{{ $post->title }}</a> <br> <span style="font-size: 13px;">{{ $post->created_at->format('d.m.Y') }}<br> <strong>Цена: {{ $post->price }} ₽</strong></span>
							</td>
							<td>
								<a href="{{ route('companies.show', $post->user->id) }}" style="color: #73B6E1;">{{ $post->user->name }}</a> <br> {{ $post->user->region->name }}
							</td>
							<td>
								<img class="img-fluid" src="{{ asset('storage/'.$post->image) }}" width="100" alt="">
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			{{ $posts->links() }}
			<div class="clearfix"></div>
		</div>
		@else
		<br><br><h4>По запросу «{{ Request::get('s') }}» ничего не найдено.</h4>
		@endif
	</div>
</div>
@endsection