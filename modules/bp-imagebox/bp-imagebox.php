<?php

namespace BP_BB;

//use FLBuilderModule;
use FLBuilder;

/**
 * @class FlipBox
 */
class BP_ImageBox extends \BP_BB\ModuleBase {

	/**
	 * Constructor function for the module. You must pass the
	 * name, description, dir and url in an array to the parent class.
	 *
	 * @method __construct
	 */

	public function __construct() {

		parent::__construct( array(
			'name'            => __( 'Image Box', 'bp-bb' ),
			'description'     => __( 'A module to display imagermation with image.', 'bp-bb' ),
			'group'           => 'Beaver Booster',
			'category'        => __( 'Advance Modules', 'bp-bb' ),
			'dir'             => BP_BB_MODULE_PATH . '/bp-imagebox/',
			'url'             => BP_BB_MODULE_URL . '/bp-imagebox/',
			'editor_export'   => true, // Defaults to true and can be omitted.
			'enabled'         => true, // Defaults to true and can be omitted.
			'partial_refresh' => true,
			'image'            => 'image.svg',

		) );
		$this->add_css( 'font-awesome' );
	}
}

/**
 * Register the module and its form settings.
 */

FLBuilder::register_module( '\BP_BB\BP_ImageBox', array(
	'general' => array(
		'title'    => __( 'General', 'bp-bb' ),
		'sections' => array(
			'image_img'                  => array(
				'title'  => __( 'Image', 'wts-box' ),
				'fields' => array(
				    'img'   =>   array(
				        'label'         =>  __('Image' , 'bp-bb'),
                        'type'          =>  'photo',
                        'show_remove'   =>  true,
                        'connections' => array( 'photo' ),
                    ),
                    'img_position' =>  array(
                        'label'     =>  __('Image Position' , 'li-bb'),
                        'type'      =>  'button-group',
                        'options'   =>  array(
                            'left'  =>  __('Left' , 'bp-bb'),
                            'top'   =>  __('Top' , 'bp-bb'),
                            'right' =>  __('Right' , 'bp-bb')
                        ),
                        'default'   =>  'top',
                        'toggle'    =>  array(
                            'top'   =>  [
                                'fields'    =>  [],
                                'sections'  =>  [],
                            ],
                            'left'   =>  [
                                'fields'    =>  ['vertical_content_align'],
                                'sections'  =>  [],
                            ],
                            'right'   =>  [
                                'fields'    =>  ['vertical_content_align'],
                                'sections'  =>  [],
                            ],
                        ),
                    )

                )
            ),

			'image_title'                 => array(
				'title'  => __( 'Title', 'bp-bb' ),
				'fields' => array(

					'image_title' => array(
						'label'       => __( 'Text', 'bp-bb' ),
						'type'        => 'text',
						'default'     => 'This is the Title',
						'preview'     => array(
							'type'     => 'text',
							'selector' => '.bp-image-box-title',
						),
						'connections' => array( 'string' ),
					)
				),
			),
			'image_content'           => array(
				'title'  => __( 'Content', 'bp-bb' ),
				'fields' => array(
				    'image_content' => array(
						'label'         => __( 'Content', 'bp-bb' ),
						'type'          => 'textarea',
						'default'       => 'Add some nice text here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.',
						'media_buttons' => false,
						'rows'          => '4',
						'wpautop'       => false,
						'preview'       => array(
							'type'     => 'text',
							'selector' => '.bp-image-box-content',
						),
                        'connections'   => array( 'string' ),
					),
				),
			),
            'action_button'              => array(
                'title'  => __( 'Action Button', 'bp-bb' ),
                'fields' => array_merge(
                    Helper::instance()->bp_button( [
                        'name'     => 'action',
                        'label'    => '',
                        'selector' => '{node} .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .action-button-wrapper .action-button',
                    ] )

                ),
            ),



		),
	),
	'style'   => array(
		'title'    => __( 'Style', 'bp-bb' ),
		'sections' => array(
		    'img_style'        => array(
                'title'  => __( 'Image Style', 'bp-bb' ),
                'fields' => array(
                    'image_size' =>  array(
                        'label'         =>  __('Size' , 'li-bb'),
                        'type'          =>  'unit',
                        'responsive'    =>  true,
                        'slider'     => array(
                            'px' => array(
                                'min'  => 0,
                                'max'  => 500,
                                'step' => 1,
                            ),
                            '%' =>  array(
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ),
                        ),
                        'units'         =>  [
                            'px',
                            '%'
                        ],
                        'default'       =>  150,
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'rules'     =>  array(
                                array(
                                    'selector'   =>  '{node} .bp-imagebox-wrapper.img-pos-left .bp-imagebox .bp-imagebox-image-wrapper img',
                                    'property'   =>  'width',

                                ),
                                array(
                                    'selector'   =>  '{node} .bp-imagebox-wrapper.img-pos-right .bp-imagebox .bp-imagebox-image-wrapper img',
                                    'property'   =>  'width',
                                ),
                                array(
                                    'selector'   =>  '{node} .bp-imagebox-wrapper.img-pos-top .bp-imagebox .bp-imagebox-image-wrapper img',
                                    'property'   =>  'width',
                                ),
                            ),
                        ),
                    ),
                    'img_spacing' =>  array(
                        'label'         =>  __('Spacing' , 'li-bb'),
                        'type'          =>  'unit',
                        'responsive'    =>  true,
                        'slider'        =>  true,
                        'default'       =>  15,
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'rules'     =>  array(
                               array(
                                   'selector'   =>  '{node} .bp-imagebox-wrapper.img-pos-left .bp-imagebox .bp-imagebox-image-wrapper',
                                   'property'   =>  'margin-right',
                                   'unit'       =>  'px'
                               ),
                                array(
                                    'selector'   =>  '{node} .bp-imagebox-wrapper.img-pos-right .bp-imagebox .bp-imagebox-image-wrapper',
                                    'property'   =>  'margin-left',
                                    'unit'       =>  'px'
                                ),
                                array(
                                    'selector'   =>  '{node} .bp-imagebox-wrapper.img-pos-top .bp-imagebox .bp-imagebox-image-wrapper',
                                    'property'   =>  'margin-bottom',
                                    'unit'       =>  'px'
                                ),
                            ),
                        ),
                    ),
                    'img_border_radius' =>  array(
                        'label'         =>  __('Radius' , 'li-bb'),
                        'type'          =>  'unit',
                        'units'         =>  array(
                            'px',
                            '%'
                        ),
                        'slider'     => array(
                            'px' => array(
                                'min'  => 0,
                                'max'  => 200,
                                'step' => 1,
                            ),
                            '%' =>  array(
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ),
                        ),
                        'responsive'    =>  true,
                        'default'       =>  '',
                        'preview'       =>  array(
                            'type'          =>  'css',
                            'selector'      =>  '{node} .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-image-wrapper img',
                            'property'      =>  'border-radius',
                        ),
                    ),
                )
            ),
            'image_title_style'       => array(
                'title'     =>  __('Title' , 'bp-bb'),
                'fields'    =>  array(
                    'image_title_color'  =>  array(
                        'label'         =>  __('Color' , 'bp-bb'),
                        'type'          =>  'color',
                        'show_alpha'    =>  true,
                        'show_reset'    =>  true,
                        'default'       =>  '',
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .bp-image-box-title',
                            'property'      =>  'color',
                        ),
                    ),
                    'image_title_typography'  =>  array(
                        'label'         =>  __('Typography' , 'bp-bb'),
                        'type'          =>  'typography',
                        'responsive'    =>  true,
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .bp-image-box-title',
                            'property'      =>  'color',
                        ),
                    ),

                    'image_title_color_hover'  =>  array(
                        'label'         =>  __('Color Hover' , 'bp-bb'),
                        'type'          =>  'color',
                        'show_alpha'    =>  true,
                        'show_reset'    =>  true,
                        'default'       =>  '',
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .bp-image-box-title:hover',
                            'property'      =>  'color',
                        ),
                    ),

                    'image_title_padding' => array(
                        'type'       => 'dimension',
                        'label'      => __( 'Padding', 'bp-bb' ),
                        'responsive' => true,
                        'default'   =>  '',
                        'units' =>  array(
                            'px',
                        ),
                        'preview'    => array(
                            'type'     => 'css',
                            'selector' => '{node} .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .bp-image-box-title',
                            'property'  =>  'padding',
                            'unit'  =>  'px'
                        ),
                    ),

                    'image_title_margin' => array(
                        'type'       => 'dimension',
                        'label'      => __( 'Margin', 'bp-bb' ),
                        'responsive' => true,
                        'default'   =>  10,
                        'units' =>  array(
                            'px',
                        ),
                        'preview'    => array(
                            'type'     => 'css',
                            'selector' => '{node} .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .bp-image-box-title',
                            'property'  =>  'margin',
                            'unit'  =>  'px'
                        ),
                    ),
                ),
            ),

            'image_description_style'       => array(
                'title'     =>  __('Content' , 'bp-bb'),
                'fields'    =>  array(
                    'image_description_color'  =>  array(
                        'label'         =>  __('Color' , 'bp-bb'),
                        'type'          =>  'color',
                        'show_alpha'    =>  true,
                        'show_reset'    =>  true,
                        'default'       =>  '',
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .bp-image-box-content',
                            'property'      =>  'color',
                        ),
                    ),
                    'image_description_typography'  =>  array(
                        'label'         =>  __('Typography' , 'bp-bb'),
                        'type'          =>  'typography',
                        'responsive'    =>  true,
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .bp-image-box-content',
                            'property'      =>  'color',
                        ),
                    ),
                    'image_description_color_hover'  =>  array(
                        'label'         =>  __('Color Hover' , 'bp-bb'),
                        'type'          =>  'color',
                        'show_alpha'    =>  true,
                        'show_reset'    =>  true,
                        'default'       =>  '',
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .bp-image-box-content:hover',
                            'property'      =>  'color',
                        ),
                    ),
                    'image_description_padding' => array(
                        'type'       => 'dimension',
                        'label'      => __( 'Padding', 'bp-bb' ),
                        'responsive' => true,
                        'default'   =>  '',
                        'units' =>  array(
                            'px',
                        ),
                        'preview'    => array(
                            'type'     => 'css',
                            'selector' => '{node} .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .bp-image-box-content',
                            'property'  =>  'padding',
                            'unit'  =>  'px'
                        ),
                    ),

                    'image_description_margin' => array(
                        'type'       => 'dimension',
                        'label'      => __( 'Margin', 'bp-bb' ),
                        'responsive' => true,
                        'default'   =>  10,
                        'units' =>  array(
                            'px',
                        ),
                        'preview'    => array(
                            'type'     => 'css',
                            'selector' => '{node} .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .bp-image-box-content',
                            'property'  =>  'margin',
                            'unit'  =>  'px'
                        ),
                    ),
                ),
            ),
            'action_button_style'        => array(
                'title'  => __( 'Action Button Style', 'bp-bb' ),
                'fields' => array_merge(
                    Helper::instance()->bp_button_style( [
                        'name'     => 'action',
                        'label'    => '',
                        'selector' => '{node} .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .action-button-wrapper',
                        'button_align_style' => false,
                        'default_button_color'=> 'ffffff'
                    ] ),
                    array(
                        'action_button_margin' => array(
                            'type'       => 'dimension',
                            'label'      => __( 'Margin', 'bp-bb' ),
                            'responsive' => true,
                            'default'   =>  10,
                            'units' =>  array(
                                'px',
                            ),
                            'preview'    => array(
                                'type'     => 'css',
                                'selector' => '{node} .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .action-button-wrapper',
                                'property'  =>  'margin',
                                'unit'  =>  'px'
                            ),
                        ),
                    )
                ),
            ),
            'imagebox_style' =>  array(
                'title'     =>  __('Box' , 'bp-bb'),
                'fields'    =>  array(
                    'content_align' =>  array(
                        'type'      =>  'align',
                        'label'     =>  __('Align' , 'bp-bb'),
                        'default'   =>  '',
                        'preview'   =>  array(
                            'type'       =>  'css',
                            'rules'      =>   array(
                                array(
                                    'selector'   =>  '{node} .bp-imagebox-wrapper.img-pos-top .bp-imagebox',
                                    'property'   =>  'text-align'
                                ),
                                array(
                                    'selector'   =>  '{node} .bp-imagebox-wrapper.img-pos-left .bp-imagebox .bp-imagebox-content-wrapper',
                                    'property'   =>  'text-align'
                                ),
                                array(
                                    'selector'   =>  '{node} .bp-imagebox-wrapper.img-pos-right .bp-imagebox .bp-imagebox-content-wrapper',
                                    'property'   =>  'text-align'
                                )
                            ),

                        ),
                    ),
                    'vertical_content_align' =>  array(
                        'type'      =>  'align',
                        'label'     =>  __('Vertical Align' , 'bp-bb'),
                        'default'   =>  'center',
                        'values'    => array(
                            'left'      => 'flex-start',
                            'center'    => 'center',
                            'right'     => 'flex-end',
                        ),
                        'preview'   =>  array(
                            'type'       =>  'css',
                            'rules'     =>  array(
                                array(
                                    'selector'   =>  '{node} .bp-imagebox-wrapper.img-pos-left .bp-imagebox',
                                    'property'   =>  'align-items'
                                ),
                                array(
                                    'selector'   =>  '{node} .bp-imagebox-wrapper.img-pos-right .bp-imagebox',
                                    'property'   =>  'align-items'
                                ),
                            ),
                        ),
                    ),
                    'imagebox_background'    =>  array(
                        'label'     =>  __('Background' , 'li-bb'),
                        'type'      =>  'button-group',
                        'options'   =>  array(
                            'color'     =>  __('Color' , 'bp-bb'),
                            'gradient'  =>  __('Gradient' , 'bp-bb'),
                            'image'     =>  __('Image' , 'bp-bb'),
                        ),
                        'default'   =>  'color',
                        'toggle'    =>  [
                            'color' =>  array(
                                'fields'    =>  ['imagebox_bg_color' , 'imagebox_bg_color_hover'],

                            ),
                            'gradient' =>  array(
                                'fields'    =>  ['imagebox_bg_gradient' , 'imagebox_bg_gradient_hover'],

                            ),
                            'image' =>  array(
                                'fields'      =>    ['imagebox_bg_overlay' , 'imagebox_bg_overlay_hover' , 'imagebox_bg_photo' , 'imagebox_bg_photo_size' , 'imagebox_bg_photo_position' , 'imagebox_bg_photo_repeat'],
                                'section'     =>    ['imagebox_bg_img'],
                            ),
                        ],
                    ),
                    'imagebox_bg_color'  =>  array(
                        'label'     =>  __('Background Color' , 'li-bb'),
                        'type'          =>  'color',
                        'show_alpha'    =>  true,
                        'show_reset'    =>  true,
                        'default'       =>  '',
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-imagebox-wrapper .bp-imagebox',
                            'property'      =>  'background-color',
                        ),
                    ),
                    'imagebox_bg_color_hover'  =>  array(
                        'label'     =>  __('Background Color Hover' , 'li-bb'),
                        'type'          =>  'color',
                        'show_alpha'    =>  true,
                        'show_reset'    =>  true,
                        'default'       =>  '',
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-imagebox-wrapper .bp-imagebox:hover',
                            'property'      =>  'background-color',
                        ),
                    ),
                    'imagebox_bg_gradient'  =>  array(
                        'label'     =>  __('Background Color' , 'li-bb'),
                        'type'          =>  'gradient',
                        'show_alpha'    =>  true,
                        'show_reset'    =>  true,
                        'default'       =>  '',
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-imagebox-wrapper .bp-imagebox ',
                            'property'      =>  'background-image',
                        ),
                    ),
                    'imagebox_bg_gradient_hover'  =>  array(
                        'label'     =>  __('Background Color Hover' , 'li-bb'),
                        'type'          =>  'gradient',
                        'show_alpha'    =>  true,
                        'show_reset'    =>  true,
                        'default'       =>  '',
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-imagebox-wrapper .bp-imagebox:hover',
                            'property'      =>  'background-image',
                        ),
                    ),
                    'imagebox_bg_photo'  =>  array(
                        'label'     =>  __('Background Color' , 'li-bb'),
                        'type'          =>  'photo',
                        'show_remove'    =>  true,
                        'default'       =>  '',
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-imagebox-wrapper .bp-imagebox',
                            'property'      =>  'background-image',
                        ),
                    ),
                    'imagebox_bg_photo_size'       => array(
                        'label'   => __( 'Background Size', 'li-bb' ),
                        'type'    => 'select',
                        'default' => 'cover',
                        'options' => array(
                            ''        => __( 'Auto', 'li-bb' ),
                            'contain' => __( 'Contain', 'li-bb' ),
                            'cover'   => __( 'Cover', 'li-bb' ),
                        ),
                        'preview' => array(
                            'type'     => 'css',
                            'selector'  =>  '{node} .bp-imagebox-wrapper .bp-imagebox',
                            'property' => 'background-size',
                        ),
                    ),
                    'imagebox_bg_photo_position'   => array(
                        'label'   => __( 'Background Position', 'li-bb' ),
                        'type'    => 'select',
                        'default' => 'center center',
                        'options' => array(
                            ''              => __( 'Default', 'li-bb' ),
                            'top left'      => __( 'Top Left', 'li-bb' ),
                            'top center'    => __( 'Top Center', 'li-bb' ),
                            'top right'     => __( 'Top Center', 'li-bb' ),
                            'center top'    => __( 'Center left', 'li-bb' ),
                            'center center' => __( 'Center Center', 'li-bb' ),
                            'center right'  => __( 'Center Right', 'li-bb' ),
                            'bottom left'   => __( 'Bottom Left', 'li-bb' ),
                            'bottom right'  => __( 'Bottom Right', 'li-bb' ),
                            'bottom center' => __( 'Bottom Center', 'li-bb' ),
                        ),
                        'preview' => array(
                            'type'     => 'css',
                            'selector'  =>  '{node} .bp-imagebox-wrapper .bp-imagebox',
                            'property' => 'background-position',
                        ),
                    ),
                    'imagebox_bg_photo_repeat'     => array(
                        'label'   => __( 'Background Repeat', 'li-bb' ),
                        'type'    => 'select',
                        'default' => 'no-repeat',
                        'options' => array(
                            ''          => __( 'Default', 'li-bb' ),
                            'no-repeat' => __( 'No-repeat', 'li-bb' ),
                            'repeat'    => __( 'Repeat', 'li-bb' ),
                            'repeat-x'  => __( 'Repeat-x', 'li-bb' ),
                            'repeat-y'  => __( 'Repeat-y', 'li-bb' ),
                        ),
                        'preview' => array(
                            'type'     => 'css',
                            'selector'  =>  '{node} .bp-imagebox-wrapper .bp-imagebox',
                            'property' => 'background-repeat',
                        ),
                    ),
                    'imagebox_bg_overlay'    =>  array(
                        'label'     =>  __('Overlay Color' , 'li-bb'),
                        'type'          =>  'color',
                        'show_alpha'    =>  true,
                        'show_reset'    =>  true,
                        'default'       =>  '',
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-overlay',
                            'property'      =>  'background-color',
                        ),
                    ),
                    'imagebox_bg_overlay_hover'    =>  array(
                        'label'     =>  __('Overlay Color Hover' , 'li-bb'),
                        'type'          =>  'color',
                        'show_alpha'    =>  true,
                        'show_reset'    =>  true,
                        'default'       =>  '',
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-imagebox-wrapper .bp-imagebox:hover .bp-imagebox-overlay',
                            'property'      =>  'background-color',
                        ),
                    ),

                    'imagebox_padding' => array(
                        'type'       => 'dimension',
                        'label'      => __( 'Padding', 'bp-bb' ),
                        'responsive' => true,
                        'default'   =>  10,
                        'units' =>  array(
                            'px',
                        ),
                        'preview'    => array(
                            'type'     => 'css',
                            'selector' => '{node} .bp-imagebox-wrapper .bp-imagebox',
                            'property'  =>  'padding',
                            'unit'  =>  'px'
                        ),
                    ),

                    'imagebox_border' => array(
                        'type'       => 'border',
                        'label'      => __( 'Border', 'bp-bb' ),
                        'responsive' => true,
                        'units' =>  array(
                            'px',
                        ),
                        'default'    => array(
                            'style' => 'solid',
                            'color' => 'e5e5e5',
                            'width' => array(
                                'top'    => '1',
                                'right'  => '1',
                                'bottom' => '1',
                                'left'   => '1',
                            ),
                        ),
                        'preview'    => array(
                            'type'     => 'css',
                            'selector' => '{node} .bp-imagebox-wrapper .bp-imagebox',
                        ),
                    ),

                    'imagebox_border_hover' => array(
                        'type'       => 'border',
                        'label'      => __( 'Border Hover', 'bp-bb' ),
                        'responsive' => true,
                        'units' =>  array(
                            'px',
                        ),
                        'preview'    => array(
                            'type'     => 'css',
                            'selector' => '{node} .bp-imagebox-wrapper .bp-imagebox:hover',
                        ),
                    ),


                ),
            ),
		),
	),

) );
?>