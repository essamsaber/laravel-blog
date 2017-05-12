@foreach($comments as $comment)
<li class="media">
  <a class="pull-right" href="#">
    <img class="media-object img-circle" src="https://twibbon.com/content/images/system/default-image.jpg" alt="profile">
  </a>
  <div class="media-body">
    <div class="well well-lg">
        <h3>{{$comment->author}}</h3>
        <section><p>{{$comment->body}}</p></section>
    </div>              
  </div>
</li>
<hr>
@endforeach