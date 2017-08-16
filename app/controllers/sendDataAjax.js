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