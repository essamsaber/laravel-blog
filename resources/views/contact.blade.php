@extends('front.main')
@section('title', 'الاتصال بنا | الرئيسية')
@section('content')
<div class="comment">
	الحقول التي تسبقها علامة (*) مطلوبة
	<form method="POST" method="">
		* الاسم<div><input type="text" name="name" id="name"> </div>
		* البريد الإلكتروني<div> <input type="email" name="email" id="email"></div>
		<div><textarea rows="10" name="comment" id="comment"></textarea></div>
		<div><input type="submit" name="submit" value="إرسال"></div>
	</form>
</div>

@endsection

