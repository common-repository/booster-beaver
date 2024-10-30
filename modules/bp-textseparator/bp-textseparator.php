<?php

namespace BP_BB;

//use FLBuilderModule;
use FLBuilder;

/**
 * @Class TextSeparator
 **/
class TextSeparator extends \BP_BB\ModuleBase {
	/**
	 * Constructor function for the module. You must pass the
	 * name, description, dir and url in an array to the parent class.
	 *
	 * @method __construct
	 */

	public function __construct() {
		parent::__construct( array(
			'name'            => __( 'Advanced Separator', 'bp-bb' ),
			'description'     => __( 'A module to display Advanced Separator.', 'bp-bb' ),
			'group'           => 'Beaver Booster',
			'category'        => __( 'Advance Modules', 'bp-bb' ),
			'dir'             => BP_BB_MODULE_PATH . '/bp-textseparator/',
			'url'             => BP_BB_MODULE_URL . '/bp-textseparator/',
			'editor_export'   => true, // Defaults to true and can be omitted.
			'enabled'         => true, // Defaults to true and can be omitted.
			'partial_refresh' => true,
			'icon'            => 'minus.svg',
		) );
		$this->add_css( 'font-awesome' );

	}

}

FLBuilder::register_module( '\BP_BB\TextSeparator', array(
	'content' => array(
		'title'    => __( 'Content', 'bp-bb' ),
		'sections' => array(
			'title' => array(
				'title'  => __( 'Title', 'bp-bb' ),
				'fields' => array(
					'title'        => array(
						'label'       => __( 'Title', 'bp-bb' ),
						'type'        => 'text',
						'default'     => 'Text separator',
						'placeholder' => 'Enter text',
						'preview'     => array(
							'type'     => 'text',
							'selector' => '.bp-ts-title span',
							'property' => 'text'
						),
						'connections' => array( 'string' ),
					),
					'html_tag'     => array(
						'label'   => __( 'HTML Tag', 'bp-bb' ),
						'type'    => 'select',
						'default' => 'div',
						'options' => array(
							'h1'   => __( 'H1', 'bp-bb' ),
							'h2'   => __( 'H2', 'bp-bb' ),
							'h3'   => __( 'H3', 'bp-bb' ),
							'h4'   => __( 'H4', 'bp-bb' ),
							'h5'   => __( 'H5', 'bp-bb' ),
							'h6'   => __( 'H6', 'bp-bb' ),
							'div'  => __( 'div', 'bp-bb' ),
							'span' => __( 'span', 'bp-bb' ),
							'p'    => __( 'p', 'bp-bb' ),
						),
					),
					'bp_alignment' => array(
						'type'       => 'align',
						'label'      => __( 'Alignment', 'bp-bb' ),
						'default'    => 'center',
						'responsive' => true,
					),
				),
			),

			'icon' => array(
				'title'  => __( 'Icon', 'bp-bb' ),
				'fields' => array_merge(
					Helper::instance()->bp_icon( [
						'name'         => 'ts',
						'label'        => '',
						'icon_align'   => false,
					] ),
					array(
						'ts_icon_align' => array(
							'label'   => __( 'Icon Alignment', 'bp-bb' ),
							'type'    => 'button-group',
							'default' => 'before',
							'options' => array(
								'before' => __( 'Before Text', 'bp-bb' ),
								'after'  => __( 'After Text', 'bp-bb' ),
							),
						),
					)
				),
			),

			'divider' => array(
				'title'  => __( 'Divider', 'bp-bb' ),
				'fields' => array(

					'divider_style'     => array(
						'type'    => 'select',
						'label'   => __( 'Style', 'bp-bb' ),
						'default' => 'solid',
						'options' => array(
							'solid'  => _x( 'Solid', 'bp-bb' ),
							'dashed' => _x( 'Dashed', 'bp-bb' ),
							'dotted' => _x( 'Dotted', 'bp-bb' ),
							'double' => _x( 'Double', 'bp-bb' ),
						),
						'preview' => array(
							'type'     => 'css',
							'selector' => '.bp-ts-wrapper .bp-ts-sep-holder .bp-ts-sep-lines',
							'property' => 'border-top-style',
						),
						'help'    => __( 'The type of border to use. Double borders must have a height of at least 3px to render properly.', 'bp-bb' ),
					),
					'divider_weight'    => array(
						'label'     => __( 'Height', 'bp-bb' ),
						'type'      => 'unit',
						'default'   => '1',
						'maxlength' => '2',
						'size'      => '3',
						'sanitize'  => 'absint',
						'slider'    => true,
						'preview'   => array(
							'type'     => 'css',
							'selector' => '.bp-ts-wrapper .bp-ts-sep-holder .bp-ts-sep-lines',
							'property' => 'border-top-width',
							'unit'     => 'px'
						),
						'units'     => array(
							'px'
						),
					),
					'divider_width'     => array(
						'type'      => 'unit',
						'label'     => __( 'Width', 'bp-bb' ),
						'default'   => '100',
						'maxlength' => '3',
						'size'      => '4',
						'sanitize'  => 'absint',
						'units'     => array(
							'%',
							'px',
							'vw',
						),
						'slider'    => array(
							'px' => array(
								'min'  => 0,
								'max'  => 1000,
								'step' => 10,
							),
						),
						'preview'   => array(
							'type'     => 'css',
							'selector' => '.bp-ts-wrapper',
							'property' => 'max-width',
						),
					),
					'divider_alignment' => array(
						'type'    => 'align',
						'label'   => __( 'Alignment', 'bp-bb' ),
						'default' => 'center',
						'values'  => array(
							'left'   => '0 0 0 0',
							'center' => 'auto',
							'right'  => '0 0 0 auto',
						),
						'preview' => array(
							'type'     => 'css',
							'selector' => '.bp-ts-wrapper',
							'property' => 'margin',
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
				'title'  => __( 'Title', 'bp-bb' ),
				'fields' => array(
					'heading_color' => array(
						'type'       => 'color',
						'show_reset' => true,
						'show_alpha' => true,
						'label'      => __( 'Color', 'bp-bb' ),
						'connections' => array( 'color' ),
						'default'     => '',
						'preview'    => array(
							'type'      => 'css',
							'selector'  => '.bp-ts-wrapper .bp-ts-title .bp-ts-heading-title',
							'property'  => 'color',
							'important' => true,
						),
					),
					'typography'    => array(
						'type'       => 'typography',
						'label'      => __( 'Typography', 'bp-bb' ),
						'responsive' => true,
						'preview'    => array(
							'type'      => 'css',
							'selector'  => '.bp-ts-wrapper .bp-ts-title .bp-ts-heading-title',
							'important' => true,
						),
					),
				),
			),

			'ts_icon_style' => array(
				'title'  => __( 'Icon', 'bp-bb' ),
				'fields' => array_merge(
					Helper::instance()->bp_icon_style( [
						'name'                          => 'ts',
						'label'                         => '',
						'selector'                      => '.bp-ts-wrapper .ts-icon-wrapper .ts-icon-inner',
						'default_icon_color'            => '6ec1e4',
						'default_icon_background_color' => 'fff',
					] )
				)
			),

			'divider' => array(
				'title'  => __( 'Divider', 'bp-bb' ),
				'fields' => array(
					'divider_color' => array(
						'type'       => 'color',
						'label'      => __( 'Color', 'bp-bb' ),
						'default'    => 'cccccc',
						'connections' => array( 'color' ),
						'show_alpha' => true,
						'preview'    => array(
							'type'     => 'css',
							'selector' => '.bp-ts-wrapper .bp-ts-sep-holder .bp-ts-sep-lines',
							'property' => 'border-top-color',
						),
					)
				),
			),
		),
	)
) );