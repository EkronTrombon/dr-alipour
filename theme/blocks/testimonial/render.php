<?php

/**
 * Testimonial Block Template
 *
 * @package dr-alipour
 */

if (! defined('ABSPATH')) {
    exit;
}

$quote = get_field('testimonial_quote');
$author = get_field('testimonial_author');
$rating = get_field('testimonial_rating');
?>

<div class="testimonial-block bg-white border-l-4 border-primary rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 p-6 my-6">
    <div class="testimonial-quote mb-4">
        <?php if ($quote) : ?>
            <blockquote class="text-lg italic text-gray-700 line-height-normal">
                "<?php echo wp_kses_post($quote); ?>"
            </blockquote>
        <?php endif; ?>
    </div>

    <div class="testimonial-author flex items-center justify-between">
        <div>
            <?php if ($author) : ?>
                <p class="author-name text-base font-semibold text-gray-900">
                    <?php echo esc_html($author); ?>
                </p>
            <?php endif; ?>
        </div>

        <?php if ($rating) : ?>
            <div class="testimonial-rating text-yellow-400 text-xl">
                <?php
                for ($i = 1; $i <= 5; $i++) {
                    echo ($i <= $rating) ? '★' : '☆';
                }
                ?>
            </div>
        <?php endif; ?>
    </div>
</div>