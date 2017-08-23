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

$(document).ready(function(){
	$.ajax({
		url: '../../../app/controllers/editViewServices.php',
		type: 'POST',
		dataType: 'html',
		
	})
	.done(function(answer) {
		console.log("success");
		$("#services-edit-content").html(answer);
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
});

$(document).ready(function(){
	$.ajax({
		url: '../../../app/controllers/editViewProject.php',
		type: 'POST',
		dataType: 'html',
		
	})
	.done(function(answer) {
		console.log("success");
		$("#project-edit-content").html(answer);
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
});

