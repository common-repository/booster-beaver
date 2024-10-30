<?php

namespace BP_BB;

use FLBuilder;

/**
 * @class Spacer
 */
class Spacer extends \BP_BB\ModuleBase {
	/**
	 * Constructor function for the module. You must pass the
	 * name, description, dir and url in an array to the parent class.
	 *
	 * @method __construct
	 */
	public function __construct() {
		parent::__construct( array(
			'name'            => __( 'Spacer', 'bp-bb' ),
			'description'     => __( 'A module to display Space.', 'bp-bb' ),
			'group'           => 'Beaver Booster',
			'category'        => __( 'Advance Modules', 'bp-bb' ),
			'dir'             => BP_BB_MODULE_PATH . '/bp-spacer/',
			'url'             => BP_BB_MODULE_URL . '/bp-spacer/',
			'editor_export'   => true, // Defaults to true and can be omitted.
			'enabled'         => true, // Defaults to true and can be omitted.
			'partial_refresh' => true,
			'icon'            => 'minus.svg',
		) );
		$this->add_css( 'font-awesome' );
	}
}

FLBuilder::register_module( '\BP_BB\Spacer', array(
	'content' => array(
		'title'    => __( 'Content', 'bp-bb' ),
		'sections' => array(
			'spacer' => array(
				'title'  => '',
				'fields' => array(
					'space' => array(
						'label'      => __( 'Space', 'bp-bb' ),
						'type'       => 'unit',
						'size'       => '80',
						'sanitize' => 'absint',
						'responsive' => true,
						'preview'    => array(
							'type'     => 'css',
							'selector' => '.bp-spacer-inner',
							'property' => 'height',
							'unit'     => 'px'
						),
						'slider'     => true,
						'units'      => array(
							'px'
						),
					),
				),
			),
		),
	),
) );
