//NAVIGATION BAR
  $(document).ready(function(){
    // hide .navbar first
    $(".navbar").hide();
    // fade in .navbar
    $(function () {
       
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.navbar').fadeIn();
                } else {
                $('.navbar').fadeOut();
                }
        });
    });


//TESTIMONIAL
   $('.cd-testimonials-wrapper').flexslider({
        selector: ".cd-testimonials > li",
        animation: "slide",
        controlNav: false,
        slideshow: false,
        smoothHeight: true,
        start: function(){
            $('.cd-testimonials').children('li').css({
                'opacity': 1,
                'position': 'relative'
            });
        }
    });



//SMOOTH SCROLLING
$(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });




});
