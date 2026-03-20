<?php

/**
 * Homepage Partial: Hero
 *
 * @package dr-alipour
 */

if (! defined('ABSPATH')) {
    exit;
}
?>

<section
    class="relative min-h-screen flex items-center justify-center bg-cover bg-center text-white overflow-hidden"
    style="background-image: url('<?php echo esc_url(content_url('uploads/2026/03/Dr_Alipour_Home_Hero_Desktop.png')); ?>');">
    <!-- Dark overlay -->
    <div class="absolute inset-0 bg-black/55"></div>

    <div class="relative z-10 text-center container-page py-24">
        <h1 class="heading-1 text-white mb-4 max-w-3xl mx-auto">
            <?php esc_html_e('We are fond of working with people to advance their lives', 'dr-alipour'); ?>
        </h1>
        <p class="text-sm font-semibold tracking-widest uppercase text-gray-300 mb-10">
            <?php esc_html_e('Center for Creative Transformation', 'dr-alipour'); ?>
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">
                <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <?php esc_html_e('Contact Us', 'dr-alipour'); ?>
            </a>
            <a href="tel:+13109999999" class="btn btn-outline-white">
                <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                <?php esc_html_e('Call Us', 'dr-alipour'); ?>
            </a>
        </div>
    </div>
</section>