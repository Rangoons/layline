$(document).ready(function(){
	$('#menu-icon').click(function(){
		$(this).toggleClass('open');
    if($('#menu-icon').hasClass('open')){
      $('.mobile-menu').show();
    }
    else{
      $('.mobile-menu').hide();
    }
	});
});