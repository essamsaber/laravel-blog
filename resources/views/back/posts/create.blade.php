@extends('back.main')

@section('title', 'إضافة مقال جديد')

@section('header')
	<style>
		.preview{
			width: 150px;
			height: 150px;
		}
	</style>
@endsection

@section('content')

<section class="content-header">
<div style="float: right">
	<ol class="breadcrumb">
		<li>
			<a href="{{url('/admin')}}">الرئيسية</a>
		</li>

		<li class="active">إضافة مقال جديد</li>
	</ol>		
</div>	
</section>

<section class="content">
	
	<form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data" novalidate>

	{{csrf_field()}}
		<legend>إضافة مقال جديد</legend>
		<div class="form-group">
			@include('errors.form-errors')
		</div>

		<div class="form-group">
			<label for="">عنوان المقال</label>
			<input name="title" type="text" class="form-control" id="" placeholder="عنوان المقال">
		</div>

		<div class="form-group">
			<textarea name="body"></textarea>					
		</div>
	
		<div class="form-group">
			<label for="">صورة المقال</label>
			<input type="file" name="image" id="fileUpload">
		</div>

		<div id="image-holder">
				
		</div>

		<div class="form-group">
			<label for="">حالة المقال</label>
			<select style="height: 40px" name="status" id="input" class="form-control" required="required">
				<option value="0">مسودة</option>
				<option value="1">نشر</option>
			</select>
		</div>

		<div class="form-group">
			<label for="">القسم</label>
			<select style="height: 40px" name="category_id" id="input" class="form-control" required="required">
				@foreach($cats as $cat)
				<option value="{{$cat->id}}">{{$cat->name}}</option>
				@endforeach
			</select>
		</div>

	
		<div class="form-group">
			<input type="submit" class="btn btn-success" value="حفظ" />
		</div>

	</form>

</section>

@endsection

@section('footer')

  	<script src="{{url('js/tinymce/tinymce.min.js')}}"></script>
  	<script>tinymce.init({ selector:'textarea' });</script>
	<script src="{{url('back/bootstrap/js/image-preview.js')}}"></script>

@endsection
