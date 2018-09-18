<?php

if (wp_doing_ajax()) {
    add_action('wp_ajax_contact_form', 'bw_contact_form_callback');
    add_action('wp_ajax_nopriv_contact_form', 'bw_contact_form_callback');
}

function bw_contact_form_callback()
{

    var_dump($_REQUEST);

    echo 'Success';

    wp_die();
}
