<?php

function cptui_register_my_cpts_portfolio()
{
    /**
     * Post Type: Portfolio.
     */
    $labels = array(
        'name' => __('Portfolio', 'brainworks'),
        'singular_name' => __('Portfolio', 'brainworks'),
    );

    $args = array(
        'label' => __('Portfolio', 'brainworks'),
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_rest' => false,
        'rest_base' => '',
        'has_archive' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'portfolio', 'with_front' => true),
        'query_var' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('portfolio', $args);
}

add_action('init', 'cptui_register_my_cpts_portfolio');

function cptui_register_my_taxes_portfolio_category()
{

    /**
     * Taxonomy: Categories.
     */

    $labels = array(
        'name' => __('Categories', 'brainworks'),
        'singular_name' => __('Category', 'brainworks'),
    );

    $args = array(
        'label' => __('Categories', 'brainworks'),
        'labels' => $labels,
        'public' => true,
        'hierarchical' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'portfolio-category', 'with_front' => true,),
        'show_admin_column' => false,
        'show_in_rest' => false,
        'rest_base' => 'portfolio_category',
        'show_in_quick_edit' => false,
    );
    register_taxonomy('portfolio-category', array('portfolio'), $args);
}

add_action('init', 'cptui_register_my_taxes_portfolio_category');

function bw_portfolio_meta_box($meta_boxes)
{
    $prefix = 'bw-';

    $meta_boxes[] = array(
        'id' => 'additional',
        'title' => 'Additional',
        'post_types' => array('portfolio'),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => 'true',
        'fields' => array(
            array(
                'id' => $prefix . 'portfolio-url',
                'type' => 'url',
                'name' => 'Project URL',
                'placeholder' => 'https://sitename.com',
            ),
        ),
    );

    return $meta_boxes;
}

add_filter('rwmb_meta_boxes', 'bw_portfolio_meta_box');
