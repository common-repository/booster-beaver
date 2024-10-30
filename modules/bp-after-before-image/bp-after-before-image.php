<?php

namespace BP_BB;

//use FLBuilderModule;
use FLBuilder;

/**
 * @Class ImageCompare
 **/
class AfterBefore_Image extends \BP_BB\ModuleBase {
	/**
	 * Constructor function for the module. You must pass the
	 * name, description, dir and url in an array to the parent class.
	 *
	 * @method __construct
	 */

	public function __construct() {
		parent::__construct( array(
			'name'            => __( 'Before / After Image', 'bp-bb' ),
			'description'     => __( 'A module to Compare Image.', 'bp-bb' ),
			'group'           => 'Beaver Booster',
			'category'        => __( 'Advance Modules', 'bp-bb' ),
			'dir'             => BP_BB_MODULE_PATH . '/bp-after-before-image/',
			'url'             => BP_BB_MODULE_URL . '/bp-after-before-image/',
			'editor_export'   => true, // Defaults to true and can be omitted.
			'enabled'         => true, // Defaults to true and can be omitted.
			'partial_refresh' => true,
			'icon'            => 'icon.svg',
		) );
		$this->add_css( 'font-awesome' );
		$this->add_js( 'imagesloaded');

	}

}

FLBuilder::register_module( '\BP_BB\AfterBefore_Image', array(
	'content' => array(
		'title'    => __( 'Content', 'bp-bb' ),
		'sections' => array(
			'title' => array(
				'title'  => __( 'General', 'bp-bb' ),
				'fields' => array(
					'compare_style'   => array(
						'label'   => __( 'Compare Style', 'bp-bb' ),
						'type'    => 'button-group',
						'default' => 'horizontal',
						'options' => array(
							'horizontal' => __( 'Horizontal', 'bp-bb' ),
							'vertical'   => __( 'Vertical', 'bp-bb' )
						),
						'toggle'  => array(
							'horizontal' => array(
								'fields' => array( 'position_horizontal' ),
							),
							'vertical'   => array(
								'fields' => array( 'position_vertical' )
							)
						),
					),
					'before_image'    => array(
						'label'       => __( 'Before Image', 'bp-bb' ),
						'type'        => 'photo',
						'show_remove' => true,
						'connections'   => array( 'photo' ),
						'help'        => 'Both Image dimension must be same'
					),
					'after_image'     => array(
						'label'       => __( 'After Image', 'bp-bb' ),
						'type'        => 'photo',
						'show_remove' => true,
						'connections'   => array( 'photo' ),
						'help'        => 'Both Image dimension must be same'
					),
					'slider_icon'     => array(
						'label'       => __( 'Icon', 'bp-bb' ),
						'type'        => 'icon',
						'default'     => 'dashicons dashicons-before dashicons-leftright',
						'show_remove' => true,
					),

					'before_text'     => array(
						'label'       => __( 'Before Text', 'bp-bb' ),
						'type'        => 'text',
						'default'     => 'Before',
						'connections'   => array( 'string' ),
						'placeholder' => 'Enter text',
						'preview'     => array(
							'type'     => 'text',
							'selector' => '.bp-img-comp-container .bp-text-before',
						),
					),
					'after_text'      => array(
						'label'       => __( 'After Text', 'bp-bb' ),
						'type'        => 'text',
						'connections'   => array( 'string' ),
						'default'     => 'After',
						'placeholder' => 'Enter text',
						'preview'     => array(
							'type'     => 'text',
							'selector' => '.bp-img-comp-container .bp-text-after',
						),
					),
					'slider_position' => array(
						'label'       => __( 'Slider Position', 'bp-bb' ),
						'type'        => 'unit',
						'default'     => 50,
						'sanitize'	  => 'absint',
						'units'       => array(
							'%'
						),
					),
					'icon_position' => array(
						'label'   => __( 'Icon Position', 'bp-bb' ),
						'type'    => 'unit',
						'sanitize'	  => 'absint',
						'responsive'   => array(
							'default' => array(
								'default'    => '50',
								'medium'     => '50',
								'responsive' => '50',
							),
						),
						'units'   => array(
							'%'
						),
					),
				),
			),
		),
	),

	'style' => array(
		'title'    => __( 'Style', 'bp-bb' ),
		'sections' => array(
			'title' => array(
				'title'  => __( 'Icon', 'bp-bb' ),
				'fields' => array(
					'icon_size' => array(
						'label'      => __( 'Size', 'bp-bb' ),
						'type'       => 'unit',
						'units'      => array(
							'px'
						),
						'sanitize'	  => 'absint',
						'default'    => 20,
					),
					'icon_color'          => array(
						'label'      => __( 'Color', 'bp-bb' ),
						'type'       => 'color',
						'connections'	=> array( 'color' ),
						'show_reset' => true,
						'show_alpha' => true,
                        'default'    => 'fff',
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-img-comp-slider .bp-slider-icon',
                            'property'  =>  'color',
                            'important' => true,
                        ),
					),
					'icon_background_color'        => array(
						'label'      => __( 'Background Color', 'bp-bb' ),
						'type'       => 'color',
						'show_reset' => true,
						'show_alpha' => true,
						'connections'	=> array( 'color' ),
                        'default'    => '2196F3',
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-img-comp-slider',
                            'property'  =>  'background-color',
                        ),
					),
					'icon_radius'    => array(
						'label'   => __( 'Radius', 'bp-bb' ),
						'type'    => 'unit',
						'sanitize'	  => 'absint',
						'units'   => array(
							'%','px'
						),
						'default' => 50,
						'preview'   =>  array(
							'type'  =>  'css',
							'selector'  =>  '.bp-img-comp-slider',
							'property' =>   'border-radius',
						),
					),
					'separator_width'     => array(
						'label'      => __( 'Separator Width', 'bp-bb' ),
						'type'       => 'unit',
						'sanitize'	 => 'absint',
						'units'      => array(
							'px'
						),
						'default'    => 3,
					),
					'separator_color'     => array(
						'label'      => __( 'Separator Color', 'bp-bb' ),
						'type'       => 'color',
						'connections'   => array( 'color' ),
						'show_reset' => true,
						'show_alpha' => true,
                        'default'    => 'fff',
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'rules' =>  array(
                                array(
                                    'selector'  =>  '.mode-vertical .bp-after-image',
                                    'property'  =>  'border-bottom-color',
                                ),
                                array(
                                    'selector'  =>  '.mode-horizontal .bp-after-image',
                                    'property'  =>  'border-right-color',
                                ),
                            ),
                        )

					),
				),
			),
			'label' => array(
				'title'  => __( 'Label', 'bp-bb' ),
				'fields' => array(
					'position_horizontal' => array(
						'label'   => __( 'Position', 'bp-bb' ),
						'type'    => 'button-group',
						'default' => 'top',
						'options' => array(
							'top'    => __( 'Top', 'bp-bb' ),
							'bottom' => __( 'Bottom', 'bp-bb' ),
						),
					),
					'position_vertical'   => array(
						'label'   => __( 'Position', 'bp-bb' ),
						'type'    => 'button-group',
						'default' => 'left',
						'options' => array(
							'left'  => __( 'Left', 'bp-bb' ),
							'right' => __( 'Right', 'bp-bb' ),
							'diagonal' => __( 'Diagonal', 'bp-bb' ),
						),
					),
					
					'label_color'         => array(
						'type'       => 'color',
						'show_reset' => true,
						'show_alpha' => true,
						'connections'   => array( 'color' ),
						'default'    => 'fff',
						'label'      => __( 'Color', 'bp-bb' ),
						'preview'    => array(
							'type'      => 'css',
							'selector'  => '.bp-img-comp-container .bp-text',
							'property'  => 'color',
							'important' => true,
						),
					),

					'label_background_color' => array(
						'label'      => __( 'Background Color', 'bp-bb' ),
						'type'       => 'color',
						'connections'   => array( 'color' ),
						'show_reset' => true,
						'show_alpha' => true,
						'default'    => '2196F3',
						'preview'   =>  array(
							'type'  =>  'css',
							'selector'  =>  '.bp-img-comp-container .bp-text',
							'property'  =>  'background-color',
						),
					),

					'label_typography'    => array(
						'type'       => 'typography',
						'label'      => __( 'Typography', 'bp-bb' ),
						'responsive' => true,
						'preview'    => array(
							'type'      => 'css',
							'selector'  => '.bp-img-comp-container .bp-text',
							'important' => true,
						),
					),

					'label_border'           => array(
						'type'       => 'border',
						'label'      => __( 'Border', 'bp-bb' ),
						'responsive' => true,
						'preview'    => array(
							'type'     => 'css',
							'selector' => '.bp-img-comp-container .bp-text',
						),
					),

					'label_padding'          => array(
						'label'   => __( 'Padding', 'bp-bb' ),
						'type'    => 'dimension',
						'responsive'    =>  true,
						'units'   => array(
							'px'
						),
						'preview' => array(
							'type'     => 'css',
							'selector' => '.bp-img-comp-container .bp-text',
							'property' => 'padding',
						)
					),
					'label_margin'           => array(
						'label'   => __( 'Margin', 'bp-bb' ),
						'type'    => 'dimension',
						'default' => 20,
						'responsive'    =>  true,
						'units'   => array(
							'px'
						),
						'preview' => array(
							'type'     => 'css',
							'selector' => '.bp-img-comp-container .bp-text',
							'property' => 'margin',
						)
					)
				)
			),
		),
	),
) );