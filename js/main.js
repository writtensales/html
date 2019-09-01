;
(function($) {
    $(function() {

        var cls = 'active',
            _body = $('body'),
            _cls = 'active',
            _clsMenu = 'menu-collapse',
            tableFilter = $('.table-filter'),
            creacionCampaign = $('.wrap-creation-campaign'),
            Campaings = $('.campaings'),
            searchAnimated = $('.search-animated'),
            creacionCampaingsSlide = '';


        /** Add or remove a class**/
        function addOrRemoveClass(elem, cls) {
            if (elem.hasClass(cls)) {
                elem.removeClass(cls);
                return false;
            }
            elem.addClass(cls);
            return true;
        }

        /** Search animated */
        $('.search-animated  .search-btn').on('click', function() {
            addOrRemoveClass(searchAnimated, _cls);

        });

        $('.search-animated .search-field').on('blur', function() {

        });

        /** Appy menu collapse */

        if ($(window).width() <= 1280) {
            _body.addClass(_clsMenu);
        }

        /** Select a icon for categories **/
        $('.iconsModal .grid-icons a').on('click', function() {
            $('.createCategoryModal [name="icon"]').val($(this).attr('href'));
            $('.createCategoryModal .current-icon').html('&#x' + $(this).attr('href').replace('#', ''));


            $(this).closest('.iconsModal').modal('hide');
            return false;
        })


        /** Wrap video **/
          $(' .wrap-video-dropdown .btn-video').on('click', function(){
            var elem = $(this).closest('.wrap-video-dropdown');
          addOrRemoveClass(elem, _cls); 
        })

       
        $('.btn-modal-cancel').on('click', function(){
            $(this).closest('.modal').modal('hide');
            return false;
        })


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

            addOrRemoveClass(_body, _clsMenu);

            return false;
        })

        /* Campaings */

        if (Campaings.length > 0) {
            var campaingsSlide = new Swiper('.campaings .swiper-container', {
                speed: 400,
                spaceBetween: 20,
                slidesPerView: 6,
                observer: true,
                observeParents: true,
                navigation: {
                    nextEl: '.campaings .swiper-button-next',
                    prevEl: '.campaings .swiper-button-prev',
                },
                breakpoints: {
                    1440: {
                        slidesPerView: 4,
                    },
                    1140: {
                        slidesPerView: 3,
                    },
                    960: {
                        slidesPerView: 3,
                    },
                    720: {
                        slidesPerView: 3,
                    }
                }
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
                grabCursor: false,
                sliderDrag: false,
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

            if ($(this).parent().hasClass(_cls)) {
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