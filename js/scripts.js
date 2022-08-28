$(function(){
	$('nav.Mobile').click(function(){
		var listamenu = $('nav.Mobile ul');
		if(listamenu.is(':hidden') == true){
			var icone = $('.botao-menu-mobile').find('i')
			icone.removeClass('fa-solid fa-bars');
			icone.addClass('fa-solid fa-x');
			listamenu.slideToggle();
		}
		else{
			var icone = $('.botao-menu-mobile').find('i')
			icone.removeClass('fa-solid fa-x');
			icone.addClass('fa-solid fa-bars');
			listamenu.slideToggle();
		}
	})
	if($('target').length > 0){
		var elemento = '#'+$('target').attr('target');
		var divScroll = $(elemento).offset().top;
		$('html,body').animate({scrollTop:divScroll},2000);
	}
})

