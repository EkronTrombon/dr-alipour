<?php

/**
 * 404 Not Found Template
 *
 * @package dr-alipour
 */

if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="main-content" class="main-content container-page py-24">
    <div class="max-w-2xl mx-auto text-center">
        <!-- 404 Number -->
        <div class="mb-8">
            <h1 class="text-9xl font-bold text-primary text-opacity-20">404</h1>
        </div>

        <!-- Error Message -->
        <div class="card card-body">
            <h1 class="heading-1 mb-4"><?php esc_html_e('Page Not Found', 'dr-alipour'); ?></h1>

            <p class="text-body text-gray-600 mb-8">
                <?php esc_html_e('Sorry, the page you\'re looking for doesn\'t exist. It might have been moved or deleted.', 'dr-alipour'); ?>
            </p>

            <!-- Navigation Suggestions -->
            <div class="mb-8 p-6 bg-gray-50 rounded-lg">
                <h2 class="heading-3 text-lg mb-4"><?php esc_html_e('Here are some helpful links:', 'dr-alipour'); ?></h2>

                <nav class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo esc_url(home_url()); ?>" class="btn btn-primary">
                        <?php esc_html_e('Home', 'dr-alipour'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn-secondary">
                        <?php esc_html_e('About', 'dr-alipour'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-secondary">
                        <?php esc_html_e('Services', 'dr-alipour'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-secondary">
                        <?php esc_html_e('Contact', 'dr-alipour'); ?>
                    </a>
                </nav>
            </div>

            <!-- Search Form -->
            <div class="mt-8">
                <h3 class="heading-3 text-lg mb-4"><?php esc_html_e('Search the site:', 'dr-alipour'); ?></h3>
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
