// Login
$(document).ready(function(){
	$("#errorLogin").hide();
});

jQuery(document).on('submit', '#login', function(event){
	event.preventDefault();

	jQuery.ajax({
	  url: '../../../app/controllers/login.php',
	  type: 'POST',
	  dataType: 'json',
	  data: $(this).serialize(),
	  beforeSend: function(){
	  	$('#submit').val('Validando...');
	  	}
	})
	.done(function(serverAnswer){//serverAnswer es la variable que contiene la respuesta del servidor
		if (!serverAnswer.error){
			console.log(serverAnswer);
			console.log("login exitoso");

		// Redireccionamiento al directorio correspondiente
			if(serverAnswer.rol == "Administrador") {
				location.href = '../../../resources/views/admin/';
			} else if (serverAnswer.rol == 'Editor') {
				location.href = '../../../resources/views/editor/';
			} 
		}else{
				$('#errorLogin').slideDown('slow');
				setTimeout(function(){
					$('#errorLogin').slideUp('slow');
				},3000);
				$('#submit').val('Ingresar');
			}
	})

	.fail(function(answer){
		console.log(answer);
		console.log("No fue posible conectar con el servidor");
		$('#submit').val('Ingresar');
	})

	.always(function(){
		console.log("Script finalizado");
	});
	
});

// Comprobación de coincidencia de contraseñas
$(document).ready(function() {
	//variables
	var pass1 = $('[name=password]');
	var pass2 = $('[name=passwordValidate]');
	var confirmacion = "Las contraseñas coinciden";
	var longitud = "La contraseña debe estar formada entre 8-70 carácteres (ambos inclusive)";
	var negacion = "No coinciden las contraseñas";
	var vacio = "La contraseña no puede estar vacía";
	//oculto por defecto el elemento span
	var span = $('<div class="alert" role="alert"></div>').insertAfter(pass2);
	span.hide();
	//función que comprueba las dos contraseñas
	function coincidePassword(){
	var valor1 = pass1.val();
	var valor2 = pass2.val();
	//muestro el span
	span.show().removeClass();
	//condiciones dentro de la función
	if(valor1 != valor2){
	span.text(negacion).addClass('alert-danger');
	$('#enviar').addClass('disabled');	
	}
	if(valor1.length==0 || valor1==""){
	span.text(vacio).addClass('alert-danger');
	$('#enviar').addClass('disabled');	
	}
	if(valor1.length<4 || valor1.length>20){
	span.text(longitud).addClass('alert-danger');
	$('#enviar').addClass('disabled');
	}
	if(valor1.length!=0 && valor1==valor2){
	span.text(confirmacion).removeClass("alert-danger").addClass('alert-success');
	$('#enviar').removeClass('disabled');
	}
	}
	//ejecuto la función al soltar la tecla
	pass2.keyup(function(){
	coincidePassword();
	});
});

// Ingreso de nuevos usuarios
jQuery(document).on('submit', '#addUser', function(event){
	event.preventDefault();
jQuery.ajax({
  url: '../../../app/controllers/saveNewUser.php',
  type: 'POST',
  dataType: 'json',
  data: $(this).serialize(),
  complete: function(respuesta) {
    console.log("Ajax Request enviado");
    console.log(respuesta);
  },
  success: function(data) {
  	console.log("Comprueba valor de error");
  	if (data.error === true) {
  		$('#error_admin').modal("show");
  	}else{
  		$('#exito_admin').modal("show");
  		console.log(data);
  	}
  },
  error: function(rta) {
    
    
  }
});
});