// require('jquery-inview');
import $ from 'jquery';
import SmoothScroll from 'smooth-scroll';
// import slick from 'slick-carousel';

$(function(){
	//if (window.matchMedia( '(max-width: 640px)' ).matches) {
	var $setElm = $('.loopslider');
	var slideTime = 50000; // スピード調整：スライド全体一周にかかる秒数（25000 = 25秒で一周）

	$setElm.each(function(){
		var classFilter = $(this).attr('rel'); // 'loopleft' or 'loopright'

		var targetObj = $(this);
		var loopsliderWidth = targetObj.width();
		var loopsliderHeight = targetObj.height();
		targetObj.children('ul').wrapAll('<div class="loopslider_wrap"></div>');

		var findWrap = targetObj.find('.loopslider_wrap');

		var listWidth = findWrap.children('ul').children('li').width();
		var listCount = findWrap.children('ul').children('li').length;

		var loopWidth = (listWidth)*(listCount);

		findWrap.css({
			top: '0',
			left: '0',
			width: ((loopWidth) * 2),
			height: (loopsliderHeight),
			overflow: 'hidden',
			position: 'absolute'
		});

		findWrap.children('ul').css({
			width: (loopWidth)
		});

		if(classFilter == 'loopleft') {
			loopPosLeft();
			findWrap.children('ul').clone().appendTo(findWrap);
		}
		if(classFilter == 'loopright') {
			loopPosRight();
			findWrap.children('ul').clone().prependTo(findWrap);
		}

		function loopPosLeft(){
			findWrap.css({left:'0'});
			findWrap.stop().animate({left:'-' + (loopWidth) + 'px'},slideTime,'linear');
			setTimeout(function(){
				loopPosLeft();
			},slideTime);
		};
		function loopPosRight(){
			var wrapWidth = findWrap.width();
			findWrap.css({left:'-' + ((wrapWidth) / 2) + 'px'});
			findWrap.stop().animate({left:'0'},slideTime,'linear');
			setTimeout(function(){
				loopPosRight();
			},slideTime);
		};
	});

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

});