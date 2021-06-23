$(document).ready(function($) {
    // var dateFormat = 'yy/mm/dd';
    // $(".date").datepicker({
    //     dateFormat: dateFormat
    // });
    // var now = new Date();
    // var y = now.getFullYear();
    // var m = zeroplus(now.getMonth() + 1);
    // var d = zeroplus(now.getDate());
    // $("#date").val(y+"/"+m+"/"+d);
    // $("#date_i").val(y+"/"+m+"/"+d);

//予約番
    var dateFormat = 'yy/mm/dd';
    $("#search_489ban input[type='text']").datepicker({
        dateFormat: dateFormat
    });
    var now = new Date();
    var y = now.getFullYear();
    var m = zeroplus(now.getMonth() + 1);
    var d = zeroplus(now.getDate());
    $("#search_489ban").val(y+"/"+m+"/"+d);

  stopPosSet();
  stopPos = $("footer").height();
  $('.showup').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
    if(isInView){
      $(this).stop().addClass('upview');
    }
  });
  $('.showdown').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
    if(isInView){
      $(this).stop().addClass('downview');
    }
  });
  $('.showleft').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
    if(isInView){
      $(this).stop().addClass('leftview');
    }
  });
  $('.showright').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
    if(isInView){
      $(this).stop().addClass('rightview');
    }
  });
  if (window.matchMedia( '(min-width: 751px)' ).matches) {
    $('.btn-area').on('click', function() {
      $('.sub-navi-area').toggleClass('active');
    });


    $('a[href^="tel:"]').on('click', function(e) {
          e.preventDefault();
      });
  $('.img_hidden').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
    if(isInView){
      $(this).stop().addClass('img_open');
    }
    else{
      //$(this).stop().removeClass('img_open');
    }
  });
  } else {
      // $('#fnav_in dl dt').click(function(){

      //   if($(this).next('dd').css("display") =="block"){
      //     $(this).removeClass("open");
      //   } else {
      //     $(this).addClass("open");
      //   }
      //   $(this).nextUntil("dt","dd").stop(true, true).slideToggle();
      // });
      // $('#footnav dl dt').click(function(){
      //   stopPosSet();
      //   if($(this).next('dd').css("display") =="block"){
      //     $(this).removeClass("open");
      //   } else {
      //     $(this).addClass("open");
      //   }
      //   $(this).nextUntil("dt","dd").stop(true, true).slideToggle();
      // });
  }
/*------------------------------------------------------------
  ページトップ、追従ナビ
------------------------------------------------------------*/

  var topBtn = $('#page-top');
  topBtn.hide();
  var fnav = $("#fnav");
  var fnavsp = $("article").offset().top-130;
  // if (window.matchMedia( '(min-width: 751px)' ).matches) {
  //   stopPos = 445;
  // }  else {
     stopPos = $("footer").height()+20;
  //}

  $(window).scroll(function () {

    var bottomPos = $(document).height() - $(window).height();
    var nowPos = bottomPos - $(this).scrollTop();
    //if (window.matchMedia( '(min-width: 751px)' ).matches) {

      if ($(this).scrollTop() > 200) {
        topBtn.fadeIn();
        // console.log("bottomPos:"+bottomPos);
        // console.log("nowPos:"+nowPos);
        // console.log("stopPos:"+stopPos);
        $("#fnav").addClass("scroll");
      } else {
        $("#fnav").removeClass("scroll");
        topBtn.fadeOut();
      }


    //}
    if (nowPos <= stopPos ) {
      topBtn.addClass('stop');
    } else {
      topBtn.removeClass('stop');
    }

  });

/*------------------------------------------------------------
  スマホメニュー
------------------------------------------------------------*/
    if (window.matchMedia( '(max-width: 751px)' ).matches) {

        $("#menu_sp").click(function(){
            if( $("#header").css("display") =="block"){
                //console.log("close");
                $("#header").slideUp();
                $("#fnav").removeClass('showmenu');
                $("#menu_sp span:first-child").animate({ rotate:"0",top:"0"}, 400, 'swing' );
                $("#menu_sp span:nth-child(2)").animate({ opacity:"1"}, 400, 'swing' );
                $("#menu_sp span:nth-child(3)").animate({ rotate:"0",top:"4vw"}, 400, 'swing' );
                $("#menu_sp p").html("メニュー");
                //$("header h1").fadeIn();
            } else {
                //console.log("open");
                $("#header").slideDown();
                $("#fnav").addClass('showmenu');
                $("#menu_sp span:first-child").animate({ rotate:"-45deg",top:"2vw"}, 400, 'swing' );
                $("#menu_sp span:nth-child(2)").animate({ opacity:"0"}, 400, 'swing' );
                $("#menu_sp span:nth-child(3)").animate({ rotate:"45deg",top:"2vw"}, 400, 'swing' );
                $("#menu_sp p").html("閉じる");
                //$("header h1").fadeOut();
            }
        });
    }


  $( 'a[href^="#"]:not(.tabs a)' ).SmoothScroll( {
    duration: 1000,
    offset: 30,
    easing  : 'easeOutQuint'
  });
  // change_EndDate();
  // change_EndDate_f();
/*------------------------------------------------------------
  ローディング
------------------------------------------------------------*/
  $(".animsition").animsition({
  inClass               :   'fade-in',
  outClass              :   'fade-out',
  inDuration            :    800,
  outDuration           :    400,
  linkElement           :   '.al',
  loading               :    true,
  loadingClass          :   'animsition-loading',
  unSupportCss          : [ 'animation-duration',
                '-webkit-animation-duration',
                '-o-animation-duration'
              ],
  overlay               :   false,
  overlayClass          :   'animsition-overlay-slide',
  });


});
$(window).on('load resize',function(){
  var ua = navigator.userAgent.toLowerCase();
  var isiPhone = (ua.indexOf('iphone') > -1);
  var isiPad = (ua.indexOf('ipad') > -1);
  var isAndroid = (ua.indexOf('android') > -1) && (ua.indexOf('mobile') > -1);
  var isAndroidTablet = (ua.indexOf('android') > -1) && (ua.indexOf('mobile') == -1);
  var direction = Math.abs(window.orientation);
    if ((ua.indexOf('ipad') > -1) || ((ua.indexOf('android') > -1) && (ua.indexOf('mobile') > -1)) ) {
      if(Math.abs(window.orientation) === 90) {
          $(".wrap").addClass("tab");
          $(".wrap").addClass("yoko");
          $(".wrap").removeClass("tate");

        } else {
          $(".wrap").addClass("tab");
          $(".wrap").addClass("tate");
          $(".wrap").removeClass("yoko");
        }

      //$(".video").css('display', 'none');
      // $('.sound-area').hide();
      // $('.s_btns.for_pc').hide();
      // $('.s_btns.for_sp').show();
    }
      if (isiPhone || isAndroid) {
    if (direction == 90) {
      $('.wrap').addClass('sp_yoko');
    } else {
      $('.wrap').removeClass('sp_yoko');
    }
  }
});

function stopPosSet() {
  stopPos = $("footer").height();
  $("#page-top.stop").css("bottom",stopPos);
}



function zeroplus(n) {
  if(n<10) {
    n='0'+n;
  } else {

  }
  return n;
}

