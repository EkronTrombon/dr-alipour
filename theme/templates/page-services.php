<?php

/**
 * Template Name: Services
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
    <section class="relative py-16 sm:py-24 bg-gradient-to-r from-primary to-primary-dark text-white">
        <div class="container-page relative z-10">
            <div class="max-w-3xl">
                <h1 class="heading-1 text-white mb-4">
                    <?php
                    if (have_posts()) {
                        the_post();
                        the_title();
                    }
                    ?>
                </h1>
                <p class="heading-3 text-white text-opacity-90">
                    <?php echo wp_kses_post(get_the_excerpt()); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-16 sm:py-24 bg-white">
        <div class="container-page">
            <div class="mb-12 text-center">
                <h2 class="heading-2 mb-4"><?php esc_html_e('Our Offerings', 'dr-alipour'); ?></h2>
                <p class="text-body text-gray-600 max-w-2xl mx-auto">
                    <?php esc_html_e('Comprehensive mental health and coaching services tailored to your needs.', 'dr-alipour'); ?>
                </p>
            </div>

            <!-- Service Blocks from ACF -->
            <div class="space-y-8">
                <?php
                if (have_posts()) {
                    the_post();
                    the_content();
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 sm:py-24 bg-gray-50">
        <div class="container-page">
            <div class="max-w-3xl mx-auto card bg-white p-8 sm:p-12 text-center">
                <h2 class="heading-2 mb-4"><?php esc_html_e('Ready to Begin Your Journey?', 'dr-alipour'); ?></h2>
                <p class="text-body text-gray-600 mb-8">
                    <?php esc_html_e('Schedule a consultation and discover how our services can help you achieve your goals.', 'dr-alipour'); ?>
                </p>
                <a href="#contact" class="btn btn-primary">
                    <?php esc_html_e('Schedule Consultation', 'dr-alipour'); ?>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 sm:py-24 bg-white">
        <div class="container-page">
            <div class="max-w-3xl mx-auto">
                <h2 class="heading-2 text-center mb-12"><?php esc_html_e('frequently Asked Questions', 'dr-alipour'); ?></h2>

                <div x-data="{ active: null }" class="space-y-4">
                    <!-- FAQ Item 1 -->
                    <div class="border border-gray-300 rounded-lg overflow-hidden">
                        <button
                            @click="active = active === 1 ? null : 1"
                            class="w-full px-6 py-4 bg-gray-50 font-semibold text-left hover:bg-gray-100 transition-colors flex items-center justify-between">
                            <span><?php esc_html_e('How do I schedule an appointment?', 'dr-alipour'); ?></span>
                            <span class="text-primary">
                                <svg x-show="active !== 1" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                                <svg x-show="active === 1" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7"></path>
                                </svg>
                            </span>
                        </button>
                        <div x-show="active === 1" class="px-6 py-4 bg-white border-t border-gray-200">
                            <p class="text-gray-700">
                                <?php esc_html_e('You can schedule appointments directly through our website using Calendly or by contacting our office.', 'dr-alipour'); ?>
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="border border-gray-300 rounded-lg overflow-hidden">
                        <button
                            @click="active = active === 2 ? null : 2"
                            class="w-full px-6 py-4 bg-gray-50 font-semibold text-left hover:bg-gray-100 transition-colors flex items-center justify-between">
                            <span><?php esc_html_e('What should I expect in my first session?', 'dr-alipour'); ?></span>
                            <span class="text-primary">
                                <svg x-show="active !== 2" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                                <svg x-show="active === 2" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7"></path>
                                </svg>
                            </span>
                        </button>
                        <div x-show="active === 2" class="px-6 py-4 bg-white border-t border-gray-200">
                            <p class="text-gray-700">
                                <?php esc_html_e('Your first session is a consultation where we discuss your goals, history, and how we can work together effectively.', 'dr-alipour'); ?>
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="border border-gray-300 rounded-lg overflow-hidden">
                        <button
                            @click="active = active === 3 ? null : 3"
                            class="w-full px-6 py-4 bg-gray-50 font-semibold text-left hover:bg-gray-100 transition-colors flex items-center justify-between">
                            <span><?php esc_html_e('Is my information confidential?', 'dr-alipour'); ?></span>
                            <span class="text-primary">
                                <svg x-show="active !== 3" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                                <svg x-show="active === 3" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7 7 7"></path>
                                </svg>
                            </span>
                        </button>
                        <div x-show="active === 3" class="px-6 py-4 bg-white border-t border-gray-200">
                            <p class="text-gray-700">
                                <?php esc_html_e('Yes, all client information is kept confidential in accordance with professional ethics standards and applicable laws.', 'dr-alipour'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
