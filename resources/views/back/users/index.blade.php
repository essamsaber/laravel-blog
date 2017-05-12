@extends('back.main')

@section('title', 'كل المستخدمين')

@section('content')

<section class="content-header">
<div style="float:right;">
	<ol class="breadcrumb">
		<li>
			<a href="{{url('/admin')}}">الرئيسية</a>
		</li>
		<li class="active">كل المستخدمين</li>
	</ol>	
</div>
</section>

<section class="content">

	<table class="table table-hover text-center">
		<thead>
			<tr>
				<th>المعرف</th>
				<th>الاسم</th>
				<th>البريد الإلكتروني</th>
				<th>الصلاحية</th>
				<th>العمليات</th>
			</tr>
		</thead>
		<tbody>
		@foreach($users as $user)
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->role == 1 ? 'مدير' : 'محرر'}}</td>
				<td>
					<form action="{{route('users.destroy', $user->id)}}" method="POST">
						{{csrf_field()}}
						{{method_field('DELETE')}}
						<a class="btn btn-sm btn-primary" href="{{route('users.edit', $user->id)}}">تعديل</a>
						<input type="submit" value="حذف" class="btn btn-sm btn-danger">
					</form>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</section>

@endsection