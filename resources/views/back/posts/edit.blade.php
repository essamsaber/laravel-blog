@extends('back.main')

@section('title', 'تعديل المقال')

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

		<li class="active">تعديل مقال {{$post->title}}</li>
	</ol>		
</div>	
</section>

<section class="content">
	
	<form action="{{route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data" novalidate>

	{{csrf_field()}}
	{{method_field('PUT')}}
		<legend>تعديل المقال</legend>
		<div class="form-group">
			@include('errors.form-errors')
		</div>

		<div class="form-group">
			<label for="">عنوان المقال</label>
			<input name="title" value="{{$post->title}}" type="text" class="form-control" id="" placeholder="عنوان المقال">
		</div>

		<div class="form-group">
			<textarea name="body">{{$post->body}}</textarea>					
		</div>
	
		<div class="form-group">
			<img src="{{url('front/post_images/'.$post->image)}}" />
		</div>

		<div class="form-group">			
			<label for="">رفع صورة جديدة</label>
			<input type="file" name="image" id="fileUpload">
		</div>

		<div id="image-holder">
				
		</div>

		<div class="form-group">
			<label for="">حالة المقال</label>
			<select style="height: 40px" name="status" id="input" class="form-control" required="required">
				<option {{$post->status == 0 ? 'selected' : ''}} value="0">مسودة</option>
				<option {{$post->status == 1 ? 'selected' : ''}} value="1">منشور</option>
			</select>
		</div>

		<div class="form-group">
			<label for="">القسم</label>
			<select style="height: 40px" name="category_id" id="input" class="form-control" required="required">
				@foreach($cats as $cat)
				<option {{$post->category_id == $cat->id ? 'selected' : ''}} value="{{$cat->id}}">{{$cat->name}}</option>
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
