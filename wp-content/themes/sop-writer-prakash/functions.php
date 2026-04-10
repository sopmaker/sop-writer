<?php
/**
 * Theme setup for SOP Writer Prakash.
 *
 * @package SOP_Writer_Prakash
 */

if (!defined('ABSPATH')) {
    exit;
}

function sop_writer_prakash_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'sop_writer_prakash_setup');

function sop_writer_prakash_assets()
{
    wp_enqueue_style(
        'sop-writer-prakash-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'sop_writer_prakash_assets');
