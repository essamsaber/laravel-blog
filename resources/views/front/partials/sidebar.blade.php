<div id="sidebar" class="col-1-3">
	<div class="wrap-col">
		<div class="box">
			<div class="heading"><h2>الأقسام</h2></div>
			<div class="content">
				<div class="linklist">
					<ul>
					@foreach($cats as $cat)
						<li><a href="{{url('/cat/'.$cat->id)}}">{{$cat->name}}</a></li>
					@endforeach
					</ul>
				</div>
			</div>
		</div>
		<div class="box">
			<div class="heading"><h2>أحدث المقالات</h2></div>
			<div class="content">
			@foreach($latests as $latest)
				<div class="posts">
					<img width="50px" height="50px" src="{{url('front/post_images/'.$latest->image)}}"/>
					<h4><a href="{{url($latest->slug)}}">{{$latest->title}}</a></h4>
					<p>{{$latest->created_at->diffForHumans()}}</p>
				</div>
			@endforeach
			</div>
		</div>
		<div class="box">
			<div class="heading"><h2>أرشيف المقالات</h2></div>
			<div class="content">
				<ul>
					@foreach($archives as $arch)
					<li><a href="/?month={{parse($arch['month'])}}&amp;year={{$arch['year']}}">{{months()[parse($arch['month'])]}} - {{$arch['year']}}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</div>