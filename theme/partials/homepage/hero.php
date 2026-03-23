<?php

/**
 * Homepage Partial: Hero
 *
 * @package dr-alipour
 */

if (! defined('ABSPATH')) {
    exit;
}

$hero_bg      = get_field('hero_background_image') ?: content_url('uploads/2026/03/Dr_Alipour_Home_Hero_Desktop.png');
$hero_heading = get_field('hero_heading') ?: __('We are fond of working with people to advance their lives', 'dr-alipour');
$hero_sub     = get_field('hero_subheading') ?: __('Center for Creative Transformation', 'dr-alipour');

$raw_opacity   = get_field('hero_overlay_opacity');
$opacity       = ($raw_opacity !== false && $raw_opacity !== '') ? (int) $raw_opacity : 55;
$overlay_color = 'rgba(0,0,0,' . round($opacity / 100, 2) . ')';

$btn1 = get_field('hero_primary_button') ?: [
    'title'  => __('Contact Us', 'dr-alipour'),
    'url'    => home_url('/contact'),
    'target' => '',
];
$btn2 = get_field('hero_secondary_button') ?: [
    'title'  => __('Call Us', 'dr-alipour'),
    'url'    => 'tel:+13109999999',
    'target' => '',
];
?>

<section
    class="relative min-h-screen flex items-center justify-center bg-cover bg-center text-white overflow-hidden"
    style="background-image: url('<?php echo esc_url($hero_bg); ?>');">
    <!-- Dark overlay -->
    <div class="absolute inset-0" style="background-color: <?php echo esc_attr($overlay_color); ?>"></div>

    <div class="relative z-10 text-center container-page py-24">
        <h1 class="heading-1 text-white mb-4 max-w-3xl mx-auto">
            <?php echo esc_html($hero_heading); ?>
        </h1>
        <p class="text-sm font-semibold tracking-widest uppercase text-gray-300 mb-10">
            <?php echo esc_html($hero_sub); ?>
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?php echo esc_url($btn1['url']); ?>"
               class="btn btn-primary"
               <?php if (! empty($btn1['target'])) : ?>target="<?php echo esc_attr($btn1['target']); ?>"<?php endif; ?>>
                <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <?php echo esc_html($btn1['title']); ?>
            </a>
            <a href="<?php echo esc_url($btn2['url']); ?>"
               class="btn btn-outline-white"
               <?php if (! empty($btn2['target'])) : ?>target="<?php echo esc_attr($btn2['target']); ?>"<?php endif; ?>>
                <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                <?php echo esc_html($btn2['title']); ?>
            </a>
        </div>
    </div>
</section>
