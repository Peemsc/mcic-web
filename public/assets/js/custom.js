$(window).on("load scroll",function(e){
    var scroll = $(window).scrollTop();

    if (scroll >=  50) {
        $("body").addClass("scrolling");
    } else {
        $("body").removeClass("scrolling");
    }
});

$(document).ready(function(){
    /*------------[Start] Menu  ------------*/

  $("body").removeClass("nav-opened");
  $('<div class="page-blocker"></div>').appendTo('body');

  $('.navbar-toggle').click(function () {
      $("html").toggleClass("nav-opened");
  });


  $(".page-blocker").click(function () {
      $("html").toggleClass("nav-opened");
      setTimeout($.proxy(function(){
          $('html').removeClass("closing");
      },this),700);
  });

  /*------------[Start] Menu  ------------*/

   $(function() {
    $(".nav-main .dropdown.lv-1 > a").click(function() {
      $('html').addClass("level-1-opened");
      $(this).parent().addClass("showing")
    });

    $(".nav-main .dropdown.lv-2 > a").click(function() {
      $('html').addClass("level-2-opened");
      $(this).parent().parent().addClass("show");
      $(this).next(".dropdown-menu").addClass("show");
    });

    $(".nav-main .nav-title.lv-1").click(function() {
       $('html').removeClass("level-1-opened");
      setTimeout($.proxy(function(){
         $(".nav-main .dropdown").removeClass("showing");
        },this),700);
    });

    $(".nav-main .nav-title.lv-2").click(function() {
       $('html').removeClass("level-2-opened");
       $(".dropdown-menu").removeClass("show");
    });
  });

    var $navbar_sidebar = $(".header .nav-main").clone();
    $(".navbar-sidebar .navbar-inner").html($navbar_sidebar);

    /*=================== Header Search ==================*/

    $('.dropdown-menu.search .icon-close').click(function(){
        $(this).next('.form-control').val('');
    });

   /*===================Bootstrap scrollspy ==================*/

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

    /*------------[Start] Tooltip Bootstrip 5 ------------*/

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
    });

    /*------------[Start] form-effect ------------*/

    $('.form .form-control').each(function(index){
        if($(this).val().length != 0){
         $(this).parent().addClass("has-value");
        }
    });

    $(".form .form-control, .form .form-select").focus(function(){
        $(this).parent().addClass("has-value input-focus")
    }).blur(function(){
        $(this).parent().addClass("has-value").removeClass("input-focus");
           if($(this).val()===''){
              $(this).parent().removeClass("has-value");
        }
    });

    $(".numbersOnly").keypress(function (e) {
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
          return false;
        }
    });

    $(".form .icon-eye").click(function () {
        var $pw_input = $(this).closest(".form-group").find(".pw");

        if ($pw_input.attr("type") === "password") {
            $pw_input.attr("type", "text");
        } else {
            $pw_input.attr("type", "password");
        }
    });

    // Image Upload

    $(".image-upload").click(function(event) {
        var previewImg = $(this).children(".photo");

        $(this)
            .siblings()
            .children("input")
            .trigger("click");

        $(this)
            .siblings()
            .children("input")
            .change(function() {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var urll = e.target.result;
                   // $(previewImg).attr("src", urll);
                    $(previewImg).css('background-image', 'url(' + urll + ')');
                    //previewImg.parent().css("background", "transparent");
                    previewImg.parent().addClass("preview");
                    previewImg.show();
                };
                reader.readAsDataURL(this.files[0]);
            });
    });

    // Custom File Input

    var inputs = document.querySelectorAll('.file-input')
    for (var i = 0, len = inputs.length; i < len; i++) {
    customInput(inputs[i])
    }

    function customInput (el) {
    const fileInput = el.querySelector('[type="file"]')
    const label = el.querySelector('[data-js-label]')

    fileInput.onchange =
    fileInput.onmouseout = function () {
        if (!fileInput.value) return

        var value = fileInput.value.replace(/^.*[\\\/]/, '')
        el.className += ' -chosen'
        label.innerText = value
    }
    }

    /*------------[Start] select option custom ------------*/

  $( ".select.dropdown" ).each(function() {
    var $selectItem = $(this);
    $selectItem.find(".dropdown-menu li").click(function(i){

      var selText = $(this).html();
      if($(this).index() == 0){
        $(this).parent().parent().find('a[data-bs-toggle="dropdown"]').html(selText).removeClass('selected');
      }else{
        $(this).parent().parent().find('a[data-bs-toggle="dropdown"]').html(selText).addClass('selected');
      }

      $selectItem.find(".dropdown-menu li").removeClass('li-selected');
      $(this).addClass('li-selected');

      $(this).parent().parent().parent().removeClass('select-error');
      $(this).parent().parent().find('select').removeAttr( "required" );
      $(this).parent().parent().find('.error').hide();

    });
   });


    /*------------[Start] Cookie Policy  ------------*/

    setTimeout(function () {
        $(".cookie-policy").addClass("cookie-show");
    }, 700);

    $(".cookie-policy .btn").click(function() {
        $(".cookie-policy").removeClass("cookie-show");
    });

    /*---------------gallery---------------*/

    $(".swiper-gallery").each(function(index, element){
        var $this = $(this);
        var swiper = new Swiper(this, {
            slidesPerView:1,
            spaceBetween:5,
            speed: 700,
            /*loop: true,*/
            effect: 'slide',
            observer: true,
            observeParents: true,
            watchOverflow: true,
            pagination: {
                el: $this.parent().find('.swiper-pagination.gallery'),
                clickable: true,
            },
            navigation: {
                nextEl: $this.parent().find(".swiper-button-next.gallery")[0],
                prevEl: $this.parent().find(".swiper-button-prev.gallery")[0],
            }
        });
    });

    $(".swiper-banner").each(function(index, element){
        var $this = $(this);
        var swiper = new Swiper(this, {
            slidesPerView:1,
            spaceBetween:0,
            speed: 700,
            /*loop: true,*/
            effect: 'fade',
            observer: true,
            observeParents: true,
            watchOverflow: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: $this.parent().find('.swiper-pagination.banner'),
                clickable: true,
            },
            navigation: {
                nextEl: $this.parent().find(".swiper-button-next.banner")[0],
                prevEl: $this.parent().find(".swiper-button-prev.banner")[0],
            }
        });
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

// let vh_static = window.innerHeight * 0.01;
// document.documentElement.style.setProperty('--vhs', `${vh_static}px`);

// let vh = window.innerHeight * 0.01;
// document.documentElement.style.setProperty('--vh', `${vh}px`);
// window.addEventListener('resize', () => {
//   let vh = window.innerHeight * 0.01;
//   document.documentElement.style.setProperty('--vh', `${vh}px`);
// });
