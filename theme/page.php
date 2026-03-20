<?php

/**
 * Generic Page Template
 *
 * @package dr-alipour
 */

if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="main-content" class="main-content container-page py-12">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header mb-8">
                    <?php the_title('<h1 class="heading-1 mb-4">', '</h1>'); ?>

                    <?php if (has_post_thumbnail()): ?>
                        <div class="post-thumbnail mb-8 rounded-lg overflow-hidden shadow-lg">
                            <?php the_post_thumbnail('large', array('class' => 'w-full h-auto')); ?>
                        </div>
                    <?php endif; ?>
                </header>

                <div class="entry-content prose prose-lg max-w-none">
                    <?php the_content(); ?>
                </div>

                <?php
                // Display ACF blocks if present
                if (function_exists('has_blocks') && has_blocks()) {
                    echo apply_filters('the_content', get_post_field('post_content'));
                }
                ?>
            </article>

            <?php
            // Display navigation to other pages if applicable
            if (get_post_type() === 'page') {
                wp_link_pages(array(
                    'before'      => '<div class="page-links mt-8"><span class="page-links-title">Pages:</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                ));
            }
            ?>

        <?php
        }
    } else {
        ?>
        <div class="card card-body text-center py-12">
            <h2 class="heading-2 mb-4"><?php esc_html_e('Page Not Found', 'dr-alipour'); ?></h2>
            <p class="text-body mb-6"><?php esc_html_e('The page you are looking for does not exist.', 'dr-alipour'); ?></p>
            <a href="<?php echo esc_url(home_url()); ?>" class="btn btn-primary">
                <?php esc_html_e('Back to Home', 'dr-alipour'); ?>
            </a>
        </div>
    <?php
    }
    ?>
</main>

<?php
get_footer();
