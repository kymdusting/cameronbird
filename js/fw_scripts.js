$( document ).ready( function () {

	/*MainMenu SetUp
	================*/
	$( '.mainmenu' ).find( 'li:has(ul)' ).addClass( 'has-menu' );
	$( '.menu_indicator' ).stop().animate( {
		'opacity': '0'
	}, 1 );
	$( '.sub_menu' ).animate( {
		'opacity': '0'
	}, 1 );
	$( '.mobile_menu' ).html( $( '.mainmenu' ).html() );
	$( '.mobile_menu' ).find( 'li.sep' ).remove();

	/*SubMenu Script
	================*/
	$( '.mainmenu' ).find( 'li.has-menu' ).hover( function () {
		showed_menu = $( this ).children( '.sub_menu' );
		showed_menu.css( 'display', 'block' );
		showed_menu.stop().animate( {
			'opacity': '1'
		}, 300 );
	}, function () {
		showed_menu = $( this ).children( '.sub_menu' );
		showed_menu.stop().animate( {
			'opacity': '0'
		}, 300, function () {
			$( this ).css( 'display', 'none' );
		} );
	} );

	/*MobileMenu Scripts
	====================*/
	$( '.menu_toggle' ).click( function () {
		$( this ).toggleClass( 'act' );
		$( '.mobile_menu' ).slideToggle();
	} );

	$( '#contact-us form' ).submit( function () {

		// validation
		var error = false;
		$( '.error' ).addClass( 'not-here' );
		$( '#contact-us input[type=text]' ).each( function ( index ) {
			// console.log(index+': '+$(this).val());
			if ( $( this ).val() === "" ) {
				// console.log($(this).attr('id'));
				var id = $( this ).attr( 'id' );
				$( 'label[for=' + id + '] .error' ).removeClass( 'not-here' );
				error = true;
			}
		} );

		if ( error ) {
			return false;
		}

		// update user interface
		$( '#contact-us .response' ).html( 'Processing...' );
		$( '#contact-us form input[type="submit"]' ).val( 'Sending...' );

		// Prepare query string and send AJAX request
		$.ajax( {
			url: 'site-handlers/contact-us.php',
			data: 'ajax=true&fname=' + escape( $( '#fname' ).val() ) +
				'&lname=' + escape( $( '#lname' ).val() ) +
				'&email=' + escape( $( '#email' ).val() ) +
				'&phone=' + escape( $( '#phone' ).val() ),
			success: function ( msg ) {
				$( '#contact-us .response' ).html( msg );
				if ( msg.substr( 0, 5 ) === 'Error' ) {
					$( '#contact-us input[type="submit"]' ).val( 'Try again!' );
				} else {
					$( '#contact-us input' ).val( '' );
					$( '#contact-us input[type="submit"]' ).val( 'All done!' );
				}
			}
		} );

		return false;
	} );


} );