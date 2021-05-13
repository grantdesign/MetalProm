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
		</div><br>
		<a href="{{ route('companies.create') }}" class="btn btn-primary">Добавить компанию</a>
		@if(!$users->isEmpty())
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
						@foreach($users as $user)
							<tr>
								<td>
									<a href="{{ route('companies.show', $user->id) }}" style="color: #73B6E1;">{{ $user->name }}</a> <br> 
									<span style="font-size: 13px;">{{ $user->region->name }}</span>
								</td>
								<td>{{ $user->description }}</td>
								<td>
									<img class="img-fluid" src="{{ asset('storage/'.$user->image) }}" width="100" alt="">
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			{{ $users->links() }}
			<div class="clearfix"></div>
		</div>
		@else
		<br><br><h4>Нет поставщиков.</h4>
		@endif
	</div>
</div>
@endsection