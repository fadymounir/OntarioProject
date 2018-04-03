$(document).ready(function () {

    //nice scroll

    $('html').niceScroll();

    $('.carousel').carousel({
        interval: 5000
    });
    //show the  color option box
    $('.gear-chick').click(function () {

        $('.color-option').fadeToggle();
    });

    //change color theame 
    var colorLi = $('.color-option ul li');
    colorLi
     .eq(0).css("backgroundColor", "#e41b17").end()
     .eq(1).css("backgroundColor", "#F50057").end()
     .eq(2).css("backgroundColor", "#D81B60").end()
     .eq(3).css("backgroundColor", "#2196F3").end()
     .eq(4).css("backgroundColor", "#004D40");
    colorLi.click(function () {

        $("link[href*='color']").attr("href",$(this).attr("data-value"));
    });

    //scroll top button
    var scrollbutton = $('#scroll-top');
    $(window).scroll(function(){
        console.log($(this).scrollTop());
         if($(this).scrollTop() >=700)
            scrollbutton.show();
        else
             scrollbutton.hide();
    });
    scrollbutton.click(function () {
        $('html , body').animate({ scrollTop: 0 }, 1500);
    });
});
     
//loading screen 
 $(window).load(function () {
     $('.loading-overly .spinner').fadeOut(1500, function () {
         $('body').css("overflow", "auto");
        $(this).parent().fadeOut(1500, function () {
            $(this).remove();
        });
    });


});




