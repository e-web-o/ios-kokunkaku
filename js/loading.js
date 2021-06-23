$(function() {
  var device = onWindowResize();
  // if (device == 'pc') {
  //   $('.language-area,.sound-area,.global-menu,.sub-menu').show();
  // } else {
  //   $('.language-area,.sound-area,.global-menu,.sub-menu').hide();
  // }
});

// loading
$(window).on('load', function () {
  console.log("loading")
  var device = onWindowResize();
  $('.loading-area').fadeOut(800);
  //$('.top-area').delay(2000).fadeIn(1800);
  if (device == 'pc') {
    
  } else {
    
  }

});

// sp判定
var onWindowResize = function() {
  var device;
  var windowWidth = $(window).width();
  if (windowWidth > 750) {
    device = 'pc';
  } else {
    device = 'sp';
  }
  return device;
}


window.addEventListener('resize', function() {
  var device = onWindowResize();
  // if (device == 'pc') {
  //   $('.language-area,.sound-area,.global-menu,.sub-menu').show();
  // } else {
  //   $('.language-area,.sound-area,.global-menu,.sub-menu').hide();
  // }
});
