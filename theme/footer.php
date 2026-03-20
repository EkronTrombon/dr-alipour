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

<footer class="site-footer bg-navy text-white">

    <!-- Main footer content -->
    <div class="container-page py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            <!-- Column 1: Logo -->
            <div>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img
                        src="<?php echo esc_url(content_url('uploads/2026/03/Dr_Alipour_Logo.png')); ?>"
                        alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
                        class="h-14 w-auto brightness-0 invert mb-4"
                    >
                </a>
            </div>

            <!-- Column 2: Quick Links -->
            <div>
                <h3 class="text-base font-bold uppercase tracking-wider text-white mb-4">
                    <?php esc_html_e('Quick Links', 'dr-alipour'); ?>
                </h3>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'fallback_cb'    => false,
                    'container'      => false,
                    'menu_class'     => 'space-y-2',
                    'link_before'    => '<span class="text-gray-300 hover:text-white transition-colors text-sm">',
                    'link_after'     => '</span>',
                ));

                // Fallback if no menu assigned
                if (! has_nav_menu('footer')) :
                ?>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-white transition-colors"><?php esc_html_e('Home', 'dr-alipour'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>" class="hover:text-white transition-colors"><?php esc_html_e('About Us', 'dr-alipour'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/coaching')); ?>" class="hover:text-white transition-colors"><?php esc_html_e('Coaching', 'dr-alipour'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>" class="hover:text-white transition-colors"><?php esc_html_e('Contact Us', 'dr-alipour'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="hover:text-white transition-colors"><?php esc_html_e('Services', 'dr-alipour'); ?></a></li>
                    </ul>
                <?php endif; ?>
            </div>

            <!-- Column 3: Contact Details -->
            <div>
                <h3 class="text-base font-bold uppercase tracking-wider text-white mb-4">
                    <?php esc_html_e('Contact Details', 'dr-alipour'); ?>
                </h3>
                <ul class="space-y-3 text-sm text-gray-300">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 mt-0.5 flex-shrink-0 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <a href="mailto:info@drzarialipourpsychologist.com" class="hover:text-white transition-colors">
                            info@drzarialipourpsychologist.com
                        </a>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 mt-0.5 flex-shrink-0 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>
                            <?php esc_html_e('Hours of Operation', 'dr-alipour'); ?><br>
                            <?php esc_html_e('Monday – Friday 9:00 AM to 6:00 PM', 'dr-alipour'); ?>
                        </span>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <!-- Bottom bar -->
    <div class="border-t border-navy-light py-4 text-center text-xs text-gray-400">
        <div class="container-page">
            <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="hover:text-white transition-colors">
                <?php esc_html_e('Privacy policy', 'dr-alipour'); ?>
            </a>
            <span class="mx-2">&amp;</span>
            <a href="<?php echo esc_url(home_url('/terms')); ?>" class="hover:text-white transition-colors">
                <?php esc_html_e('Term condition', 'dr-alipour'); ?>
            </a>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
</body>

</html>
