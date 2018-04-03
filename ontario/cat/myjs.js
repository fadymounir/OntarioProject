$('#container').mixItUp();


	$('.our_product a').click(function(){
	$('html ,body').animate({
			scrollTop:$('#'+$(this).data('value')).offset().bottom
		},1000);
	});

