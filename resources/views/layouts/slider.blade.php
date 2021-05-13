<div  id="top" class="callbacks_container">
	<ul class="rslides" id="slider4">
		@foreach($sliders as $slider)
		    <li>
				<img src="{{ asset('assets/images/'.$slider->image) }}" alt=""/>
			</li>
		@endforeach
	</ul>
</div>
<div class="clearfix"> </div>