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
		<li class="active">تعديل بيانات المستخدم</li>
	</ol>
</div>
</section>

<section class="content">
	<form action="{{route('users.update', $user->id)}}" method="POST">
	{{csrf_field()}}
	{{method_field('PUT')}}
		<legend>تعديل بينات المستخدم {{$user->name}}</legend>
		
		<div class="form-group">
		@include('errors.form-errors')	
		</div>

		<div class="form-group">
			<label for="">اسم الظهور</label>
			<input type="text" class="form-control inputWidth" name="name" value="{{$user->name}}">
		</div>
	
		<div class="form-group">
			<label for="">الاسم الأول</label>
			<input type="text" class="form-control inputWidth" name="ufirst_name" value="{{$user->uinfo->ufirst_name}}">
		</div>

		<div class="form-group">
			<label for="">الاسم الأخير</label>
			<input type="text" class="form-control inputWidth" name="ulast_name" value="{{$user->uinfo->ulast_name}}">
		</div>
		
		<div class="form-group">
			<label for="">البريد الإلكتروني</label>
			<input type="email" class="form-control inputWidth" name="email" value="{{$user->email}}">
		</div>

		<div class="form-group">
			<label for="">كلمة المرور</label>
			<input type="password" class="form-control inputWidth" name="new_password" value="">
		</div>
		<div class="form-group">
			<input type="hidden" name="password" value="{{$user->password}}">
		</div>
		<div class="form-group">
			<label for="">إعادة كلمة المرور</label>
			<input type="password" class="form-control inputWidth" name="new_password_confirmation" value="">
		</div>
		
		<div class="form-group">
			<label for="">الصلاحيات</label>
			<select name="role" class="form-control inputWidth" style="height: 40px">
			@if($user->role == 1)
				<option value="1">مدير</option>
				<option value="2">محرر</option>
			@else
				<option value="2">محرر</option>
				<option value="1">مدير</option>
			@endif
			</select>
		</div>

		<div class="form-group">
			<label for="">البلد</label>
			<select name="u_country" class="form-control inputWidth" style="height: 40px">
				@foreach(countries() as $key => $value)
					<option {{$user->uinfo->u_country == $key ? 'selected' : ''}} value="{{$key}}">{{$value}}</option>
				@endforeach
			</select>
		</div>
	
		<div class="form-group">
			<input type="submit" value="حفظ التعديلات" class="btn btn-primary btn-lg">
		</div>
	</form>
</section>

@endsection