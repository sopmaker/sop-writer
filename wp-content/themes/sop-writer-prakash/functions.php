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
        'sop-writer-prakash-fonts',
        'https://fonts.googleapis.com/css2?family=Newsreader:opsz,wght@6..72,400;6..72,600;6..72,700&family=Source+Sans+3:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'sop-writer-prakash-style',
        get_stylesheet_uri(),
        ['sop-writer-prakash-fonts'],
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'sop_writer_prakash_assets');

/**
 * Customize homepage document title.
 *
 * @param array<string, string> $title_parts Current title parts.
 * @return array<string, string>
 */
function sop_writer_prakash_home_title($title_parts)
{
    if (!is_front_page()) {
        return $title_parts;
    }

    $title_parts['title'] = 'SOP by Prakash — Personalized SOP, LOR & Visa Document Writing | Direct Editor Access';
    return $title_parts;
}
add_filter('document_title_parts', 'sop_writer_prakash_home_title');

/**
 * Add homepage meta description.
 */
function sop_writer_prakash_home_meta_description()
{
    if (!is_front_page()) {
        return;
    }
    ?>
    <meta name="description" content="Work directly with Prakash on your SOP, LOR, or VISA SOP — no agents, no templates. 10,000+ students guided across 100+ programs in 12+ countries. Free consultation.">
    <?php
}
add_action('wp_head', 'sop_writer_prakash_home_meta_description', 1);

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
    $service_needed = isset($_POST['service_needed']) ? sanitize_text_field(wp_unslash($_POST['service_needed'])) : '';
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
        'Service Needed: ' . $service_needed,
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
