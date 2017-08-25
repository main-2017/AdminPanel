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
	$(".modal-body #formEditServices #id-service").val(sID);
	console.log(sID);
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
		$(".modal-body form#formEditServices").html(serverAnswer);
	})
	.fail(function() {
		console.log("error");
	})
};

//Guardado de cambios en edición de Servicios

$(document).on('submit', '#formEditSlider', function(event){
	event.preventDefault();
	jQuery.ajax({
	  url: '../../../app/controllers/updateEditServices.php',
	  type: 'POST',
	  dataType: 'json',
	  data: $(this).serialize(),
	  complete: function(serverRespond) {
	    if (serverRespond.error) {
	    	$('#errorService').slideDown('slow', function(){
	    	$(this).slideUp(3000);
	    });
	    }else{
	    	$('#successService').slideDown('slow', function(){
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

// Eliminacion de proyectos
$(document).on('click', '.deleteProjectModal', function(){
	var pID = $(this).val();
	$('#idProjectDelete').val(pID);
	console.log(pID);
});

$(document).on('submit', '#deleteProject', function(event){
	event.preventDefault();
	jQuery.ajax({
	  url: '../../../app/controllers/deleteProject.php',
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

// Edicion de proyectos

//Pasaje de datos a ventana modal
$(document).on('click', '.editProjectModal', function(){
	var epID = $(this).val();
	$(".modal-body #id-project").val(epID);
	console.log(epID);
	loadEditProjectModal(epID);
});

// Carga de datos en Formulario Modal
function loadEditProjectModal(input){
	jQuery.ajax({
		url: '../../../app/controllers/editProject.php',
		type: 'POST',
		dataType: 'html',
		data: {input: input},
	})
	.done(function(serverAnswer) {
		$("#formEditProject").html(serverAnswer);
	})
	.fail(function() {
		console.log("error");
	})
};

//Guardado de cambios en edición de Proyectos

$(document).on('submit', '#formEditProject', function(event){
	event.preventDefault();
	jQuery.ajax({
	  url: '../../../app/controllers/updateEditProject.php',
	  type: 'POST',
	  dataType: 'json',
	  data: $(this).serialize(),
	  complete: function(serverRespond) {
	    if (serverRespond.error) {
	    	$('#errorProject').slideDown('slow', function(){
	    	$(this).slideUp(3000);
	    });
	    }else{
	    	$('#successProject').slideDown('slow', function(){
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