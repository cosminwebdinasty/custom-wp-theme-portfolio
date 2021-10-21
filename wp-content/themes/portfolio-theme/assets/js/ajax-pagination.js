$(document).on( 'click', '.nav-links a', function( event ) {
	event.preventDefault();
	
	$('.nav-links a').each(function(){
		$(this).removeClass('active2');
	});
	$(this).addClass('active2');

    $('.ajax-response').html('');
    // show loading screen

	$('body').addClass('loading');  

	$.ajax({
		url: ajaxpagination.ajaxurl,
		type: 'post',
		data: {
			action: 'ajax_load_portofolio',
            category: $(this).data('category'),
            subcategory: $(this).data('subcategory'),
		},
		success: function( result ) {
			/* alert( result ); */
            console.log( result );
            $('.ajax-response').html(result);
            // hide loading screen
			$('body').removeClass('loading');  
		},
        error: function (error){
            console.log(error);
        }
	})
})