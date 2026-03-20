<?php

/**
 * Home / Front Page Template
 *
 * @package dr-alipour
 */

if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="main-content">
    <?php get_template_part('partials/homepage/hero'); ?>
    <?php get_template_part('partials/homepage/quote-1'); ?>
    <?php get_template_part('partials/homepage/about'); ?>
    <?php get_template_part('partials/homepage/approach'); ?>
    <?php get_template_part('partials/homepage/quote-2'); ?>
    <?php get_template_part('partials/homepage/modalities'); ?>
    <?php get_template_part('partials/homepage/quote-3'); ?>
</main>

<?php get_footer(); ?>
