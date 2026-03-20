<?php

/**
 * Archive/Blog Template
 *
 * @package dr-alipour
 */

if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="main-content" class="main-content container-page py-12">
    <!-- Archive Header -->
    <div class="archive-header mb-12">
        <?php
        if (is_category()) {
            echo '<h1 class="heading-1 mb-2">' . single_cat_title('', false) . '</h1>';
            if (category_description()) {
                echo '<p class="text-body text-gray-600">' . wp_kses_post(category_description()) . '</p>';
            }
        } elseif (is_tag()) {
            echo '<h1 class="heading-1 mb-2">' . single_tag_title('', false) . '</h1>';
            if (tag_description()) {
                echo '<p class="text-body text-gray-600">' . wp_kses_post(tag_description()) . '</p>';
            }
        } elseif (is_author()) {
            echo '<h1 class="heading-1 mb-2">' . esc_html__('Posts by ', 'dr-alipour') . get_the_author() . '</h1>';
        } elseif (is_date()) {
            if (is_year()) {
                echo '<h1 class="heading-1">' . get_the_time('Y') . '</h1>';
            } elseif (is_month()) {
                echo '<h1 class="heading-1">' . get_the_time('F Y') . '</h1>';
            } elseif (is_day()) {
                echo '<h1 class="heading-1">' . get_the_time('F j, Y') . '</h1>';
            }
        } else {
            echo '<h1 class="heading-1">' . esc_html__('Blog', 'dr-alipour') . '</h1>';
        }
        ?>
    </div>

    <!-- Filter Bar -->
    <div class="archive-filters mb-8 flex flex-wrap gap-4 items-center">
        <?php
        $current_category = get_query_var('cat');
        $categories = get_categories();
        ?>
        <select onchange="if(this.value) window.location.href=this.value;" class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
            <option value=""><?php esc_html_e('All Categories', 'dr-alipour'); ?></option>
            <?php
            foreach ($categories as $category) {
                $selected = ($current_category == $category->term_id) ? 'selected' : '';
                echo '<option value="' . esc_url(get_category_link($category->term_id)) . '" ' . $selected . '>';
                echo esc_html($category->name) . ' (' . $category->count . ')';
                echo '</option>';
            }
            ?>
        </select>

        <!-- Sort Options -->
        <?php
        $current_order = get_query_var('orderby', 'date');
        ?>
        <select onchange="if(this.value) window.location.href=this.value;" class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
            <option value="<?php echo esc_url(remove_query_arg('orderby')); ?>" <?php selected($current_order, 'date'); ?>>
                <?php esc_html_e('Newest First', 'dr-alipour'); ?>
            </option>
            <option value="<?php echo esc_url(add_query_arg('orderby', 'title')); ?>" <?php selected($current_order, 'title'); ?>>
                <?php esc_html_e('Title (A-Z)', 'dr-alipour'); ?>
            </option>
        </select>
    </div>

    <!-- Posts Grid -->
    <div class="posts-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
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
                                <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover hover:scale-105 transition-transform duration-300')); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <!-- Content -->
                    <div class="card-body flex-grow flex flex-col">
                        <!-- Category Badge -->
                        <div class="mb-3">
                            <?php
                            $categories = get_the_category();
                            if ($categories) {
                                echo '<a href="' . esc_url(get_category_link($categories[0]->term_id)) . '" class="inline-block px-3 py-1 bg-primary text-white text-xs rounded-full hover:bg-primary-dark transition-colors">';
                                echo esc_html($categories[0]->name);
                                echo '</a>';
                            }
                            ?>
                        </div>

                        <!-- Title -->
                        <h2 class="heading-3 text-lg mb-3">
                            <a href="<?php the_permalink(); ?>" class="link hover:underline">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                        <!-- Meta -->
                        <div class="text-sm text-gray-600 mb-4">
                            <span class="author"><?php esc_html_e('By', 'dr-alipour'); ?> <?php the_author_posts_link(); ?></span>
                            <span class="separator mx-2">•</span>
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
                <h2 class="heading-2 mb-4"><?php esc_html_e('No Posts Found', 'dr-alipour'); ?></h2>
                <p class="text-body"><?php esc_html_e('Sorry, there are no posts to display.', 'dr-alipour'); ?></p>
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
