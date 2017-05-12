@extends('back.main')

@section('title', 'تعديل بيانات الملف الشخصي')

@section('content')
    <!-- Main content -->
    <section class="content">
    <form action="{{url('/admin/profile/'. auth()->user()->id)}}" method="POST" role="form">
    {{csrf_field()}}
      <legend>تعديل بياناتك الشخصية</legend>
    @include('errors.form-errors')
      <div class="form-group">
        <label for="">الاسم المستعار</label>
        <input type="text" name="name" class="form-control" value="{{$user->name}}">
      </div>

      <div class="form-group">
        <label for="">الاسم الأول</label>
        <input type="text" name="ufirst_name" class="form-control" value="{{$user->uinfo->ufirst_name}}">
      </div>

      <div class="form-group">
        <label for="">الاسم الأخير</label>
        <input type="text" name="ulast_name" class="form-control" value="{{$user->uinfo->ulast_name}}">
      </div>

      <div class="form-group">
        <label for="">البريد الإلكتروني</label>
        <input type="email" name="email" class="form-control" value="{{$user->email}}">
      </div>

      <div class="form-group">
        <label for="">كلمة المرور</label>
        <input type="password" name="password" class="form-control" value="" >
      </div>

      <div class="form-group">
        <label for="">إعادة كلمة المرور</label>
        <input type="password" name="password_confirmation" class="form-control" value="">
      </div>

      <input type="hidden" name="old_password" value="{{$user->password}}">

     <div class="form-group">
        <label for="">الدولة</label>
        <select name="u_country">
          @foreach(countries() as $key => $country)
          <option {{$user->u_country == $key ? 'selected' : ''}} value="{{$key}}">{{$country}}</option>
          @endforeach
        </select>
      </div>
    
      
    
      <input type="submit" class="btn btn-success" value="حفظ">
    </form>
  
    </section>
    <!-- /.content -->
@endsection