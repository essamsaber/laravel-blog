<header>
	<div class="subnav">
		<div class="wrap-subnav zerogrid">
			<div class="links">
				<ul>
					<li><a href="{{url('/contact')}}">اتصل بنا</a></li>
					<li><a href="{{url('/about')}}">عن الموقع</a></li>
					<li><a href="{{url('/')}}">الرئيسية</a></li>
				</ul>
			</div>
			
			<div class="share">
				<ul>
					<li><a href="{{$sitesettings->twitter}}"><img src="{{url('front/images/twitter-icon.png')}}" title="Twitter"/></a></li>
					<li><a href="{{$sitesettings->facebook}}"><img src="{{url('front/images/facebook-icon.png')}}" title="Facebook"/></a></li>
					<li><a href="{{$sitesettings->googleplus}}"><img src="{{url('front/images/google-plus-icon.png')}}" title="Google Plus"/></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="wrap-header zerogrid">
		<div id="logo"><a href="#"><img src="{{url('front/images/').'/'.$sitesettings->logo}}"/></a></div>
		
		<div id="search">
			<div class="button-search"></div>
			<input type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
		</div>
	</div>
</header>