@extends('back.main')

@section('title', 'الإعدادات الشرائح الرئيسية')

@section('header')
	<link rel="stylesheet" href="{{url('front/css/responsiveslides.css')}}">
		<style>
		.preview{
			width: 150px;
			height: 150px;
		}
	</style>
@endsection

@section('content')

<section class="content-header">
	<div style="float: right;">
	<ol class="breadcrumb">
		<li>
			<a href="{{url('/admin')}}">الرئيسية</a>
		</li>
		<li class="active">الإعدادات الشرائح الرئيسية</li>
	</ol>
	</div>
</section>

<section class="content">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides centered-btns centered-btns1" id="slider" style="max-width: 962px;">
				@for($i = 0; $i<= count($sliders); $i++)
					@foreach($sliders as $slider)
							
					<li id="centered-btns1_s{{$i}}" class="" style="display: none; float: none; position: absolute;"><img src="{{url('front/slider/').'/'.$slider->url}}"></li>

					@endforeach
				@endfor
					
				</ul><a href="#" class="centered-btns_nav centered-btns1_nav prev">Previous</a><a href="#" class="centered-btns_nav centered-btns1_nav next">Next</a>
			</div>
		</div>
		<div class="clearfix"></div>
		<hr>
		<div class="row">
			<table class="table table-hover text-center">
				<thead>
					<tr>
						<th>المعرف</th>
						<th>الرابط</th>
						<th>العملية</th>
					</tr>
				</thead>
				<tbody>
					@foreach($sliders as $slider)
					<tr>
						<td>{{$slider->id}}</td>
						<td>{{$slider->url}}</td>
						<td>
							<form action="{{url('admin/slider/'.$slider->id.'/delete')}}" method="POST">
							{{csrf_field()}}
								<input type="submit" class="btn btn-sm btn-danger" value="حذف">
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		
	<form action="{{url('admin/mainsettings/slider')}}" method="POST" role="form" enctype="multipart/form-data">
	{{csrf_field()}}
		<legend>إضافة شريحة</legend>
		<div id="image-holder">
				
		</div>
	
		<div class="form-group">
			<input type="file" name="new_slide" class="form-control" id="fileUpload" >
		</div>
		<button type="submit" class="btn btn-primary">إضافة</button>
	</form>



<hr>
</section>

@endsection

@section('footer')
<script src="{{url('front/js/responsiveslides.js')}}"></script>
<script>
$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 962,
			namespace: "centered-btns"
		  });
		});
	
</script>
<script src="{{url('back/bootstrap/js/image-preview.js')}}"></script>
@endsection