/*
 * Bones Scripts File
 * Author: Eddie Machado
 *
 * This file should contain any js scripts you want to add to the site.
 * Instead of calling it in the header or throwing it inside wp_head()
 * this file will be called automatically in the footer so as not to
 * slow the page load.
 *
 * There are a lot of example functions and tools in here. If you don't
 * need any of it, just remove it. They are meant to be helpers and are
 * not required. It's your world baby, you can do whatever you want.
 */


/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
 */
function updateViewportDimensions() {
    var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
    return { width:x,height:y };
}
// setting the viewport width
var viewport = updateViewportDimensions();


/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
 */
var waitForFinalEvent = (function () {
    var timers = {};
    return function (callback, ms, uniqueId) {
        if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
        if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
        timers[uniqueId] = setTimeout(callback, ms);
    };
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;


/*
 * Here's an example so you can see how we're using the above function
 *
 * This is commented out so it won't work, but you can copy it and
 * remove the comments.
 *
 *
 *
 * If we want to only do it on a certain page, we can setup checks so we do it
 * as efficient as possible.
 *
 * if( typeof is_home === "undefined" ) var is_home = $('body').hasClass('home');
 *
 * This once checks to see if you're on the home page based on the body class
 * We can then use that check to perform actions on the home page only
 *
 * When the window is resized, we perform this function
 * $(window).resize(function () {
 *
 *    // if we're on the home page, we wait the set amount (in function above) then fire the function
 *    if( is_home ) { waitForFinalEvent( function() {
 *
 *  // update the viewport, in case the window size has changed
 *  viewport = updateViewportDimensions();
 *
 *      // if we're above or equal to 768 fire this off
 *      if( viewport.width >= 768 ) {
 *        console.log('On home page and window sized to 768 width or more.');
 *      } else {
 *        // otherwise, let's do this instead
 *        console.log('Not on home page, or window sized to less than 768.');
 *      }
 *
 *    }, timeToWaitForLast, "your-function-identifier-string"); }
 * });
 *
 * Pretty cool huh? You can create functions like this to conditionally load
 * content and other stuff dependent on the viewport.
 * Remember that mobile devices and javascript aren't the best of friends.
 * Keep it light and always make sure the larger viewports are doing the heavy lifting.
 *
 */

/*
 * We're going to swap out the gravatars.
 * In the functions.php file, you can see we're not loading the gravatar
 * images on mobile to save bandwidth. Once we hit an acceptable viewport
 * then we can swap out those images since they are located in a data attribute.
 */
function loadGravatars() {
    // set the viewport using the function above
    viewport = updateViewportDimensions();
    // if the viewport is tablet or larger, we load in the gravatars
    if (viewport.width >= 768) {
        jQuery('.comment img[data-gravatar]').each(function(){
            jQuery(this).attr('src',jQuery(this).attr('data-gravatar'));
        });
    }
} // end function


/*
 * Put all your regular jQuery in here.
 */
jQuery(document).ready(function($) {

    /*
     * Let's fire off the gravatar function
     * You can remove this if you don't need it
     */

    $('.search-wrap i').on('click', function() {
        if ($('.popup').hasClass('non-active')) {
            $('.search-wrap .fa-search').addClass('hidden');
            $('.search-wrap .fa-times').removeClass('hidden');
            $('.popup').css('width', '285px').removeClass('non-active').addClass('active').css('transition', '.3s');
        } else {
            $('.popup').css('width', '0').removeClass('active').addClass('non-active').css('transition', '.3s');
            $('.search-wrap .fa-search').removeClass('hidden');
            $('.search-wrap .fa-times').addClass('hidden');


        }


    });

    loadGravatars();
    $('#side-nav li.menu-item-has-children').find('.sub-menu').css('display', 'none');
    $('#side-nav li.menu-item-has-children.menu-item-6').addClass('active').find('.sub-menu').css('display', 'block');
    $('#side-nav li.menu-item-has-children').on('click', function() {



        if ($(this).hasClass('active')) {
            $(this).removeClass('active').find(".sub-menu").slideUp(100, function() {

            });
        } else {
            $('#side-nav li.menu-item-has-children').removeClass('active').find('.sub-menu').slideUp(100, function() {

            });
            $(this).addClass('active').find(".sub-menu").slideDown(100, function() {

            });
        };





    });



    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('#header-wrap').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('#header-wrap').fadeOut(300);
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('#header-wrap').fadeIn(300);
            }
        }

        lastScrollTop = st;
    }





}); /* end of as page load scripts */


/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
    document.getElementById("mySidenav").style.width = "350px";
    document.getElementById("mySidenav").style.left = '0px';
    document.getElementById("side-nav").style.left = '0px';

    // document.getElementById("header").style.marginLeft = "350px";
    // document.getElementById("featured-article-section").style.marginLeft = "350px";
    // document.getElementById("hamburger-wrap").style.left = "400px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("mySidenav").style.left = "-350px";
    document.getElementById("side-nav").style.left = '350px';

    // document.getElementById("featured-article-section").style.marginLeft = "0";
    // document.getElementById("header").style.marginLeft = "0";
    // document.getElementById("hamburger-wrap").style.marginLeft = "0px";
    // document.getElementById("hamburger-wrap").style.left = "0px";




}