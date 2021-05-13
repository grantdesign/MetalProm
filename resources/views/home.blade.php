@extends('layouts.app')

@section('content')
<!--banner-starts-->
<div class="bnr" id="home">
	@include('layouts.slider')
</div>
<!--banner-ends--> 
<!--Slider-Starts-Here-->
		<script src="{{ asset('assets/js/responsiveslides.min.js') }}"></script>
		 <script>
		    // You can also use "$(window).load(function() {"
		    $(function () {
		      // Slideshow 4
		      $("#slider4").responsiveSlides({
		        auto: true,
		        pager: true,
		        nav: true,
		        speed: 500,
		        namespace: "callbacks",
		        before: function () {
		          $('.events').append("<li>before event fired.</li>");
		        },
		        after: function () {
		          $('.events').append("<li>after event fired.</li>");
		        }
		      });
		
		    });
		  </script>
		<!--End-slider-script-->
<!--about-starts-->
<div class="about"> 
	<div class="container">
		<div class="about-top grid-1">
			@foreach($categories as $category)
				<div class="col-md-4 about-left">
					<a href="{{ route('categories.index', $category->slug) }}">
						<figure class="effect-bubba">
							<img class="img-responsive" src="{{ asset('storage/'.$category->image) }}" alt=""/>
							<figcaption>
								<h2>{{ $category->name }}</h2>
								<p>{{ $category->description }}</p>
							</figcaption>
						</figure>
					</a>
				</div>
			@endforeach
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--about-end-->
<!--product-starts-->
<div class="product"> 
	<div class="container">
		<div class="product-top">
			<h2 class="text-center">Последние объявления</h2>
			<div class="product-one">
				@foreach($posts as $post)
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="{{ route('posts.show', $post->id) }}" class="mask"><img class="img-responsive zoom-img" src="{{ asset('storage/'.$post->image) }}" alt="" /></a>
							<div class="product-bottom">
								<h3>{{ Str::limit($post->title, 42) }}</h3>
								<h4><span class=" item_price">{{ $post->price }} ₽</span></h4>
							</div>
						</div>
					</div>
				@endforeach
				<div class="clearfix"></div>
			</div>			
		</div>
	</div>
</div>
<!--product-end-->
@endsection