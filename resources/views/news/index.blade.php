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
		@if(!$news->isEmpty())
		<div class="register-main">
			<div class="col-md-12 account-left">
				
				  <table class="table table-bordered">
					<thead>
						<tr>
							<th>Название</th>
							<th>Описание</th>
							<th>Изображение</th>
						</tr>
					</thead>
					<tbody>
						@foreach($news as $item)
							<tr>
								<td>
									<a href="{{ route('news.show', $item->id) }}" style="color: #73B6E1;">{{ $item->title }}</a> <br> 
									<span style="font-size: 13px;">{{ $item->created_at->format('d.m.Y') }}</span>
								</td>
								<td>{{ $item->description }}</td>
								<td>
									<img class="img-fluid" src="{{ asset('storage/'.$item->image) }}" width="100" alt="">
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			{{ $news->links() }}
			<div class="clearfix"></div>
		</div>
		@else
		<br><br><h4>Нет новостей.</h4>
		@endif
	</div>
</div>
@endsection