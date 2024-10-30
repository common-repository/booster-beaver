<?php

namespace BP_BB;

class Helper {

	private static $_instance = null;

	public static function instance() {

		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	function bp_icon( $args ) {

		$defaults = [
			'icon_type'          => true,
			'icon_shape'         => true,
			'icon_align'         => true,
			'default_icon'       => 'fas fa-star',
			'default_icon_type'  => 'stacked',
			'default_icon_shape' => 'circle',
			'default_icon_align' => 'center',
		];

		$args = wp_parse_args( $args, $defaults );


		$icon[ $args['name'] . '_icon' ] = array(
			'label'       => __( $args['label'] . ' Icon', 'bp-bb' ),
			'type'        => 'icon',
			'default'     => $args['default_icon'],
			'show_remove' => true,
			'show'        => array(
				'sections' => array( $args['name'] . '_icon_style' ),
				'fields'   => [
					$args['name'] . '_icon_type',
					$args['name'] . '_icon_shape',
					$args['name'] . '_icon_align',
				],
			)
		);

		if ( $args['icon_type'] ) {
			$icon[ $args['name'] . '_icon_type' ] = array(
				'label'   => __( $args['label'] . ' Icon Type', 'bp-bb' ),
				'type'    => 'select',
				'default' => $args['default_icon_type'],
				'options' => array(
					'default' => __( 'Default', 'bp-bb' ),
					'stacked' => __( 'Stacked', 'bp-bb' ),
					'framed'  => __( 'Framed', 'bp-bb' ),
				),
				'toggle'  => array(
					'framed'  => array(
						'fields' => [
							$args['name'] . '_icon_shape',
							$args['name'] . '_icon_padding',
							$args['name'] . '_icon_border',
                            $args['name'] . '_icon_border_style',
                            $args['name'] . '_icon_border_width',
                            $args['name'] . '_icon_border_color',
                            $args['name'] . '_icon_border_radius',
							$args['name'] . '_icon_background_color',
							$args['name'] . '_icon_background_hover_color',
						]
					),
					'stacked' => array(
						'fields' => [
							$args['name'] . '_icon_shape',
							$args['name'] . '_icon_padding',
							$args['name'] . '_icon_background_color',
							$args['name'] . '_icon_background_hover_color',
                            $args['name'] . '_icon_border_radius',
						]
					)
				)
			);
		}

		if ( $args['icon_shape'] ) {
			$icon[ $args['name'] . '_icon_shape' ] = array(
				'label'   => __( $args['label'] . ' Icon Shape', 'bp-bb' ),
				'type'    => 'select',
				'default' => $args['default_icon_shape'],
				'options' => array(
					'circle' => __( 'Circle', 'bp-bb' ),
					'square' => __( 'Square', 'bp-bb' ),
				)
			);
		}

		if ( $args['icon_align'] ) {
			$icon[ $args['name'] . '_icon_align' ] = array(
				'label'      => __( $args['label'] . ' Icon Alignment', 'bp-bb' ),
				'type'       => 'align',
				'default'    => $args['default_icon_align'],
				'responsive' => true,
				'preview'    => array(
					'type'     => 'css',
					'selector' => $args['selector'],
					'property' => 'text-align',
				),

			);
		}

		return $icon;
	}

	function bp_icon_style( $args ) {

		$defaults = [
			'icon_size'                     => true,
			'icon_padding'                  => true,
			'icon_color'                    => true,
			'icon_background_color'         => true,
			'icon_hover_color'              => true,
			'icon_background_hover_color'   => true,
            'icon_border'                   => true,
			'icon_border_style'             => true,
            'icon_border_color'             => true,
            'icon_border_width'             => true,
            'icon_border_radius'            => true,
			'icon_rotate'                   => true,
			'icon_size_default'             => 20,
			'icon_padding_default'          => 1,
			'default_icon_color'            => '6ec1e4',
			'default_icon_background_color' => '5aba57'
		];

		$args = wp_parse_args( $args, $defaults );

		if ( $args['icon_size'] ) {
			$icon_style[ $args['name'] . '_icon_size' ] = array(
				'label'      => __( $args['label'] . ' Icon Size', 'bp-bb' ),
				'type'       => 'unit',
				'responsive' => true,
				'preview'    => array(
					'type'     => 'css',
					'selector' => $args['selector'],
					'property' => 'font-size',
					'unit'     => 'px',

				),
				'units'      => array(
					'px'
				),
				'default'    => $args['icon_size_default'],
                'sanitize'		=> 'absint',
				'maxlength'  => '',
				'size'       => '',
				'slider'     => array(
					'px' => array(
						'min'  => 10,
						'max'  => 300,
						'step' => 1,
					),
				)
			);
		}

		if ( $args['icon_padding'] ) {
			$icon_style[ $args['name'] . '_icon_padding' ] = array(
				'label'      => __( $args['label'] . ' Icon Padding', 'bp-bb' ),
				'type'       => 'unit',
				'default'    => $args['icon_padding_default'],
				'responsive' => true,
				'preview'    => array(
					'type'     => 'css',
					'selector' => $args['selector'],
					'property' => 'padding',
				),
				'units'      => array(
					'em',
					'px',
				),
                'slider' => array(
                    'em'	=> array(
                        'min'	=> 0,
                        'max'	=> 20,
                        'step'	=> .5,
                    ),
                    'px'	=> array(
                        'min'	=> 0,
                        'max'	=> 200,
                        'step'	=> 1,
                    ),
                ),
			);
		}
		if ( $args['icon_rotate'] ) {
			$icon_style[ $args['name'] . '_icon_rotate' ] = array(
				'label'      => __( $args['label'] . ' Icon Rotate', 'bp-bb' ),
				'type'       => 'unit',
				'default'    => 0,
                'sanitize'		=> 'absint',
				'slider'        => array(
					'min'            => 0,
					'max'            => 360,
					'step'            => 1,
				),
			);
		}

		if ( $args['icon_color'] ) {
			$icon_style[ $args['name'] . '_icon_color' ] = array(
				'label'      => __( $args['label'] . ' Primary Color', 'bp-bb' ),
				'type'       => 'color',
				'default'    => $args['default_icon_color'],
                'connections'	=> array( 'color' ),
				'show_reset' => true,
				'show_alpha' => true,
				'preview'    => array(
					'type'  => 'css',
					'rules' => array(
						array(
							'selector' => $args['selector'] . ' i',
							'property' => 'color',
						),
						array(
							'selector' => $args['selector'] . '.framed',
							'property' => 'border-color',
						),
                        array(
                            'selector' => $args['selector'] . '.stacked',
                            'property' => 'background-color',
                        ),
					),

				),
			);
		}

		if ( $args['icon_hover_color'] ) {
			$icon_style[ $args['name'] . '_icon_hover_color' ] = array(
				'label'      => __( $args['label'] . ' Primary Hover Color', 'bp-bb' ),
				'type'       => 'color',
				'default'    => '',
				'show_reset' => true,
				'show_alpha' => true,
                'connections'	=> array( 'color' ),
				'preview'    => array(
					'type'  => 'css',
					'rules' => array(
						array(
							'selector' => $args['selector'] . ' i:hover',
							'property' => 'color',
						),
						array(
							'selector' => $args['selector'] . '.framed' . ":hover",
							'property' => 'border-color',
						),
                        array(
                            'selector' => $args['selector'] . '.stacked' . ":hover",
                            'property' => 'background-color',
                        ),
					),

				),
			);
		}

		if ( $args['icon_background_color'] ) {
			$icon_style[ $args['name'] . '_icon_background_color' ] = array(
				'label'      => __( $args['label'] . ' Secondary Color', 'bp-bb' ),
				'type'       => 'color',
				'default'    => $args['default_icon_background_color'],
				'show_reset' => true,
				'show_alpha' => true,
                'connections'	=> array( 'color' ),
				'preview'    => array(
					'type'     => 'css',
					'rules' =>  array(
					    array(
                            'selector' => $args['selector'] . '.framed',
                            'property' => 'background-color',
                        ),
                        array(
                            'selector' => $args['selector'] . '.stacked' . ' i',
                            'property' => 'color',
                        ),
                    ),

				),
			);
		}

		if ( $args['icon_background_hover_color'] ) {
			$icon_style[ $args['name'] . '_icon_background_hover_color' ] = array(
				'label'      => __( $args['label'] . ' Secondary Hover Color', 'bp-bb' ),
				'type'       => 'color',
				'default'    => '',
				'show_reset' => true,
				'show_alpha' => true,
                'connections'	=> array( 'color' ),
                'preview'    => array(
                    'type'     => 'css',
                    'rules' =>  array(
                        array(
                            'selector' => $args['selector'] . '.framed' . ":hover",
                            'property' => 'background-color',
                        ),
                        array(
                            'selector' => $args['selector'] . '.stacked' . ' i' . ":hover",
                            'property' => 'color',
                        ),
                    ),

                ),
			);
		}

        if ( $args['icon_border_style'] ) {
            $icon_style[ $args['name'] . '_icon_border_style' ] = array(
                'label'      => __( $args['label'] . ' Border Style', 'bp-bb' ),
                'type'       => 'select',
                'options'   =>  array(
                    'none'      =>  __('None' , 'bp-bb'),
                    'solid'     =>  __('Solid' , 'bp-bb'),
                    'dashed'    =>  __('Dashed' , 'bp-bb'),
                    'double'    =>  __('Double' , 'bp-bb'),
                    'dotted'    =>  __('Dotted' , 'bp-bb'),
                ),
                'default'   =>  'solid',
                'preview'    => array(
                    'type'     => 'css',
                    'selector' => $args['selector'] . '.framed',
                    'property'  =>  'border-style'
                ),
            );
        }
        if ( $args['icon_border_color'] ) {
            $icon_style[ $args['name'] . '_icon_border_color' ] = array(
                'label'      => __( $args['label'] . ' Border Color', 'bp-bb' ),
                'type'       => 'color',
                'default'   =>  $args['default_icon_color'],
                'show_alpha'    => true,
                'show_reset'    =>  true,
                'connections'	=> array( 'color' ),
                'preview'    => array(
                    'type'     => 'css',
                    'selector' => $args['selector'] . '.framed',
                    'property'  =>  'border-color'
                ),
            );
        }
        if ( $args['icon_border_width'] ) {
            $icon_style[ $args['name'] . '_icon_border_width' ] = array(
                'label'      => __( $args['label'] . ' Border Width', 'bp-bb' ),
                'type'        	=> 'dimension',
                'default'       => '2',
                'sanitize'		=> 'absint',
                'responsive'	=> true,
                'slider'		=> true,
                'units'		  	=> array(
                    'px',
                    '%'
                ),
                'preview'       => array(
                    'type'          => 'css',
                    'selector' => $args['selector'] . '.framed',
                    'property'      => 'border-width',
                ),
            );
        }
        if ( $args['icon_border_radius'] ) {
            $icon_style[ $args['name'] . '_icon_border_radius' ] = array(
                'label'      => __( $args['label'] . ' Border radius', 'bp-bb' ),
                'type'        	=> 'unit',
                'default'       => '',
                'responsive'	=> true,
                'slider'		=> true,
                'units'		  	=> array(
                    'px',
                    '%',
                ),
                'preview'   =>  array(
                    'type'  =>  'css',
                    'selector'  =>  $args['selector'],
                    'property'  =>  'border-radius',
                ),
            );
        }

		return $icon_style;
	}

	function bp_icon_html( $module, $settings, $icon_name ) {

		$settings = (array) $settings;
		$module->add_render_attribute( $icon_name . '-icon-wrapper', 'class', $icon_name . '-icon-wrapper' );
		$module->add_render_attribute( $icon_name . '-icon-wrapper', 'class', $icon_name . '-icon-' . $settings[ $icon_name . '_icon_type' ] );
		$module->add_render_attribute( $icon_name . '-icon-wrapper', 'class', $icon_name . '-icon-shape-' . $settings[ $icon_name . '_icon_shape' ] );

		$module->add_render_attribute( $icon_name . '-icon', 'class', $icon_name . '-icon' );
		$module->add_render_attribute( $icon_name . '-icon', 'class', $settings[ $icon_name . '_icon' ] );

		$module->add_render_attribute( $icon_name . '-icon-inner', 'class', $icon_name . '-icon-inner' );
		$module->add_render_attribute( $icon_name . '-icon-inner', 'class', $settings[ $icon_name . '_icon_type' ] );

		$icon_html = '';

		if ( ! empty( $settings[ $icon_name . '_icon' ] ) ) {
			$icon_html = "<div " . $module->get_render_attribute_string( $icon_name . '-icon-wrapper' ) . "><div " . $module->get_render_attribute_string( $icon_name . '-icon-inner' ) . ">";
			$icon_html .= "<i " . $module->get_render_attribute_string( $icon_name . '-icon' ) . "></i>";
			$icon_html .= "</div></div>";
		}

		return $icon_html;
	}

	/* Button Goup Control */
	function bp_button( $args ) {

		$defaults = [
			'is_button'           => true,
			'button_link'         => true,
			'button_icon'         => true,
			'button_align'         => true,
			'default_icon'        => '',
			'default_button_text' => 'Buy Now',
		];

		$args = wp_parse_args( $args, $defaults );

		if ( $args['is_button'] ) {
			$button[ $args['name'] . '_is_button' ] = array(
				'label'   => __( $args['label'] . ' Button', 'bp-bb' ),
				'type'    => 'button-group',
				'default' => 'enable',
				'options' => array(
					'enable'  => __( 'Enable', 'bp-bb' ),
					'disable' => __( 'Disable', 'bp-bb' ),
				),
				'toggle'  => array(
					'enable' => array(
						'fields'   => [
							$args['name'] . '_button_text',
							$args['name'] . '_button_link',
							$args['name'] . '_icon',
                            $args['name'] . '_icon_color',
                            $args['name'] . '_icon_size',
                            $args['name'] . '_icon_align'
						],
						'sections' => array( $args['name'] . '_button_style' ),
					),
				),
			);
		}

		$button[ $args['name'] . '_button_text' ] = array(
			'label'       => __( $args['label'] . ' Button Text', 'bp-bb' ),
			'type'        => 'text',
			'default'     => $args['default_button_text'],
			'placeholder' => 'Enter text',
			'preview'     => array(
				'type'     => 'text',
				'selector' => $args['selector'] . " ." . $args['name'] . '-button-text',
				'property' => 'text'
			),
			'connections' => array( 'string' )
		);

		if ( $args['button_link'] ) {
			$button[ $args['name'] . '_button_link' ] = array(
				'type'          => 'link',
				'show_target'   => true,
				'show_nofollow' => true,
				'label'         => __( 'Link', 'bp-bb' ),
				'connections'   => array( 'url' ),
				'default'       => '#'
			);
		}

		if ( $args['button_icon'] ){
			$button[ $args['name'] . '_icon' ] = array(
				'label'       => __( $args['label'] . ' Button Icon', 'bp-bb' ),
				'type'        => 'icon',
				'show_remove' => true,
				'default'     => $args['default_icon'],
			);
			$button[ $args['name'] . '_icon_color' ] = array(
				'label'      => __( $args['label'] . ' Button Icon Color', 'bp-bb' ),
				'type'       => 'color',
				'default'    => '000000',
				'show_alpha' => true,
				'show_reset' => true,
                'connections'	=> array( 'color' ),
				'preview'    => array(
					'type'     => 'css',
					'selector' => $args['selector'] . ' i',
					'property' => 'color',

				),
			);

			$button[ $args['name'] . '_icon_size' ] = array(
				'label'      => __( $args['label'] . ' Button Icon Size', 'bp-bb' ),
				'type'       => 'unit',
				'units'      => array(
					'px'
				),
				'responsive' => true,
                'default'    => 15,
                'sanitize'		=> 'absint',
				'preview'    => array(
					'type'     => 'css',
					'selector' => $args['selector']. ' i' ,
					'property' => 'font-size',
					'unit'     => 'px',
				),
				'slider'     => true,
			);
		}

		if ( $args['button_align'] ) {
			$button[ $args['name'] . '_icon_align' ] = array(
				'label'   => __( $args['label'] . ' Button Icon Alignment', 'bp-bb' ),
				'type'    => 'button-group',
				'default' => 'before',
				'options' => array(
					'before' => __( 'Before Text', 'bp-bb' ),
					'after'  => __( 'After Text', 'bp-bb' ),
				)
			);
		}

		return $button;
	}

	/* Button Styling group Control */
	function bp_button_style( $args ) {
		$defaults   = [
			'button_background'      => true,
			'button_structure'       => true,
			'button_align_style'     => true,
			'default_button_align'   => 'center',
			'button_padding_default' => '',
			'default_button_color'  => '000000',
			'default_button_background_color' => '6ec1e4'
		];
		$args   = wp_parse_args( $args, $defaults );
		$button_style[ $args['name'] . '_color' ]       = array(
			'label'      => __( $args['label'] . ' Button Text Color', 'bp-bb' ),
			'type'       => 'color',
			'show_alpha' => true,
			'show_reset' => true,
            'connections'	=> array( 'color' ),
			'default'    => $args['default_button_color'],
			'preview'    => array(
				'type'     => 'css',
				'selector' => $args['selector'] . " ." . $args['name'] . '-button-text',
				'property' => 'color',
			),
		);
		$button_style[ $args['name'] . '_hover_color' ] = array(
			'label'      => __( $args['label'] . ' Button Hover Color', 'bp-bb' ),
			'type'       => 'color',
			'show_alpha' => true,
			'show_reset' => true,
            'connections'	=> array( 'color' ),
			'default'    => '',
			'preview'    => array(
				'type'     => 'css',
				'selector' => $args['selector'] . " ." . $args['name'] . '-button-text:hover',
				'property' => 'color',
			),
		);
		$button_style[ $args['name'] . '_typography' ]  = array(
			'label'      => $args['label'] . ' Button Typography',
			'type'       => 'typography',
			'responsive' => true,
			'preview'    => array(
				'type'      => 'css',
				'selector'  => $args['selector'] . " ." . $args['name'] . '-button ' . " ." . $args['name'] . '-button-text',
				'important' => true,
			),
		);

		if ( $args['button_background'] ) {
			$button_style[ $args['name'] . '_button_background' ]        = array(
				'label'   => __( $args['label'] . ' Button Background', 'bp-bb' ),
				'type'    => 'button-group',
				'default' => 'color',
				'options' => array(
					'none'     => __( 'None', 'bp-bb' ),
					'image'    => __( 'Image', 'bp-bb' ),
					'color'    => __( 'Color', 'bp-bb' ),
					'gradient' => __( 'Gradient', 'bp-bb' ),
				),
				'toggle'  => array(
					'color'    => array(
						'fields' => [
							$args['name'] . '_background_color',
							$args['name'] . '_background_hover_color'
						]
					),
					'gradient' => array(
						'fields' => [
							$args['name'] . '_background_gradient',
						]
					),
					'image'    => array(
						'fields' => [
							$args['name'] . '_background_image',
							$args['name'] . '_background_opacity',
							$args['name'] . '_background_hover_opacity'
						]
					)
				)
			);
			$button_style[ $args['name'] . '_background_color' ]         = array(
				'label'      => __( $args['label'] . ' Button Background Color', 'bp-bb' ),
				'type'       => 'color',
				'default'    => $args['default_button_background_color'],
				'show_alpha' => true,
				'show_reset' => true,
                'connections'	=> array( 'color' ),
				'preview'    => array(
					'type'     => 'css',
					'selector' => $args['selector'] . " ." . $args['name'] . '-button',
					'property' => 'background-color',
				),
			);
			$button_style[ $args['name'] . '_background_gradient' ]      = array(
				'label'   => __( $args['label'] . ' Button Background Gradient', 'bp-bb' ),
				'type'    => 'gradient',
				'preview' => array(
					'type'     => 'css',
					'selector' => $args['selector'] . " ." . $args['name'] . '-button',
					'property' => 'background-image',
				)
			);
			$button_style[ $args['name'] . '_background_image' ]         = array(
				'label'       => __( $args['label'] . ' Button Background Image', 'bp-bb' ),
				'type'        => 'photo',
                'connections'	=> array( 'photo' ),
				'show_remove' => true,
			);
			$button_style[ $args['name'] . '_background_opacity' ]       = array(
				'label'       => __( $args['label'] . ' Button Background Opacity', 'bp-bb' ),
				'type'        => 'unit',
				'preview'     => array(
					'type'     => 'css',
					'selector' => $args['selector'] . " ." . $args['name'] . '-button',
					'property' => 'opacity',
				),
				'description' => __( 'Value between 0 to 1', 'bp-bb' )
			);
			$button_style[ $args['name'] . '_background_hover_color' ]   = array(
				'label'      => __( $args['label'] . ' Button Background Hover Color', 'bp-bb' ),
				'type'       => 'color',
				'show_alpha' => true,
				'default'    => 'b2b2b2',
				'show_reset' => true,
				'preview'    => array(
					'type'     => 'css',
					'selector' => $args['selector'] . " ." . $args['name'] . '-button:hover',
					'property' => 'background-color',
				),
			);
			$button_style[ $args['name'] . '_background_hover_opacity' ] = array(
				'label'       => __( $args['label'] . ' Button Background Hover Opacity', 'bp-bb' ),
				'type'        => 'unit',
				'preview'     => array(
					'type'     => 'css',
					'selector' => $args['selector'] . " ." . $args['name'] . '-button:hover',
					'property' => 'opacity',
				),
				'description' => __( 'Value between 0 to 1', 'bp-bb' )
			);
		}
		if ( $args['button_structure'] ) {
			$button_style[ $args['name'] . '_button_structure' ] = array(
				'label'   => __( $args['label'] . ' Button Structure', 'bp-bb' ),
				'type'    => 'select',
				'default' => 'auto',
				'options' => array(
					'auto'       => __( 'Auto', 'bp-bb' ),
					'full-width' => __( 'Full Width', 'bp-bb' ),
					// 'custom'    =>  __('Custom' , 'bp-bb')
				),
				'toggle'  => array(
					'auto' => array(
						'fields' => [
							$args['name'] . '_button_alignment',
							$args['name'] . '_button_padding',
						]
					),
				)
			);

			if ( $args['button_align_style'] ) {
				$button_style[ $args['name'] . '_button_alignment' ] = array(
					'label'      => __( $args['label'] . ' Button Alignment', 'bp-bb' ),
					'type'       => 'align',
					'responsive' => true,
					'default'    => $args['default_button_align'],
					'preview'    => array(
						'type'     => 'css',
						'selector' => $args['selector'],
						'property' => 'text-align',
					),
				);
			}
            $button_style[ $args['name'] . '_border' ]      = array(
                'label'      => __( $args['label'] . 'Button Border', 'bp-bb' ),
                'type'       => 'border',
                'responsive' => true,
                'preview'    => array(
                    'type'     => 'css',
                    'selector' => $args['selector'] . " ." . $args['name'] . '-button',
                ),
            );
			
			$button_style[ $args['name'] . '_button_padding' ] = array(
				'label'      => __( $args['label'] . ' Button Padding', 'bp-bb' ),
				'type'       => 'dimension',
				'slider'     => true,
				'units'      => array( 'px' ),
				'default'    => $args['button_padding_default'],
				'responsive' => true,
				'preview'    => array(
					'type'     => 'css',
					'selector' => $args['selector'] . " ." . $args['name'] . '-button',
					'property' => 'padding',
					'unit'     => 'px',
				)
			);
		}

		return ( $button_style );
	}

	/* Button Html */
	function bp_button_html( $module, $settings, $button_name ) {
		$settings = (array) $settings;

		$button_html = '';
		$module->add_render_attribute( $button_name . '-button-wrapper', 'class', $button_name . '-button-wrapper' );
		$module->add_render_attribute( $button_name . '-button-wrapper', 'class', $button_name . '-button-' . $settings[ $button_name . '_button_structure' ] );
		$module->add_render_attribute( $button_name . '-button-wrapper', 'style', 'display:block;' );
		$module->add_render_attribute( $button_name . '-button', 'class', $button_name . '-button' );
		$module->add_render_attribute( $button_name . '-button', 'href', $settings[ $button_name . '_button_link' ] );
		$module->add_render_attribute( $button_name . '-button', 'target', $settings[ $button_name . '_button_link_target' ] );

		if ( isset( $settings[ $button_name . '_button_link_nofollow' ] ) && $settings[ $button_name . '_button_link_nofollow' ] == 'yes' ) {
			$module->add_render_attribute( $button_name . '-button', 'rel', 'nofollow' );
		}

		$module->add_render_attribute( $button_name . '-button-text', 'class', $button_name . '-button-text' );
		$module->add_render_attribute( $button_name . '-icon', 'class', $settings[ $button_name . '_icon' ] );

		if ( $settings[ $button_name . '_is_button' ] == 'enable' ) {
			$button_html = "<div " . $module->get_render_attribute_string( $button_name . '-button-wrapper' ) . ">";
			$button_html .= "<a " . $module->get_render_attribute_string( $button_name . '-button' ) . ">";
			if ( $settings[ $button_name . '_icon_align' ] == 'before' && ! empty( $settings[ $button_name . '_icon' ] ) ) {
				$button_html .= "<i " . $module->get_render_attribute_string( $button_name . '-icon' ) . " style='margin: 0 5px;'></i>";
			}
			$button_html .= "<span " . $module->get_render_attribute_string( $button_name . '-button-text' ) . ">" . $settings[ $button_name . '_button_text' ] . "</span>";
			if ( $settings[ $button_name . '_icon_align' ] == 'after' && ! empty( $settings[ $button_name . '_icon' ] ) ) {
				$button_html .= "<i " . $module->get_render_attribute_string( $button_name . '-icon' ) . " style='margin: 0 5px;'></i>";
			}
			$button_html .= "</a></div>";
		}

		return $button_html;
	}


	/* check google map api */
	function chk_google_map_api(){
		$map_api = [];

		$map_key = BP_BB_GMAP_KEY;

		if(!isset ($map_key) || $map_key == '' ){
			$map_api['notice'] = array(
				'type'          => 'html',
				'description'   => __('<div class="bp-notice"><a href="'.admin_url('admin.php?page=beaver-booster').'" target="_blank">Click Here</a> to add google map api key.</div>','bp-bb'),

			);
		}

		return $map_api;
	}
}

Helper::instance();