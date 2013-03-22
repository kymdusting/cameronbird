$(document).ready(function(){

	/*MainMenu SetUp
	================*/
	$('.mainmenu').find('li:has(ul)').addClass('has-menu');
	$('.menu_indicator').stop().animate({'opacity' : '0'},1);
	$('.sub_menu').animate({'opacity' : '0'},1);
	$('.mobile_menu').html($('.mainmenu').html());
	$('.mobile_menu').find('li.sep').remove();

	/*SubMenu Script
	================*/
	$('.mainmenu').find('li.has-menu').hover(function(){
		showed_menu = $(this).children('.sub_menu');
		showed_menu.css('display', 'block');
		showed_menu.stop().animate({'opacity' : '1'}, 300);
	}, function(){
		showed_menu = $(this).children('.sub_menu');
		showed_menu.stop().animate({'opacity' : '0'}, 300, function() {$(this).css('display', 'none');});
	});

	/*MobileMenu Scripts
	====================*/
	$('.menu_toggle').click(function(){
		$(this).toggleClass('act');
		$('.mobile_menu').slideToggle();
	});

	$('#contact-us form').submit(function() {

		// update user interface
		$('#contact-us .response').html('Processing...');
		$('#contact-us form input[type="submit"]').val('Sending...');

		// Prepare query string and send AJAX request
		$.ajax({
			url: 'site-handlers/contact-us.php',
			data: 'ajax=true&name=' + escape($('#name').val()) +
				  '&user-name=' + escape($('#user-name').val()) +
				  '&email=' + escape($('#email').val()) +
				  '&phone=' + escape($('#phone').val()) +
				  '&address=' + escape($('#address').val()) +
				  '&suburb=' + escape($('#suburb').val()) +
				  '&state=' + escape($('#state').val()) +
				  '&postcode=' + escape($('#postcode').val())
				  ,
			success: function(msg) {
				$('#contact-us .response').html(msg);
				if(msg.substr(0,5) === 'Error') {
					$('#contact-us input[type="submit"]').val('Try again!');
				} else {
  					$('#contact-us input').val('');
					$('#contact-us input[type="submit"]').val('All done!');
				}
			}
		});

		return false;
	});



	// select the overlay element - and "make it an overlay"
  var overlay = $(".simple_overlay").overlay({
	    // custom top position
	    top: 40,
	    // some mask tweaks suitable for facebox-looking dialogs
	    mask: {
	    // you might also consider a "transparent" color for the mask
	    color: '#000',
	    loadSpeed: 200,
	    opacity: 0.8
	    },
	    // disable this for modal dialog-type of overlays
	    closeOnClick: false,
	    // load it immediately after the construction
	    load: true

    });

	$('.simple_overlay form').submit(function() {
		// validation
		var error = false;
		$('.error').addClass('not-here');
		$('.simple_overlay input[type=text]').each(function(index) {
			// console.log(index+': '+$(this).val());
			if($(this).val() === ""){
				// console.log($(this).attr('id'));
				var id = $(this).attr('id');
				$('label[for='+id+'] .error').removeClass('not-here');
				error = true;
			}
		});

		if (error) {return false;}

		// update user interface
		$('.simple_overlay .response').html('Processing...');
		$('.simple_overlay form input[type="submit"]').val('Sending...');

		// Prepare query string and send AJAX request
		$.ajax({
			url: 'site-handlers/sign-up.php',
			data: 'ajax=true&fname=' + escape($('#fname').val()) +
				  '&lname=' + escape($('#lname').val()) +
				  '&email=' + escape($('#email').val()) +
				  '&phone=' + escape($('#phone').val())
				  ,
			success: function(msg) {
				$('.simple_overlay .response').html(msg);
				if(msg.substr(0,5) === 'Error') {
					$('.simple_overlay input[type="submit"]').val('Try again!');
				} else {
  					$('.simple_overlay input').val('');
					$('.simple_overlay input[type="submit"]').val('All done!');
					overlay.overlay().close();
				}
			}
		});

		return false;
	});

$('.simple_overlay .cancel').bind('click', function() {
  overlay.overlay().close();
});

});
