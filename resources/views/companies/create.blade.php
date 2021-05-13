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
				<form action="{{ route('companies.store') }}" method="post" enctype="multipart/form-data">
				@csrf
				<input placeholder="Название компании" name="name" type="text" tabindex="1" value="{{ old('name') }}" required>
				<input placeholder="Email" name="email" type="text" tabindex="2" value="{{ old('email') }}" required>
				<input placeholder="Пароль" name="password" type="password" tabindex="3" required>
				<textarea class="form-control" name="description" cols="30" rows="5" placeholder="Краткое описание" required>{{ old('description') }}</textarea><br>
				<textarea class="form-control" name="text" cols="30" rows="10" placeholder="Информация о компании" required>{{ old('text') }}</textarea><br>
			</div>
			<div class="col-md-6 account-left">
				<input placeholder="Контактное лицо" name="person" type="text" tabindex="3" value="{{ old('person') }}" required>
				<input placeholder="Телефон" name="phone" type="text" tabindex="3" value="{{ old('phone') }}" required>
				<input placeholder="Адрес" name="address" type="text" tabindex="3" value="{{ old('address') }}" required>
				<input placeholder="Сайт" name="site" type="text" tabindex="3" value="{{ old('site') }}" required>
				<label for="menu_id">Специализация</label>
				<select class="form-control" name="menu_id" id="menu_id" required>
					<optgroup label="Металлопродукция">
						@foreach($categories as $category)
							@if($category->parent_id == 6)
								<option value="{{ $category->id }}">{{ $category->name }}</option>
							@endif
						@endforeach
					</optgroup>
					<optgroup label="Сырье и материалы">
						@foreach($categories as $category)
							@if($category->parent_id == 7)
								<option value="{{ $category->id }}">{{ $category->name }}</option>
							@endif
						@endforeach
					</optgroup>
					<optgroup label="Транспорт и спецтехника">
						@foreach($categories as $category)
							@if($category->parent_id == 8)
								<option value="{{ $category->id }}">{{ $category->name }}</option>
							@endif
						@endforeach
					</optgroup>
				</select><br>
				<label for="region_id">Регион</label>
				<select class="form-control" name="region_id" id="region_id" required>
					@foreach($regions as $region)
						<option value="{{ $region->id }}">{{ $region->name }}</option>
					@endforeach
				</select><br>
				<input type="file" class="form-control-file" name="image" required>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="address submit">
			<input type="submit" value="Регистрация">
		</div>
		</form>
	</div>
</div>
<!--register-end-->
@endsection