@extends('back.main')

@section('title', 'إضافة مستخدم جديد')

@section('header')
<style>
	.inputWidth{
		width: 300px;
	}
</style>
@endsection

@section('content')

<section class="content-header">
<div style="float: right;">
	<ol class="breadcrumb">
		<li>
			<a href="{{url('/admion')}}">الرئيسية</a>
		</li>
		<li class="active">إضافة مستخدم جديد</li>
	</ol>
</div>
</section>

<section class="content">
	<form action="{{route('users.store')}}" method="POST">
	{{csrf_field()}}
		<legend>إضافة مستخدم جديد</legend>
		
		<div class="form-group">
		@include('errors.form-errors')	
		</div>

		<div class="form-group">
			<label for="">اسم الظهور</label>
			<input type="text" class="form-control inputWidth" name="name" placeholder="اسم الشهرة">
		</div>
	
		<div class="form-group">
			<label for="">الاسم الأول</label>
			<input type="text" class="form-control inputWidth" name="ufirst_name" placeholder="الاسم الأول">
		</div>

		<div class="form-group">
			<label for="">الاسم الأخير</label>
			<input type="text" class="form-control inputWidth" name="ulast_name" placeholder="الاسم الأخير">
		</div>
		
		<div class="form-group">
			<label for="">البريد الإلكتروني</label>
			<input type="email" class="form-control inputWidth" name="email" placeholder="البريد الإلكتروني">
		</div>

		<div class="form-group">
			<label for="">كلمة المرور</label>
			<input type="password" class="form-control inputWidth" name="password" placeholder="أدخل كلمة المرور">
		</div>

		<div class="form-group">
			<label for="">إعادة كلمة المرور</label>
			<input type="password" class="form-control inputWidth" name="password_confirmation" placeholder="أعد إدخال كلمة المرور">
		</div>
		
		<div class="form-group">
			<label for="">الصلاحيات</label>
			<select name="role" class="form-control inputWidth" style="height: 40px">
				<option value="2">محرر</option>
				<option value="1">مدير</option>
			</select>
		</div>
		
		<div class="form-group">
			<label for="">البلد</label>
			<select name="u_country" class="form-control inputWidth" style="height: 40px">
				@foreach(countries() as $key => $value)
					<option value="{{$key}}">{{$value}}</option>
				@endforeach
			</select>
		</div>
	
		<div class="form-group">
			<input type="submit" value="إضافة" class="btn btn-primary btn-lg">
		</div>
	</form>
</section>

@endsection