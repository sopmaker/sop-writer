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
<header class="site-header">
    <div class="container">
        <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
            SOP Writer Prakash
        </a>
        <nav aria-label="Primary">
            <ul class="menu">
                <li><a href="#about">About</a></li>
                <li><a href="#usp">USP</a></li>
                <li><a href="#difference">Why Prakash</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
