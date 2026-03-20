<?php

/**
 * Template Name: Contact
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
        <div class="container-page">
            <h1 class="heading-1 text-white mb-4"><?php esc_html_e('Get in Touch', 'dr-alipour'); ?></h1>
            <p class="text-lg text-white text-opacity-90">
                <?php esc_html_e('Have questions? We\'d love to hear from you. Reach out today.', 'dr-alipour'); ?>
            </p>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="py-16 sm:py-24 bg-white">
        <div class="container-page">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Contact Info -->
                <div class="space-y-8">
                    <!-- Office Hours -->
                    <div class="card card-body">
                        <h3 class="heading-3 text-lg mb-4 flex items-center gap-2">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 2m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <?php esc_html_e('Office Hours', 'dr-alipour'); ?>
                        </h3>
                        <ul class="space-y-2 text-gray-700">
                            <li><strong><?php esc_html_e('Monday - Friday:', 'dr-alipour'); ?></strong> 9:00 AM - 5:00 PM</li>
                            <li><strong><?php esc_html_e('Saturday:', 'dr-alipour'); ?></strong> 10:00 AM - 2:00 PM</li>
                            <li><strong><?php esc_html_e('Sunday:', 'dr-alipour'); ?></strong> <?php esc_html_e('Closed', 'dr-alipour'); ?></li>
                        </ul>
                    </div>

                    <!-- Phone -->
                    <div class="card card-body">
                        <h3 class="heading-3 text-lg mb-4 flex items-center gap-2">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <?php esc_html_e('Phone', 'dr-alipour'); ?>
                        </h3>
                        <p class="text-gray-700">
                            <a href="tel:+1234567890" class="link hover:underline">(123) 456-7890</a>
                        </p>
                    </div>

                    <!-- Email -->
                    <div class="card card-body">
                        <h3 class="heading-3 text-lg mb-4 flex items-center gap-2">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <?php esc_html_e('Email', 'dr-alipour'); ?>
                        </h3>
                        <p class="text-gray-700">
                            <a href="mailto:hello@dralipour.com" class="link hover:underline">hello@dralipour.com</a>
                        </p>
                    </div>

                    <!-- Location -->
                    <div class="card card-body">
                        <h3 class="heading-3 text-lg mb-4 flex items-center gap-2">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <?php esc_html_e('Location', 'dr-alipour'); ?>
                        </h3>
                        <p class="text-gray-700">
                            123 Main Street<br>
                            Your City, State 12345
                        </p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="lg:col-span-2">
                    <div class="card card-body">
                        <h2 class="heading-2 text-2xl mb-6"><?php esc_html_e('Send us a Message', 'dr-alipour'); ?></h2>

                        <?php
                        // Display Gravity Forms contact form
                        if (function_exists('gravity_form')) {
                            // Replace '1' with your Gravity Form ID
                            gravity_form(1, false, false, false, '', true);
                        } else {
                            // Fallback basic form if Gravity Forms not available
                        ?>
                            <form method="POST" action="" class="space-y-6">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                            <?php esc_html_e('Name', 'dr-alipour'); ?>
                                        </label>
                                        <input
                                            type="text"
                                            id="name"
                                            name="name"
                                            required
                                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                                    </div>
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                            <?php esc_html_e('Email', 'dr-alipour'); ?>
                                        </label>
                                        <input
                                            type="email"
                                            id="email"
                                            name="email"
                                            required
                                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                                    </div>
                                </div>

                                <div>
                                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">
                                        <?php esc_html_e('Subject', 'dr-alipour'); ?>
                                    </label>
                                    <input
                                        type="text"
                                        id="subject"
                                        name="subject"
                                        required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                                </div>

                                <div>
                                    <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                                        <?php esc_html_e('Message', 'dr-alipour'); ?>
                                    </label>
                                    <textarea
                                        id="message"
                                        name="message"
                                        rows="6"
                                        required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary resize-none"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary w-full">
                                    <?php esc_html_e('Send Message', 'dr-alipour'); ?>
                                </button>
                            </form>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Calendly Integration Section -->
    <section class="py-16 sm:py-24 bg-gray-50">
        <div class="container-page">
            <h2 class="heading-2 text-center mb-12"><?php esc_html_e('Schedule an Appointment', 'dr-alipour'); ?></h2>

            <div class="max-w-3xl mx-auto">
                <!-- Calendly embed will go here -->
                <div class="bg-white rounded-lg shadow-lg p-8 text-center">
                    <p class="text-gray-600 mb-4">
                        <?php esc_html_e('Use the scheduling tool below to book your consultation:', 'dr-alipour'); ?>
                    </p>
                    <!-- Replace with your Calendly embed code -->
                    <div class="calendly-inline-widget" data-url="https://calendly.com/your-calendar" style="min-width:320px; height:650px;"></div>
                    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
