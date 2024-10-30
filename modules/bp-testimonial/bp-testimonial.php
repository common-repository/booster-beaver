<?php

namespace BP_BB;

use FLBuilder;

/**
 * @class FlipBox
 */
class Testimonial extends \BP_BB\ModuleBase {

    /**
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */

    public function __construct() {

        parent::__construct( array(
            'name'            => __( 'Testimonial', 'bp-bb' ),
            'description'     => __( 'A module to display Testimonial.', 'bp-bb' ),
            'group'           => 'Beaver Booster',
            'category'        => __( 'Advance Modules', 'bp-bb' ),
            'dir'             => BP_BB_MODULE_PATH . '/bp-testimonial/',
            'url'             => BP_BB_MODULE_URL . '/bp-testimonial/',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => true,
            'icon'            => 'icon.svg',

        ) );
        $this->add_css( 'font-awesome' );
        $this->add_js( 'jquery-masonry' );
    }
}

FLBuilder::register_module( '\BP_BB\Testimonial', array(
    'content'   =>  array(
        'title' =>  __('Content' , 'bp-bb'),
        'sections'  =>  array(
            'layout'    =>  array(
                'title' =>  __('Layout Setting' , 'li-bb'),
                'fields'    =>  array(
                    'skin'  =>  array(
                        'label' =>  __('Skin' , 'bp-bb'),
                        'type'  =>  'select',
                        'default'   =>  'skin1',
                        'options'   =>  array(
                            'skin-1' =>  __('Skin 1' , 'bp-bb'),
                            'skin-2' =>  __('Skin 2' , 'bp-bb'),
                            'skin-3' =>  __('Skin 3' , 'bp-bb'),
                            'skin-4'    =>  __('Skin 4' , 'bp-bb'),
                            'skin-5'    =>  __('Skin 5' , 'bp-bb'),
                        ),
                    ),
                    'columns'    =>  array(
                        'label' =>  __('Column' , 'bp-bb'),
                        'type'  =>  'unit',
                        'responsive'    =>  array(
                            'default'   =>  array(
                                'default'   =>  '3',
                                'medium'    =>  '2',
                                'responsive'    =>  '1',
                            ),
                        ),
                        'sanitize' => 'absint',
                        'slider'    =>  true,
                    ),
                    'masonry_layout'    =>  array(
                        'label' =>  __('Masonry' , 'bp-bb'),
                        'type'  =>  'button-group',
                        'default'   =>  'no',
                        'options'   =>  array(
                            'no'    =>  __('No' , 'bp-bb'),
                            'yes'   =>  __('Yes' , 'bp-bb'),
                        ),
                    ),
                    'gutter'    =>  array(
                        'label' =>  __('Gutter Margin' , 'bp-bb'),
                        'type'  =>  'unit',
                        'responsive'    =>  array(
                            'default'   =>  array(
                                'default'   =>  '10',
                                'medium'    =>  '12',
                                'responsive'    =>  '',
                            ),
                        ),
                        'slider'    =>  true,
                    ),
                )

            ),
            'testimonials'  =>  array(
                'title' =>  __('Testimonials' , 'bp-bb'),
                'fields'    =>  array(
                    'testimonial_list'  =>  array(
                        'label' =>  __('Testimonial' , 'bp-bb'),
                        'type'         => 'form',
                        'form'         => 'testimonials',
                        'preview_text' => 'person_name',
                        'multiple'     => true,
                    ),
                ),
            ),

        ),
    ),
    'style' => array(
        'title' =>  __('Style' , 'bp-bb'),
        'sections'  =>  array(
            'box_style' =>  array(
                'title' =>  __('Box' , 'bp-bb'),
                'fields'    =>  array(
                    'box_background'    =>  array(
                        'type'  =>  'button-group',
                        'label' =>  __('Background' , 'bp-bb'),
                        'default'   =>  'color',
                        'options'    =>  array(
                            'color' =>  __('Color' , 'bp-bb'),
                            'gradient' =>  __('Gradient' , 'bp-bb'),
                        ),
                        'toggle'    =>  array(
                            'color' =>  array(
                                'fields'    =>  array( 'box_background_color'),
                            ),
                            'gradient' =>  array(
                                'fields'    =>  array( 'box_background_gradient'),
                            ),
                        ),
                    ),
                    'box_background_color'    =>  array(
                        'type'  =>  'color',
                        'label' =>  __('Background Color' , 'bp-bb'),
                        'show_reset'    =>  true,
                        'show_alpha'    =>  true,
                        'default'   => '',
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .testimonial-wrapper',
                            'property'  =>  'background-color',
                        ),
                    ),
                    'box_background_gradient'    =>  array(
                        'type'  =>  'gradient',
                        'label' =>  __('Background Gradient' , 'bp-bb'),
                        'default'   => '',
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .testimonial-wrapper',
                            'property'  =>  'background-image',
                        ),
                    ),
                    'box_padding'    =>  array(
                        'label' =>  __('Padding' , 'bp-bb'),
                        'type'  =>  'dimension',
                        'responsive'    =>  true,
                        'units' =>  [
                            '%',
                            'px',
                        ],
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .testimonial-wrapper',
                            'property'  =>  'padding',
                        ),
                    ),
                    'box_border'    =>  array(
                        'label' =>  __('Border', 'bp-bb'),
                        'type'  =>  'border',
                        'units' =>  array('px'),
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .testimonial-wrapper'
                        ),
                    ),
                ),
            ),
            'image_style'   => array(
                'title' =>  __('Image' , 'bp-bb'),
                'fields'    =>  array(
                    'image_size'    =>  array(
                        'label' =>  __('Image Size' , 'bp-bb'),
                        'type' =>   'unit',
                        'responsive'    =>  true,
                        'units' =>  [
                            'px',
                            '%'
                        ],
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .testimonial-wrapper img',
                            'property'  =>  'width',
                        )
                    ),
                    'image_border' =>  array(
                        'label' =>  __('Border' , 'bp-bb'),
                        'type'  =>  'border',
                        'default'   =>  '',
                        'preview'  =>   array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .testimonial-wrapper img',
                        ),
                    ),

                    'image_align' =>  array(
                        'label' =>  __('Alignment' , 'bp-bb'),
                        'type'  =>  'align',
                        'responsive'    =>  true,
                        'default'   =>  'center',
                        'preview'       => array(
                            'type'          => 'css',
                            'selector'      => '.bp-grid-wrapper .testimonial-wrapper .image-wrapper',
                            'property'		=> 'text-align',
                            'important'		=> true,
                        ),
                    ),
                    'image_margin'    =>  array(
                        'label' =>  __('Margin' , 'bp-bb'),
                        'type'  =>  'dimension',
                        'responsive'    =>  true,
                        'units' =>  [
                            '%',
                            'px',
                        ],
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .testimonial-wrapper .image-wrapper',
                            'property'  =>  'margin',
                        ),
                    ),
                ),
            ),
            'message_style'   => array(
                'title' =>  __('Message' , 'bp-bb'),
                'fields'    =>  array(
                    'message_color' =>  array(
                        'label' =>  __('Color' , 'bp-bb'),
                        'type'  =>  'color',
                        'show_reset'    =>  true,
                        'show_alpha'    =>  true,
                        'default'   =>  '',
                        'preview'  =>   array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .testimonial-wrapper .wrapper',
                            'property'  =>  'color'
                        ),
                    ),
                    'message_background_color' =>  array(
                        'label' =>  __('Background Color' , 'bp-bb'),
                        'type'  =>  'color',
                        'show_reset'    =>  true,
                        'show_alpha'    =>  true,
                        'default'   =>  '',
                        'preview'  =>   array(
                            'type'  =>  'css',
                            'rules' =>  array(
                                array(
                                    'selector'  =>  '.bp-grid-wrapper .testimonial-wrapper .wrapper',
                                    'property'  =>  'background-color',
                                ),
                                array(
                                    'selector'  =>  '.bp-grid-wrapper .testimonial-wrapper.skin-1 .arrow',
                                    'property'  =>  'border-top-color',
                                ),
                                array(
                                    'selector'  =>  '.bp-grid-wrapper .testimonial-wrapper.skin-5 .arrow',
                                    'property'  =>  'border-top-color',
                                ),
                            ),
                        ),
                    ),
                    'message_typography'    =>  array(
                        'label' =>  __('Typography' , 'bp-bb'),
                        'type' =>   'typography',
                        'responsive'    =>  true,
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .testimonial-wrapper .wrapper',
                            'important' =>  true,
                        )
                    ),
                    'message_padding'    =>  array(
                        'label' =>  __('Padding' , 'bp-bb'),
                        'type'  =>  'dimension',
                        'responsive'    =>  true,
                        'units' =>  [
                            '%',
                            'px',
                        ],
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .testimonial-wrapper .wrapper',
                            'property'  =>  'padding',
                        ),
                    ),
                    'message_margin'    =>  array(
                        'label' =>  __('Margin' , 'bp-bb'),
                        'type'  =>  'dimension',
                        'responsive'    =>  true,
                        'units' =>  [
                            '%',
                            'px',
                        ],
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .testimonial-wrapper .wrapper',
                            'property'  =>  'margin',
                        ),
                    ),
                ),
            ),
            'name_style'   => array(
                'title' =>  __('Name' , 'bp-bb'),
                'fields'    =>  array(
                    'name_color' =>  array(
                        'label' =>  __('Color' , 'bp-bb'),
                        'type'  =>  'color',
                        'show_reset'    =>  true,
                        'show_alpha'    =>  true,
                        'default'   =>  '',
                        'preview'  =>   array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .testimonial-wrapper .detail-wrapper .title',
                            'property'  =>  'color'
                        ),
                    ),
                    'name_typography'    =>  array(
                        'label' =>  __('Typography' , 'bp-bb'),
                        'type' =>   'typography',
                        'responsive'    =>  true,
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .testimonial-wrapper .detail-wrapper .title',
                            'important' =>  true,
                        )
                    ),
                    'name_margin'    =>  array(
                        'label' =>  __('Margin' , 'bp-bb'),
                        'type'  =>  'dimension',
                        'responsive'    =>  true,
                        'units' =>  [
                            '%',
                            'px',
                        ],
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .testimonial-wrapper .detail-wrapper .title-wrapper',
                            'property'  =>  'margin',
                        ),
                    ),

                ),
            ),
            'company_style'   => array(
                'title' =>  __('Company' , 'bp-bb'),
                'fields'    =>  array(
                    'company_color' =>  array(
                        'label' =>  __('Color' , 'bp-bb'),
                        'type'  =>  'color',
                        'show_reset'    =>  true,
                        'show_alpha'    =>  true,
                        'default'   =>  '',
                        'preview'  =>   array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .testimonial-wrapper .detail-wrapper .company',
                            'property'  =>  'color'
                        ),
                    ),
                    'company_typography'    =>  array(
                        'label' =>  __('Typography' , 'bp-bb'),
                        'type' =>   'typography',
                        'responsive'    =>  true,
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .testimonial-wrapper .detail-wrapper .company',
                            'important' =>  true,
                        )
                    ),
                    'company_margin'    =>  array(
                        'label' =>  __('Margin' , 'bp-bb'),
                        'type'  =>  'dimension',
                        'responsive'    =>  true,
                        'units' =>  [
                            '%',
                            'px',
                        ],
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .testimonial-wrapper .detail-wrapper .company-wrapper',
                            'property'  =>  'margin',
                        ),
                    ),

                ),
            ),
            'rating_style'   => array(
                'title' =>  __('Rating' , 'bp-bb'),
                'fields'    =>  array(
                    'rating_color' =>  array(
                        'label' =>  __('Color' , 'bp-bb'),
                        'type'  =>  'color',
                        'show_reset'    =>  true,
                        'show_alpha'    =>  true,
                        'default'   =>  '',
                        'preview'  =>   array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .testimonial-wrapper .detail-wrapper .rating-wrapper i',
                            'property'  =>  'color'
                        ),
                    ),
                    'rating_size'    =>  array(
                        'label' =>  __('Typography' , 'bp-bb'),
                        'type' =>   'unit',
                        'responsive'    =>  true,
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .testimonial-wrapper .detail-wrapper .rating-wrapper i',
                            'property'  =>  'font-size',
                            'unit'  =>  'px',
                        )
                    ),
                    'rating_align' =>  array(
                        'label' =>  __('Alignment' , 'bp-bb'),
                        'type'  =>  'align',
                        'responsive'    =>  true,
                        'default'   =>  'center',
                        'preview'       => array(
                            'type'          => 'css',
                            'selector'      => '.bp-grid-wrapper .testimonial-wrapper .detail-wrapper .rating-wrapper',
                            'property'		=> 'text-align',
                            'important'		=> true,
                        ),
                    ),
                    'rating_margin'    =>  array(
                        'label' =>  __('Margin' , 'bp-bb'),
                        'type'  =>  'dimension',
                        'responsive'    =>  true,
                        'units' =>  [
                            '%',
                            'px',
                        ],
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .testimonial-wrapper .detail-wrapper .rating-wrapper',
                            'property'  =>  'margin',
                        ),
                    ),
                ),
            ),
        ),
    ),

));
FLBuilder::register_settings_form( 'testimonials', array(
    'title' => __( 'Add Testimonial', 'bp-bb' ),
    'tabs'  => array(
        'general' => array(
            'title'    => __( 'General', 'bp-bb' ),
            'sections' => array(
                'general' => array(
                    'title'  => '',
                    'fields' => array(
                        'person_name' => array(
                            'type'        => 'text',
                            'label'       => __( 'Person ', 'bp-bb' ),
                            'default'     => 'XYZ',
                            'connections'   => array( 'text' ),
                        ),
                        'person_image' => array(
                            'label'   => __( 'Avatar', 'bp-bb' ),
                            'type'    => 'photo',
                            'connections'   => array( 'photo' ),
                            'show_remove'   =>  true,
                        ),
                        'company' => array(
                            'type'        => 'text',
                            'label'       => __( 'Company ', 'bp-bb' ),
                            'default'     => 'Company Name',
                            'connections'   => array( 'text' ),
                        ),
                        'rating'    =>  array(
                            'type'  =>  'text',
                            'label' =>  __('Rating' , 'bp-bb'),
                            'default'   =>  4,
                            'sanitize' => 'absint',
                        ),
                        'message'   =>  array(
                            'type'  =>  'editor',
                            'label' =>  __('Message' , 'bp-bb'),
                            'default'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                            'media_buttons' => true,
                            'wpautop'       => true,
                        ),
                    )
                ),
            )
        ),
    )
) );