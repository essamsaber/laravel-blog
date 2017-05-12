<?php 			 

function upload($req, $width = null, $height = null, $location)
{
	Image::make($req)->resize($width, $height)->save($location);
}	

function countries()
{
		return ['مصر','الجزائر','السودان','العراق','المغرب','السعودية','اليمن','سوريا','تونس','الصومال','الأردن',
				'الإمارات','ليبيا','فلسطين','لبنان','عمان','الكويت','موريتانيا','قطر','البحرين'];
}

function months()
{
	return [
	'البداية',
	'يناير',
	'فبراير',
	'مارس',
	'أبريل',
	'مايو',
	'يونيه',
	'يوليو',
	'أغسطس',
	'سبتمبر',
	'أكتوبر',
	'نوفمبر',
	'ديسمبر',
	];
}

 function parse($param)
{
	return \Carbon::parse($param)->month;
}