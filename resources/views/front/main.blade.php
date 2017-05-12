@include('front.partials.head')
<!--Heade-->
@include('front.partials.header')

@include('front.partials.nav')

@include('front.partials.slider')

<!--Content-->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row">
			<div id="main-content" class="col-2-3">
				<div class="wrap-col">
				@include('errors.form-success')
					@yield('content')
					
				</div>
			</div>
@include('front.partials.sidebar')
		</div>
	</div>
</section>
<!--Footer-->
@include('front.partials.footer')

