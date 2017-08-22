$(document).on('click', '.deleteModal', function(){
	var ID = $(this).val();
	$('#idSliderDelete').val(ID);
});

$(document).on('submit', '#deleteSlider', function(event){
	event.preventDefault();
	jQuery.ajax({
	  url: '../../../app/controllers/deleteSlider.php',
	  type: 'POST',
	  dataType: 'json',
	  data: $(this).serialize(),
	  complete: function(serverAnswer) {
	    if (!serverAnswer.error) {
	    	self.parent.location.reload();
	    }
	  },
	  success: function(data, textStatus, xhr) {
	    //called when successful
	  },
	  error: function(xhr, textStatus, errorThrown) {
	    //called when there is an error
	  }
	});
	
});

//Pasaje de datos a ventana modal
$(document).on('click', '.editModal', function(){
	var eID = $(this).val();
	$(".modal-body #id-slider").val(eID);
	loadEditModal(eID);
});

// Carga de datos en Formulario Modal
function loadEditModal(input){
	jQuery.ajax({
		url: '../../../app/controllers/editSlider.php',
		type: 'POST',
		dataType: 'html',
		data: {input: input},
	})
	.done(function(serverAnswer) {
		$("#formEditSlider").html(serverAnswer);
	})
	.fail(function() {
		console.log("error");
	})
};

//Guardado de cambios en edición de Slider

$(document).on('submit', '#formEditSlider', function(event){
	event.preventDefault();
	jQuery.ajax({
	  url: '../../../app/controllers/updateEditSlider.php',
	  type: 'POST',
	  dataType: 'json',
	  data: $(this).serialize(),
	  complete: function(serverRespond) {
	    if (serverRespond.error) {
	    	$('#error').slideDown('slow', function(){
	    	$(this).slideUp(3000);
	    });
	    }else{
	    	$('#success').slideDown('slow', function(){
	    	$(this).slideUp(3000);
	    	});
	    }
	  },
	  success: function(textStatus) {
	    	console.log(textStatus);
	  },
	  error: function(xhr, textStatus, errorThrown) {
	    //called when there is an error
	  }
	});
	
});

//Pasaje de datos a ventana modal
$(document).on('click', '.editServiceModal', function(){
	var sID = $(this).val();
	$(".modal-body #id-service").val(sID);
	loadEditServicesModal(sID);
});

// Carga de datos en Formulario Modal
function loadEditServicesModal(input){
	jQuery.ajax({
		url: '../../../app/controllers/editServices.php',
		type: 'POST',
		dataType: 'html',
		data: {input: input},
	})
	.done(function(serverAnswer) {
		$("#formEditServices").html(serverAnswer);
	})
	.fail(function() {
		console.log("error");
	})
};