$(document).ready(function(){

$('.carousel').carousel({
	interval:5000
});
$('html').niceScroll();
$(window).scroll(function(){
	if($(this).scrollTop()>=700){
		$("#scroll_top").show();
	}
	else{
		$("#scroll_top").hide();
	}
});
		$("#scroll_top").click(function () {
        $('html , body').animate({ scrollTop: 0 }, 1500);
		    }); 
		
   $('.links li').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
    });
    $('.links li a').click(function () {
        $('html , body').animate({
            scrollTop: $("#" + $(this).data('value')).offset().top
        }, 1000);
    });
	$('.serv_info a').click(function(){
	$('html ,body').animate({
			scrollTop:$('#'+$(this).data('value')).offset().top
		},1000);
	});


$('.arrow').click(function(){

	$('.social').fadeToggle();

});




});


