$(document).ready(function() {

	/*== Masked input ==*/

	jQuery(function($){   
	   $("#phone").mask("+380 (999) 999-99-99");
	});


	/*== Form validation ==*/

	$("#form").validate({
		rules: {
			name: {required: true, minlength: 2},
			message: {required: true, minlength: 2},
			phone: {required: true}
		}
	});


	/*== AJAX ==*/

	function funcSuccess (data) {
			$("form").css('opacity', 1);
			$(".ajax-sending").css("display", "none");
			alert(data);
			$("input").val('');
			$("textarea").val('');
	}
	function funcBefore() {
		$("form").css('opacity', 0);
		$(".ajax-sending").css("display", "block");
		
	}

	$("#form").submit(function() {
		$.ajax({
			type: "POST",
			url: "ajax.php",
			data: $(this).serialize(),
			dataType: "html",
			beforeSend: funcBefore,
			success: funcSuccess
		});
		
		return false;
	});


	

});



