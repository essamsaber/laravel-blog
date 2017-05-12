<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
				@for($i = 0; $i<= count($sliders); $i++)
					@foreach($sliders as $slider)
							
					<li id="centered-btns1_s{{$i}}" class="" style="display: none; float: none; position: absolute;"><img src="{{url('front/slider/').'/'.$slider->url}}"></li>

					@endforeach
				@endfor
				</ul>
			</div>
		</div>
	</div>
</div>