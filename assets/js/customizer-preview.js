(function ($) {
    "use strict";

    $(function () {

        var api = wp.customize;

        $(document.body).on('click', '.customizer-edit', function () {
            api.preview.send('preview-edit', $(this).data('control'));
        });

        api('blogname', function (control) {
            control.bind(function (value) {
                $('.blogname').html(value);
            });
        });

        api('blogdescription', function (control) {
            control.bind(function (value) {
                $('.blogdescription').html(value);
            });
        });

        api('header_textcolor', function (control) {
            control.bind(function (value) {
                $('h1, h2, h3, h4, h5, h6').css('color', value);
            });
        });

        api('background_color', function (control) {
            control.bind(function (value) {
                console.log(value);
                $('body').css('background-color', value);
            });
        });

        var scroll_top = $('.scroll-top');

        api('bw_scroll_top_width', function (control) {
            control.bind(function (value) {
                scroll_top.css('width', value);
            })
        });

        api('bw_scroll_top_height', function (control) {
            control.bind(function (value) {
                scroll_top.css('height', value);
            })
        });

        api('bw_scroll_top_shape', function (control) {
            control.bind(function (value) {
                scroll_top.removeClass('is-circle is-rounded is-square').addClass('is-' + value);
            })
        });

        api('bw_scroll_top_position', function (control) {
            control.bind(function (value) {
                scroll_top.removeClass('is-left is-right').addClass('is-' + value);

                var offset = api.get().bw_scroll_top_offset_left_right;

                if (value === 'right') {
                    scroll_top.css({
                        'right': offset + 'px',
                        'left': 'auto',
                    });
                } else {
                    scroll_top.css({
                        'left': offset + 'px',
                        'right': 'auto',
                    });
                }
            })
        });

        api('bw_scroll_top_offset_left_right', function (control) {
            control.bind(function (value) {

                var position = api.get().bw_scroll_top_position;

                if (position === 'right') {
                    scroll_top.css({
                        'right': value + 'px',
                        'left': 'auto',
                    });
                } else {
                    scroll_top.css({
                        'right': 'auto',
                        'left': value + 'px',
                    });
                }
            })
        });

        api('bw_scroll_top_offset_bottom', function (control) {
            control.bind(function (value) {
                scroll_top.css('bottom', value + 'px');
            })
        });

        api('bw_scroll_top_border_width', function (control) {
            control.bind(function (value) {
                scroll_top.css('border-width', value + 'px');
            })
        });

        api('bw_scroll_top_border_color', function (control) {
            control.bind(function (value) {
                console.log(value.length);
                scroll_top.css('border-color', value);
            })
        });

        api('bw_scroll_top_background_color', function (control) {
            control.bind(function (value) {
                scroll_top.css('background-color', value);
            })
        });

        api('bw_scroll_top_background_color_hover', function (control) {
            control.bind(function (value) {
                scroll_top.css('background-color', value);
            })
        });

        api('bw_scroll_top_arrow_color', function (control) {
            control.bind(function (value) {
                scroll_top.find('.scroll-top--arrow').css('border-bottom-color', value);
            })
        });

        // Home Page Settings
        var service = $('.service'), portfolio = $('.portfolio'), contact = $('.contact');

        api('bw_section_hero_title', function (control) {
            control.bind(function (value) {
                service.find('.page-name').text(value);
            })
        });

        api('bw_section_hero_subtitle', function (control) {
            control.bind(function (value) {
                service.find('h2').text(value);
            })
        });

        api('bw_section_hero_item1_title', function (control) {
            control.bind(function (value) {
                service.find('.service-item:nth-child(1) .service-name').text(value);
            })
        });
        api('bw_section_hero_item1_url', function (control) {
            control.bind(function (value) {
                service.find('.service-item:nth-child(1) .service-box').attr('href', value);
            })
        });
        api('bw_section_hero_item2_title', function (control) {
            control.bind(function (value) {
                service.find('.service-item:nth-child(2) .service-name').text(value);
            })
        });
        api('bw_section_hero_item2_url', function (control) {
            control.bind(function (value) {
                service.find('.service-item:nth-child(2) .service-box').attr('href', value);
            })
        });
        api('bw_section_hero_item3_title', function (control) {
            control.bind(function (value) {
                service.find('.service-item:nth-child(3) .service-name').text(value);
            })
        });
        api('bw_section_hero_item3_url', function (control) {
            control.bind(function (value) {
                service.find('.service-item:nth-child(3) .service-box').attr('href', value);
            })
        });

        api('bw_section_hero_btn_label', function (control) {
            control.bind(function (value) {
                service.find('.btn, .js-make-order').text(value);
            })
        });

        api('bw_section_portfolio_title', function (control) {
            control.bind(function (value) {
                portfolio.find('.page-subname').text(value);
            })
        });

        api('bw_section_portfolio_btn_label', function (control) {
            control.bind(function (value) {
                portfolio.find('.btn, .js-order-site').text(value);
            })
        });

        api('bw_section_contact_title', function (control) {
            control.bind(function (value) {
                contact.find('.page-subname').text(value);
            })
        });

        api('bw_section_contact_item1_title', function (control) {
            control.bind(function (value) {
                contact.find('.service-item:nth-child(1) .service-name').text(value);
            })
        });

        api('bw_section_contact_item1_phone', function (control) {
            control.bind(function (value) {
                contact.find('.service-item:nth-child(1) .service-tel').text(value);
            })
        });

        api('bw_section_contact_item1_email', function (control) {
            control.bind(function (value) {
                contact.find('.service-item:nth-child(1) .service-email').text(value);
            })
        });

        api('bw_section_contact_item2_title', function (control) {
            control.bind(function (value) {
                contact.find('.service-item:nth-child(2) .service-name').text(value);
            })
        });

        api('bw_section_contact_item2_phone', function (control) {
            control.bind(function (value) {
                contact.find('.service-item:nth-child(2) .service-tel').text(value);
            })
        });

        api('bw_section_contact_item2_email', function (control) {
            control.bind(function (value) {
                contact.find('.service-item:nth-child(2) .service-email').text(value);
            })
        });

        api('bw_section_contact_item3_title', function (control) {
            control.bind(function (value) {
                contact.find('.service-item:nth-child(3) .service-name').text(value);
            })
        });

        api('bw_section_contact_item3_phone', function (control) {
            control.bind(function (value) {
                contact.find('.service-item:nth-child(3) .service-tel').text(value);
            })
        });

        api('bw_section_contact_item3_email', function (control) {
            control.bind(function (value) {
                contact.find('.service-item:nth-child(3) .service-email').text(value);
            })
        });

    });

})(jQuery);