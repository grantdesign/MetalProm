<div class="container">
	<div class="header">
		<div class="col-md-9 header-left">
		<div class="top-nav">
			<ul class="memenu skyblue">
				@foreach($parents as $parent)
					<li class="{{ (url()->current() == $parent->url) ? 'active grid' : 'grid' }}"><a href="{{ $parent->url }}">{{ $parent->name }}</a>
						@if($parent->children->count())
							<div class="mepanel">
								<div class="row">
									@foreach($parent->children as $child)
										<div class="col1 me-one">
											<h4>{{ $child->name }}</h4>
											<ul>
												@foreach($childrens as $children)
													@if($children->parent_id == $child->id)
														<li><a href="{{ route('posts.index', [$child->slug, $children->slug]) }}">{{ $children->name }} ({{ $children->posts->count() }})</a></li>
													@endif
												@endforeach
											</ul>
										</div>
									@endforeach
								</div>
							</div>
						@endif
					</li>
				@endforeach
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="col-md-3 header-right">
		<div class="search-bar">
			<form action="{{ route('posts.search') }}" method="get">
				<input type="text" name="s" placeholder="Поиск">
				<input type="submit" value="">
			</form>
		</div>
	</div>
	<div class="clearfix"> </div>
	</div>
</div>