<?php

/**
 * Search Results Template
 *
 * @package dr-alipour
 */

if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="main-content" class="main-content container-page py-12">
    <!-- Search Header -->
    <div class="search-header mb-12">
        <h1 class="heading-1 mb-4">
            <?php
            printf(
                esc_html__('Search Results for: %s', 'dr-alipour'),
                '<span class="text-primary">' . get_search_query() . '</span>'
            );
            ?>
        </h1>
        <p class="text-body text-gray-600">
            <?php
            printf(
                esc_html__('Found %d results', 'dr-alipour'),
                $wp_query->found_posts
            );
            ?>
        </p>
    </div>

    <!-- Search Form -->
    <div class="search-form-wrap mb-12 max-w-md">
        <?php get_search_form(); ?>
    </div>

    <!-- Results Grid -->
    <div class="search-results grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
        ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('card overflow-hidden flex flex-col hover:shadow-xl transition-shadow'); ?>>
                    <!-- Featured Image -->
                    <?php if (has_post_thumbnail()): ?>
                        <div class="relative h-48 overflow-hidden bg-gray-200">
                            <a href="<?php the_permalink(); ?>" class="block h-full">
                                <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover hover:scale-105 transition-transform duration-300')); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <!-- Content -->
                    <div class="card-body flex-grow flex flex-col">
                        <!-- Post Type Badge -->
                        <div class="mb-3">
                            <span class="inline-block px-3 py-1 bg-primary bg-opacity-10 text-primary text-xs rounded-full">
                                <?php echo esc_html(get_post_type_object(get_post_type())->labels->singular_name); ?>
                            </span>
                        </div>

                        <!-- Title -->
                        <h2 class="heading-3 text-lg mb-3">
                            <a href="<?php the_permalink(); ?>" class="link hover:underline">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                        <!-- Meta -->
                        <div class="text-sm text-gray-600 mb-4">
                            <span class="date"><?php echo esc_html(get_the_date('M j, Y')); ?></span>
                        </div>

                        <!-- Excerpt -->
                        <p class="text-gray-700 mb-6 flex-grow">
                            <?php the_excerpt(); ?>
                        </p>

                        <!-- Read More -->
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary text-sm">
                            <?php esc_html_e('Read More', 'dr-alipour'); ?> →
                        </a>
                    </div>
                </article>

            <?php
            }
        } else {
            ?>
            <div class="col-span-full card card-body text-center py-12">
                <h2 class="heading-2 mb-4"><?php esc_html_e('No Results Found', 'dr-alipour'); ?></h2>
                <p class="text-body text-gray-600 mb-6">
                    <?php esc_html_e('Sorry, we couldn\'t find any results matching your search. Please try again with different keywords.', 'dr-alipour'); ?>
                </p>
                <div class="space-y-4">
                    <?php get_search_form(); ?>
                    <a href="<?php echo esc_url(home_url()); ?>" class="btn btn-outline">
                        <?php esc_html_e('Back to Home', 'dr-alipour'); ?>
                    </a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

    <!-- Pagination -->
    <nav class="pagination flex justify-center gap-2">
        <?php
        echo paginate_links(array(
            'prev_text' => '<span class="btn btn-outline">&larr; ' . esc_html__('Previous', 'dr-alipour') . '</span>',
            'next_text' => '<span class="btn btn-outline">' . esc_html__('Next', 'dr-alipour') . ' &rarr;</span>',
            'type'      => 'list',
        ));
        ?>
    </nav>
</main>

<?php
get_footer();
