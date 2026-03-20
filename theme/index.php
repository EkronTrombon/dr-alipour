<?php

/**
 * Main Theme Template
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
            <article id="post-<?php the_ID(); ?>" <?php post_class('card mb-8'); ?>>
                <?php
                if (has_post_thumbnail()) {
                ?>
                    <div class="post-thumbnail relative h-96 overflow-hidden rounded-t-lg">
                        <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                    </div>
                <?php
                }
                ?>

                <div class="card-body">
                    <header class="entry-header mb-4">
                        <?php
                        if (is_singular()) {
                            the_title('<h1 class="heading-1">', '</h1>');
                        } else {
                            the_title('<h2 class="heading-3"><a href="' . esc_url(get_permalink()) . '" rel="bookmark" class="link">', '</a></h2>');
                        }
                        ?>
                    </header>

                    <div class="entry-content prose max-w-none mb-4">
                        <?php
                        if (is_singular()) {
                            the_content();
                        } else {
                            the_excerpt();
                        ?>
                            <div class="mt-6">
                                <a href="<?php echo esc_url(get_permalink()); ?>" class="btn btn-primary">
                                    <?php esc_html_e('Read More', 'dr-alipour'); ?>
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </article>
        <?php
        }
    } else {
        ?>
        <div class="card card-body text-center">
            <p class="text-lg text-gray-600"><?php esc_html_e('No posts found.', 'dr-alipour'); ?></p>
        </div>
    <?php
    }
    ?>
</main>

<?php
get_footer();
