@extends('back.main')

@section('title', 'كل المقالات')

@section('content')

<section class="content-header">
<div style="float:right;">
	<ol class="breadcrumb">
		<li>
			<a href="{{url('/admin')}}">الرئيسية</a>
		</li>
		<li class="active">المقالات</li>
	</ol>	
</div>
</section>

<section class="content">
<table class="table table-hover text-center">
		<thead>
			<tr>			
				<th>المعرف</th>
				<th>اسم الناشر</th>
				<th>القسم</th>
				<th>عنوان المقال</th>
				<th>حالة المقال</th>
				<th>الصورة</th>
				<th>العمليات</th>
			</tr>
		</thead>
		<tbody>
		@foreach($posts as $post)
			<tr>
				<td>{{$post->id}}</td>
				<td>{{$post->user->name}}</td>
				<td>{{$post->category->name}}</td>
				<td>{{$post->title}}</td>
				<td>
				@if($post->status == 0)
					مسودة
				@else
					منشور
				@endif
					
				</td>
				<td><img src="{{url('front/post_images/').'/'.$post->image}}" style="width:100px; height: 50px;" /></td>
				<td>
					<form method="POST" action="{{url('/admin/posts/'.$post->id)}}">
					{{csrf_field()}}
					{{method_field('DELETE')}}
						<a class="btn btn-sm btn-primary" href="{{route('posts.edit', $post->id)}}">تعديل</a>
						<input type="submit" class="btn btn-sm btn-danger" value="حذف">
					</form>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>	
</section>
{{$posts->links()}}
@endsection