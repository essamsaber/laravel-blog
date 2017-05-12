@extends('back.main')

@section('title', 'الصفحة الرئيسية')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       لوحة التحكم
        <small>الصفحة الرئيسية</small>
      </h1>
    
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$posts}}</h3>

              <p>الأقسام</p>
            </div>
            <div class="icon">
              <i class="ion-ios-list-outline"></i>
            </div>
            <a href="{{url('/admin/categories')}}" class="small-box-footer">المزيد <i class="fa fa-arrow-circle-left"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$comments}}</h3>

              <p>التعليقات</p>
            </div>
            <div class="icon">
              <i class="ion-chatboxes"></i>
            </div>
            <a href="{{url('/admin/comments')}}" class="small-box-footer">المزيد <i class="fa fa-arrow-circle-left"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$users}}</h3>

              <p>المستخدمين</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{url('/admin/users')}}" class="small-box-footer">المزيد <i class="fa fa-arrow-circle-left"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$posts}}</h3>

              <p>المقالات</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-paper-outline"></i>
            </div>
            <a href="{{url('/admin/posts')}}" class="small-box-footer">المزيد <i class="fa fa-arrow-circle-left"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

    </section>
    <!-- /.content -->
@endsection