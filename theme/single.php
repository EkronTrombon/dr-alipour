<?php

/**
 * Single Post Template
 *
 * @package dr-alipour
 */

if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="main-content" class="main-content container-page py-12">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Main Content -->
        <div class="lg:col-span-2">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
            ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('mb-8'); ?>>
                        <header class="entry-header mb-8">
                            <?php the_title('<h1 class="heading-1 mb-4">', '</h1>'); ?>

                            <div class="post-meta text-sm text-gray-600 mb-6 flex flex-wrap items-center gap-4">
                                <span class="author">
                                    <strong><?php esc_html_e('By', 'dr-alipour'); ?></strong>
                                    <?php the_author_posts_link(); ?>
                                </span>
                                <span class="date">
                                    <?php echo esc_html(get_the_date()); ?>
                                </span>
                                <span class="category">
                                    <?php the_category(', '); ?>
                                </span>
                                <span class="reading-time">
                                    <?php
                                    $content = get_the_content();
                                    $word_count = str_word_count($content);
                                    $reading_time = ceil($word_count / 200);
                                    ?>
                                    <?php printf(esc_html__('%d min read', 'dr-alipour'), $reading_time); ?>
                                </span>
                            </div>

                            <?php if (has_post_thumbnail()): ?>
                                <div class="post-thumbnail mb-8 rounded-lg overflow-hidden shadow-lg">
                                    <?php the_post_thumbnail('large', array('class' => 'w-full h-auto')); ?>
                                </div>
                            <?php endif; ?>
                        </header>

                        <div class="entry-content prose prose-lg max-w-none">
                            <?php the_content(); ?>
                        </div>

                        <!-- Tags -->
                        <?php
                        $tags = get_the_tags();
                        if ($tags) {
                        ?>
                            <div class="post-tags mt-8 pt-8 border-t border-gray-200">
                                <h3 class="text-base font-semibold mb-4"><?php esc_html_e('Tags:', 'dr-alipour'); ?></h3>
                                <div class="flex flex-wrap gap-2">
                                    <?php
                                    foreach ($tags as $tag) {
                                        echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="inline-block px-3 py-1 bg-gray-200 text-gray-800 rounded-full text-sm hover:bg-primary hover:text-white transition-colors">';
                                        echo esc_html($tag->name);
                                        echo '</a>';
                                    }
                                    ?>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                        <!-- Author Bio -->
                        <div class="author-bio mt-12 pt-8 border-t border-gray-200 bg-gray-50 rounded-lg p-6">
                            <div class="flex gap-4">
                                <div class="author-avatar flex-shrink-0">
                                    <?php echo get_avatar(get_the_author_meta('ID'), 80, '', '', array('class' => 'rounded-full')); ?>
                                </div>
                                <div>
                                    <h3 class="heading-3 text-base mb-2">
                                        <?php the_author_posts_link(); ?>
                                    </h3>
                                    <p class="text-gray-700">
                                        <?php echo wp_kses_post(get_the_author_meta('description')); ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </article>

                    <!-- Navigation -->
                    <nav class="post-navigation my-12 flex justify-between gap-4">
                        <div class="prev-post">
                            <?php
                            $prev_post = get_previous_post();
                            if ($prev_post) {
                            ?>
                                <a href="<?php echo esc_url(get_permalink($prev_post)); ?>" class="btn btn-outline">
                                    <?php esc_html_e('← Previous Post', 'dr-alipour'); ?>
                                </a>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="next-post">
                            <?php
                            $next_post = get_next_post();
                            if ($next_post) {
                            ?>
                                <a href="<?php echo esc_url(get_permalink($next_post)); ?>" class="btn btn-outline">
                                    <?php esc_html_e('Next Post →', 'dr-alipour'); ?>
                                </a>
                            <?php
                            }
                            ?>
                        </div>
                    </nav>

                    <!-- Comments -->
                    <div class="comments-section mt-12 pt-8 border-t border-gray-200">
                        <?php comments_template(); ?>
                    </div>

                <?php
                }
            } else {
                ?>
                <div class="card card-body text-center py-12">
                    <h2 class="heading-2 mb-4"><?php esc_html_e('Post Not Found', 'dr-alipour'); ?></h2>
                    <a href="<?php echo esc_url(home_url('/blog')); ?>" class="btn btn-primary">
                        <?php esc_html_e('Back to Blog', 'dr-alipour'); ?>
                    </a>
                </div>
            <?php
            }
            ?>
        </div>

        <!-- Sidebar -->
        <aside class="sidebar lg:col-span-1">
            <!-- Search Widget -->
            <div class="card card-body mb-8">
                <h3 class="heading-3 text-base mb-4"><?php esc_html_e('Search', 'dr-alipour'); ?></h3>
                <?php get_search_form(); ?>
            </div>

            <!-- Recent Posts -->
            <div class="card card-body mb-8">
                <h3 class="heading-3 text-base mb-4"><?php esc_html_e('Recent Posts', 'dr-alipour'); ?></h3>
                <?php
                $recent_posts = get_posts(array(
                    'posts_per_page' => 5,
                    'post__not_in'   => array(get_the_ID()),
                ));

                if ($recent_posts) {
                    echo '<ul class="space-y-3">';
                    foreach ($recent_posts as $post) {
                        setup_postdata($post);
                ?>
                        <li>
                            <a href="<?php the_permalink(); ?>" class="link text-sm hover:underline">
                                <?php the_title(); ?>
                            </a>
                            <div class="text-xs text-gray-500"><?php the_date(); ?></div>
                        </li>
                <?php
                    }
                    echo '</ul>';
                    wp_reset_postdata();
                }
                ?>
            </div>

            <!-- Categories -->
            <div class="card card-body mb-8">
                <h3 class="heading-3 text-base mb-4"><?php esc_html_e('Categories', 'dr-alipour'); ?></h3>
                <ul class="space-y-2">
                    <?php
                    wp_list_categories(array(
                        'title_li' => '',
                        'walker'   => new Walker_Category_Simplified(),
                    ));
                    ?>
                </ul>
            </div>
        </aside>
    </div>
</main>

<?php
get_footer();
