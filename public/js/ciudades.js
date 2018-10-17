$(document).ready(function() {
	$('#ciudad').change(function() {
		$('#resumen').empty();
		// var endpoint = $('#endpoind').val();
		// var appid = $('#appid').val();
		// var units = $('#units').val();
		// var ciudad = $('#ciudad').val();
	
	    $.ajax({
	    	url: '/consultar',
	    	type: 'GET',
	    	data: {	param1: $('#ciudad').val(),
	    		   	param2: $('#endpoind').val(),
	    		   	param3: $('#appid').val(),
	    		   	param4: $('#units').val(),
	    		  },
	    })

	    .done(function(data) {
	    	// console.log(data[3]);
	    	$.each(data[3], function(index, val) {
	    		$('#resumen').append('<tr><th scope="row">'+index+'</th><th scope="row">'+val+'</th></tr>');
				// console.log(index);
				// console.log(val);
	    	});
	    })

	    .fail(function() {
	    	console.log("error");
	    })

	    .always(function() {
	    	console.log("complete");
	    });
    });
});