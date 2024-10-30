<?php

namespace BP_BB;

//use FLBuilderModule;
use FLBuilder;

/**
 * @class FlipBox
 */
class BP_InfoBox extends \BP_BB\ModuleBase {

	/**
	 * Constructor function for the module. You must pass the
	 * name, description, dir and url in an array to the parent class.
	 *
	 * @method __construct
	 */

	public function __construct() {

		parent::__construct( array(
			'name'            => __( 'Info Box', 'bp-bb' ),
			'description'     => __( 'A module to display Information.', 'bp-bb' ),
			'group'           => 'Beaver Booster',
			'category'        => __( 'Advance Modules', 'bp-bb' ),
			'dir'             => BP_BB_MODULE_PATH . '/bp-infobox/',
			'url'             => BP_BB_MODULE_URL . '/bp-infobox/',
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

FLBuilder::register_module( '\BP_BB\BP_InfoBox', array(
	'general' => array(
		'title'    => __( 'General', 'bp-bb' ),
		'sections' => array(
			'info_icon'                  => array(
				'title'  => __( 'Icon', 'wts-box' ),
				'fields' => array_merge(
					Helper::instance()->bp_icon( [
						'name'       => 'info',
						'label'      => '',
						'icon_align' => false,
						'default_icon_type' => 'default',
					] ),
                    array(
                        'info_icon_position' =>  array(
                            'label'     =>  __('Icon Position' , 'li-bb'),
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
			),

			'info_title'                 => array(
				'title'  => __( 'Title', 'bp-bb' ),
				'fields' => array(

					'info_title' => array(
						'label'       => __( 'Text', 'bp-bb' ),
						'type'        => 'text',
						'default'     => 'This is the Title',
						'preview'     => array(
							'type'     => 'text',
							'selector' => '.bp-info-box-title',
						),
						'connections' => array( 'string' ),
					)
				),
			),
			'info_content'           => array(
				'title'  => __( 'Content', 'bp-bb' ),
				'fields' => array(
				    'info_content' => array(
						'label'         => __( 'Content', 'bp-bb' ),
						'type'          => 'textarea',
						'default'       => 'Add some nice text here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.​',
						'media_buttons' => false,
						'rows'          => '4',
						'wpautop'       => false,
						'preview'       => array(
							'type'     => 'text',
							'selector' => '.bp-info-box-content',
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
                        'selector' => '{node} .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .action-button-wrapper .action-button',
                    ] )

                ),
            ),



		),
	),
	'style'   => array(
		'title'    => __( 'Settings', 'bp-bb' ),
		'sections' => array(
		    'info_icon_style'        => array(
                'title'  => __( 'Icon Style', 'bp-bb' ),
                'fields' => array_merge(
                    Helper::instance()->bp_icon_style( [
                        'name'                          => 'info',
                        'label'                         => '',
                        'selector'                      => '{node} .bp-infobox-wrapper .bp-infobox .info-icon-wrapper .info-icon-inner',
                        'default_icon_color'            => '6ec1e4',
                        'default_icon_background_color' => 'ffffff',
	                    'icon_size_default'             => 50,
	                    'icon_padding_default'          => 0.5
                    ] ),
                    array(
                        'info_icon_spacing' =>  array(
                            'label'         =>  __('Spacing' , 'li-bb'),
                            'type'          =>  'unit',
                            'responsive'    =>  true,
                            'slider'        =>  true,
                            'default'       =>  15,
                            'preview'       =>  array(
                                'type'      =>  'css',
                                'rules'     =>  array(
                                   array(
                                       'selector'   =>  '{node} .bp-infobox-wrapper.icon-pos-left .bp-infobox-icon-wrapper',
                                       'property'   =>  'margin-right',
                                       'unit'       =>  'px'
                                   ),
                                    array(
                                        'selector'   =>  '{node} .bp-infobox-wrapper.icon-pos-right .bp-infobox-icon-wrapper',
                                        'property'   =>  'margin-left',
                                        'unit'       =>  'px'
                                    ),
                                    array(
                                        'selector'   =>  '{node} .bp-infobox-wrapper.icon-pos-top .bp-infobox-icon-wrapper',
                                        'property'   =>  'margin-bottom',
                                        'unit'       =>  'px'
                                    ),
                                ),
                            ),
                        )

                    )

                )
            ),
            'info_title_style'       => array(
                'title'     =>  __('Title' , 'bp-bb'),
                'fields'    =>  array(
                    'info_title_color'  =>  array(
                        'label'         =>  __('Color' , 'bp-bb'),
                        'type'          =>  'color',
                        'show_alpha'    =>  true,
                        'show_reset'    =>  true,
                        'default'       =>  '',
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .bp-info-box-title',
                            'property'      =>  'color',
                        ),
                    ),
                    'info_title_typography'  =>  array(
                        'label'         =>  __('Typography' , 'bp-bb'),
                        'type'          =>  'typography',
                        'responsive'    =>  true,
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .bp-info-box-title',
                            'property'      =>  'color',
                        ),
                    ),

                    'info_title_color_hover'  =>  array(
                        'label'         =>  __('Color Hover' , 'bp-bb'),
                        'type'          =>  'color',
                        'show_alpha'    =>  true,
                        'show_reset'    =>  true,
                        'default'       =>  '',
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .bp-info-box-title:hover',
                            'property'      =>  'color',
                        ),
                    ),

                    'info_title_padding' => array(
                        'type'       => 'dimension',
                        'label'      => __( 'Padding', 'bp-bb' ),
                        'responsive' => true,
                        'default'   =>  '',
                        'units' =>  array(
                            'px',
                        ),
                        'preview'    => array(
                            'type'     => 'css',
                            'selector'  =>  '{node} .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .bp-info-box-title',
                            'property'  =>  'padding',
                            'unit'  =>  'px'
                        ),
                    ),

                    'info_title_margin' => array(
                        'type'       => 'dimension',
                        'label'      => __( 'Margin', 'bp-bb' ),
                        'responsive' => true,
                        'default'   =>  10,
                        'units' =>  array(
                            'px',
                        ),
                        'preview'    => array(
                            'type'     => 'css',
                            'selector'  =>  '{node} .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .bp-info-box-title',
                            'property'  =>  'margin',
                            'unit'  =>  'px'
                        ),
                    ),
                ),
            ),

            'info_description_style'       => array(
                'title'     =>  __('Content' , 'bp-bb'),
                'fields'    =>  array(
                    'info_description_color'  =>  array(
                        'label'         =>  __('Color' , 'bp-bb'),
                        'type'          =>  'color',
                        'show_alpha'    =>  true,
                        'show_reset'    =>  true,
                        'default'       =>  '',
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .bp-info-box-content',
                            'property'      =>  'color',
                        ),
                    ),
                    'info_description_typography'  =>  array(
                        'label'         =>  __('Typography' , 'bp-bb'),
                        'type'          =>  'typography',
                        'responsive'    =>  true,
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .bp-info-box-content',
                            'property'      =>  'color',
                        ),
                    ),
                    'info_description_color_hover'  =>  array(
                        'label'         =>  __('Color Hover' , 'bp-bb'),
                        'type'          =>  'color',
                        'show_alpha'    =>  true,
                        'show_reset'    =>  true,
                        'default'       =>  '',
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .bp-info-box-content:hover',
                            'property'      =>  'color',
                        ),
                    ),
                    'info_description_padding' => array(
                        'type'       => 'dimension',
                        'label'      => __( 'Padding', 'bp-bb' ),
                        'responsive' => true,
                        'default'   =>  '',
                        'units' =>  array(
                            'px',
                        ),
                        'preview'    => array(
                            'type'     => 'css',
                            'selector'  =>  '{node} .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .bp-info-box-content',
                            'property'  =>  'padding',
                            'unit'  =>  'px'
                        ),
                    ),

                    'info_description_margin' => array(
                        'type'       => 'dimension',
                        'label'      => __( 'Margin', 'bp-bb' ),
                        'responsive' => true,
                        'default'   =>  10,
                        'units' =>  array(
                            'px',
                        ),
                        'preview'    => array(
                            'type'     => 'css',
                            'selector'  =>  '{node} .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .bp-info-box-content',
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
                        'selector' => '{node} .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .action-button-wrapper',
                        'button_align_style' => false,
	                    'default_button_color'=> 'ffffff'
                    ] ),
                    array(
                        'action_button_margin' => array(
                            'type'       => 'dimension',
                            'label'      => __( 'Margin', 'bp-bb' ),
                            'responsive' => true,
                            'default'   =>  '',
                            'units' =>  array(
                                'px',
                            ),
                            'preview'    => array(
                                'type'     => 'css',
                                'selector' => '{node} .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .action-button-wrapper',
                                'property'  =>  'margin',
                                'unit'  =>  'px'
                            ),
                        ),
                    )
                ),
            ),
            'infobox_style' =>  array(
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
                                    'selector'   =>  '{node} .bp-infobox-wrapper.icon-pos-top .bp-infobox',
                                    'property'   =>  'text-align'
                                ),
                                array(
                                    'selector'   =>  '{node} .bp-infobox-wrapper.icon-pos-left .bp-infobox .bp-infobox-content-wrapper',
                                    'property'   =>  'text-align'
                                ),
                                array(
                                    'selector'   =>  '{node} .bp-infobox-wrapper.icon-pos-right .bp-infobox .bp-infobox-content-wrapper',
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
                                    'selector'   =>  '{node} .bp-infobox-wrapper.icon-pos-left .bp-infobox',
                                    'property'   =>  'align-items'
                                ),
                                array(
                                    'selector'   =>  '{node} .bp-infobox-wrapper.icon-pos-right .bp-infobox',
                                    'property'   =>  'align-items'
                                ),
                            ),
                        ),
                    ),
                    'infobox_background'    =>  array(
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
                                'fields'    =>  ['infobox_bg_color' , 'infobox_bg_color_hover'],

                            ),
                            'gradient' =>  array(
                                'fields'    =>  ['infobox_bg_gradient' , 'infobox_bg_gradient_hover'],

                            ),
                            'image' =>  array(
                                'fields'      =>    ['infobox_bg_overlay' , 'infobox_bg_overlay_hover' , 'infobox_bg_photo' , 'infobox_bg_photo_size' , 'infobox_bg_photo_position' , 'infobox_bg_photo_repeat'],
                                'section'     =>    ['infobox_bg_img'],
                            ),
                        ],
                    ),
                    'infobox_bg_color'  =>  array(
                        'label'     =>  __('Background Color' , 'li-bb'),
                        'type'          =>  'color',
                        'show_alpha'    =>  true,
                        'show_reset'    =>  true,
                        'default'       =>  '',
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-infobox-wrapper .bp-infobox ',
                            'property'      =>  'background-color',
                        ),
                    ),
                    'infobox_bg_color_hover'  =>  array(
                        'label'     =>  __('Background Color Hover' , 'li-bb'),
                        'type'          =>  'color',
                        'show_alpha'    =>  true,
                        'show_reset'    =>  true,
                        'default'       =>  '',
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-infobox-wrapper .bp-infobox:hover',
                            'property'      =>  'background-color',
                        ),
                    ),
                    'infobox_bg_gradient'  =>  array(
                        'label'     =>  __('Background Color' , 'li-bb'),
                        'type'          =>  'gradient',
                        'show_alpha'    =>  true,
                        'show_reset'    =>  true,
                        'default'       =>  '',
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-infobox-wrapper .bp-infobox ',
                            'property'      =>  'background-image',
                        ),
                    ),
                    'infobox_bg_gradient_hover'  =>  array(
                        'label'     =>  __('Background Color Hover' , 'li-bb'),
                        'type'          =>  'gradient',
                        'show_alpha'    =>  true,
                        'show_reset'    =>  true,
                        'default'       =>  '',
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-infobox-wrapper .bp-infobox:hover',
                            'property'      =>  'background-image',
                        ),
                    ),
                    'infobox_bg_photo'  =>  array(
                        'label'     =>  __('Background Color' , 'li-bb'),
                        'type'          =>  'photo',
                        'show_remove'    =>  true,
                        'default'       =>  '',
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-infobox-wrapper .bp-infobox',
                            'property'      =>  'background-image',
                        ),
                    ),
                    'infobox_bg_photo_size'       => array(
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
                            'selector'  =>  '{node} .bp-infobox-wrapper .bp-infobox',
                            'property' => 'background-size',
                        ),
                    ),
                    'infobox_bg_photo_position'   => array(
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
                            'selector'  =>  '{node} .bp-infobox-wrapper .bp-infobox',
                            'property' => 'background-position',
                        ),
                    ),
                    'infobox_bg_photo_repeat'     => array(
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
                            'selector'  =>  '{node} .bp-infobox-wrapper .bp-infobox',
                            'property' => 'background-repeat',
                        ),
                    ),
                    'infobox_bg_overlay'    =>  array(
                        'label'     =>  __('Overlay Color' , 'li-bb'),
                        'type'          =>  'color',
                        'show_alpha'    =>  true,
                        'show_reset'    =>  true,
                        'default'       =>  '',
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-infobox-wrapper .bp-infobox .bp-infobox-overlay',
                            'property'      =>  'background-color',
                        ),
                    ),
                    'infobox_bg_overlay_hover'    =>  array(
                        'label'     =>  __('Overlay Color Hover' , 'li-bb'),
                        'type'          =>  'color',
                        'show_alpha'    =>  true,
                        'show_reset'    =>  true,
                        'default'       =>  '',
                        'preview'       =>  array(
                            'type'      =>  'css',
                            'selector'  =>  '{node} .bp-infobox-wrapper .bp-infobox:hover .bp-infobox-overlay',
                            'property'      =>  'background-color',
                        ),
                    ),

                    'infobox_padding' => array(
                        'type'       => 'dimension',
                        'label'      => __( 'Padding', 'bp-bb' ),
                        'responsive' => true,
                        'default'   =>  10,
                        'units' =>  array(
                            'px',
                        ),
                        'preview'    => array(
                            'type'     => 'css',
                            'selector' => '{node} .bp-infobox-wrapper .bp-infobox',
                            'property'  =>  'padding',
                            'unit'  =>  'px'
                        ),
                    ),

                    'infobox_border' => array(
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
                            'selector' => '{node} .bp-infobox-wrapper .bp-infobox',
                        ),
                    ),

                    'infobox_border_hover' => array(
                        'type'       => 'border',
                        'label'      => __( 'Border Hover', 'bp-bb' ),
                        'responsive' => true,
                        'units' =>  array(
                            'px',
                        ),
                        'preview'    => array(
                            'type'     => 'css',
                            'selector' => '{node} .bp-infobox-wrapper .bp-infobox:hover',
                        ),
                    ),


                ),
            ),
		),
	),

) );
?>