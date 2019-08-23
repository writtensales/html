;
(function($) {
    $(function() {

        var cls = 'active',
            _body = $('body'),
            _cls = 'active',
            _clsMenu = 'menu-collapse',
            tableFilter = $('.table-filter'),
            creacionCampaign = $('.wrap-creation-campaign'),
            creacionCampaingsSlide = '';


        if (tableFilter.length > 0) {

            tableFilter.DataTable({
                "pagingType": "full_numbers",
            });

        }
        /** Editor **/
        tinymce.init({

            selector: 'textarea.editor-tiny',
            content_style: "body {padding: 10px 30px}",
            plugins: "autolink, anchor,link, contextmenu, spellchecker",

            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat | code',
            image_advtab: true,
            toolbar: "image  numlist bullist",
            image_caption: true,
            browser_spellcheck: true,
            a_plugin_option: true,
            a_configuration_option: 400,
            init_instance_callback: function(editor) {
                editor.on('click', function(e) {
                    console.log(tinyMCE.activeEditor.selection.getContent());
                });
            }
        });

        /* For tooltips */
        $('[data-toggle="tooltip"]').tooltip();


        /** For vieo lightbox */
        $(document).on('click', '[data-lightbox]', lity);

        /** Menu Collapse **/
        $('.sidebar-menu nav ul li a.collapse-menu').on('click', function() {
            if (_body.hasClass(_clsMenu)) {
                _body.removeClass(_clsMenu);
                return false;
            }
            _body.addClass(_clsMenu);
 
          
            return false;
        })

        /* Campaings */
        var Campaings = $('.campaings');

        if (Campaings.length > 0) {
            var campaingsSlide = new Swiper('.campaings .swiper-container', {
                speed: 400,
                spaceBetween: 40,
                slidesPerView: 7,

                navigation: {
                    nextEl: '.campaings .swiper-button-next',
                    prevEl: '.campaings .swiper-button-prev',
                },

            });

        }


        /* Projects Template */
      
        if (creacionCampaign.length > 0) {
            creacionCampaingsSlide = new Swiper('.wrap-creation-campaign .swiper-container', {
                speed: 400,
                spaceBetween: 40,
                slidesPerView: 1,
                observer: true, 
                observeParents: true,
                keyboard: {
                    enabled: true,
                    onlyInViewport: false,
                },
                navigation: {
                    nextEl: '.wrap-creation-campaign .swiper-button-next',
                    prevEl: '.wrap-creation-campaign .swiper-button-prev',
                },

            });

        }

        var featuresSlide = new Swiper('.features-slider .swiper-container', {
            speed: 400,
            slidesPerView: 1,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: '.features-slider .swiper-pagination',
                type: 'bullets',
                clickable: true
            },

        });



        $(".sidebar-dropdown > a").click(function() {
            $(".sidebar-submenu").slideUp(200);

            if ($(this).parent().hasClass(_cls) ) {
                $(".sidebar-dropdown").removeClass(_cls);
                $(this).parent().removeClass(_cls);
            
            } else {

                $(".sidebar-dropdown").removeClass(_cls);
                $(this).next(".sidebar-submenu").slideDown(200);
                $(this).parent().addClass("active");

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