<?php

/**
 * Home/Front Page Template
 *
 * @package dr-alipour
 */

if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="main-content" class="main-content">
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center py-16 sm:py-24 bg-gradient-to-r from-primary via-primary-dark to-primary text-white overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full mix-blend-multiply filter blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full mix-blend-multiply filter blur-3xl animation-delay-2000"></div>
        </div>

        <div class="container-page relative z-10">
            <div class="max-w-3xl">
                <h1 class="heading-1 text-white mb-6">
                    <?php esc_html_e('Transform Your Life Today', 'dr-alipour'); ?>
                </h1>
                <p class="text-xl text-white text-opacity-90 mb-8 leading-normal">
                    <?php esc_html_e('Expert psychology and personal coaching tailored to help you overcome challenges, build resilience, and achieve your goals.', 'dr-alipour'); ?>
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn bg-white text-primary hover:bg-gray-100">
                        <?php esc_html_e('Schedule Consultation', 'dr-alipour'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn border-2 border-white text-white hover:bg-white hover:text-primary">
                        <?php esc_html_e('Learn More', 'dr-alipour'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Highlights Section -->
    <section class="py-16 sm:py-24 bg-white">
        <div class="container-page">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Highlight 1 -->
                <div class="text-center">
                    <div class="text-5xl font-bold text-primary mb-4">15+</div>
                    <h3 class="heading-3 text-lg mb-2"><?php esc_html_e('Years Experience', 'dr-alipour'); ?></h3>
                    <p class="text-gray-600"><?php esc_html_e('Dedicated to helping clients achieve meaningful change', 'dr-alipour'); ?></p>
                </div>

                <!-- Highlight 2 -->
                <div class="text-center">
                    <div class="text-5xl font-bold text-primary mb-4">500+</div>
                    <h3 class="heading-3 text-lg mb-2"><?php esc_html_e('Clients Served', 'dr-alipour'); ?></h3>
                    <p class="text-gray-600"><?php esc_html_e('Transforming lives through professional psychology and coaching', 'dr-alipour'); ?></p>
                </div>

                <!-- Highlight 3 -->
                <div class="text-center">
                    <div class="text-5xl font-bold text-primary mb-4">100%</div>
                    <h3 class="heading-3 text-lg mb-2"><?php esc_html_e('Confidential', 'dr-alipour'); ?></h3>
                    <p class="text-gray-600"><?php esc_html_e('Your privacy and trust are paramount in all interactions', 'dr-alipour'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Preview -->
    <section class="py-16 sm:py-24 bg-gray-50">
        <div class="container-page">
            <div class="text-center mb-12">
                <h2 class="heading-2 mb-4"><?php esc_html_e('Our Services', 'dr-alipour'); ?></h2>
                <p class="text-body text-gray-600 max-w-2xl mx-auto">
                    <?php esc_html_e('Comprehensive mental health and personal development services to support your journey.', 'dr-alipour'); ?>
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="card card-body hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12 10V6"></path>
                        </svg>
                    </div>
                    <h3 class="heading-3 text-lg mb-3"><?php esc_html_e('Individual Therapy', 'dr-alipour'); ?></h3>
                    <p class="text-gray-600">
                        <?php esc_html_e('One-on-one counseling sessions addressing your specific challenges and goals.', 'dr-alipour'); ?>
                    </p>
                </div>

                <!-- Service 2 -->
                <div class="card card-body hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                        </svg>
                    </div>
                    <h3 class="heading-3 text-lg mb-3"><?php esc_html_e('Coaching', 'dr-alipour'); ?></h3>
                    <p class="text-gray-600">
                        <?php esc_html_e('Professional coaching to help you reach your personal and professional potential.', 'dr-alipour'); ?>
                    </p>
                </div>

                <!-- Service 3 -->
                <div class="card card-body hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="heading-3 text-lg mb-3"><?php esc_html_e('Personal Development', 'dr-alipour'); ?></h3>
                    <p class="text-gray-600">
                        <?php esc_html_e('Workshops and resources to support your growth and personal transformation.', 'dr-alipour'); ?>
                    </p>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-primary">
                    <?php esc_html_e('View All Services', 'dr-alipour'); ?>
                </a>
            </div>
        </div>
    </section>

    <!-- Recent Blog Posts -->
    <section class="py-16 sm:py-24 bg-white">
        <div class="container-page">
            <div class="text-center mb-12">
                <h2 class="heading-2 mb-4"><?php esc_html_e('Latest Insights', 'dr-alipour'); ?></h2>
                <p class="text-body text-gray-600 max-w-2xl mx-auto">
                    <?php esc_html_e('Read our latest articles and insights on mental health and personal growth.', 'dr-alipour'); ?>
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <?php
                $recent_posts = get_posts(array(
                    'posts_per_page' => 3,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                ));

                if ($recent_posts) {
                    foreach ($recent_posts as $post) {
                        setup_postdata($post);
                ?>
                        <article class="card overflow-hidden flex flex-col hover:shadow-lg transition-shadow">
                            <?php if (has_post_thumbnail()): ?>
                                <div class="relative h-48 overflow-hidden bg-gray-200">
                                    <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover')); ?>
                                </div>
                            <?php endif; ?>

                            <div class="card-body flex-grow flex flex-col">
                                <h3 class="heading-3 text-lg mb-3">
                                    <a href="<?php the_permalink(); ?>" class="link hover:underline">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <div class="text-sm text-gray-600 mb-4">
                                    <?php echo esc_html(get_the_date('M j, Y')); ?>
                                </div>

                                <p class="text-gray-600 mb-6 flex-grow">
                                    <?php the_excerpt(); ?>
                                </p>

                                <a href="<?php the_permalink(); ?>" class="btn btn-primary text-sm">
                                    <?php esc_html_e('Read More', 'dr-alipour'); ?> →
                                </a>
                            </div>
                        </article>

                <?php
                    }
                    wp_reset_postdata();
                }
                ?>
            </div>

            <div class="text-center">
                <a href="<?php echo esc_url(home_url('/blog')); ?>" class="btn btn-outline">
                    <?php esc_html_e('View All Articles', 'dr-alipour'); ?>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 sm:py-24 bg-gray-50">
        <div class="container-page">
            <h2 class="heading-2 text-center mb-12"><?php esc_html_e('What Clients Say', 'dr-alipour'); ?></h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php
                for ($i = 1; $i <= 3; $i++) {
                ?>
                    <div class="card card-body">
                        <div class="flex gap-1 mb-4">
                            <span class="text-yellow-400">★★★★★</span>
                        </div>
                        <p class="text-gray-700 mb-6 italic">
                            "Working with Dr. Alipour was truly transformative. The personalized approach and genuine care made all the difference in my life."
                        </p>
                        <div>
                            <p class="font-semibold"><?php printf(esc_html__('Client %d', 'dr-alipour'), $i); ?></p>
                            <p class="text-sm text-gray-600"><?php esc_html_e('Verified Client', 'dr-alipour'); ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 sm:py-24 bg-gradient-to-r from-primary to-primary-dark text-white">
        <div class="container-page text-center">
            <h2 class="heading-2 text-white mb-6"><?php esc_html_e('Ready to Start Your Transformation?', 'dr-alipour'); ?></h2>
            <p class="text-lg text-white text-opacity-90 mb-8 max-w-2xl mx-auto">
                <?php esc_html_e('Schedule your first consultation today at no obligation. Together, we\'ll explore how to support your growth and wellbeing.', 'dr-alipour'); ?>
            </p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn bg-white text-primary hover:bg-gray-100">
                <?php esc_html_e('Schedule Now', 'dr-alipour'); ?>
            </a>
        </div>
    </section>
</main>

<?php
get_footer();
