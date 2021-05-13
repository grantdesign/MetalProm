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
<!--account-starts-->
<div class="register">
	<div class="container">
		<div class="account-top heading">
			<h2>{{ $title }}</h2>
		</div>
		<div class="account-main">
			<div class="col-md-6 account-left">
				<h3>Войдите в аккаунт</h3>

				@if ($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif

				<div class="account-bottom">
					<form action="{{ route('login') }}" method="post">
						@csrf
						<input placeholder="Email" name="email" type="text" tabindex="3" required>
						<input placeholder="Пароль" name="password" type="password" tabindex="4" required>
						<div class="address">
							<input type="submit" value="Войти">
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-6 account-right account-left">
				<h3>Нет аккаунта? Создайте его сейчас</h3>
				<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				<a href="{{ route('companies.create') }}">Создать аккаунт</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--account-end-->
@endsection