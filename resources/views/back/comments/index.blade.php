@extends('back.main')

@section('title', 'كل المستخدمين')

@section('content')

<section class="content-header">
<div style="float:right;">
	<ol class="breadcrumb">
		<li>
			<a href="{{url('/admin')}}">الرئيسية</a>
		</li>
		<li class="active">كل التعليقات</li>
	</ol>	
</div>
</section>

<section class="content">

	<table class="table table-hover text-center">
		<thead>
			<tr>
				<th>المعرف</th>
				<th>المعلق</th>
				<th>التعليق</th>
				<th>الحالة</th>
				<th>المقال</th>
				<th>العمليات</th>
			</tr>
		</thead>
		<tbody>
		@foreach($comments as $comment)
			<tr>
				<td>{{$comment->id}}</td>
				<td>{{$comment->author}}</td>
				<td>{{$comment->body}}</td>
				<td>{{$comment->status == 1 ? 'منشور' : 'ينتظر الموافقة'}}</td>
				<td>{{$comment->post->title}}</td>
				<td>
					<form action="{{url('/admin/comments/'.$comment->id)}}" method="POST">
						{{csrf_field()}}
						{{-- {{method_field('DELETE')}} --}}
						@if($comment->status == 1)
						<a class="btn btn-sm btn-primary" href="{{url('/admin/comments/'.$comment->id.'/status')}}">إلغاء النشر</a>
						@else
						<a class="btn btn-sm btn-primary" href="{{url('/admin/comments/'.$comment->id.'/status')}}"> موافقة</a>
						@endif
						<input type="submit" value="حذف" class="btn btn-sm btn-danger">
					</form>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</section>

@endsection