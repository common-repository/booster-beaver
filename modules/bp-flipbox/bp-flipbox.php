<?php

namespace BP_BB;

//use FLBuilderModule;
use FLBuilder;

/**
 * @class FlipBox
 */
class FlipBox extends \BP_BB\ModuleBase {

	/**
	 * Constructor function for the module. You must pass the
	 * name, description, dir and url in an array to the parent class.
	 *
	 * @method __construct
	 */

	public function __construct() {

		parent::__construct( array(
			'name'            => __( 'Flip Box', 'bp-bb' ),
			'description'     => __( 'A module to display FlipBox.', 'bp-bb' ),
			'group'           => 'Beaver Booster',
			'category'        => __( 'Advance Modules', 'bp-bb' ),
			'dir'             => BP_BB_MODULE_PATH . '/bp-flipbox/',
			'url'             => BP_BB_MODULE_URL . '/bp-flipbox/',
			'editor_export'   => true, // Defaults to true and can be omitted.
			'enabled'         => true, // Defaults to true and can be omitted.
			'partial_refresh' => true,
			'icon'            => 'icon.svg',

		) );
		$this->add_css( 'font-awesome' );
	}
}

/**
 * Register the module and its form settings.
 */

FLBuilder::register_module( '\BP_BB\FlipBox', array(
	'front_box' => array(
		'title'    => __( 'Front Box', 'bp-bb' ),
		'sections' => array(
			'front_icon'                  => array(
				'title'  => __( 'Icon', 'wts-box' ),
				'fields' => array_merge(
					Helper::instance()->bp_icon( [
						'name'       => 'front_box',
						'label'      => '',
						'icon_align' => false,
					] )

				),
			),
			'front_box_icon_style'        => array(
				'title'  => __( 'Icon Style', 'bp-bb' ),
				'fields' => array_merge(
					Helper::instance()->bp_icon_style( [
						'name'                          => 'front_box',
						'label'                         => '',
						'icon_hover_color'              => false,
						'icon_background_hover_color'   => false,
						'selector'                      => '.bp-flipbox-wrapper .front_box-icon-wrapper .front_box-icon-inner',
						'default_icon_color'            => '#6ec1e4',
						'default_icon_background_color' => 'ffffff',

					] )
				)
			),
			'front_title'                 => array(
				'title'  => __( 'Title', 'bp-bb' ),
				'fields' => array(
					'front_title' => array(
						'label'   => __( 'Title', 'bp-bb' ),
						'type'    => 'button-group',
						'default' => 'enable',
						'options' => array(
							'enable'  => __( 'Enable', 'bp-bb' ),
							'disable' => __( 'Disable', 'bp-bb' ),
						),
						'toggle'  => array(
							'enable' => array(
								'sections' => array( 'front_box_title_style' ),
								'fields'   => array(
									'front_box_title',
									'front_box_title_align'
								),
							),
						),
					),

					'front_box_title' => array(
						'label'       => __( 'Text', 'bp-bb' ),
						'type'        => 'text',
						'default'     => 'Title',
						'preview'     => array(
							'type'     => 'text',
							'selector' => '.front-title',
						),
						'connections' => array( 'string' ),
					)
				),
			),
			'front_box_title_style'       => array(
				'title'  => __( 'Title Style', 'bp-bb' ),
				'fields' => array(
					'front_box_title_color'      => array(
						'type'       => 'color',
						'show_reset' => true,
						'show_alpha' => true,
						'connections'   =>  array('color'),
						'default'    => 'ffffff',
						'label'      => __( 'Color', 'bp-bb' ),
						'preview'    => array(
							'type'      => 'css',
							'selector'  => '.bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-front .front-title',
							'property'  => 'color',
							'important' => true,
						),
					),
					'front_box_title_typography' => array(
						'type'       => 'typography',
						'label'      => __( 'Typography', 'bp-bb' ),
						'responsive' => true,
						'preview'    => array(
							'type'      => 'css',
							'selector'  => '.bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-front .front-title',
							'important' => true,
						),
					),
				)
			),
			'front_description'           => array(
				'title'  => __( 'Description', 'bp-bb' ),
				'fields' => array(
					'front_description'     => array(
						'label'   => __( 'Description', 'bp-bb' ),
						'type'    => 'button-group',
						'default' => 'enable',
						'options' => array(
							'enable'  => __( 'Enable', 'bp-bb' ),
							'disable' => __( 'Disable', 'bp-bb' ),
						),
						'toggle'  => array(
							'enable' => array(
								'sections' => array( 'front_box_description_style' ),
								'fields'   => array(
									'front_box_description'
								),
							),
						),
					),
					'front_box_description' => array(
						'label'         => __( 'Text', 'bp-bb' ),
						'type'          => 'editor',
						'default'       => 'Add some nice text here.',
						'media_buttons' => true,
						'rows'          => '4',
						'wpautop'       => false,
						'preview'       => array(
							'type'     => 'text',
							'selector' => '.front-description',
						),
                        'connections'   => array( 'string' ),
					),
				),
			),
			'front_box_description_style' => array(
				'title'  => __( 'Description Style', 'bp-bb' ),
				'fields' => array(
					'front_box_description_color'      => array(
						'type'       => 'color',
						'show_reset' => true,
						'show_alpha' => true,
						'default'    => 'ffffff',
						'connections'   =>  array('color'),
						'label'      => __( 'Color', 'bp-bb' ),
						'preview'    => array(
							'type'      => 'css',
							'selector'  => '.bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-front .front-description',
							'property'  => 'color',
							'important' => true,
						),
					),
					'front_box_description_typography' => array(
						'type'       => 'typography',
						'label'      => __( 'Typography', 'bp-bb' ),
						'responsive' => true,
						'preview'    => array(
							'type'      => 'css',
							'selector'  => '.bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-front .front-description',
							'important' => true,
						),
					),
				)
			),
			'front_box_style'             => array(
				'title'  => __( 'Box Style', 'bp-bb' ),
				'fields' => array(
					'front_box_align'  => array(
						'label'      => __( 'Alignment', 'bp-bb' ),
						'type'       => 'align',
						'default'    => 'center',
						'responsive' => true,
						'preview'    => array(
							'type'     => 'css',
							'property' => 'text-align',
							'selector' => '.bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-front',

						),
					),
					'front_background' => array(
						'label'   => __( 'Background', 'bp-bb' ),
						'type'    => 'button-group',
						'default' => 'color',
						'options' => array(
							'image'    => __( 'Image', 'bp-bb' ),
							'color'    => __( 'Color', 'bp-bb' ),
							'gradient' => __( 'Gradient', 'bp-bb' ),
						),
						'toggle'  => array(
							'color'    => array(
								'fields' => array( 'front_background_color' ),
							),
							'image'    => array(
								'fields' => array( 'front_background_image'  , 'front_background_overlay_color')
							),
							'gradient' => array(
								'fields' => array( 'front_background_gradient' )
							)
						),


					),

					'front_background_color' => array(
						'label'      => __( 'Background Color', 'bp-bb' ),
						'type'       => 'color',
						'default'    => '1abc9c',
						'show_reset' => true,
						'show_alpha' => true,
                        'connections'   =>  array('color'),
						'preview'    => array(
							'type'     => 'css',
							'selector' => '.bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-front',
							'property' => 'background-color',
						),
					),

					'front_background_image'    => array(
						'label'       => __( 'Background Image', 'bp-bb' ),
						'type'        => 'photo',
                        'connections'   =>  array('photo'),
						'show_remove' => true,
					),
					'front_background_gradient' => array(
						'label'   => __( 'Gradient', 'bp-bb' ),
						'type'    => 'gradient',
						'preview' => array(
							'type'     => 'css',
							'selector' => '.bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-front',
							'property' => 'background-image',
						),
					),
                    'front_background_overlay_color' => array(
                        'label'      => __( 'Overlay Color', 'bp-bb' ),
                        'type'       => 'color',
                        'default'    => '',
                        'show_reset' => true,
                        'show_alpha' => true,
                        'connections'   =>  array('color'),
                        'preview'    => array(
                            'type'     => 'css',
                            'selector' => '.bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-front .bp-flipbox-front-overlay',
                            'property' => 'background-color',
                        ),
                    ),
                    'front_box_padding' => array(
                        'type'       => 'dimension',
                        'label'      => __( 'Padding', 'bp-bb' ),
                        'responsive' => true,
                        'units' =>  array(
                            'px',
                        ),
                        'preview'    => array(
                            'type'     => 'css',
                            'selector' => '.bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-front .bp-flipbox-front-content',
                            'property'  =>  'padding',
                            'unit'  =>  'px'
                        ),
                    ),

				),

			),
		),
	),
	'back_box'  => array(
		'title'    => __( 'Back Box', 'bp-bb' ),
		'sections' => array(
			'back_icon'                  => array(
				'title'  => __( 'Icon', 'wts-box' ),
				'fields' => array_merge(
					Helper::instance()->bp_icon( [
						'name'       => 'back_box',
						'label'      => '',
						'icon_align' => false,
					] )
				)
			),
			'back_box_icon_style'        => array(
				'title'  => __( 'Icon Style', 'bp-bb' ),
				'fields' => array_merge(
					Helper::instance()->bp_icon_style( [
						'name'                          => 'back_box',
						'label'                         => '',
						'selector'                      => '.bp-flipbox-wrapper .bp-flipbox-back .back_box-icon-inner',
						'default_icon_color'            => 'ffffff',
						'default_icon_background_color' => 'rgb(64, 0, 226)',
					] )

				)
			),
			'back_title'                 => array(
				'title'  => __( 'Title', 'bp-bb' ),
				'fields' => array(
					'back_title' => array(
						'label'   => __( 'Title', 'bp-bb' ),
						'type'    => 'button-group',
						'default' => 'enable',
						'options' => array(
							'enable'  => __( 'Enable', 'bp-bb' ),
							'disable' => __( 'Disable', 'bp-bb' ),
						),
						'toggle'  => array(
							'enable' => array(
								'sections' => array( 'back_box_title_style' ),
								'fields'   => array(
									'back_box_title',
									'back_box_title_align'
								),
							),
						),
					),

					'back_box_title' => array(
						'label'   => __( 'Text', 'bp-bb' ),
						'type'    => 'text',
						'default' => 'Back Title',
						'preview' => array(
							'type'     => 'text',
							'selector' => '.back-title',
						),
                        'connections'   =>  array('string'),
					),
				),
			),
			'back_box_title_style'       => array(
				'title'  => __( 'Title Style', 'bp-bb' ),
				'fields' => array(
					'back_box_title_color'      => array(
						'type'       => 'color',
						'show_reset' => true,
						'show_alpha' => true,
						'default'    => 'ffffff',
						'label'      => __( 'Color', 'bp-bb' ),
                        'connections'   =>  array('color'),
						'preview'    => array(
							'type'      => 'css',
							'selector'  => '.bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-back .back-title',
							'property'  => 'color',
							'important' => true,
						),
					),
					'back_box_title_typography' => array(
						'type'       => 'typography',
						'label'      => __( 'Typography', 'bp-bb' ),
						'responsive' => true,
						'preview'    => array(
							'type'      => 'css',
							'selector'  => '.bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-back .back-title',
							'important' => true,
						),
					),
				)
			),
			'back_description'           => array(
				'title'  => __( 'Description', 'bp-bb' ),
				'fields' => array(
					'back_description'     => array(
						'label'   => __( 'Description', 'bp-bb' ),
						'type'    => 'button-group',
						'default' => 'enable',
						'options' => array(
							'enable'  => __( 'Enable', 'bp-bb' ),
							'disable' => __( 'Disable', 'bp-bb' ),
						),

						'toggle'  => array(
							'enable' => array(
								'sections' => array( 'back_box_description_style' ),
								'fields'   => array(
									'back_box_description'
								),
							),
						),
					),
					'back_box_description' => array(
						'label'         => __( 'Text', 'bp-bb' ),
						'type'          => 'editor',
						'default'       => 'Add some nice text here',
						'media_buttons' => true,
                        'connections'   =>  array('string'),
						'rows'          => '4',
						'preview'       => array(
							'type'     => 'text',
							'selector' => '.back-description',
						),
					),
				),
			),
			'back_box_description_style' => array(
				'title'  => __( 'Description Style', 'bp-bb' ),
				'fields' => array(
					'back_box_description_color'      => array(
						'type'       => 'color',
						'show_reset' => true,
						'show_alpha' => true,
                        'connections'   =>  array('color'),
						'default'    => 'ffffff',
						'label'      => __( 'Color', 'bp-bb' ),
						'preview'    => array(
							'type'      => 'css',
							'selector'  => '.bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-back .back-description',
							'property'  => 'color',
							'important' => true,
						),
					),
					'back_box_description_typography' => array(
						'type'       => 'typography',
						'label'      => __( 'Typography', 'bp-bb' ),
						'responsive' => true,
						'preview'    => array(
							'type'      => 'css',
							'selector'  => '.bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-back .back-description',
							'important' => true,
						),
					),
				)
			),
			'action_button'              => array(
				'title'  => __( 'Action Button', 'bp-bb' ),
				'fields' => array_merge(
					Helper::instance()->bp_button( [
						'name'     => 'action',
						'label'    => '',
						'selector' => '.bp-flipbox-wrapper .bp-flipbox-back .action-button-wrapper .action-button',
					] )

				),
			),
			'action_button_style'        => array(
				'title'  => __( 'Action Button Style', 'bp-bb' ),
				'fields' => array_merge(
					Helper::instance()->bp_button_style( [
						'name'     => 'action',
						'label'    => '',
						'selector' => '.bp-flipbox-wrapper .bp-flipbox-back .action-button-wrapper',
						'button_align_style' => false
					] )
				),
			),


			'back_box_style'             => array(
				'title'  => __( 'Box Style', 'bp-bb' ),
				'fields' => array(
					'back_box_align'  => array(
						'label'      => __( 'Alignment', 'bp-bb' ),
						'type'       => 'align',
						'default'    => 'center',
						'responsive' => true,
						'preview'    => array(
							'type'     => 'css',
							'property' => 'text-align',
							'selector' => '.bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-back',

						),
					),
					'back_background' => array(
						'label'   => __( 'Background', 'bp-bb' ),
						'type'    => 'button-group',
						'default' => 'color',
						'options' => array(
							'image'    => __( 'Image', 'bp-bb' ),
							'color'    => __( 'Color', 'bp-bb' ),
							'gradient' => __( 'Gradient', 'bp-bb' )
						),
						'toggle'  => array(
							'color'    => array(
								'fields' => array( 'back_background_color' ),
							),
							'image'    => array(
								'fields' => array( 'back_background_image' , 'back_background_overlay_color')
							),
							'gradient' => array(
								'fields' => array( 'back_background_gradient' )
							),
						),
					),

					'back_background_color' => array(
						'label'      => __( 'Background Color', 'bp-bb' ),
						'type'       => 'color',
						'default'    => '4054b2',
						'show_reset' => true,
						'show_alpha' => true,
                        'connections'   =>  array('color'),
						'preview'    => array(
							'type'     => 'css',
							'selector' => '.bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-back',
							'property' => 'background-color',
						),
					),

					'back_background_image'    => array(
						'label'       => __( 'Background Image', 'bp-bb' ),
						'type'        => 'photo',
                        'connections'   =>  array('photo'),
						'show_remove' => true,
					),

					'back_background_gradient' => array(
						'label'   => __( 'Gradient', 'bp-bb' ),
						'type'    => 'gradient',
						'preview' => array(
							'type'     => 'css',
							'selector' => '.bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-back',
							'property' => 'background-image',
						),
					),
                    'back_background_overlay_color' => array(
                        'label'      => __( 'Overlay Color', 'bp-bb' ),
                        'type'       => 'color',
                        'default'    => '',
                        'show_reset' => true,
                        'show_alpha' => true,
                        'connections'   =>  array('color'),
                        'preview'    => array(
                            'type'     => 'css',
                            'selector' => '.bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-back .bp-flipbox-back-overlay',
                            'property' => 'background-color',
                        ),
                    ),
                    'back_box_padding' => array(
                        'type'       => 'dimension',
                        'label'      => __( 'Padding', 'bp-bb' ),
                        'responsive' => true,
                        'units' =>  array(
                            'px',
                        ),
                        'preview'    => array(
                            'type'     => 'css',
                            'selector' => '.bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-back .bp-flipbox-back-content',
                            'property'  =>  'padding',
                            'unit'  =>  'px'
                        ),
                    ),
				),
			),

		),
	),
	'setting'   => array(
		'title'    => __( 'Settings', 'bp-bb' ),
		'sections' => array(
			'flipbox_general' => array(
				'title'  => __( 'General', 'bp-bb' ),
				'fields' => array(
					'animation_style' => array(
						'label'   => __( 'Animation Style', 'bp-bb' ),
						'type'    => 'select',
						'default' => 'horizontal',
						'options' => array(
							'horizontal' => __( 'Flip Horizontal', 'bp-bb' ),
							'vertical'   => __( 'Flip Vertical', 'bp-bb' ),
							'fade'       => __( 'Fade', 'bp-bb' ),
							'zoom-out'   => __( 'Zoom Out', 'li-bb' ),
							'zoom-in'    => __( 'Zoom In', 'li-bb' ),
						),

						'toggle' => array(
							'vertical' => array(
								'preview' => array(
									'type' => 'css',
								),
							),
						)
					),

					'box_height'     => array(
						'label'      => __( 'Box Height', 'bp-bb' ),
						'type'       => 'unit',
						'units'      => array(
							'px'
						),
						'responsive' => array(
							'default' => array(
								'default'    => '400',
								'medium'     => '450',
								'responsive' => '500',
							),
						),
						'preview'    => array(
							'type'     => 'css',
							'selector' => '.bp-flipbox-wrapper .bp-flipbox-inner',
							'property' => 'height',
							'unit'     => 'px',
						),
					),

					'flipbox_border' => array(
						'type'       => 'border',
						'label'      => __( 'Box Border', 'bp-bb' ),
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
							'selector' => '.bp-flipbox-wrapper .bp-flipbox-inner > div',
						),
					),
				)
			),
		),
	),

) );
?>