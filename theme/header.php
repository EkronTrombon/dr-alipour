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

    <header class="site-header sticky top-0 z-50 bg-white shadow-sm">
        <div class="site-header-inner container-page py-4 flex items-center justify-between flex-col sm:flex-row gap-4">
            <div class="site-branding flex items-center gap-4">
                <?php
                if (has_custom_logo()) {
                    echo '<div class="h-12 w-12">';
                    the_custom_logo();
                    echo '</div>';
                }
                ?>
                <div>
                    <h1 class="site-title text-xl sm:text-2xl font-bold">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="text-gray-900 hover:text-primary transition-colors">
                            <?php bloginfo('name'); ?>
                        </a>
                    </h1>
                    <?php
                    $description = get_bloginfo('description', 'display');
                    if ($description) {
                    ?>
                        <p class="site-description text-sm text-gray-600"><?php echo esc_html($description); ?></p>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'fallback_cb'    => false,
                'container'      => 'nav',
                'container_id'   => 'primary-nav',
                'menu_class'     => 'flex flex-col sm:flex-row gap-2 sm:gap-6',
                'link_before'    => '<span class="px-3 py-2 rounded-lg hover:bg-gray-100 transition-colors">',
                'link_after'     => '</span>',
            ));
            ?>
        </div>
    </header>