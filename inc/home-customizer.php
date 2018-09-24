<?php

/**
 *
 * @param $wp_customize WP_Customize_Manager
 */
function bw_home_customize($wp_customize)
{
    // Panel Home Page Options
    $wp_customize->add_panel('bw_home', array(
        'title' => 'Home Page Options',
        'priority' => 202,
    ));

    // Hero
    $wp_customize->add_section('bw_section_hero', array(
        'title' => 'Section Hero',
        'panel' => 'bw_home',
    ));

    $wp_customize->add_setting('bw_section_hero_title', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_setting('bw_section_hero_subtitle', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_setting('bw_section_hero_btn_label', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_setting('bw_section_hero_item1_title', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('bw_section_hero_item2_title', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('bw_section_hero_item3_title', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_setting('bw_section_hero_item1_icon', array(
        'default' => 'none',
    ));
    $wp_customize->add_setting('bw_section_hero_item2_icon', array(
        'default' => 'none',
    ));
    $wp_customize->add_setting('bw_section_hero_item3_icon', array(
        'default' => 'none',
    ));

    $wp_customize->add_setting('bw_section_hero_item1_url', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('bw_section_hero_item2_url', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('bw_section_hero_item3_url', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('bw_section_hero_title', array(
        'label' => 'Title',
        'section' => 'bw_section_hero',
        'settings' => 'bw_section_hero_title',
        'type' => 'text',
    ));

    $wp_customize->add_control('bw_section_hero_subtitle', array(
        'label' => 'Sub Title',
        'section' => 'bw_section_hero',
        'settings' => 'bw_section_hero_subtitle',
        'type' => 'text',
    ));

    $wp_customize->add_control('bw_section_hero_btn_label', array(
        'label' => 'Button Label',
        'section' => 'bw_section_hero',
        'settings' => 'bw_section_hero_btn_label',
        'type' => 'text',
    ));

    $wp_customize->add_control('bw_section_hero_title', array(
        'label' => 'Title',
        'section' => 'bw_section_hero',
        'settings' => 'bw_section_hero_title',
        'type' => 'text',
    ));

    $wp_customize->add_control('bw_section_hero_item1_title', array(
        'label' => 'Service Item Title [1]',
        'section' => 'bw_section_hero',
        'settings' => 'bw_section_hero_item1_title',
        'type' => 'text',
    ));
    $wp_customize->add_control('bw_section_hero_item1_icon', array(
        'label' => 'Service Item Icon [1]',
        'section' => 'bw_section_hero',
        'settings' => 'bw_section_hero_item1_icon',
        'type' => 'select',
        'choices' => array(
            'none' => 'Default',
            'design' => 'Design',
            'advertising' => 'Advertising',
            'help' => 'Support',
        ),
    ));
    $wp_customize->add_control('bw_section_hero_item1_url', array(
        'label' => 'Service Item URL [1]',
        'section' => 'bw_section_hero',
        'settings' => 'bw_section_hero_item1_url',
        'type' => 'url',
    ));

    $wp_customize->add_control('bw_section_hero_item2_title', array(
        'label' => 'Service Item Title [2]',
        'section' => 'bw_section_hero',
        'settings' => 'bw_section_hero_item2_title',
        'type' => 'text',
    ));
    $wp_customize->add_control('bw_section_hero_item2_icon', array(
        'label' => 'Service Item Icon [2]',
        'section' => 'bw_section_hero',
        'settings' => 'bw_section_hero_item2_icon',
        'type' => 'select',
        'choices' => array(
            'none' => 'Default',
            'design' => 'Design',
            'advertising' => 'Advertising',
            'help' => 'Support',
        ),
    ));
    $wp_customize->add_control('bw_section_hero_item2_url', array(
        'label' => 'Service Item URL [2]',
        'section' => 'bw_section_hero',
        'settings' => 'bw_section_hero_item2_url',
        'type' => 'url',
    ));

    $wp_customize->add_control('bw_section_hero_item3_title', array(
        'label' => 'Service Item Title [3]',
        'section' => 'bw_section_hero',
        'settings' => 'bw_section_hero_item3_title',
        'type' => 'text',
    ));
    $wp_customize->add_control('bw_section_hero_item3_icon', array(
        'label' => 'Service Item Icon [3]',
        'section' => 'bw_section_hero',
        'settings' => 'bw_section_hero_item3_icon',
        'type' => 'select',
        'choices' => array(
            'none' => 'Default',
            'design' => 'Design',
            'advertising' => 'Advertising',
            'help' => 'Support',
        ),
    ));
    $wp_customize->add_control('bw_section_hero_item3_url', array(
        'label' => 'Service Item URL [3]',
        'section' => 'bw_section_hero',
        'settings' => 'bw_section_hero_item3_url',
        'type' => 'url',
    ));

    // Portfolio
    $wp_customize->add_section('bw_section_portfolio', array(
        'title' => 'Section Portfolio',
        'panel' => 'bw_home',
    ));

    $wp_customize->add_setting('bw_section_portfolio_title', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_setting('bw_section_portfolio_btn_label', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('bw_section_portfolio_title', array(
        'label' => 'Title',
        'section' => 'bw_section_portfolio',
        'settings' => 'bw_section_portfolio_title',
        'type' => 'text',
    ));

    $wp_customize->add_control('bw_section_portfolio_btn_label', array(
        'label' => 'Button Label',
        'section' => 'bw_section_portfolio',
        'settings' => 'bw_section_portfolio_btn_label',
        'type' => 'text',
    ));

    $wp_customize->add_section('bw_section_contact', array(
        'title' => 'Section Contact',
        'panel' => 'bw_home',
    ));

    $wp_customize->add_setting('bw_section_contact_title', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_setting('bw_section_contact_item1_title', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('bw_section_contact_item2_title', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('bw_section_contact_item3_title', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_setting('bw_section_contact_item1_phone', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('bw_section_contact_item2_phone', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('bw_section_contact_item3_phone', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_setting('bw_section_contact_item1_email', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('bw_section_contact_item2_email', array(
        'default' => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('bw_section_contact_item3_email', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_setting('bw_section_contact_shortcode', array(
        'default' => '',
    ));

    $wp_customize->add_control('bw_section_contact_title', array(
        'label' => 'Title',
        'section' => 'bw_section_contact',
        'settings' => 'bw_section_contact_title',
        'type' => 'text',
    ));

    $wp_customize->add_control('bw_section_contact_item1_title', array(
        'label' => 'Item Title [1]',
        'section' => 'bw_section_contact',
        'settings' => 'bw_section_contact_item1_title',
        'type' => 'text',
    ));
    $wp_customize->add_control('bw_section_contact_item1_phone', array(
        'label' => 'Item Phone [1]',
        'section' => 'bw_section_contact',
        'settings' => 'bw_section_contact_item1_phone',
        'type' => 'tel',
    ));
    $wp_customize->add_control('bw_section_contact_item1_email', array(
        'label' => 'Item Email [1]',
        'section' => 'bw_section_contact',
        'settings' => 'bw_section_contact_item1_email',
        'type' => 'email',
    ));

    $wp_customize->add_control('bw_section_contact_item2_title', array(
        'label' => 'Item Title [2]',
        'section' => 'bw_section_contact',
        'settings' => 'bw_section_contact_item2_title',
        'type' => 'text',
    ));
    $wp_customize->add_control('bw_section_contact_item2_phone', array(
        'label' => 'Item Phone [2]',
        'section' => 'bw_section_contact',
        'settings' => 'bw_section_contact_item2_phone',
        'type' => 'tel',
    ));
    $wp_customize->add_control('bw_section_contact_item2_email', array(
        'label' => 'Item Email [2]',
        'section' => 'bw_section_contact',
        'settings' => 'bw_section_contact_item2_email',
        'type' => 'email',
    ));

    $wp_customize->add_control('bw_section_contact_item3_title', array(
        'label' => 'Item Title [3]',
        'section' => 'bw_section_contact',
        'settings' => 'bw_section_contact_item3_title',
        'type' => 'text',
    ));
    $wp_customize->add_control('bw_section_contact_item3_phone', array(
        'label' => 'Item Phone [3]',
        'section' => 'bw_section_contact',
        'settings' => 'bw_section_contact_item3_phone',
        'type' => 'tel',
    ));
    $wp_customize->add_control('bw_section_contact_item3_email', array(
        'label' => 'Item Email [3]',
        'section' => 'bw_section_contact',
        'settings' => 'bw_section_contact_item3_email',
        'type' => 'email',
    ));

    $wp_customize->add_control('bw_section_contact_shortcode', array(
        'label' => 'Contact Form [shortcode]',
        'section' => 'bw_section_contact',
        'settings' => 'bw_section_contact_shortcode',
        'type' => 'text',
    ));
}

add_action('customize_register', 'bw_home_customize');

if (function_exists('pll_register_string')) {
    $strings = array(
        // Hero
        array(
            'name' => 'Hero Title',
            'theme-mod' => 'bw_section_hero_title',
        ),
        array(
            'name' => 'Hero Sub Title',
            'theme-mod' => 'bw_section_hero_subtitle',
        ),
        array(
            'name' => 'Hero Button label',
            'theme-mod' => 'bw_section_hero_btn_label',
        ),
        array(
            'name' => 'Service Item Title [1]',
            'theme-mod' => 'bw_section_hero_item1_title',
        ),
        array(
            'name' => 'Service Item URL [1]',
            'theme-mod' => 'bw_section_hero_item1_url',
        ),
        array(
            'name' => 'Service Item Title [2]',
            'theme-mod' => 'bw_section_hero_item2_title',
        ),
        array(
            'name' => 'Service Item URL [2]',
            'theme-mod' => 'bw_section_hero_item2_url',
        ),
        array(
            'name' => 'Service Item Title [3]',
            'theme-mod' => 'bw_section_hero_item3_title',
        ),
        array(
            'name' => 'Service Item URL [3]',
            'theme-mod' => 'bw_section_hero_item3_url',
        ),
        // Portfolio
        array(
            'name' => 'Portfolio Title',
            'theme-mod' => 'bw_section_portfolio_title',
        ),
        array(
            'name' => 'Portfolio Button label',
            'theme-mod' => 'bw_section_portfolio_btn_label',
        ),
        // Contact
        array(
            'name' => 'Contact Title',
            'theme-mod' => 'bw_section_contact_title',
        ),
        array(
            'name' => 'Contact Item Title [1]',
            'theme-mod' => 'bw_section_contact_item1_title',
        ),
        array(
            'name' => 'Contact Item Phone [1]',
            'theme-mod' => 'bw_section_contact_item1_phone',
        ),
        array(
            'name' => 'Contact Item Email [1]',
            'theme-mod' => 'bw_section_contact_item1_email',
        ),
        array(
            'name' => 'Contact Item Title [2]',
            'theme-mod' => 'bw_section_contact_item2_title',
        ),
        array(
            'name' => 'Contact Item Phone [2]',
            'theme-mod' => 'bw_section_contact_item2_phone',
        ),
        array(
            'name' => 'Contact Item Email [2]',
            'theme-mod' => 'bw_section_contact_item2_email',
        ),
        array(
            'name' => 'Contact Item Title [3]',
            'theme-mod' => 'bw_section_contact_item3_title',
        ),
        array(
            'name' => 'Contact Item Phone [3]',
            'theme-mod' => 'bw_section_contact_item3_phone',
        ),
        array(
            'name' => 'Contact Item Email [3]',
            'theme-mod' => 'bw_section_contact_item3_email',
        ),
        array(
            'name' => 'Contact Form Shortcode',
            'theme-mod' => 'bw_section_contact_shortcode',
        ),
    );

    foreach ($strings as $item) {
        pll_register_string($item['name'], get_theme_mod($item['theme-mod']), 'customizer');
    }
}
