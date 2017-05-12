$(document).ready(function(){

  
var myReader = new FileReader();

	$('#fileUpload').on('change', function(){
		if(typeof (FileReader) != "undefined") {
			var image_holder = $('#image-holder');
			image_holder.empty();
			var reader = new FileReader();
			reader.onload = function (e) {
				$("<img />", {
					"src": e.target.result,
					"class": "thumbnail preview"
				}).appendTo(image_holder);
			}
			image_holder.show();
			reader.readAsDataURL($(this)[0].files[0]);
		} else {
			alert("المتصفح لا يدعم عرض الصور قبل رفعها");
		}
	});

});


