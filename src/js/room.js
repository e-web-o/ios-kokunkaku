// require('jquery-inview');
import $ from 'jquery';
import SmoothScroll from 'smooth-scroll';
import Swiper from 'swiper/bundle';

$(function() {

    // if (window.matchMedia( '(max-width: 750px)' ).matches) {
    //     $('head').prepend('<meta name="viewport" content="width=device-width, initial-scale=1.0" test>');
    // } else {
    //     $('head').prepend('<meta name="viewport" content="width=1300">');
    // }

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
    
    const swiper = new Swiper('.swiper-container', {
        effect : 'fade',
        loop: true,
        speed: 3000,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination', clickable: true,
        },
        watchSlidesVisibility: true,
        on: {
            slideChange: function () {
                let roomNo = $('.swiper-slide-visible img').attr('alt');
                $('#room_no').text(roomNo);
            },
        }
    });
    swiper.autoplay.start();

});