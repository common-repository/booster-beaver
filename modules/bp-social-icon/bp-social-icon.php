<?php

namespace BP_BB;

use FLBuilder;

/**
 * @class Social Icons
 */
class SocialIcon extends \BP_BB\ModuleBase {
	/**
	 * Constructor function for the module. You must pass the
	 * name, description, dir and url in an array to the parent class.
	 *
	 * @method __construct
	 */
	public function __construct() {
		parent::__construct( array(
			'name'            => __( 'Social Icon', 'bp-bb' ),
			'description'     => __( 'A module to display Space.', 'bp-bb' ),
			'group'           => 'Beaver Booster',
			'category'        => __( 'Advance Modules', 'bp-bb' ),
			'dir'             => BP_BB_MODULE_PATH . '/bp-social-icon/',
			'url'             => BP_BB_MODULE_URL . '/bp-social-icon/',
			'editor_export'   => true, // Defaults to true and can be omitted.
			'enabled'         => true, // Defaults to true and can be omitted.
			'partial_refresh' => true,
			'icon'            => 'share-alt2.svg',
		) );
		$this->add_css( 'font-awesome' );
	}
}

FLBuilder::register_module( '\BP_BB\SocialIcon', array(
	'content' => array(
		'title'    => __( 'Content', 'bp-bb' ),
		'sections' => array(
			'social_icons' => array(
				'title'  => __( 'Social Icons', 'bp-bb' ),
				'fields' => array(
					'social_icon_list' => array(
						'label'        => __( 'Social Icon', 'bp-bb' ),
						'type'         => 'form',
						'form'         => 'icons',
						'preview_text' => 'icon',
						'multiple'     => true,

					),
					'icon_view'            => array(
						'label'   => __( 'View', 'bp-bb' ),
						'type'    => 'button-group',
						'default' => 'stacked',
						'options' => array(
							'default'  => __( 'Default', 'bp-bb' ),
							'stacked' => __( 'Stacked', 'bp-bb' ),
							'framed'  => __( 'Framed', 'bp-bb' ),
						),
						'toggle'  => array(
							'stacked' => array(
								'fields' => array(
									'social_icon_border_radius',
									'icon_shape',
									'social_icon_background_color',
									'social_icon_background_hover_color',
									'icon_background_color'
								),
							),
							'framed'   => array(
								'fields' => array(
									'social_icon_border_style',
									'social_icon_border_color',
									'social_icon_border_width',
									'social_icon_border_radius',
									'icon_shape',
									'social_icon_background_color',
									'social_icon_background_hover_color'
								)
							)
						),
					),
					'icon_shape'            => array(
						'label'   => __( 'Shape', 'bp-bb' ),
						'type'    => 'button-group',
						'default' => 'square',
						'options' => array(
							'square'  => __( 'Square', 'bp-bb' ),
							'rounded' => __( 'Rounded', 'bp-bb' ),
							'circle'  => __( 'Circle', 'bp-bb' ),
						),
					),
					'icon_align'            => array(
						'label'      => __( 'Alignment', 'bp-bb' ),
						'type'       => 'align',
						'default'    => 'center',
						'values'   =>  array(
							'left'      => 'flex-start',
							'center'    => 'center',
							'right'     => 'flex-end',
                        ),
						'preview'    => array(
							'type'     => 'css',
                            'rules' =>  array(
                                array(
                                    'selector'  =>  '{node} .bp-social-icon-wrapper.bp-social-icon-horizontal .bp-icons',
                                    'property'  =>  'justify-content'
                                ),
                                array(
                                    'selector'  =>  '{node} .bp-social-icon-wrapper.bp-social-icon-vertical .bp-icons',
                                    'property'  =>  'align-items'
                                ),
                            ),
						),
					),
					'icon_structure'   => array(
						'label'   => __( 'Icon Structure', 'bp-bb' ),
						'type'    => 'button-group',
						'default' => 'horizontal',
						'options' => array(
							'horizontal' => __( 'Horizontal', 'bp-bb' ),
							'vertical'   => __( 'Vertical', 'bp-bb' ),
						)
					),

				),

			),
		),
	),
	'style'   => array(
		'title'    => __( 'Style', 'bp-bb' ),
		'sections' => array(
			'social_icon_style' => array(
				'title'  => __( 'Icon Style', 'bp-bb' ),
				'fields' => array_merge(
					array(
						'social_icon_spacing' => array(
							'label'   => __( 'Icon Spacing', 'bp-bb' ),
							'type'    => 'unit',
							'default' => '5',
							'sanitize' => 'absint',
							'slider'  => true,
							'responsive'=>  true,
							'units'   => array(
								'px'
							),
							'preview' => array(
								'type'     => 'css',
								'rules' =>  array(
								    array(
                                        'selector' => '.bp-social-icon-wrapper.bp-social-icon-horizontal .bp-icon-block',
                                        'property' => 'margin-right',
                                    ),
                                    array(
                                        'selector' => '.bp-social-icon-wrapper.bp-social-icon-vertical .bp-icon-block',
                                        'property' => 'margin-bottom',
                                    ),
                                ),

							),
						),
					),
					Helper::instance()->bp_icon_style( [
						'name'                          => 'social',
						'label'                         => '',
						'selector'                      => '.bp-social-icon-wrapper .bp-icon',
						'default_icon_color'            => '6ec1e4',
						'default_icon_background_color' => 'fff',
					] )
				)
			),
		),
	),
) );
FLBuilder::register_settings_form( 'icons', array(
	'title' => __( 'Select Icon', 'bp-bb' ),
	'tabs'  => array(
		'general' => array(
			'title'    => __( 'General', 'bp-bb' ),
			'sections' => array(
				'general' => array(
					'title'  => '',
					'fields' => array(
						'icon' => array(
							'type'        => 'icon',
							'label'       => __( 'Icon', 'bp-bb' ),
							'default'     => "fab fa-facebook-f",
							'show_remove' => true,
						),
						'link' => array(
							'label'   => __( 'Link', 'bp-bb' ),
							'type'    => 'link',
							'default' => '#',
							'connections'   => array( 'url' ),
						),
					)
				),
			)
		),
		'style'   => array(
			'title'    => __( 'Style', 'bp-bb' ),
			'sections' => array(
				'general' => array(
					'title'  => '',
					'fields' => array(
						'icon_color'                  => array(
							'label'      => __( 'Primary Color', 'bp-bb' ),
							'type'       => 'color',
							'connections'   => array( 'color' ),
							'show_reset' => true,
							'show_alpha' => true,
						),
						'icon_hover_color'            => array(
							'label'      => __( 'Primary Hover Color', 'bp-bb' ),
							'type'       => 'color',
							'connections'   => array( 'color' ),
							'show_reset' => true,
							'show_alpha' => true,
						),
						'icon_background_color'       => array(
							'label'      => __( 'Secondary Color', 'bp-bb' ),
							'type'       => 'color',
							'connections'   => array( 'color' ),
							'show_reset' => true,
							'show_alpha' => true,
							'help'       => "It'll not work in default Icon type."
						),
						'icon_background_hover_color' => array(
							'label'      => __( 'Secondary Hover Color', 'bp-bb' ),
							'type'       => 'color',
							'connections'   => array( 'color' ),
							'show_reset' => true,
							'show_alpha' => true,
							'help'       => "It'll no work in default Icon type."
						),

					)
				),
			)
		)
	)
) );