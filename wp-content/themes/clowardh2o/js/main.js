//Responsive Navigation
$(document).ready(function() {
    $('body').addClass('js');
    var $menu = $('.site-nav-container'),
        $menulink = $('.menu-link'),
        $menuTrigger = $('.menu-item-has-children > a'),
        $searchLink = $('.search-link'),
        $siteSearch = $('.search-module'),
        $siteWrap = $('.site-wrap');

    $searchLink.click(function(e) {
        e.preventDefault();
        $searchLink.toggleClass('active');
        $siteSearch.toggleClass('active');
        $('#search-site').focus();
    });

    $menulink.click(function(e) {
        e.preventDefault();
        $menulink.toggleClass('active');
        $menu.toggleClass('active');
        $siteWrap.toggleClass('nav-active');
    });

    $('.menu-item-has-children').append("<span class='m-subnav-arrow'></span>");

    $('.m-subnav-arrow').click(function() {
        $(this).toggleClass('active');
        var $this = $(this).prev(".sn-level-2");
        $this.toggleClass('active').next('ul').toggleClass('active');
    });

});

//Magnific Popup
$(document).ready(function() {
    $('.lightbox').magnificPopup({
        type: 'image',
        removalDelay: 500, //Delaying the removal in order to fit in the animation of the popup
        mainClass: 'mfp-fade', //The actual animation
    });
});
$(document).ready(function() {
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 500,
        preloader: false,

        fixedContentPos: false,
        iframe: {
            patterns: {
                youtube: {
                    index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
                    id: 'v=', // String that splits URL in a two parts, second part should be %id%
                    // Or null - full URL will be returned
                    // Or a function that should return %id%, for example:
                    // id: function(url) { return 'parsed id'; }

                    src: '//www.youtube.com/embed/%id%?autoplay=1&rel=0' // URL that will be set as a source for iframe.
                }
            },
            srcAction: 'iframe_src', // Templating object key. First part defines CSS selector, second attribute. "iframe_src" means: find "iframe" and set attribute "src".
        }
    });
});




//Delayed Popup with localstorage to show popup only once
$(document).ready(function() {
    var findPopupId = $('#delayed-popup').length; // if #delayed-popup exists, findPopupId = 1;
    if (findPopupId > 0) { // only run when #delayed-popup exists
        var wWidth = $(window).width(); // set variable of window width
        if (wWidth >= 640) { //only trigger on tablet or larger to prevent mobile private browsers who don't allow cookies (safari)
            if (localStorage.getItem('popup_show') === null && localStorage.getItem('exitintent_show') === null) { // check if key is present in local storage to prevent re-triggering
                setTimeout(function() {
                    window.$.magnificPopup.open({
                        items: {
                            src: '#delayed-popup' //ID of inline element
                        },
                        type: 'inline',
                        removalDelay: 500, // delaying the removal in order to fit in the animation of the popup
                        mainClass: 'mfp-fade mfp-fade-side', // The actual animation
                    });
                    localStorage.setItem('popup_show', 'true'); // set the key in local storage
                }, 11000); // delay in millliseconds until the modal triggers
            }
        }
    }
});




// Exit-Intent Modal
$(document).ready(function() {
    // Exit intent
    function addEvent(obj, evt, fn) {
        if (obj.addEventListener) {
            obj.addEventListener(evt, fn, false);
        } else if (obj.attachEvent) {
            obj.attachEvent("on" + evt, fn);
        }
    }
    // Exit intent trigger
    var findExitId = $('#exit-popup').length; // if #exit-popup exists, findExitId will contain a value of 1 (or more);
    if (findExitId > 0) { // if findExitId is greater than 0, it means that element exits on the page, therefore execute this code;
        addEvent(document, 'mouseout', function(evt) {
            if (evt.toElement === null && evt.relatedTarget === null && !localStorage.getItem('exitintent_show')) {
                //alert('test');
                window.$.magnificPopup.open({
                    items: {
                        src: '#exit-popup' //ID of inline element
                    },
                    type: 'inline',
                    removalDelay: 500, //Delaying the removal in order to fit in the animation of the popup
                    mainClass: 'mfp-fade mfp-fade-side', //The actual animation
                });
                localStorage.setItem('exitintent_show', 'true'); // Set the flag in localStorage
            }
        });
    }
});


