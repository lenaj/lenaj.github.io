$(document).ready(function () {

    'use strict';

    /**
     * Animate items as they appear
     * uses jQuery viewport checker plugin
     */

    function animateWhenVisible() {
        var anim_items = $('.animated-parent'),
            no_animation = $('body').hasClass('no-animation');
        if (anim_items.length && !no_animation) {
            anim_items.addClass('invisible').viewportChecker({
                classToAdd: "fadeIn",
                offset: 50,
                repeat: true,
                callbackFunction: function (elem) {
                    var animclass = elem.data('animation'),
                        animdelay = elem.data('animdelay');
						
					
						
                    if (animdelay) {
                        setTimeout(function () {
                           elem.css("opacity","1");
						   
						   
						   //alert('ddd');
						   
				           elem.addClass('visible ' + animclass);
					    }, animdelay);
                    } else {
                        elem.addClass('visible ' + animclass);
                    }
                }
            });
        }
    }

    animateWhenVisible();


}); // end $(document).ready(function () {})