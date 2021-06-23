
$(document).ready(function($) {
    var mySwiper_fv = new Swiper ('.swiper-container_fv', {
    // Optional parameters
    effect : 'fade',
    loop: true,
    speed: 3000,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination_fv', clickable: true,
        renderBullet: function (index, className) {
          //中に数字を表示
          //return '<span class="' + className + '">' + zeroplus(index + 1) + '</span>';
        }
      },

  });

      $('.popup-modal').magnificPopup({
        type: 'inline',
        removalDelay: 200,
        preloader: false,
        fixedContentPos: false,
        mainClass: 'mfp-fade01',
        removalDelay: 200
      });
  $(document).on('click', '.popup-modal-dismiss', function (e) {
    e.preventDefault();
    $.magnificPopup.close();
  });
    if (window.matchMedia( '(min-width: 751px)' ).matches) {
    } else {

    }
  // $("#news ul li").click(function(){
  //      if($(this).find("a").attr("target")=="_blank"){
  //          window.open($(this).find("a").attr("href"), '_blank');
  //      }else{
  //          window.location=$(this).find("a").attr("href");
  //      }
  //  return false;
  //  }).css("cursor","pointer");

    // if (window.matchMedia( '(min-width: 751px)' ).matches) {
    //   $('#carousel ul').bxSlider({ auto: true, minSlides:3, maxSlides: 8, moveSlides: 1, slideWidth: 260, slideMargin: 10, pager: true, controls : true, speed: 2000, pause:4000
    //  });
    // } else {
    //   $('#carousel ul').bxSlider({ auto: true, minSlides:1, maxSlides: 1, moveSlides: 1, pager: true, controls : true, speed: 2000, pause:4000
    //  });
    // }
	//$(".gm0").addClass("active");
      //$("a[rel^='pp']").prettyPhoto({social_tools:false});
	//$('.psb').perfectScrollbar();



// 489banの記述
    var now = new Date();
    var y = now.getFullYear();
    var m = zeroplus(now.getMonth() + 1);
    var d = zeroplus(now.getDate());
    $(".rsvtop #search_489ban input[type='text']").val(y+"/"+m+"/"+d);


});
$(window).on('load resize',function(){
  var people = $("#people");
    var peapleHeight = people.height() + 150;
    console.log(people.height());
  $(".bg_people").height(peapleHeight);
});

function zeroplus(n) {
  if(n<10) {
    n='0'+n;
  } else {

  }
  return n;
}

//});