//Show More
$(document).ready(function() {
    $(".showmore").after("<p><a href='#' class='show-more-link'>More</a></p>");
    var $showmorelink = $('.showmore-link');
    $showmorelink.click(function() {
        var $this = $(this);
        var $showmorecontent = $('.showmore');
        $this.toggleClass('active');
        $showmorecontent.toggleClass('active');
        return false;
    });
});

//Click to Expand
$(document).ready(function() {
    var $expandlink = $('.ce-header');
    $expandlink.click(function() {
        var $this = $(this);
        var $showmorecontent = $('.showmore');


        $this.parent().toggleClass('active');
        $showmorecontent.toggleClass('active');
        return false;
    });
});


// Accordion Tabs
$(document).ready(function() {
    $('.accordion-tabs').each(function(index) {
        $(this).children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();
    });
    $('.accordion-tabs').on('click', 'li > a.tab-link', function(event) {
        if (!$(this).hasClass('is-active')) {
            event.preventDefault();
            var accordionTabs = $(this).closest('.accordion-tabs');
            accordionTabs.find('.is-open').removeClass('is-open').hide();

            $(this).next().toggleClass('is-open').toggle();
            accordionTabs.find('.is-active').removeClass('is-active');
            $(this).addClass('is-active');
        } else {
            event.preventDefault();
        }
    });
});


//Flexslider    
$(window).load(function() {
    // $('.flexslider').flexslider({
    //   animation: "slide",
    //   animationLoop: true,
    //   slideshow: false,
    //   controlNav: false
    // });

    $('.about-company-module .flexslider').flexslider({
        animation: "slide",
        animationLoop: true,
        slideshow: false,
        controlNav: true,
        directionNav: false
    });

    $('.our-work.flexslider').flexslider({
        animation: "slide",
        animationLoop: true,
        slideshow: false,
        controlNav: true,
        directionNav: true
    });
});


//Sticky Nav
$(function() {
    

    var findEl1 = $('.pi-text-wrap').length;
    if (findEl1 <= 0) {
        // do nothing
    } else {

        var sticky_navigation_offset_top = $('.pi-text-wrap').offset().top;

         var sticky_navigation = function() {
            var scroll_top = $(window).scrollTop(); // our current vertical position from the top

            // if we've scrolled more than the navigation, change its position to fixed to stick to top,
            // otherwise change it back to relative
            if (scroll_top > sticky_navigation_offset_top) {
                $('.pi-text-wrap').addClass('stuck');
                //$('.sh-sticky-wrap').addClass('stuck').css('height',navheight);
            } else {
                $('.pi-text-wrap').removeClass('stuck');
            }
        };

        sticky_navigation();

        $(window).scroll(function() {
            sticky_navigation();
        });

    }



    var findEl2 = $('.site-header-wrap-home').length;
    if (findEl2 <= 0) {
        // do nothing
    } else {

        var sticky_navigation_offset_top_home = $('.site-header-wrap-home').offset().top;

         var sticky_navigation_home = function() {
            var scroll_top2 = $(window).scrollTop(); // our current vertical position from the top

            // if we've scrolled more than the navigation, change its position to fixed to stick to top,
            // otherwise change it back to relative
            if (scroll_top2 > sticky_navigation_offset_top_home) {
                $('.sh-sticky-wrap').addClass('stuck');
                //$('.sh-sticky-wrap').addClass('stuck').css('height',navheight);
                $('.site-intro-container').addClass('stuck');
            } else {
                $('.sh-sticky-wrap').removeClass('stuck');
                $('.site-intro-container').removeClass('stuck');
            }
        };

        sticky_navigation_home();

        $(window).scroll(function() {
            sticky_navigation_home();
        });

    }

});


//Smooth Scroll - Detects a #hash on-page link and will smooth scroll to that position. Will not affect regular links.
// $(function() {
//     $('.smooth-scroll').click(function() {
//         if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
//             var target = $(this.hash);
//             target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//             if (target.length) {
//                 $('html, body').animate({
//                     scrollTop: target.offset().top
//                 }, 1000);
//                 return false;
//             }
//         }
//     });
// });


