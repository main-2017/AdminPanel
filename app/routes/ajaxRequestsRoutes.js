$(document).ready(function(){
	$.ajax({
		url: '../../../app/controllers/editViewSlider.php',
		type: 'POST',
		dataType: 'html',
		
	})
	.done(function(answer) {
		console.log("success");
		$("#slider-edit-content").html(answer);
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
});
