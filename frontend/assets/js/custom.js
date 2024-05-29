$(window).on("load scroll",function(e){   
    var scroll = $(window).scrollTop();
  
    if (scroll >= 50) {  
        $("body").addClass("scrolling"); 
    } else {
        $("body").removeClass("scrolling");
    } 
});
 
 
$(document).ready(function(){   
    $("a.target").on('click', function(event) {
        event.preventDefault();
    var hash = this.hash;

    $('html, body').animate({
        scrollTop: $(hash).offset().top  
        }, 1000, function(){ 
    });
    }); 
 
    $(".totop").click(function() {
      $("html, body").animate({scrollTop: 0},1300);
    });

    /*------------[Start] Menu  ------------*/ 
    $('.navbar-toggle').click(function () {
      $("html").toggleClass("nav-opened");
    });
  
    
    /*------------[Start] form-effect ------------*/
  
    $(".form-action .form-control, .form .form-control").focus(function(){
        $(this).parents(".form-group").addClass("has-value input-focus")
    }).blur(function(){
        $(this).parents(".form-group").addClass("has-value").removeClass("input-focus");
           if($(this).val()===''){
              $(this).parent().removeClass("has-value");
        } 
    });

    $('.form .form-control, .form .form-select').each(function(index){
       
       if($(this).val().length != 0){ 
        $(this).parents(".form-group").addClass("has-value");
       }
   });
    
    $('select').on('change', function() { 
        if($(this).val() != 0){
            $(this).parent().addClass("has-value"); 
        }else{ 
            $(this).parent().removeClass("has-value error"); 
        }
    });

    $(".form-select").each(function (i) {
        var $dropdownList = $(this).find(".dropdown-menu").find("li");
        $dropdownList.on('click', function() {
            var dropdownListValue = $(this).html(); 
            $dropdownList.parents(".form-select").find('[data-bs-toggle]').html(dropdownListValue).addClass("selected");

            $dropdownList.removeClass("active");
            $(this).addClass("active");
        });
      
    });
   
    AOS.init({
        duration: 1200,
        once: true
    });
     
    /*------------[Start] Tooltip Bootstrip 5 ------------*/

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
    }); 
     
     /*------------[Start] Cookie Policy  ------------*/

    setTimeout(function () {
        $(".cookie-policy").addClass("cookie-show");
    }, 700);

    $(".cookie-policy .btn").click(function() {
        $(".cookie-policy").removeClass("cookie-show");
    });  
});

$(window).on("load", function() { 
    $(".swiper-card").each(function(index, element){
        var $this = $(this);
        var swiper = new Swiper(this, {  
            speed: 700, 
            effect: 'slide',  

            spaceBetween:10,
            slidesPerView:"auto", 
            slidesPerGroup: 1,
            loop: false, 
            
            observer: true,
            observeParents: true,
            watchOverflow: true,  
            pagination: {
                el: $this.parent().find('.swiper-pagination'),
                clickable: true,
            },
            navigation: {
                nextEl: $this.parent().find(".swiper-button-next")[0],
                prevEl: $this.parent().find(".swiper-button-prev")[0],
            } 
        });
    });
     
    var swiperBanner = new Swiper('.swiper-banner', {
        speed: 1000,
        loop: true,
        effect: 'fade',   
        observer: true,
        observeParents: true,
        watchOverflow: true, 
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        
        pagination: {
          el: '.swiper-pagination.banner',
          clickable: true
        },
        navigation: {
          nextEl: '.swiper-button-next.banner',
          prevEl: '.swiper-button-prev.banner',
        }, 
        on: {
          init: function () {
            console.log('swiper initialized');
            var currentVideo =  $("[data-swiper-slide-index=" + this.realIndex + "]").find("video");
            currentVideo.trigger('play');
          },
        },
      });
      
      
});
 
$(window).on("load", function() {
  
  $(".preload").fadeOut();

  setTimeout(function () {
     $("html").addClass("page-loaded");
  }, 200);

  
  var isMobile = {
      Android: function() {
          return navigator.userAgent.match(/Android/i);
      },
      BlackBerry: function() {
          return navigator.userAgent.match(/BlackBerry/i);
      },
      iOS: function() {
          return navigator.userAgent.match(/iPhone|iPad|iPod/i);
      },
      Opera: function() {
          return navigator.userAgent.match(/Opera Mini/i);
      },
      Windows: function() {
          return navigator.userAgent.match(/IEMobile/i);
      },
      any: function() {
          return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
      }
  };

  if(isMobile.any()) {
      $("html").addClass("device");   
  }else{
      $("html").addClass("pc");    
  }
   

  var ua = window.navigator.userAgent;
  var isIE = /MSIE|Trident/.test(ua);

  if ( isIE ) {
     $("html").addClass("ie");
  }
  
  $('.modal').on("hidden.bs.modal", function (e) {
      if ($('.modal:visible').length) { 
          $('body').addClass('modal-open'); 
      }
  });

  
  $('img.svg-js').each(function() {
      var $img = jQuery(this);
      var imgURL = $img.attr('src');
      var attributes = $img.prop("attributes");

      $.get(imgURL, function(data) {
          // Get the SVG tag, ignore the rest
          var $svg = jQuery(data).find('svg');

          // Remove any invalid XML tags
          $svg = $svg.removeAttr('xmlns:a');

          // Loop through IMG attributes and apply on SVG
          $.each(attributes, function() {
              $svg.attr(this.name, this.value);
          });

          // Replace IMG with SVG
          $img.replaceWith($svg);
      }, 'xml');
  });
});

 
/*------------[Start] Height [vh] ------------*/

let vh_static = window.innerHeight * 0.01; 
document.documentElement.style.setProperty('--vhs', `${vh_static}px`);

let vh = window.innerHeight * 0.01; 
document.documentElement.style.setProperty('--vh', `${vh}px`);
window.addEventListener('resize', () => {
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});
 