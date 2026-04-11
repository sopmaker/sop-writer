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
$proof_link = is_front_page() ? '#proof' : home_url('/#proof');
$video_link = is_front_page() ? '#video' : home_url('/#video');
$reviews_link = is_front_page() ? '#reviews' : home_url('/#reviews');
$contact_link = is_front_page() ? '#contact' : home_url('/#contact');
?>
<header class="site-header">
    <div class="container">
        <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
            SOP by Prakash
        </a>
        <nav aria-label="Primary">
            <ul class="menu">
                <li><a href="<?php echo esc_url($about_link); ?>">About</a></li>
                <li><a href="<?php echo esc_url($services_link); ?>">Services</a></li>
                <li><a href="<?php echo esc_url($proof_link); ?>">Why Not AI</a></li>
                <li><a href="<?php echo esc_url($video_link); ?>">Video</a></li>
                <li><a href="<?php echo esc_url($reviews_link); ?>">Reviews</a></li>
                <li><a href="<?php echo esc_url($contact_link); ?>">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
