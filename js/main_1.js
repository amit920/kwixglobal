(function($) {
  "use strict";
  
jQuery.fn.is_exist = function(){
  return this.length;
}
 
$(function(){ 
 $(document).on("click", ".menu-toggle", function(){
  $(".appmax-header-menu").slideToggle(500);
  return false;
});
 
 
if($('.swiper-container-user-view').is_exist()) {
   
  var swiper = new Swiper('.swiper-container-user-view', {
      slidesPerView: 3,
      spaceBetween: 30,
      grabCursor: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
          breakpoints: {
        // when window width is <= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 10
        },
        // when window width is <= 480px
        480: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        // when window width is <= 640px
        640: {
          slidesPerView: 3,
          spaceBetween: 30
        }
      },
      nextButton: '.swiper-btn-next',
      prevButton: '.swiper-btn-prev',
    });


}



 
// Banner Slider
if($('#appmax-welcome-slider').is_exist()) {
  var owl = $('#appmax-welcome-slider');
  owl.owlCarousel({
    items:1,
    loop:true,
    margin:0,
    autoplay:true,
    autoplayTimeout:8000,
    autoplayHoverPause:true
  });

}
 
var $appmax_jarallax = $('.jarallax');
if($appmax_jarallax.is_exist()) {
  jarallax(document.querySelectorAll('.jarallax'));
  jarallax(document.querySelectorAll('.jarallax-keep-img'), {
    keepImg: true,
  }); 
}
var $appmax_hovellax = $('.appmax_hover_animation');
if($appmax_hovellax.is_exist()) {
  $('.appmax_hover_animation').parallax();
}

 

$('.ball').on('click', function() {
  $(this).toggleClass('active');
  return false;
});

$('i').on('click', function() {
  $('.ball').addClass('expand');
  $('.back').addClass('show');
  return false;
});

$('.back').on('click', function() {
  $(this).removeClass('show');
  $('.ball').removeClass('expand');
  $('.appscraft-screen-container').addClass('shake').delay(500).queue(function(next) {
    $(this).removeClass('shake');
    next();
  });
  return false;
});
setTimeout(showpanel, 1800);

});/*End document ready*/


/*--------------------------------------------------------------
  -- WINDOW LOAD EVENT --
  ------------------------------------------------------------*/

  $(window).on("load" ,function(){
/*--------------------------------------------------------------
13.APPMAX STICKU MENU
------------------------------------------------------------*/
var $banner_promo = $('.appmax-banner-promo-section');
if($banner_promo.is_exist()) {
  var stickyHeaderTop = $banner_promo.offset().top;
  $(window).on('scroll', function(){
   if( $(window).scrollTop() > stickyHeaderTop ) {
     $('.appmax-header-area').addClass('appmax-sticky-menu');
   } else {
     $('.appmax-header-area').removeClass('appmax-sticky-menu');
   }
 });
}


/*--------------------------------------------------------------
 13.APPMAX PRELOADER JS
 ------------------------------------------------------------*/
 $("#preloader").fadeOut(500);


// Loaded Class Add
$('body').addClass('appmax--loaded');

}); // End window LODE


/*--------------------------------------------------------------
14. APPMAX COUNTER JS
--------------------------------------------------------------*/
var $counter = $('#counter');
if($counter.is_exist()) {
  var a = 0;
  $(window).scroll(function() { 
    var oTop = $counter.offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
      $('.counter-result').each(function() {
        var $this = $(this),
        countTo = $this.attr('data-percentage');
        $({
          countNum: $this.text()
        }).animate({
          countNum: countTo
        },
        {
          duration: 4000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
                //alert('finished');
              }

            });
      });
      a = 1;
    }

  });

}

 
$(window).scroll(function(){
  var topH = $(this).scrollTop();
  if(topH >= 74){ 
    $('.basenav').css('height',74)
    $('.navbar').addClass('fixednav')
  }else{ 
    $('.navbar').css({'top':0,'position':'inherit'})
    $('.basenav').css('height',0)
    $('.navbar').removeClass('fixednav')
  }
}) 

 

//fixednav



var myVar = setInterval(function(){
 if($('.circle_icon:last-child').hasClass('activetab')){
   $('.circle_icon_one').addClass('activetab');
   $('.circle_icon:last-child').removeClass('activetab');
   var self = $('.activetab')
   animatedata(self)
 }else {
  $('.activetab').next('.circle_icon').addClass('activetab');
  $('.activetab').prev('.circle_icon').removeClass('activetab');
  var self = $('.activetab')
  animatedata(self)
}
},3000)

 
function animatedata(self){ 
   var heading = self.find('.fistcntr').html();
   var conents = self.find('.contctrl').html(); 
   $('.mddata').html(heading);
   $('.mdcontent').html(conents);
   $('.mdcontent').addClass('zoomInDown')
   $('.mddata').addClass('zoomInDown')
   setTimeout(function(){
  $('.mdcontent').removeClass('zoomInDown');
  $('.mddata').removeClass('zoomInDown')
},1000)

}



// $(window).scroll(function() {
//    var hT = $('#scroll-to').offset().top,
//        hH = $('#scroll-to').outerHeight(),
//        wH = $(window).height(),
//        wS = $(this).scrollTop();
//     console.log((hT-wH) , wS);
//    if (wS > (hT+hH-wH)){
//      alert('you have scrolled to the h1!');
//    }
// });


 
  $(window).scroll(function() {
    var wintop = $(window).scrollTop(), docheight = 
    $(document).height(), winheight = $(window).height();
    console.log(wintop);
    var totalScroll = (wintop/(docheight-winheight)) * 100;
    console.log("total scroll" + totalScroll);
    $(".topprogressbar").css("width",totalScroll+"%");
  });

 



$('.circle_icon').click(function(){
  clearInterval(myVar);
  $('.circle_icon').removeClass('activetab')
  var heading = $(this).find('.fistcntr').html();
  var conents = $(this).find('.contctrl').html();
  $(this).addClass('activetab')
  $('.mddata').html(heading);
  $('.mdcontent').html(conents);
  $('.mdcontent').addClass('zoomInDown')
  $('.mddata').addClass('zoomInDown')
  setTimeout(function(){
    $('.mdcontent').removeClass('zoomInDown');
    $('.mddata').removeClass('zoomInDown')
  },1000)
})












})(jQuery);

