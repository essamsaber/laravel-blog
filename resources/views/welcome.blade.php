@extends('front.main')
@section('title', 'مدونة بحر التقنية | الرئيسية')
@section('content')

@foreach($posts as $post)

<article>
<img width="200px" height="200px" src="{{url('front/post_images/'.$post->image)}}"/>
<h2><a href="{{url('/posts/'.$post->slug)}}">{{$post->title}}</a></h2>
<hr>
<span class="info">نشر بواسطة {{$post->user->name}} - منذ {{$post->created_at->diffForHumans()}}</span>
<p>{!!strip_tags(substr($post->body, 0, 300))!!}</p>
</article>

@endforeach


<ul id="pagi">
{{$posts->links()}}
</ul>
@endsection

