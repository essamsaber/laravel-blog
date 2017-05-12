  @if(session()->has('msg'))
  	<br>
	<div class="alert alert-success">
		{{session()->get('msg')}}
	</div>
  @endif