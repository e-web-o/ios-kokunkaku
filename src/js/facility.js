// require('jquery-inview');
import $ from 'jquery';
import SmoothScroll from 'smooth-scroll';
import slick from 'slick-carousel';

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

    $('#slide').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: true,
    });

    function centeringModalSyncer() {
        let windowWidth = $(window).width();
        let windowHeight = $(window).height();
        $('.video').css({"width": windowWidth * 0.9 + "px", "left": ((windowWidth - (windowWidth * 0.9)) / 2) + "px","top": (windowHeight / 3) + "px"});
    };

    $('.movie').on('click', function(){
        $('#modal-overlay').fadeIn() ;
        centeringModalSyncer();
        $(this).children('.video').fadeIn();
        $(this).children('.video').get(0).play();
    });
    $('#modal-overlay').on('click', function() {
        $('#modal-overlay').hide();
        $('.video').hide();
    });
      
});