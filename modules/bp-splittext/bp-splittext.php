<?php

namespace BP_BB;

use FLBuilder;

/**
 * @class Split Text
 */
class SplitText extends \BP_BB\ModuleBase {

	/**
	 * Constructor function for the module. You must pass the
	 * name, description, dir and url in an array to the parent class.
	 *
	 * @method __construct
	 */

	public function __construct() {
		parent::__construct( array(
			'name'            => __( 'Split Text', 'bp-bb' ),
			'description'     => __( 'A module to display Split Text.', 'bp-bb' ),
			'group'           => 'Beaver Booster',
			'category'        => __( 'Advance Modules', 'bp-bb' ),
			'dir'             => BP_BB_MODULE_PATH . '/bp-splittext/',
			'url'             => BP_BB_MODULE_URL . '/bp-splittext/',
			'editor_export'   => true, // Defaults to true and can be omitted.
			'enabled'         => true, // Defaults to true and can be omitted.
			'partial_refresh' => true,
			'icon'            => 'icon.svg',
		) );
		$this->add_css( 'font-awesome' );
	}
}

FLBuilder::register_module( '\BP_BB\SplitText', array(
	'content' => array(
		'title'    => __( 'Content', 'bp-bb' ),
		'sections' => array(
			'general' => array(
				'title'  => __( 'General', 'bp-bb' ),
				'fields' => array(
					'alignment'   => array(
						'label'      => __( 'Alignment', 'bp-bb' ),
						'type'       => 'align',
						'default'    => 'center',
						'responsive' => true,
						'values' => array(
							'left'      => 'flex-start',
							'center'    => 'center',
							'right'     => 'flex-end',
						),
						'preview'    => array(
							'type'     => 'css',
							'selector' => '{node} .bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title',
							'property' => 'justify-content',
						),

					),
					'split_mode'  => array(
						'label'   => __( 'Split Mode', 'bp-bb' ),
						'type'    => 'button-group',
						'default' => 'word',
						'options' => array(
							'word'   => __( 'Word', 'bp-bb' ),
							'letter' => __( 'Letter', 'bp-bb' ),
						),
					),
					'split_count' => array(
						'label'   => __( 'Split Count', 'bp-bb' ),
						'type'    => 'unit',
						'default' => 2,
						'sanitize' => 'absint',
					),

					'html_tag' => array(
						'label'   => __( 'HTML Tag', 'bp-bb' ),
						'type'    => 'select',
						'default' => 'h3',
						'options' => array(
							'h1' => __( 'H1', 'bp-bb' ),
							'h2' => __( 'H2', 'bp-bb' ),
							'h3' => __( 'H3', 'bp-bb' ),
							'h4' => __( 'H4', 'bp-bb' ),
							'h5' => __( 'H5', 'bp-bb' ),
							'h6' => __( 'H6', 'bp-bb' ),
						),

					),
					'text'       => array(
						'label'   => __( 'Text', 'bp-bb' ),
						'type'    => 'textarea',
						'connections'   => array( 'string' ),
						'default' => 'I Love Beaver',
					),
				),
			),
		),
	),
	'style'   => array(
		'title'    => __( 'Style', 'bp-bb' ),
		'sections' => array(
			'split_text' => array(
				'title' => __( 'Part 1', 'bp-bb' ),

				'fields' => array(
					'split_text_color'      => array(
						'type'       => 'color',
						'show_reset' => true,
						'show_alpha' => true,
						'default'    => '6ec1e4',
						'label'      => __( 'Color', 'bp-bb' ),
						'connections'   => array( 'color' ),
						'preview'    => array(
							'type'      => 'css',
							'selector'  => '.bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title .bp-st-split-text',
							'property'  => 'color',
							'important' => true,
						),
					),
					'split_text_typography' => array(
						'type'       => 'typography',
						'label'      => __( 'Typography', 'bp-bb' ),
						'responsive' => true,
						'preview'    => array(
							'type'      => 'css',
							'selector'  => '.bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title .bp-st-split-text',
							'important' => true,
						),
					),

					'split_text_border'  => array(
						'type'       => 'border',
						'label'      => __( 'Border', 'bp-bb' ),
						'responsive' => true,
						'default'    => array(
							'style' => 'solid',
							'color' => 'e5e5e5',
							'width' => array(
								'top'    => '0',
								'right'  => '0',
								'bottom' => '0',
								'left'   => '0',
							),
						),
						'preview'    => array(
							'type'     => 'css',
							'selector' => '.bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title .bp-st-split-text',
						),
					),
					'split_text_padding' => array(
						'label'      => __( 'Padding', 'li-bb' ),
						'type'       => 'dimension',
						'responsive' => true,
						'slider'     => true,
						'units'      => array(
							'px'
						),
						'preview'    => array(
							'type'     => 'css',
							'selector' => '.bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title div.bp-st-split-text',
							'property' => 'padding',
							'unit'     => 'px',
						),
					),
					'split_text_margin'  => array(
						'label'      => __( 'Margin', 'li-bb' ),
						'type'       => 'dimension',
						'slider'     => true,
						'units'      => array(
							'px'
						),
						'responsive' => true,
						'preview'    => array(
							'type'     => 'css',
							'selector' => '.bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title div.bp-st-split-text',
							'property' => 'margin',
							'unit'     => 'px',
						),
					),

					'split_text_background'       => array(
						'label'   => __( 'Background', 'bp-bb' ),
						'type'    => 'button-group',
						'default' => 'color',
						'options' => array(
							'color'    => __( 'Color', 'bp-bb' ),
							'image'    => __( 'Image', 'bp-bb' ),
							'gradient' => __( 'Gradient', 'bp-bb' ),
						),
						'toggle'  => array(
							'color'    => array(
								'fields' => array( 'split_text_background_color' ),
							),
							'image'    => array(
								'fields' => array( 'split_text_background_image' )
							),
							'gradient' => array(
								'fields' => array( 'split_text_gradient' )
							),
						),
					),
					'split_text_background_color' => array(
						'label'      => __( 'Background Color', 'bp-bb' ),
						'type'       => 'color',
						'connections'   => array( 'color' ),
						'show_reset' => true,
						'show_alpha' => true,
						'preview'    => array(
							'type'     => 'css',
							'selector' => '.bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title div.bp-st-split-text',
							'property' => 'background-color',
						),
					),
					'split_text_background_image' => array(
						'label'       => __( 'Background Image', 'bp-bb' ),
						'type'        => 'photo',
						'connections'   => array( 'photo' ),
						'show_remove' => true,
					),
					'split_text_gradient'         => array(
						'type'    => 'gradient',
						'label'   => __( 'Gradient', 'bp-bb' ),
						'preview' => array(
							'type'     => 'css',
							'selector' => '.bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title .bp-st-split-text',
							'property' => 'background-image',
						),
					),
				)

			),
			'rest_text'  => array(
				'title' => __( 'Part 2', 'bp-bb' ),

				'fields' => array(
					'rest_text_color'      => array(
						'type'       => 'color',
						'show_reset' => true,
						'show_alpha' => true,
						'label'      => __( 'Color', 'bp-bb' ),
						'connections'   => array( 'color' ),
						'preview'    => array(
							'type'      => 'css',
							'selector'  => '.bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title div.bp-st-rest-text',
							'property'  => 'color',
							'important' => true,
						),
					),
					'rest_text_typography' => array(
						'type'       => 'typography',
						'label'      => __( 'Typography', 'bp-bb' ),
						'responsive' => true,
						'preview'    => array(
							'type'      => 'css',
							'selector'  => '.bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title div.bp-st-rest-text',
							'important' => true,
						),
					),

					'rest_text_border'  => array(
						'type'       => 'border',
						'label'      => __( 'Border', 'bp-bb' ),
						'responsive' => true,
						'default'    => array(
							'style' => 'solid',
							'color' => 'e5e5e5',
							'width' => array(
								'top'    => '0',
								'right'  => '0',
								'bottom' => '0',
								'left'   => '0',
							),
						),
						'preview'    => array(
							'type'     => 'css',
							'selector' => '.bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title div.bp-st-rest-text',
						),
					),
					'rest_text_padding' => array(
						'label'      => __( 'Padding', 'li-bb' ),
						'type'       => 'dimension',
						'responsive' => true,
						'slider'     => true,
						'units'      => array(
							'px'
						),
						'preview'    => array(
							'type'     => 'css',
							'selector' => '.bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title div.bp-st-rest-text',
							'property' => 'padding',
							'unit'     => 'px',
						),
					),
					'rest_text_margin'  => array(
						'label'      => __( 'Margin', 'li-bb' ),
						'type'       => 'dimension',
						'slider'     => true,
						'responsive' => true,
						'units'      => array(
							'px'
						),
						'preview'    => array(
							'type'     => 'css',
							'selector' => '.bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title div.bp-st-rest-text',
							'property' => 'margin',
							'unit'     => 'px',
						),
					),

					'rest_text_background'       => array(
						'label'   => __( 'Background', 'bp-bb' ),
						'type'    => 'button-group',
						'default' => 'color',
						'options' => array(
							'color'    => __( 'Color', 'bp-bb' ),
							'image'    => __( 'Image', 'bp-bb' ),
							'gradient' => __( 'Gradient', 'bp-bb' ),
						),
						'toggle'  => array(
							'color'    => array(
								'fields' => array( 'rest_text_background_color' ),
							),
							'image'    => array(
								'fields' => array( 'rest_text_background_image' )
							),
							'gradient' => array(
								'fields' => array( 'rest_text_gradient' )
							),
						),
					),
					'rest_text_background_color' => array(
						'label'      => __( 'Background Color', 'bp-bb' ),
						'type'       => 'color',
						'connections'   => array( 'color' ),
						'show_alpha' => true,
						'show_reset' => true,
						'preview'    => array(
							'type'     => 'css',
							'selector' => '.bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title div.bp-st-rest-text',
							'property' => 'background-color',
						),
					),
					'rest_text_background_image' => array(
						'label'       => __( 'Background Image', 'bp-bb' ),
						'type'        => 'photo',
						'connections'   => array( 'photo' ),
						'show_remove' => true,
					),
					'rest_text_gradient'         => array(
						'type'    => 'gradient',
						'label'   => __( 'Gradient', 'bp-bb' ),
						'preview' => array(
							'type'     => 'css',
							'selector' => '.bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title div.bp-st-rest-text',
							'property' => 'background-image',
						),
					),
				)

			),

		),
	),


) );


