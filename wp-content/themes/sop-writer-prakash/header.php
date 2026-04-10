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
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
$about_link = is_front_page() ? '#about' : home_url('/#about');
$usp_link = is_front_page() ? '#usp' : home_url('/#usp');
$difference_link = is_front_page() ? '#difference' : home_url('/#difference');
$contact_link = is_front_page() ? '#contact' : home_url('/#contact');
?>
<header class="site-header">
    <div class="container">
        <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
            SOP Writer Prakash
        </a>
        <nav aria-label="Primary">
            <ul class="menu">
                <li><a href="<?php echo esc_url($about_link); ?>">About</a></li>
                <li><a href="<?php echo esc_url($usp_link); ?>">USP</a></li>
                <li><a href="<?php echo esc_url($difference_link); ?>">Why Prakash</a></li>
                <li><a href="<?php echo esc_url($contact_link); ?>">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
