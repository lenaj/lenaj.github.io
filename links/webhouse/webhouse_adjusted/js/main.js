$(document).ready(function(){
    $(".sticky").sticky({topSpacing:0});

    var scroll_start = 0;
    var startchange = $(".sticky").height();

    $(document).scroll(function () {
        scroll_start = $(this).scrollTop();

        if (scroll_start > startchange) {
            $(".sticky").css({'background-color': 'rgba(67,11,210,0.8)'});
            $(".inner-box-shadow").css({'border-bottom': '1px solid #430bd2'});
            $("#header li > a").css({'color': '#fff', 'opacity': '1'});
            //$(".navbar-brand-mobile").css("display", "block");
            //$(".navbar-brand").css("display", "none");
            //$("li.active a").css("border-bottom", "2px solid #fff");
            $(".menu-icon-wrapper svg path").css("stroke", "#fff");
            $(".menu-icon-wrapper").css("top","-123px");


        } else {
            $(".sticky").css({'background-color': 'transparent'});
            $(".inner-box-shadow").css({'border-bottom': '0px'});
            $("#header li > a").css('color', '#fff');
            //$(".navbar-brand-mobile").css("display", "none");
            //$(".navbar-brand ").css("display", "block");
            $("li.active a").css("border-bottom", "2px solid #fff");
            $(".menu-icon-wrapper svg path").css("stroke", "#fff");
            $(".menu-icon-wrapper").css("top","-123px");
        }


    });
    $(".sticky").css({'background-color': 'transparent'});
    $(".inner-box-shadow").css({'border-bottom': '0px'});
    $("#header li > a").css('color', '#fff');
    //$(".navbar-brand-mobile").css("display", "none");
    //$(".navbar-brand ").css("display", "block");
    //$("li.active a").css("border-bottom", "2px solid #fff");
    $(".menu-icon-wrapper svg path").css("stroke", "#fff");
    $(".menu-icon-wrapper").css("top","-123px");


    $('.hex').hover(
        function(){
            $(".inner h4").addClass("fadeInDown");
            $(".inner p").addClass("fadeInUp");

        },
        function(){
            $(".inner h4").removeClass("fadeInDown");
            $(".inner p").removeClass("fadeInUp");
        }
    );
    $('.about-icon-wrapper').hover(
        function(){
            $(this).addClass("rotateIn");
            $(this).addClass("rotateIn");

        },
        function(){
            $(this).removeClass("rotateIn");
            $(this).removeClass("rotateIn");
        }
    );

    $("#header").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });

    $(".video-container").click(function () {
        var myVideo=document.getElementById("video");
        if (myVideo.paused) {
            myVideo.play();
            $(".video-info").fadeOut( "fast" );
        }
        else {
            myVideo.pause();
            $(".video-info").fadeIn( "fast" );
        }
    });




    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        var mapOptions = {
            zoom: 16,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(47.05142, 28.86869), // New York

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [
                {
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#58575c"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 14
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 9
                        },
                        {
                            "weight": 1.2
                        }
                    ]
                },
                {
                    "featureType": "administrative.country",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "saturation": "2"
                        },
                        {
                            "hue": "#232227"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#232227"
                        },
                        {
                            "lightness": 9
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#232227"
                        },
                        {
                            "lightness": 9
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#232227 "
                        },
                        {
                            "lightness": 2
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#232227 "
                        },
                        {
                            "lightness": 2
                        },
                        {
                            "weight": 0.2
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#212025"
                        },
                        {
                            "lightness": 2
                        }
                        ,
                        {
                            "weight": 15
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#2a292e"
                        },
                        {
                            "lightness": 2
                        },
                        {
                            "weight": 3
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#232227"
                        },
                        {
                            "lightness": 2
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#232227 "
                        },
                        {
                            "lightness": 17
                        }
                    ]
                }
            ]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(47.05142, 28.86869),
            icon: "images/marker.png",
            map: map,
            title: 'Webhouse!'
        });
    }

    var counted_object = $(".statictics .col-md-3 h3 span");
    var options = {
        useEasing : true,
        useGrouping : true,
        separator : '.',
        decimal : '.',
        prefix : '',
        suffix : ''
    };
    var demo1 = new CountUp(counted_object[0], 0, 99, 0, 1.5, options);
    var demo2 = new CountUp(counted_object[1], 0, 2100, 0, 1.5, options);
    var demo3 = new CountUp(counted_object[2], 0, 88, 0, 1.5, options);
    var demo4 = new CountUp(counted_object[3], 0, 1977, 0, 1.5, options);

    function elementInViewport(el) {
        var top = el.offsetTop;
        var height = el.offsetHeight;

        while(el.offsetParent) {
            el = el.offsetParent;
            top += el.offsetTop;
        }
        return (
            top >= window.pageYOffset &&
            (top + height) <= (window.pageYOffset + window.innerHeight)
        );
    }
    for(var i = 0; i < 4; i++) {
        var demo_object = {demo1:demo1,demo2:demo2,demo3:demo3,demo4:demo4};
        for (var prop in demo_object) {
            if(demo_object.hasOwnProperty(prop)) {
                if (elementInViewport(counted_object[i])) {
                    demo_object[prop].start();
                }
            }
        }
    }
    window.onscroll = function() {
      for(var i = 0; i < 4; i++) {
          var demo_object = {demo1:demo1,demo2:demo2,demo3:demo3,demo4:demo4};
          for (var prop in demo_object) {
              if(demo_object.hasOwnProperty(prop)) {
                  if (elementInViewport(counted_object[i])) {
                      demo_object[prop].start();
                  }
              }
          }
      }
    };
    $('#map').addClass("active-click");
    $('#map').click(function() {
        if($(this).hasClass("active-click")) {
            $(this).removeClass("active-click");
        } else {
            $(this).addClass("active-click");
        }
    });

    $(".popup-form-trigger").click(function(event) {
        event.stopPropagation();
        $('.container-form').toggleClass('form-active');
    });

    $(".close").click(function() {
        if($('.container-form').hasClass("form-active")) {
            $('.container-form').toggleClass('form-active');
        }
    });
    $(".navbar-nav li a").click(function(){
        var li = $(".navbar-nav li a");
        li.each(function(){
            if($(this).hasClass("active")){
                $(this).removeClass("active");
            }
        });
        $(this).addClass("active");
    });


});

