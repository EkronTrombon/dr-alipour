<?php

/**
 * Template Name: About
 * Template Post Type: page
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
    <section class="relative py-16 sm:py-24 bg-gradient-to-r from-secondary to-secondary-dark text-white">
        <div class="container-page">
            <div class="max-w-3xl">
                <h1 class="heading-1 text-white mb-4">
                    <?php
                    if (have_posts()) {
                        the_post();
                        the_title();
                    }
                    ?>
                </h1>
            </div>
        </div>
    </section>

    <!-- About Content -->
    <section class="py-16 sm:py-24 bg-white">
        <div class="container-page">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div class="prose prose-lg max-w-none">
                    <?php
                    if (have_posts()) {
                        the_post();
                        the_content();
                    }
                    wp_reset_postdata();
                    ?>
                </div>

                <!-- About Image -->
                <div class="rounded-lg overflow-hidden shadow-xl">
                    <?php
                    if (have_posts()) {
                        rewind_posts();
                        the_post();
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('large', array('class' => 'w-full h-auto'));
                        } else {
                            echo '<div class="bg-gray-200 w-full h-96"></div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Credentials & Expertise -->
    <section class="py-16 sm:py-24 bg-gray-50">
        <div class="container-page">
            <h2 class="heading-2 text-center mb-12"><?php esc_html_e('Education & Credentials', 'dr-alipour'); ?></h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Credential 1 -->
                <div class="card card-body text-center">
                    <div class="text-4xl font-bold text-primary mb-4">1</div>
                    <h3 class="heading-3 text-lg mb-3"><?php esc_html_e('PhD in Psychology', 'dr-alipour'); ?></h3>
                    <p class="text-gray-600"><?php esc_html_e('Advanced degree with specialization in clinical psychology', 'dr-alipour'); ?></p>
                </div>

                <!-- Credential 2 -->
                <div class="card card-body text-center">
                    <div class="text-4xl font-bold text-primary mb-4">15+</div>
                    <h3 class="heading-3 text-lg mb-3"><?php esc_html_e('Years Experience', 'dr-alipour'); ?></h3>
                    <p class="text-gray-600"><?php esc_html_e('Extensive clinical practice with diverse populations', 'dr-alipour'); ?></p>
                </div>

                <!-- Credential 3 -->
                <div class="card card-body text-center">
                    <div class="text-4xl font-bold text-primary mb-4">500+</div>
                    <h3 class="heading-3 text-lg mb-3"><?php esc_html_e('Clients Served', 'dr-alipour'); ?></h3>
                    <p class="text-gray-600"><?php esc_html_e('Helping individuals achieve meaningful growth and wellness', 'dr-alipour'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Specializations -->
    <section class="py-16 sm:py-24 bg-white">
        <div class="container-page">
            <h2 class="heading-2 text-center mb-12"><?php esc_html_e('Areas of Specialization', 'dr-alipour'); ?></h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <?php
                // Output ACF repeater or basic structure
                $specializations = array(
                    'Anxiety & Stress Management',
                    'Depression Treatment',
                    'Relationship Coaching',
                    'Life Transitions',
                    'Personal Development',
                    'Career Counseling',
                );

                foreach ($specializations as $spec) {
                ?>
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-10 w-10 rounded-md bg-primary text-white">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900"><?php echo esc_html($spec); ?></h3>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 sm:py-24 bg-gray-50">
        <div class="container-page">
            <h2 class="heading-2 text-center mb-12"><?php esc_html_e('What Clients Say', 'dr-alipour'); ?></h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php
                // Sample testimonials
                for ($i = 1; $i <= 3; $i++) {
                ?>
                    <div class="card shadow-none border border-gray-200 p-6">
                        <div class="flex gap-1 mb-4">
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                        </div>
                        <p class="text-gray-700 mb-4 italic">
                            "Working with Dr. Alipour was transformative. The supportive approach and practical insights made a real difference in my life."
                        </p>
                        <p class="font-semibold"><?php printf(esc_html__('Client %d', 'dr-alipour'), $i); ?></p>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 sm:py-24 bg-gradient-to-r from-primary to-primary-dark text-white">
        <div class="container-page text-center">
            <h2 class="heading-2 text-white mb-6"><?php esc_html_e('Ready to Start Your Journey?', 'dr-alipour'); ?></h2>
            <p class="text-lg mb-8 text-white text-opacity-90"><?php esc_html_e('Schedule a consultation today and let\'s explore how I can help.', 'dr-alipour'); ?></p>
            <a href="<?php echo esc_url(home_url('contact')); ?>" class="btn bg-white text-primary hover:bg-gray-100">
                <?php esc_html_e('Get in Touch', 'dr-alipour'); ?>
            </a>
        </div>
    </section>
</main>

<?php
get_footer();
