<?php

/**
 * Header Template
 *
 * @package dr-alipour
 */

if (! defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Top Bar -->
    <div class="bg-primary text-white text-sm py-1.5 text-center">
        <?php esc_html_e('Call us now at', 'dr-alipour'); ?>
        <a href="tel:+13109999999" class="font-semibold hover:underline ml-1">+1 (310) 999-9999</a>
    </div>

    <!-- Header / Navigation -->
    <header class="site-header" x-data="{ open: false }">
        <div class="container-page py-3 flex items-center justify-between">

            <!-- Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex-shrink-0">
                <img
                    src="<?php echo esc_url(content_url('uploads/2026/03/Dr_Alipour_Logo.png')); ?>"
                    alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
                    class="h-14 w-auto"
                >
            </a>

            <!-- Desktop Nav -->
            <?php
            wp_nav_menu(array(
                'theme_location'  => 'primary',
                'fallback_cb'     => false,
                'container'       => 'nav',
                'container_id'    => 'primary-nav',
                'container_class' => 'hidden md:block',
                'menu_class'      => 'primary-menu flex flex-row gap-1 items-center',
                'link_before'     => '<span class="nav-link-inner">',
                'link_after'      => '</span>',
            ));
            ?>

            <!-- Mobile Menu Toggle -->
            <button
                class="md:hidden p-2 text-gray-700 hover:text-primary transition-colors"
                @click="open = !open"
                aria-label="<?php esc_attr_e('Toggle menu', 'dr-alipour'); ?>"
            >
                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="open" x-transition class="md:hidden bg-white border-t border-gray-100 px-5 pb-4">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'fallback_cb'    => false,
                'container'      => false,
                'menu_class'     => 'flex flex-col gap-1',
                'link_before'    => '<span class="block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 rounded-md transition-colors">',
                'link_after'     => '</span>',
            ));
            ?>
        </div>
    </header>
