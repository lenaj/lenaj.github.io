function positionElements() {
    if ($( window ).width() < 330) {
        $(".slidesControl .position").css({
            "top": "20%",
            "left": "11%"
        });

        $("#container .slidesContainer").css({
            "height": "95%"            
        });
        
        $("#slides .slidesPrevious").css({
            "background": "url(images/big/arrow-previous-small.png) no-repeat 0 0",
            "left": "-20px"

        });

        $("#slides .slidesNext").css({
            "background": "url(images/big/arrow-next-small.png) no-repeat 0 0",
            "right": "-57px" 
        });

        $( ".SlidesControl .position[alt='Slide 1']").attr("src", "images/slider-mobile.jpg");
        $( ".SlidesControl .position[alt='Slide 2']").attr("src", "images/slider-mobile1.jpg");
        $( ".SlidesControl .position[alt='Slide 3']").attr("src", "images/slider-mobile2.jpg");
    } else {
        $(".slidesControl .position").css({
            "top": "30%",
            "left": "12%"
        });

        $("#container .slidesContainer").css({
            "height": "84%"            
        });

        $("#slides .slidesPrevious").css({
            "background": "url(images/big/arrow-previous.png) no-repeat 0 0",
            "left": "-36px"

        });

        $("#slides .slidesNext").css({
            "background": "url(images/big/arrow-next.png) no-repeat 0 0",
            "right": "-40px" 
        });

        $( ".SlidesControl .position[alt='Slide 1']").attr("src", "images/slab.png");
        $( ".SlidesControl .position[alt='Slide 2']").attr("src", "images/slab.png");
        $( ".SlidesControl .position[alt='Slide 3']").attr("src", "images/slab.png");
    }
}

$( document ).ready(function() {
    $("#slides").slides({
        responsive: true
    });
    $("div.slidesContainer").css("height", "500px");
    $(".slidesPrevious.slidesNavigation, .slidesNext.slidesNavigation").html("");
    positionElements();
    
    //$("img.position").css("top", "130px");
    //$("#DateCountdown").TimeCircles();

    $("#DateCountdown").TimeCircles({
        direction: "clockwise",
        fg_width: 0.2,
        bg_width: 0.9,
        circle_bg_color: "#d0d0d0" ,
        time: {
            Days: { show: false, text: false },
            Hours: { color: "#ececec" },
            Minutes: { color: "#ececec" },
            Seconds: { color: "#ececec",  }
        }
    });

    $(".time_circles h4").css("color","#d0d0d0");
    $(".time_circles div span").css("color","#9a0b16");
    $("#DateCountdown").css("background-color","transparent");


    $( window ).resize(function() {
        positionElements();   
    });
    

});



    
            