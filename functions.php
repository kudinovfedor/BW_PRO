<?php
/**
 * All the functions are in the PHP pages in the `inc/` folder.
 */

show_admin_bar(false);

require_once locate_template('/inc/helpers.php');
require_once locate_template('/inc/admin.php');
require_once locate_template('/inc/login.php');
require_once locate_template('/inc/customizer.php');

require_once locate_template('/inc/breadcrumbs.php');
require_once locate_template('/inc/cleanup.php');
require_once locate_template('/inc/custom-logo.php');
require_once locate_template('/inc/setup.php');
require_once locate_template('/inc/enqueues.php');
require_once locate_template('/inc/navbar.php');
require_once locate_template('/inc/widgets.php');
require_once locate_template('/inc/index-pagination.php');
require_once locate_template('/inc/split-post-pagination.php');
require_once locate_template('/inc/feedback.php');
require_once locate_template('/inc/shortcodes.php');
require_once locate_template('/inc/meta-boxes.php');

require_once locate_template('/inc/home-customizer.php');
require_once locate_template('/inc/post_type_portfolio.php');
require_once locate_template('/inc/taxonomy-meta-box.php');

if (!function_exists('dump')) {
    /**
     * Dumps information about a variable
     *
     * @param mixed ...$expression
     *
     * @return void
     */
    function dump(...$expression)
    {
        echo '<pre>';
        var_dump($expression);
        echo '</pre>';
    }
}

if (!function_exists('dd')) {
    /**
     * Dump and die
     *
     * @param mixed ...$expression
     *
     * @return void
     */
    function dd(...$expression)
    {
        dump($expression);
        die();
    }
}

require_once 'inc/ajax-contact-form.php';
