<?php
/**
 * Header template.
 *
 * @package SOP_Writer_Prakash
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php echo esc_attr(get_bloginfo('charset')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
$about_link = is_front_page() ? '#about' : home_url('/#about');
$services_link = is_front_page() ? '#services' : home_url('/#services');
$process_link = is_front_page() ? '#process' : home_url('/#process');
$results_link = is_front_page() ? '#results' : home_url('/#results');
$pricing_link = is_front_page() ? '#pricing' : home_url('/#pricing');
$faq_link = is_front_page() ? '#faq' : home_url('/#faq');
$contact_link = is_front_page() ? '#contact' : home_url('/#contact');
?>
<header class="site-header">
    <div class="container">
        <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
            SOP BY PRAKASH
        </a>
        <nav aria-label="Primary">
            <ul class="menu">
                <li><a href="<?php echo esc_url($about_link); ?>">About</a></li>
                <li><a href="<?php echo esc_url($services_link); ?>">Services</a></li>
                <li><a href="<?php echo esc_url($process_link); ?>">Process</a></li>
                <li><a href="<?php echo esc_url($results_link); ?>">Results</a></li>
                <li><a href="<?php echo esc_url($pricing_link); ?>">Pricing</a></li>
                <li><a href="<?php echo esc_url($faq_link); ?>">FAQ</a></li>
                <li><a href="<?php echo esc_url($contact_link); ?>">Contact</a></li>
            </ul>
        </nav>
        <a class="btn btn-primary nav-cta" href="<?php echo esc_url($contact_link); ?>">Book Free Consultation</a>
    </div>
</header>
