<?php if (!is_front_page()) { ?>
    </div><!-- .page-wrapper end-->
<?php } ?>

<?php /*
 <footer class="footer">
    <?php if (is_active_sidebar('footer-widget-area')) : ?>
        <div class="pre-footer">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar('footer-widget-area'); ?>
                </div>
            </div>
        </div><!-- .pre-footer end-->
    <?php endif; ?>

    <div class="copyright">
        <p class="container">
            <?php _e('Developed by', 'brainworks') ?>
            <a href="https://brainworks.com.ua/" target="_blank">BRAIN WORKS</a>
            &copy; <?php echo date('Y'); ?>
        </p>
    </div>
</footer>
 */ ?>

</div><!-- .wrapper end-->

<?php scroll_top(); ?>

<?php if (is_customize_preview()) { ?>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_scroll_top_display" }'>
        <?php esc_html_e('Edit Scroll Top', 'brainworks'); ?>
    </button>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_analytics_google_placed" }'>
        <?php esc_html_e('Edit Analytics Tracking Code', 'brainworks'); ?>
    </button>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_login_logo" }'>
        <?php esc_html_e('Edit Login Logo', 'brainworks'); ?>
    </button>
<?php } ?>

<div class="is-hide"><?php svg_sprite(); ?></div>

<?php wp_footer(); ?>

<script>
    (function (w, d, $) {
        'use strict';

        d.addEventListener('DOMContentLoaded', function () {
            ajaxContactForm('#contact-form');
        });

        function ajaxContactForm(selector) {
            var form = d.querySelector(selector),
                fields = form.querySelectorAll('input, select, textarea'),
                data = {},
                field;

            form.addEventListener('submit', function (event) {
                event.preventDefault();

                for (var i = 0; i < fields.length; i++) {
                    field = fields[i];
                    data[field.name] = field.value;
                }

                console.log(data);

                $.ajax({
                    'url': this.action,
                    'method': 'POST',
                    'dataType': 'html',
                    'data': data,
                })
                    .done(function (data, textStatus, jqXHR) {
                        //console.log('Method done: ', data, textStatus, jqXHR);
                        console.log('Method done', data);
                    })
                    .fail(function (jqXHR, textStatus, errorThrown) {
                        //console.log('Method fail: ', jqXHR, textStatus, errorThrown);
                        console.log('Method fail', textStatus);
                    })
                    .always(function (one, textStatus, three) {
                        //console.log('Method always: ', one, two, three);
                        console.log('Method always', textStatus);
                    });
            });
        }

    })(window, document, jQuery);
</script>

</body>
</html>
