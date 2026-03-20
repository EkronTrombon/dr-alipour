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
    style="background-image: url('<?php echo esc_url(content_url('uploads/2026/03/Dr_Alipour_Home_Hero_Desktop.png')); ?>');"
>
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
                <?php esc_html_e('Contact Us', 'dr-alipour'); ?>
            </a>
            <a href="tel:+13109999999" class="btn btn-outline-white">
                <?php esc_html_e('Call at', 'dr-alipour'); ?>
            </a>
        </div>
    </div>
</section>
