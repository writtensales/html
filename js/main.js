;
(function($) {
    $(function() {

        var cls = 'active', _body = $('body'),_clsMenu = 'menu-collapse';

        /* For tooltips */
        $('[data-toggle="tooltip"]').tooltip();


        /** For vieo lightbox */
        $(document).on('click', '[data-lightbox]', lity);

        /** Menu Collapse **/
        $('.sidebar-menu nav ul li a.collapse-menu').on('click', function(){
            if( _body.hasClass(_clsMenu)){
               _body.removeClass(_clsMenu);
               return false;
           }
           _body.addClass(_clsMenu);
           return false;
       })

        /* Campaings */
        var Campaings = $('.campaings');

        if(Campaings.length > 0){
          var campaingsSlide = new Swiper('.campaings .swiper-container', {
            speed: 400,
            spaceBetween:50,
            slidesPerView: 5,

            navigation: {
                nextEl: '.campaings .swiper-button-next',
                prevEl: '.campaings .swiper-button-prev',
            },

        });

      }


      

      var featuresSlide = new Swiper('.features-slider .swiper-container', {
        speed: 400,
        slidesPerView: 1 ,
        autoplay: {
            delay: 5000,
        },
        pagination: {
            el: '.features-slider .swiper-pagination',
            type: 'bullets',
            clickable:true
        },

    });



      $(".sidebar-dropdown > a").click(function() {
        $(".sidebar-submenu").slideUp(200);
        if (
            $(this)
            .parent()
            .hasClass("active")
            ) {
            $(".sidebar-dropdown").removeClass("active");
        $(this)
        .parent()
        .removeClass("active");
    } else {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
        .next(".sidebar-submenu")
        .slideDown(200);
        $(this)
        .parent()
        .addClass("active");
    }
});

      $("#close-sidebar").click(function() {
        $(".page-wrapper").removeClass("toggled");
    });
      $("#show-sidebar").click(function() {
        $(".page-wrapper").addClass("toggled");
    });


  })
})(jQuery);