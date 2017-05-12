@extends('back.main')

@section('title', 'إضافة قسم جديد')

@section('content')

<section class="content-header">
<div style="float: right;">
	<ol class="breadcrumb">
		<li>
			<a href="{{url('/admin')}}">الرئيسية</a>
		</li>
		<li class="active">إضافة قسم جديد</li>
	</ol>
</div>
</section>
<br>
<section class="content">
	<form action="{{route('categories.store')}}" method="POST" role="form">
		<legend>إضافة قسم جديد</legend>
		{{csrf_field()}}
		<div class="form-group">
			<label for="">اسم القسم</label>
			<input type="text" name="cat_name" class="form-control" id="" placeholder="ادخل اسم القسم">
		</div>
		
		<div class="form-group">
			@include('errors.form-errors')
		</div>
	
		<button type="submit" class="btn btn-success">إضافة</button>
	</form>	
</section>
	
@endsection