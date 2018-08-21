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
	function checkValues(data) {
		if (data != null && data != "" && data.length >= 2) {
			return true;
		}
		return false;
	}
	function inputsCheck() {
		var name = $("#name").val().trim();
		var phone = $("#phone").val().trim();
		var text = $("#text").val().trim();

		if (checkValues(name) && checkValues(phone) && checkValues(text)) {
			return true;
		}
		else {
			return false;
		}

	}

		$("#form").submit(function() {
			if (inputsCheck()) {
				
				$.ajax({
					type: "POST",
					url: "ajax.php",
					data: $(this).serialize(),
					dataType: "html",
					beforeSend: funcBefore,
					success: funcSuccess
				});

				return false;
			}
			else {
				alert('Заполните все поля - иначе AJAX запрос не будет отправлен (минимум 2 символа в поле без учета пробелов)!');
				return false;
			}
		});

/*== Magnific popup Модальное окно ==*/

$('.image-popup-vertical-fit').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'mfp-img-mobile',
		image: {
			verticalFit: true
		}
		
	});

	$('.image-popup-fit-width').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		image: {
			verticalFit: false
		}
	});

	$('.image-popup-no-margins').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		}
	});


	});