//Slide in CTA
// $(function() {
//     var slidebox = $('#slidebox');
//     if (slidebox) {
//         $(window).scroll(function() {
//             var distanceTop = $('#last').offset().top - $(window).height();
//             if ($(window).scrollTop() > distanceTop)
//                 slidebox.animate({
//                     'right': '0px'
//                 }, 300);
//             else
//                 slidebox.stop(true).animate({
//                     'right': '-430px'
//                 }, 100);
//         });
//         $('#slidebox .close').on('click', function() {
//             $(this).parent().remove();
//         });
//     }
// });


// include span tags around all navigation elements
$("#hs_menu_wrapper_primary_nav ul li a").each(function(index) {
    var navText = $(this).html();
    $(this).html("<span>" + navText + "</span>");
});


//Styles
// $(document).ready(function() {
//  $('.site-content *').removeAttr("style");
// });

$('.main-content').addClass('more height');

var wWidth = $(window).width();
if (wWidth <= 639) {
    $(".main-content").after("<div class='link'><a id='readmore' href='javascript:changeheight()'>Show More</a></div>");
}

$(window).resize(function() {
    var wWidth = $(window).width();
    if (wWidth < 640) {
        var addedDiv = $(".link");
        var length1 = addedDiv.length;
        if (addedDiv.length == 0) {
            $(".link").remove();
            $(".main-content").after("<div class='link'><a id='readmore' href='javascript:changeheight()'>Show More</a></div>");
        }
    } else if (wWidth > 639) {
        $(".link").remove();
    }
    $(function() {
        var curHeight = $('.more').height();
        if (curHeight == 250)
            $('#readmore').show();
        else
            $('#readmore').hide();
    });
});
$(function() {
    var curHeight = $('.more').height();
    if (curHeight == 250)
        $('#readmore').show();
    else
        $('#readmore').hide();
});
$(window).on('resize', function() {
    $(function() {
        var curHeight = $('.more').height();
        if (curHeight == 250)
            $('#readmore').show();
        else
            $('#readmore').hide();
    });
});

function changeheight() {
    var readmore = $('#readmore');
    if (readmore.text() == 'Show More') {
        readmore.text("Show Less");
    } else {
        readmore.text("Show More");
    }

    $('.height').toggleClass("heightAuto");
};





$(document).ready(function() {
    var wWidth = $(window).width();
    if (wWidth > 944) {
        function onScrollInit(items, trigger) {
            items.each(function() {
                var osElement = $(this),
                    osAnimationClass = osElement.attr('data-os-animation'),
                    osAnimationDelay = osElement.attr('data-os-animation-delay');

                osElement.css({
                    '-webkit-animation-delay': osAnimationDelay,
                    '-moz-animation-delay': osAnimationDelay,
                    'animation-delay': osAnimationDelay
                });

                var osTrigger = (trigger) ? trigger : osElement;

                osTrigger.waypoint(function(direction) {
                    if (direction == 'down') {
                        osElement.addClass('animated').addClass(osAnimationClass);
                    } else {
                        osElement.removeClass('animated').removeClass(osAnimationClass);
                    }
                }, {
                    //triggerOnce: true,
                    offset: '90%'
                });
            });
        }
        onScrollInit($('.os-animation'));
        onScrollInit($('.staggered-animation'), $('.staggered-animation-container'));
    }

    $(window).resize(function() {
        var wWidth = $(window).width();
        if (wWidth < 946) {
            $('.os-animation').removeClass('animated');
        }
    });

    // $(".pi-text-wrap > a").click(function() { 
    //     var wWidth = $(window).width(); 
    //     if (wWidth > 960) { 
    //         var targetDiv = $(this).attr('href');
    //         $('html, body').animate({ 
    //             scrollTop: $(targetDiv).offset().top }, 1000); 
    //     } 
    // });

    $('.pi-text-wrap a').bind("click", jump);

    if (location.hash) { 
        setTimeout(function() { 
            $('html, body').scrollTop(0).show();
            jump(); 
        }, 0); } 
    else { 
        $('html, body').show(); 
    }

});

var jump = function(e) { 
    if (e) { 
        e.preventDefault(); 
        var target = $(this).attr("href"); 
    } 
    else { 
        var target = location.hash; 
    } 
    $('html,body').animate({ 
        scrollTop: $(target).offset().top
    }, 2000, function() { 
        location.hash = target; 
    }); 
}