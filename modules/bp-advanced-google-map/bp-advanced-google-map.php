<?php

namespace BP_BB;

//use FLBuilderModule;
use FLBuilder;

/**
 * @Class AdvancedGoogleMap
 **/
class AdvancedGoogle_Map extends \BP_BB\ModuleBase {
	/**
	 * Constructor function for the module. You must pass the
	 * name, description, dir and url in an array to the parent class.
	 *
	 * @method __construct
	 */

	public function __construct() {
		parent::__construct( array(
			'name'            => __( 'Advanced Google Map', 'bp-bb' ),
			'description'     => __( 'A module to display google map.', 'bp-bb' ),
			'group'           => 'Beaver Booster',
			'category'        => __( 'Advance Modules', 'bp-bb' ),
			'dir'             => BP_BB_MODULE_PATH . '/bp-advanced-google-map/',
			'url'             => BP_BB_MODULE_URL . '/bp-advanced-google-map/',
			'editor_export'   => true, // Defaults to true and can be omitted.
			'enabled'         => true, // Defaults to true and can be omitted.
			'partial_refresh' => true,
			'icon'            => 'location.svg',
		) );
		$this->add_css( 'font-awesome' );

		if ( ! empty( BP_BB_GMAP_KEY ) ) {
			$this->add_js( 'bp-gmap', 'https://maps.googleapis.com/maps/api/js?key=' . BP_BB_GMAP_KEY, array( 'jquery' ), '', true );
			$this->add_js( 'bp-gmap-clusterer', BP_BB_ASSETS_URL . 'js/markerclusterer.js',array( 'jquery' ), '', true);
		}

	}

}


FLBuilder::register_module( '\BP_BB\AdvancedGoogle_Map', array(
	'content' => array(
		'title'    => __( 'Content', 'bp-bb' ),
		'sections' => array(
			'title' => array(
				'title'  => __( 'General', 'bp-bb' ),
				'fields' => array_merge(
					Helper::instance()->chk_google_map_api(),
					array(
						'markers' => array(
							'type'      => 'form',
							'label'     => __('Markers','bp-bb'),
							'form'      => 'markers_form',
							'multiple'  => true
						),
						'cluster'       => array(
							'type'      => 'button-group',
							'label'     => 'Cluster',
							'default'   =>  'enable',
							'options'   => array(
								'enable' => __( 'Enable', 'bp-bb' ),
								'disable' => __( 'Disable', 'bp-bb' ),

							),
							'toggle'    => array(
								'enable' => array(
									'fields'    => array('cluster_style')
								)
							)
						),
						'cluster_style'    => array(
							'label'   => __( 'Cluster Style', 'bp-bb' ),
							'type'    => 'select',
							'default' => 'null',
							'options' => array(
								'0' => __( 'Default', 'bp-bb' ),
								'1'   => __( 'People', 'bp-bb' ),
								'2'   => __( 'Conversation', 'bp-bb' ),
								'3'   => __( 'Heart', 'bp-bb' ),
								'4'   => __( 'Pin', 'bp-bb' ),
							)
						),
						'height'    => array(
							'type'      => 'unit',
							'label'     => __('Height','bp-bb'),
							'units'     => array('px'),
							'responsive'=> true,
							'slider'    => true,
							'default'   => 200,
							'preview'   => array(
								'type'      => 'css',
								'selector'  => '.bp-markers',
								'property'  => 'height',
								'unit'      => 'px'
							)
						),
						'zoom'                 => array(
							'label'       => __( 'Zoom', 'bp-bb' ),
							'type'        => 'unit',
							'default'     => 8,
						),
						'animate'    => array(
							'label'   => __( 'Animate Marker', 'bp-bb' ),
							'type'    => 'button-group',
							'default' => 'no',
							'options' => array(
								'yes' => __( 'Yes', 'bp-bb' ),
								'no'   => __( 'No', 'bp-bb' ),
							)
						),
						'border'        => array(
							'label'     => __('Border','bp-bb'),
							'type'      => 'border',
							'responsive'=> true,
							'preview'   => array(
								'type'      => 'css',
								'selector'  => '.bp-markers',
							)
						),
						'snazzy_style'         => array(
							'label'       => __( 'Snazzy Style', 'bp-bb' ),
							'type'        => 'bp-editor',
							'rows'        => '8',
							'default'     => '',
							'placeholder' => __( 'Insert JSON String', 'bp-bb' ),
							'description' => __( '<div class="bp-notice">Add style from Snazzy Maps. Copy and Paste style array from here -> <a href="https://snazzymaps.com/explore" target="_blank" style="color: #6f1b47">Snazzy Maps</a></div>', 'bp-bb' ),
						),
					)
				),
			),
		),
	)
) );
FLBuilder::register_settings_form( 'markers_form', array(
	'title' => __( 'Markers', 'bp-bb' ),
	'tabs'  => array(
		'general' => array(
			'title'    => __( 'General', 'bp-bb' ),
			'sections' => array(
				'general'  => array(
					'title'  => '',
					'fields' => array(
						'bp_lat'          => array(
							'label'       => __( 'Latitude', 'bp-bb' ),
							'type'        => 'text',
							'default'     => '28.612912',
							'placeholder' => 'Enter your Latitude Value',
						),
						'bp_lng'          => array(
							'label'       => __( 'Longitude', 'bp-bb' ),
							'type'        => 'text',
							'default'     => '77.229510',
							'placeholder' => 'Enter your Longitude Value',
						),
						'bp_address'      => array(
							'label'       => __( 'Address', 'bp-bb' ),
							'type'        => 'textarea',
							'default'     => '',
							'placeholder' => 'Enter your Address',
						),
						'bp_info_on_load'      => array(
							'label'       => __( 'Info Window on load', 'bp-bb' ),
							'type'        => 'button-group',
							'default'     => 'no',
							'options'     => array(
								'yes'       => __('Yes','bp-bb'),
								'no'       => __('No','bp-bb')
							)
						),
						'bp_icon'      => array(
							'label'       => __( 'Icon', 'bp-bb' ),
							'type'        => 'photo',
							'default'     => '',
							'show_remove' => true,
							'show'        => array(
								'fields'   => ['bp_icon_size'],
							)
						),
						'bp_icon_size'      => array(
							'label'       => __( 'Icon Size', 'bp-bb' ),
							'type'        => 'unit',
							'default' => '50',
							'slider'  => true,
							'responsive'=>  true,
							'units'   => array(
								'px'
							),
						),
					)
				)
			)
		)
	)
) );