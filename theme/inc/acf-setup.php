<?php

/**
 * ACF Field Group Registrations
 *
 * @package dr-alipour
 */

if (! defined('ABSPATH')) {
    exit;
}

/**
 * Register ACF Fields for custom blocks and page sections
 */
function dr_alipour_register_acf_fields()
{
    if (! function_exists('acf_add_local_field_group')) {
        return;
    }

    // -------------------------------------------------------------------------
    // Service block fields
    // -------------------------------------------------------------------------
    acf_add_local_field_group(array(
        'key'      => 'group_service_block',
        'title'    => 'Service Block Fields',
        'fields'   => array(
            array(
                'key'      => 'field_service_title',
                'label'    => 'Service Title',
                'name'     => 'service_title',
                'type'     => 'text',
                'required' => 1,
            ),
            array(
                'key'   => 'field_service_description',
                'label' => 'Description',
                'name'  => 'service_description',
                'type'  => 'textarea',
            ),
            array(
                'key'   => 'field_service_icon',
                'label' => 'Icon',
                'name'  => 'service_icon',
                'type'  => 'image',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/dr-alipour-service',
                ),
            ),
        ),
    ));

    // -------------------------------------------------------------------------
    // Testimonial block fields
    // -------------------------------------------------------------------------
    acf_add_local_field_group(array(
        'key'      => 'group_testimonial_block',
        'title'    => 'Testimonial Block Fields',
        'fields'   => array(
            array(
                'key'      => 'field_testimonial_quote',
                'label'    => 'Quote',
                'name'     => 'testimonial_quote',
                'type'     => 'textarea',
                'required' => 1,
            ),
            array(
                'key'      => 'field_testimonial_author',
                'label'    => 'Author Name',
                'name'     => 'testimonial_author',
                'type'     => 'text',
                'required' => 1,
            ),
            array(
                'key'     => 'field_testimonial_rating',
                'label'   => 'Rating',
                'name'    => 'testimonial_rating',
                'type'    => 'range',
                'min'     => 1,
                'max'     => 5,
                'default' => 5,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/dr-alipour-testimonial',
                ),
            ),
        ),
    ));

    // -------------------------------------------------------------------------
    // Hero section fields (front page)
    // -------------------------------------------------------------------------
    acf_add_local_field_group(array(
        'key'      => 'group_hero_section',
        'title'    => 'Hero Section',
        'fields'   => array(
            array(
                'key'           => 'field_hero_background_image',
                'label'         => 'Background Image',
                'name'          => 'hero_background_image',
                'type'          => 'image',
                'return_format' => 'url',
                'preview_size'  => 'medium',
                'library'       => 'all',
            ),
            array(
                'key'           => 'field_hero_overlay_opacity',
                'label'         => 'Overlay Opacity (%)',
                'name'          => 'hero_overlay_opacity',
                'type'          => 'range',
                'min'           => 0,
                'max'           => 100,
                'step'          => 5,
                'default_value' => 55,
            ),
            array(
                'key'   => 'field_hero_heading',
                'label' => 'Heading',
                'name'  => 'hero_heading',
                'type'  => 'text',
            ),
            array(
                'key'   => 'field_hero_subheading',
                'label' => 'Subheading',
                'name'  => 'hero_subheading',
                'type'  => 'text',
            ),
            array(
                'key'   => 'field_hero_primary_button',
                'label' => 'Primary Button',
                'name'  => 'hero_primary_button',
                'type'  => 'link',
            ),
            array(
                'key'   => 'field_hero_secondary_button',
                'label' => 'Secondary Button',
                'name'  => 'hero_secondary_button',
                'type'  => 'link',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_type',
                    'operator' => '==',
                    'value'    => 'front_page',
                ),
            ),
        ),
    ));
}
add_action('acf/init', 'dr_alipour_register_acf_fields');
