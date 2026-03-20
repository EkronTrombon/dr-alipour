<?php

/**
 * Footer Template
 *
 * @package dr-alipour
 */

if (! defined('ABSPATH')) {
    exit;
}
?>

<footer class="site-footer bg-gray-900 text-white py-8 mt-12">
    <div class="site-footer-inner container-page">
        <div class="footer-content flex flex-col gap-4 sm:flex-row sm:justify-between sm:items-center">
            <p class="text-sm text-gray-400">&copy; <?php echo esc_html(date('Y')); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'dr-alipour'); ?></p>

            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'fallback_cb'    => false,
                'container'      => false,
                'menu_class'     => 'flex flex-col sm:flex-row gap-2 sm:gap-6 text-sm',
                'link_before'    => '<span class="hover:text-white transition-colors">',
                'link_after'     => '</span>',
            ));
            ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>