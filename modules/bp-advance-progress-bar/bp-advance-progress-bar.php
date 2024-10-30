<?php

namespace BP_BB;

use FLBuilder;

/**
 * @class ProgressBar
 */
class AdvanceProgressBar extends \BP_BB\ModuleBase {

	/**
	 * Constructor function for the module. You must pass the
	 * name, description, dir and url in an array to the parent class.
	 *
	 * @method __construct
	 */

	public function __construct() {
		parent::__construct( array(
			'name'            => __( 'Advance Progress Bar', 'bp-bb' ),
			'description'     => __( 'A module to display Progress Bar.', 'bp-bb' ),
			'group'           => 'Beaver Booster',
			'category'        => __( 'Advance Modules', 'bp-bb' ),
			'dir'             => BP_BB_MODULE_PATH . '/bp-advance-progress-bar/',
			'url'             => BP_BB_MODULE_URL . '/bp-advance-progress-bar/',
			'editor_export'   => true, // Defaults to true and can be omitted.
			'enabled'         => true, // Defaults to true and can be omitted.
			'partial_refresh' => true,
			'icon'            => 'chart-bar.svg',
		) );
		$this->add_css( 'font-awesome' );
        $this->add_js( 'jquery-waypoints' );
	}
}

FLBuilder::register_module( '\BP_BB\AdvanceProgressBar', array(
	'content' => array(
		'title'    => __( 'Content', 'bp-bb' ),
		'sections' => array(
			'progress_bar' => array(
				'title'  => __( 'Progress Bar', 'bp-bb' ),
				'fields' => array(
					'skin_type'  => array(
						'label'   => __( 'Type', 'bp-bb' ),
						'type'    => 'select',
						'default' => '1',
						'options' => array(
							'1' => __( 'Skin 1', 'bp-bb' ),
							'2' => __( 'Skin 2', 'bp-bb' ),
							'3' => __( 'Skin 3', 'bp-bb' ),
							'4' => __( 'Skin 4', 'bp-bb' ),
                            '5' =>  __('Skin 5' , 'bp-bb'),
						),
                        'toggle'    =>  array(
                            '1' =>  array(
                                'fields'    =>  ['bar_color']
                            ),
                            '2' =>  array(
                                'fields'    =>  ['bar_gradient']
                            ),
                            '3' =>  array(
                                'fields'    =>  ['bar_color']
                            ),
                            '4' =>  array(
                                'fields'    =>  ['bar_color']
                            ),
                            '5' =>  array(
                                'fields'    =>  ['bar_color']
                            ),

                        ),
					),
					'percent'   => array(
						'type'      => 'unit',
						'label'     => __( 'Percentage', 'bp-bb' ),
						'default'   => '50',
						'units'     => array(
							'%'
						),
                        'sanitize'		=> 'absint',
						'maxlength' => '3',
						'slider'    => array(
							'%' => array(
								'min'  => 0,
								'max'  => 100,
								'step' => 1,
							),
						),
					),
                    'bar_title' => array(
                        'label'   => __( 'Title', 'bp-bb' ),
                        'type'    => 'text',
                        'default' => 'My Skills',
                        'connections'    =>  array('string'),
                        'preview' => array(
                            'type'     => 'text',
                            'selector' => '.progress-bar__skill',
                            'property' => 'text'
                        ),
                    ),
                    'show_percent'  =>  array(
                        'label' =>  __('Show Percent' , 'bp-bb'),
                        'type'  =>  'button-group',
                        'default'   =>  'show',
                        'options'   =>  array(
                            'show'  =>  __('Show' , 'bp-bb'),
                            'hide'  =>  __('Hide' , 'bp-bb'),
                        ),
                    ),
                    'show_title'  =>  array(
                        'label' =>  __('Show Title' , 'bp-bb'),
                        'type'  =>  'button-group',
                        'default'   =>  'show',
                        'options'   =>  array(
                            'show'  =>  __('Show' , 'bp-bb'),
                            'hide'  =>  __('Hide' , 'bp-bb'),
                        ),
                    ),
                ),
			),
		),
	),
	'style'   => array(
		'title'    => __( 'Style', 'bp-bb' ),
		'sections' => array(
			'progress_bar'    => array(
				'title'  => __( 'Progress Bar', 'bp-bb' ),
				'fields' => array(
					'bar_color'             => array(
						'label'      => __( 'Progress Color', 'bp-bb' ),
						'type'       => 'color',
						'default'    => '',
						'show_reset' => true,
						'show_alpha' => true,
                        'connections'    =>  array('color'),
						'preview'    => array(
							'type'     => 'css',
							'rules'    =>  array(
							    array(
                                    'selector' => '.bp-progress-bar .progress-bar__bar .progress-bar__bar-inner',
                                    'property' => 'background-color',
                                ),
                                array(
                                    'selector' => '.bp-progress-bar .progress-bar__value--3',
                                    'property' => 'background-color',
                                ),
                                array(
                                    'selector'  =>  '.bp-progress-bar .progress-bar__value--3:after , .bp-progress-bar .progress-bar__bar-inner--3:after',
                                    'property'  =>  'border-top-color'
                                ),
                                array(
                                    'selector'  =>  '.bp-progress-bar .progress-bar__bar-inner--4:after',
                                    'property'  =>  'background-color'
                                ),
                            ),

						),
					),
                    'bar_gradient' => array(
                        'label'   => __( 'Gradient', 'bp-bb' ),
                        'type'    => 'gradient',
                    ),
					'bar_background_color'  => array(
						'label'      => __( 'Background Color', 'bp-bb' ),
						'type'       => 'color',
						'default'    => '',
						'show_alpha' => true,
						'show_reset' => true,
                        'connections'    =>  array('color'),
						'preview'    => array(
							'type'     => 'css',
							'selector' => '.bp-progress-bar .progress-bar__bar',
							'property' => 'background-color'
						),
					),
					/*'bar_border'            => array(
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
							'type'  => 'css',
							'selector' => '.bp-progress-wrapper'
						),
					),*/
					'text_color'      => array(
						'type'       => 'color',
						'show_reset' => true,
						'show_alpha' => true,
                        'connections'    =>  array('color'),
						'label'      => __( 'Text Color', 'bp-bb' ),
						'preview'    => array(
							'type'      => 'css',
							'rules' =>  array(
							    array(
							        'selector'  =>  '.bp-progress-bar .progress-bar__skill',
                                    'property'  =>  'color'
                                ),
                                array(
                                    'selector'  =>  '.bp-progress-bar .progress-bar__value',
                                    'property'  =>  'color'
                                ),
                            ),
						),
					),
					'text_typography' => array(
						'type'       => 'typography',
						'label'      => __( 'Typography', 'bp-bb' ),
						'responsive' => true,
						'preview'    => array(
                            'type'      => 'css',
                            'rules' =>  array(
                                array(
                                    'selector'  =>  '.bp-progress-bar .progress-bar__skill',
                                    'property'  =>  'color'
                                ),
                                array(
                                    'selector'  =>  '.bp-progress-bar .progress-bar__value',
                                    'property'  =>  'color'
                                ),
                            ),

						),
					)
				)
			),
        ),

	),

) );