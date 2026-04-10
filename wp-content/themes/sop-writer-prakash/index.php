<?php
/**
 * Fallback template.
 *
 * @package SOP_Writer_Prakash
 */

get_header();
?>
<main class="container content-wrap">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                <div><?php the_content(); ?></div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <article>
            <h1>Welcome to SOP Writer Prakash</h1>
            <p>Please create a page and set it as the homepage in WordPress settings.</p>
        </article>
    <?php endif; ?>
</main>
<?php
get_footer();
