@extends('back.main')

@section('title', 'إضافة قسم جديد')

@section('content')

<section class="content-header">
<div style="float: right;">
	<ol class="breadcrumb">
		<li>
			<a href="{{url('/admin')}}">الرئيسية</a>
		</li>
		<li class="active">تعديل قسم {{$cat->name}}</li>
	</ol>
</div>
</section>
<br>
<section class="content">
	<form action="{{route('categories.update', $cat->id)}}" method="POST" role="form">
		<legend>تعديل اسم القسم</legend>
		{{csrf_field()}}
		{{method_field('PUT')}}
		<div class="form-group">
			<label for="">اسم القسم</label>
			<input type="text" name="cat_name" class="form-control" id="" value="{{$cat->name}}">
		</div>
		
		<div class="form-group">
			@include('errors.form-errors')
		</div>
	
		<button type="submit" class="btn btn-success">حفظ التعديل</button>
	</form>	
</section>
	
@endsection