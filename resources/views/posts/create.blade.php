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
<!--register-starts-->
<div class="register">
	<div class="container">
		<div class="register-top heading">
			<h2>{{ $title }}</h2>
		</div>
		<div class="register-main">
			<div class="col-md-6 account-left">
				<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
				@csrf
				<input placeholder="Название" name="title" type="text" tabindex="1" required>
				<input placeholder="Цена" name="price" type="text" tabindex="2" required>
				<textarea class="form-control" name="text" cols="30" rows="10" placeholder="Полное описание" required></textarea><br>
				<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
				<input type="hidden" name="menu_id" value="{{ $menu->id }}">
				<input class="form-control-file" placeholder="Контактное лицо" name="image" type="file" tabindex="3" required><br>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="address submit">
			<input type="submit" value="Добавить">
		</div>
		</form>
	</div>
</div>
<!--register-end-->
@endsection