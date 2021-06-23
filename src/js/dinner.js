// require('jquery-inview');
import $ from 'jquery';
import SmoothScroll from 'smooth-scroll';
import slick from 'slick-carousel';
import lightbox from 'lightbox2';

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

    $('#slide_1').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: true,
    });
    $('.slide_2').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: true,
    });

    lightbox.option({
        'showImageNumberLabel': false
    })
    
});