@extends('back.main')

@section('title', ' كل الأقسام ')

@section('content')


<section class="content-header">
	<div style="float: right;">
	<ol class="breadcrumb">
		<li>
			<a href="{{url('/admin')}}">الرئيسية</a>
		</li>
		<li class="active">كل الأقسام</li>
	</ol>
	</div>
</section>
<hr>
<section class="content">
<table class="table table-hover text-center">
		<thead>
			<tr>
				<th>المعرف</th>
				<th>اسم القسم</th>
				<th>العمليات</th>
			</tr>
		</thead>
		<tbody>
		@foreach($categories as $cat)
			<tr>
				<td>{{$cat->id}}</td>
				<td>{{$cat->name}}</td>
				<td>
					<form action="{{url('/admin/categories/'. $cat->id)}}" method="POST">
						{{csrf_field()}}
						{{method_field('DELETE')}}
						<input type="submit" value="حذف" class="btn btn-sm btn-danger">
					<a class="btn btn-sm btn-primary" href="{{route('categories.edit', $cat->id)}}">تعديل</a>
					</form>
					
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>	
</section>

@endsection