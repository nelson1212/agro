var $ = jQuery.noConflict();
jQuery(document).ready(function($) {
	if($(window).scrollTop() > 250){
		$('.back-to-top').fadeIn();
	}else{
		$('.back-to-top').hide();
	}

	$(window).scroll(function(){
		if($(this).scrollTop() > 250){
			$('.back-to-top').fadeIn();
		}
		else{
			$('.back-to-top').fadeOut();
		}
	});
	
	$('.back-to-top').click(function(){
		$('html, body').animate({scrollTop: 0},600);
		return false;
	});
});







