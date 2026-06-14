<?php
/**
 * Theme setup for SOP Writer Prakash.
 *
 * @package SOP_Writer_Prakash
 */

if (!defined('ABSPATH')) {
    exit;
}

require_once get_template_directory() . '/inc/content-data.php';
require_once get_template_directory() . '/inc/section-pages.php';

function sop_writer_prakash_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'sop_writer_prakash_setup');

add_action('after_switch_theme', 'sop_writer_prakash_register_section_pages');

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

/**
 * Handle contact form submissions.
 */
function sop_writer_prakash_handle_contact_form()
{
    if (!isset($_POST['sop_writer_prakash_contact_nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['sop_writer_prakash_contact_nonce'])), 'sop_writer_prakash_contact_nonce')) {
        wp_safe_redirect(home_url('/?contact_status=failed#contact'));
        exit;
    }

    $full_name = isset($_POST['full_name']) ? sanitize_text_field(wp_unslash($_POST['full_name'])) : '';
    $email = isset($_POST['email']) ? sanitize_email(wp_unslash($_POST['email'])) : '';
    $phone = isset($_POST['phone']) ? sanitize_text_field(wp_unslash($_POST['phone'])) : '';
    $target_country = isset($_POST['target_country']) ? sanitize_text_field(wp_unslash($_POST['target_country'])) : '';
    $intended_program = isset($_POST['intended_program']) ? sanitize_text_field(wp_unslash($_POST['intended_program'])) : '';
    $message = isset($_POST['message']) ? sanitize_textarea_field(wp_unslash($_POST['message'])) : '';

    if (empty($full_name) || empty($email) || empty($message) || !is_email($email)) {
        wp_safe_redirect(home_url('/?contact_status=failed#contact'));
        exit;
    }

    $to = get_option('admin_email');
    $subject = sprintf('New SOP Inquiry from %s', $full_name);
    $body_lines = [
        'A new inquiry has been submitted on SOP by Prakash website.',
        '',
        'Name: ' . $full_name,
        'Email: ' . $email,
        'Phone: ' . $phone,
        'Target Country: ' . $target_country,
        'Intended Program: ' . $intended_program,
        '',
        'Message:',
        $message,
    ];

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $full_name . ' <' . $email . '>',
    ];

    $mail_sent = wp_mail($to, $subject, implode("\n", $body_lines), $headers);

    if ($mail_sent) {
        wp_safe_redirect(home_url('/?contact_status=success#contact'));
        exit;
    }

    wp_safe_redirect(home_url('/?contact_status=failed#contact'));
    exit;
}
add_action('admin_post_nopriv_sop_writer_prakash_contact', 'sop_writer_prakash_handle_contact_form');
add_action('admin_post_sop_writer_prakash_contact', 'sop_writer_prakash_handle_contact_form');
