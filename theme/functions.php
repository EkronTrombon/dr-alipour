<?php

/**
 * Dr. Alipour Theme - Theme Functions
 *
 * @package dr-alipour
 * @version 1.0.0
 */

// Prevent direct access
if (! defined('ABSPATH')) {
    exit;
}

/**
 * Define theme constants
 */
define('THEME_DIR', get_template_directory());
define('THEME_URI', get_template_directory_uri());
define('THEME_VERSION', '1.0.0');

/**
 * Theme Setup
 */
function dr_alipour_setup()
{
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'dr-alipour'),
        'footer' => esc_html__('Footer Menu', 'dr-alipour'),
    ));

    // Set up text domain
    load_theme_textdomain('dr-alipour', THEME_DIR . '/languages');
}
add_action('after_setup_theme', 'dr_alipour_setup');

/**
 * Enqueue Styles and Scripts
 */
function dr_alipour_enqueue_scripts()
{
    // Enqueue Google Fonts: Playfair Display + Source Sans 3
    wp_enqueue_style(
        'dr-alipour-fonts',
        'https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;0,800;1,400&family=Nunito+Sans:wght@300;400;600;700&display=swap',
        array(),
        null
    );

    // Enqueue Tailwind CSS (compiled from input.css)
    wp_enqueue_style(
        'dr-alipour-tailwind',
        THEME_URI . '/assets/css/style.css',
        array('dr-alipour-fonts'),
        THEME_VERSION
    );

    // Enqueue Alpine.js
    // Using npm package (recommended for development)
    if (file_exists(THEME_DIR . '/node_modules/alpinejs/dist/cdn.min.js')) {
        wp_enqueue_script(
            'alpinejs',
            THEME_URI . '/node_modules/alpinejs/dist/cdn.min.js',
            array(),
            THEME_VERSION,
            false  // Load in head for proper initialization
        );
    } else {
        // Fallback to CDN if npm modules not installed
        wp_enqueue_script(
            'alpinejs',
            'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js',
            array(),
            '3.13.8',
            false
        );
    }

    // Enqueue theme JS with Alpine dependency
    wp_enqueue_script(
        'dr-alipour-main',
        THEME_URI . '/assets/js/main.js',
        array('alpinejs'),
        THEME_VERSION,
        true
    );

    // Add ACF & theme variables to JS
    wp_localize_script(
        'dr-alipour-main',
        'drAlipourData',
        array(
            'themeUri' => THEME_URI,
            'siteUrl' => site_url(),
            'ajaxUrl' => admin_url('admin-ajax.php'),
        )
    );
}
add_action('wp_enqueue_scripts', 'dr_alipour_enqueue_scripts');

/**
 * Register ACF Blocks
 */
function dr_alipour_register_blocks()
{
    // Service block
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'            => 'dr-alipour/service',
            'title'           => __('Service Item', 'dr-alipour'),
            'description'     => __('Display a service offering', 'dr-alipour'),
            'render_template' => THEME_DIR . '/blocks/service/render.php',
            'category'        => 'dr-alipour',
            'icon'            => 'briefcase',
            'keywords'        => array('service', 'therapy', 'coaching'),
            'supports'        => array(
                'align' => true,
                'mode'  => 'preview',
            ),
        ));

        // Testimonial block
        acf_register_block_type(array(
            'name'            => 'dr-alipour/testimonial',
            'title'           => __('Testimonial', 'dr-alipour'),
            'description'     => __('Display a client testimonial', 'dr-alipour'),
            'render_template' => THEME_DIR . '/blocks/testimonial/render.php',
            'category'        => 'dr-alipour',
            'icon'            => 'format-quote',
            'keywords'        => array('testimonial', 'review', 'quote'),
            'supports'        => array(
                'align' => true,
                'mode'  => 'preview',
            ),
        ));

        // CTA block
        acf_register_block_type(array(
            'name'            => 'dr-alipour/cta',
            'title'           => __('Call to Action', 'dr-alipour'),
            'description'     => __('Display a call to action section', 'dr-alipour'),
            'render_template' => THEME_DIR . '/blocks/cta/render.php',
            'category'        => 'dr-alipour',
            'icon'            => 'format-aside',
            'keywords'        => array('cta', 'button', 'action'),
            'supports'        => array(
                'align' => true,
                'mode'  => 'preview',
            ),
        ));
    }
}
add_action('acf/init', 'dr_alipour_register_blocks');

/**
 * ACF field group registrations (blocks + page sections)
 */
require_once THEME_DIR . '/inc/acf-setup.php';

/**
 * Customize excerpt length
 */
function dr_alipour_excerpt_length($length)
{
    return 25;
}
add_filter('excerpt_length', 'dr_alipour_excerpt_length');

/**
 * Customize excerpt more text
 */
function dr_alipour_excerpt_more($more)
{
    return ' &hellip;';
}
add_filter('excerpt_more', 'dr_alipour_excerpt_more');

/**
 * Register sidebar widgets
 */
function dr_alipour_register_sidebars()
{
    register_sidebar(array(
        'name'          => esc_html__('Blog Sidebar', 'dr-alipour'),
        'id'            => 'blog-sidebar',
        'description'   => esc_html__('Sidebar widgets for blog posts', 'dr-alipour'),
        'before_widget' => '<div id="%1$s" class="card card-body mb-8 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="heading-3 text-base mb-4">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Sidebar', 'dr-alipour'),
        'id'            => 'footer-sidebar',
        'description'   => esc_html__('Sidebar widgets for footer', 'dr-alipour'),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="font-semibold mb-4">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'dr_alipour_register_sidebars');

/**
 * Custom Walker for Categories
 */
class Walker_Category_Simplified extends \Walker_Category
{
    public function start_el(&$output, $category, $depth = 0, $args = null, $id = 0)
    {
        $cat_name = apply_filters('list_cats', $category->name, $category);
        $link = '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="link hover:underline">';
        $link .= $cat_name . '</a>';

        $output .= '<li class="flex justify-between items-center">' . $link;

        if (!empty($args['show_count'])) {
            $output .= ' <span class="text-gray-500 text-sm">(' . $category->count . ')</span>';
        }
    }

    public function end_el(&$output, $category, $depth = 0, $args = null)
    {
        $output .= "</li>\n";
    }
}

/**
 * Custom logo size
 */
function dr_alipour_custom_logo()
{
    $custom_logo_id = get_theme_mod('custom_logo');
    $html = sprintf(
        '<a href="%1$s" class="custom-logo-link" rel="home">%2$s</a>',
        esc_url(home_url('/')),
        wp_get_attachment_image($custom_logo_id, 'thumbnail')
    );
    return $html;
}

/**
 * Remove default WordPress emoji scripts
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/**
 * Add theme support for editor styles
 */
function dr_alipour_add_editor_styles()
{
    add_theme_support('editor-styles');
    add_editor_style('assets/css/editor-style.css');
}
add_action('after_setup_theme', 'dr_alipour_add_editor_styles');
