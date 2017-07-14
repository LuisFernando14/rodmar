$(document).ready(function() {

		$('#div-btn1').click(function(){

			$.ajax({
	            type: "POST",
	            //data: dataString,
	            url: "ventas/ventas.php",
	       		success: function(a) {

	       			$('#div-results').html(a);

	          	}
			});
		});
<!--------------------------------------------------------------------->
		$('#div-btn2').click(function(){

			$.ajax({
	            type: "POST",
	            url: "../../../ajax.html",
	       		success: function(a) {

	       			$('#div-results').html(a);

	          	}
			});
		});
<!--------------------------------------------------------------------->	
		$('#div-btn3').click(function(){

			$.ajax({
	            type: "POST",
	            url: "../../../tabla.php",
	       		success: function(a) {

	       			$('#div-results').html(a);

	          	}
			});
		});


	});