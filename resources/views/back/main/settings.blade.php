@extends('back.main')

@section('title', 'الإعدادات العامة')

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
	<div style="float: right;">
	<ol class="breadcrumb">
		<li>
			<a href="{{url('/admin')}}">الرئيسية</a>
		</li>
		<li class="active">الإعدادات العامة</li>
	</ol>
	</div>
</section>

<section class="content">
	<form action="{{url('/admin/mainsettings')}}" method="POST" role="form" enctype="multipart/form-data">
	{{csrf_field()}}
	
		<legend>تعديل الإعدادات العامة</legend>
		
		<div class="form-group">
			@include('errors.form-errors')
		</div>

		<div class="form-group">
			<label for="">اسم الموقع</label>
			<input value="{{$settings->sitename}}" type="text" name="sitename" class="form-control" id="" placeholder="اسم الموقع">
		</div>
	
		
		
		<div class="form-group">
			<label for="">حالة الموقع</label>
			<select style="height: 40px;" name="status" id="inputStatus" class="form-control" required="required">
				<option {{$settings->status == 1 ? 'selected' : ''}} value="1">يعمل</option>
				<option {{$settings->status == 0 ? 'selected' : ''}} value="0">معطل</option>
			</select>
		</div>
	
		
		
		<div class="form-group">
			<label for="">فيسبوك</label>
			<input value="{{$settings->facebook}}" type="text" name="facebook" class="form-control" id="" placeholder="رابط صفحة الفيسبوك">
		</div>
	
		
		
		<div class="form-group">
			<label for="">جوجل+</label>
			<input value="{{$settings->googleplus}}" type="text" name="googleplus" class="form-control" id="" placeholder="رابط صفحة جوجل +">
		</div>
	
		
		
		<div class="form-group">
			<label for="">تويتر</label>
			<input value="{{$settings->twitter}}" type="text" name="twitter" class="form-control" id="" placeholder="رابط الحساب الخاص بتويتر">
		</div>
	
		
		
		<div class="form-group">
			<label for="">اللوجو الحالي</label>
			<input value="{{$settings->logo}}" type="text" name="logo" class="form-control" id="" placeholder="رابط اللوجو الخاص بالرئيسية">
			
		</div>
		

		<div class="form-group">
			<label for="">إضافة لوجو جديد</label>
			<input type="file" name="new_logo" class="form-control" id="fileUpload" >
		</div>
		


		<div id="image-holder">
				
		</div>
		
		<div class="form-group">
			<label for="">وصف الموقع</label>
			<textarea name="site_des" id="site_des" class="form-control" rows="3" required="required">
				{{$settings->site_des}}
			</textarea>
		</div>
	
		
		<div class="form-group">
			<label for="">حقوق الملكية</label>
			<input value="{{$settings->copyright}}" type="text" name="copyright" id="input" class="form-control" value="" required="required">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">حفظ الإعدادات</button>
	</form>
<hr>
</section>

@endsection

@section('footer')

<script src="{{url('back/bootstrap/js/image-preview.js')}}"></script>
@endsection