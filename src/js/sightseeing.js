// require('jquery-inview');
import $ from 'jquery';
import SmoothScroll from 'smooth-scroll';

$(function() {

    // $('.showup').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
    //     if (isInView)  $(this).stop().addClass('upview');
    // });

    // const topBtn = $('#page-top');
    // topBtn.hide();
    // const fnav = $('#fnav');
    // const stopPos = $('footer').height() + 20;
    // $(window).on('scroll', function() {
    //     const bottomPos = $(document).height() - $(window).height();
    //     const nowPos = bottomPos - $(this).scrollTop();
    //     if ($(this).scrollTop() > 200) {
    //         topBtn.fadeIn();
    //         fnav.addClass('scroll');
    //     } else {
    //         fnav.removeClass('scroll');
    //         topBtn.fadeOut();
    //     }
    //     if (nowPos <= stopPos) {
    //         topBtn.addClass('stop');
    //     } else {
    //         topBtn.removeClass('stop');
    //     }
    // });

    let windowWidth = $(window).width();
    new SmoothScroll('a[href^="#"]:not(.tabs a)', {
        duration: 1000,
        offset: 30,
        easing  : 'easeOutQuint',
        offset: function(anchor, toggle) {
            if ($(toggle).attr('href') === '#top' || windowWidth < 1000) {
                return 0;
            } else {
                return 150;
            }
        }
    });
    
    let w = $(window).width();
    $(window).on('resize', function() {
        w = $(window).width();
        boxHeight();
    });
    boxHeight();
    function boxHeight() {
        console.log(w);
        if (w > 1000) {
            let otherBlocHeight = $('.other-bloc').outerHeight();
            $('.other-bloc').each(function() {
                if ($(this).outerHeight() > otherBlocHeight){
                    otherBlocHeight = $(this).outerHeight();
                }
            });
            $('.other-bloc').css("height", otherBlocHeight + 115 + "px");
            $('.other-bloc.none-img').css("height", otherBlocHeight + 115 - 320 + "px");
        }
    }

});