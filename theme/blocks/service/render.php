<?php

/**
 * Service Block Template
 *
 * @package dr-alipour
 */

if (! defined('ABSPATH')) {
    exit;
}

$title = get_field('service_title');
$description = get_field('service_description');
$icon = get_field('service_icon');
?>

<div class="service-block bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
    <?php if ($icon) : ?>
        <div class="service-icon mb-6 flex justify-center">
            <?php echo wp_get_attachment_image($icon, 'thumbnail', false, array('class' => 'w-20 h-20 object-contain')); ?>
        </div>
    <?php endif; ?>

    <div class="service-content text-center">
        <?php if ($title) : ?>
            <h3 class="service-title heading-3 mb-4 text-primary">
                <?php echo esc_html($title); ?>
            </h3>
        <?php endif; ?>

        <?php if ($description) : ?>
            <p class="service-description text-body">
                <?php echo wp_kses_post($description); ?>
            </p>
        <?php endif; ?>
    </div>
</div>