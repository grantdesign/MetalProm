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
<!--contact-start-->
<div class="contact">
	<div class="container">
		<div class="contact-top heading">
			<h2>{{ $title }}</h2>
		</div>
		<div class="contact-text">
			<div class="col-md-3 contact-left">
				<div class="address">
					<h5>Адрес</h5>
					<p>Ярославская область,
						<span>г. Ярославль,</span>
					ул. Кирова, 10</p>
				</div>
				<div class="address">
					<h5>Информация</h5>
					<p>Телефон: +7 (800) 555-35-35
						<span>Факс: 150000</span>
						Email: <a href="mailto:metalprom@mail.ru">metalprom@mail.ru</a></p>
				</div>
				</div>
				<div class="col-md-9 contact-right">
					<form action="{{ route('contacts.store') }}" method="post">
						@csrf
						<input type="text" name="name" placeholder="Имя" required>
						<input type="text" name="email" placeholder="Email" required>
						<textarea name="text" placeholder="Сообщение" required=></textarea>
						<div class="submit-btn">
							<input type="submit" value="ОТПРАВИТЬ">
						</div>
					</form>
				</div>	
				<div class="clearfix"></div>
			</div>
		</div>
</div><br>
	<!--contact-end-->
	<!--map-start-->
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d229987.8096093332!2d39.71238802275171!3d57.618847972781886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b291a051ecb939%3A0x59c9e61644948545!2z0K_RgNC-0YHQu9Cw0LLQu9GMLCDQr9GA0L7RgdC70LDQstGB0LrQsNGPINC-0LHQuy4!5e0!3m2!1sru!2sru!4v1617454827387!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<!--map-end-->
@endsection