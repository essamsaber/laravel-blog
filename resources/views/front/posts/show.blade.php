@extends('front.main')

@section('title', $post->title)

@section('content')
		<article>
			<h2><a href="#">{{$post->title}}</a></h2>
			<br>
			<span class="info">نشر من  {{$post->created_at->diffForHumans()}} بواسطة {{$post->user->name}} </a></span>
			<hr>
			<img src="{{url('front/post_images/'.$post->image)}}">
			<p>{!!$post->body!!}</p>
		</article>

		<article>
			@include('front.partials.comments')
		</article>
		<div class="comment">
			
			<form method="POST" action="{{url('/posts/'.$post->slug.'/comment')}}">
			{{csrf_field()}}
				<div><h1>اترك تعليقك</h1></div>
				<hr>
				<div>الاسم: <input type="text" name="author" id="name"></div>
				<div><input type="hidden" name="post_id" value="{{$post->id}}"></div>
				<div>التعليق: <textarea rows="10" name="body" id="comment"></textarea></div>
				<div><input type="submit" name="submit" value="إرسال"></div>
			</form>
		</div>

@endsection


@section('footer')
<style>
.pull-right{
	float: right;
}
.media{
	list-style-type: none;
}
.media .media-object { max-width: 50px; margin-left: 10px; }
.media-body { position: relative; }
.media-date { 
    position: absolute; 
    right: 25px;
    top: 25px;
}
.media-date li { padding: 0; }
.media-date li:first-child:before { content: ''; }
.media-date li:before { 
    content: '.'; 
    margin-left: -2px; 
    margin-right: 2px;
}
.media-comment { margin-bottom: 20px; }
</style>
@endsection