<?php

namespace BP_BB;

use FLBuilder;

/**
 * @class FlipBox
 */
class TeamMember extends \BP_BB\ModuleBase {

    /**
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */

    public function __construct() {

        parent::__construct( array(
            'name'            => __( 'Team Member', 'bp-bb' ),
            'description'     => __( 'A module to display Team Member.', 'bp-bb' ),
            'group'           => 'Beaver Booster',
            'category'        => __( 'Advance Modules', 'bp-bb' ),
            'dir'             => BP_BB_MODULE_PATH . '/bp-teammember/',
            'url'             => BP_BB_MODULE_URL . '/bp-teammember/',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => true,
            'icon'            => 'icon.svg',

        ) );
        $this->add_css( 'font-awesome' );
	    $this->add_js( 'jquery-masonry' );
    }
}

FLBuilder::register_module( '\BP_BB\TeamMember', array(
    'content'   =>  array(
        'title' =>  __('General' , 'bp-bb'),
        'sections'  =>  array(
            'layout'    =>  array(
                'title' =>  __('Layout Setting' , 'li-bb'),
                'fields'    =>  array(
                    'skin'  =>  array(
                        'label' =>  __('Skin' , 'bp-bb'),
                        'type'  =>  'select',
                        'default'   =>  'skin1',
                        'options'   =>  array(
                            'skin-1' =>  __('Skin 1' , 'bp-bb'),
                            'skin-2' =>  __('Skin 2' , 'bp-bb'),
                            'skin-3' =>  __('Skin 3' , 'bp-bb'),
                            'skin-4'    =>  __('Skin 4' , 'bp-bb'),
                        ),
                        'toggle'  =>    array(
                            'skin-2'    =>  array(
                                'fields'    =>  ['skin2_destination_bg'],
                            ),
                        ),
                    ),
                    'columns'    =>  array(
                        'label' =>  __('Column' , 'bp-bb'),
                        'type'  =>  'unit',
                        'responsive'    =>  array(
                            'default'   =>  array(
                                'default'   =>  '3',
                                'medium'    =>  '2',
                                'responsive'    =>  '1',
                            ),
                        ),
                        'sanitize' => 'absint',
                        'slider'    =>  true,
                    ),
                    'masonry_layout'    =>  array(
                        'label' =>  __('Masonry' , 'bp-bb'),
                        'type'  =>  'button-group',
                        'default'   =>  'no',
                        'options'   =>  array(
                            'no'    =>  __('No' , 'bp-bb'),
                            'yes'   =>  __('Yes' , 'bp-bb'),
                        ),
                    ),
                    'gutter'    =>  array(
                        'label' =>  __('Gutter Margin' , 'bp-bb'),
                        'type'  =>  'unit',
                        'responsive'    =>  array(
                            'default'   =>  array(
                                'default'   =>  '10',
                                'medium'    =>  '12',
                                'responsive'    =>  '5',
                            ),
                        ),
                        'slider'    =>  true,
                    ),
                )

            ),
            'team_members'  =>  array(
                'title' =>  __('Team Members' , 'bp-bb'),
                'fields'    =>  array(
                    'team_member_list'  =>  array(
                        'label' =>  __('Team Member' , 'bp-bb'),
                        'type'         => 'form',
                        'form'         => 'teammembers',
                        'preview_text' => 'person_name',
                        'multiple'     => true,
                    ),
                ),
            ),

        ),
    ),
    'style'     =>  array(
        'title' =>  __('Style' , 'bp-bb'),
        'sections'  =>  array(
            'box_style' =>  array(
                'title' =>  __('Box' , 'bp-bb'),
                'fields'    =>  array(
                    'box_background'    =>  array(
                        'type'  =>  'button-group',
                        'label' =>  __('Background' , 'bp-bb'),
                        'default'   =>  'color',
                        'options'    =>  array(
                            'color' =>  __('Color' , 'bp-bb'),
                            'gradient' =>  __('Gradient' , 'bp-bb'),
                        ),
                        'toggle'    =>  array(
                            'color' =>  array(
                                'fields'    =>  array( 'box_background_color'),
                            ),
                            'gradient' =>  array(
                                'fields'    =>  array( 'box_background_gradient'),
                            ),
                        ),
                    ),
                    'box_background_color'    =>  array(
                        'type'  =>  'color',
                        'label' =>  __('Background Color' , 'bp-bb'),
                        'show_reset'    =>  true,
                        'show_alpha'    =>  true,
                        'default'   => '',
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper',
                            'property'  =>  'background-color',
                        ),
                    ),
                    'box_background_gradient'    =>  array(
                        'type'  =>  'gradient',
                        'label' =>  __('Background Gradient' , 'bp-bb'),
                        'default'   => '',
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper',
                            'property'  =>  'background-image',
                        ),
                    ),
                    'box_padding'    =>  array(
                        'label' =>  __('Padding' , 'bp-bb'),
                        'type'  =>  'dimension',
                        'responsive'    =>  true,
                        'units' =>  [
                            '%',
                            'px',
                        ],
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper',
                            'property'  =>  'padding',
                        ),
                    ),
                    'box_border'    =>  array(
                        'label' =>  __('Border', 'bp-bb'),
                        'type'  =>  'border',
                        'unit' =>  'px',
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper'
                        ),
                    ),
                ),
            ),
            'image_style'   => array(
                'title' =>  __('Image' , 'bp-bb'),
                'fields'    =>  array(
                    'image_size'    =>  array(
                        'label' =>  __('Image Size' , 'bp-bb'),
                        'type' =>   'unit',
                        'responsive'    =>  true,
                        'units' =>  [
                            'px',
                            '%'
                        ],
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper .team-member-avatar-wrapper img',
                            'property'  =>  'width',
                        )
                    ),
                    'image_border' =>  array(
                        'label' =>  __('Border' , 'bp-bb'),
                        'type'  =>  'border',
                        'default'   =>  '',
                        'preview'  =>   array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper .team-member-avatar-wrapper img',
                        ),
                    ),

                    'image_align' =>  array(
                        'label' =>  __('Alignment' , 'bp-bb'),
                        'type'  =>  'align',
                        'responsive'    =>  true,
                        'default'   =>  'center',
                        'preview'       => array(
                            'type'          => 'css',
                            'selector'      => '.bp-grid-wrapper .team-member-wrapper .team-member-avatar-wrapper',
                            'property'		=> 'text-align',
                            'important'		=> true,
                        ),
                    ),
                ),
            ),
            'name_style'   => array(
                'title' =>  __('Name' , 'bp-bb'),
                'fields'    =>  array(
                    'name_color' =>  array(
                        'label' =>  __('Color' , 'bp-bb'),
                        'type'  =>  'color',
                        'show_reset'    =>  true,
                        'show_alpha'    =>  true,
                        'default'   =>  '001c6b',
                        'preview'  =>   array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper .team-member-name',
                            'property'  =>  'color'
                        ),
                    ),
                    'name_typography'    =>  array(
                        'label' =>  __('Typography' , 'bp-bb'),
                        'type' =>   'typography',
                        'responsive'    =>  true,
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper .team-member-name',
                            'important' =>  true,
                        )
                    ),
                    'name_margin'    =>  array(
                        'label' =>  __('Margin' , 'bp-bb'),
                        'type'  =>  'dimension',
                        'responsive'    =>  true,
                        'units' =>  [
                            '%',
                            'px',
                        ],
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper .team-member-name-wrapper',
                            'property'  =>  'margin',
                        ),
                    ),

                ),
            ),
            'designation_style'   => array(
                'title' =>  __('Designation' , 'bp-bb'),
                'fields'    =>  array(
                    'designation_color' =>  array(
                        'label' =>  __('Color' , 'bp-bb'),
                        'type'  =>  'color',
                        'show_reset'    =>  true,
                        'show_alpha'    =>  true,
                        'default'   =>  '00529b',
                        'preview'  =>   array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper .team-member-designation',
                            'property'  =>  'color'
                        ),
                    ),
                    'skin2_destination_bg' =>  array(
                        'label' =>  __('Color' , 'bp-bb'),
                        'type'  =>  'color',
                        'show_reset'    =>  true,
                        'show_alpha'    =>  true,
                        'default'   =>  '00529b',
                        'preview'  =>   array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper .team-member-designation-wrapper',
                            'property'  =>  'background-color'
                        ),
                    ),
                    'designation_typography'    =>  array(
                        'label' =>  __('Typography' , 'bp-bb'),
                        'type' =>   'typography',
                        'responsive'    =>  true,
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper .team-member-designation',
                            'important' =>  true,
                        )
                    ),
                    'designation_margin'    =>  array(
                        'label' =>  __('Margin' , 'bp-bb'),
                        'type'  =>  'dimension',
                        'responsive'    =>  true,
                        'units' =>  [
                            '%',
                            'px',
                        ],
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper .team-member-designation-wrapper',
                            'property'  =>  'margin',
                        ),
                    ),

                ),
            ),
            'message_style'   => array(
                'title' =>  __('Message' , 'bp-bb'),
                'fields'    =>  array(
                    'message_color' =>  array(
                        'label' =>  __('Color' , 'bp-bb'),
                        'type'  =>  'color',
                        'show_reset'    =>  true,
                        'show_alpha'    =>  true,
                        'default'   =>  '',
                        'preview'  =>   array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper .team-member-message-wrapper p',
                            'property'  =>  'color'
                        ),
                    ),
                    'message_background_color' =>  array(
                        'label' =>  __('Background Color' , 'bp-bb'),
                        'type'  =>  'color',
                        'show_reset'    =>  true,
                        'show_alpha'    =>  true,
                        'default'   =>  '',
                        'preview'  =>   array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper .team-member-message-wrapper',
                            'property'  =>  'background-color',
                        ),
                    ),
                    'message_typography'    =>  array(
                        'label' =>  __('Typography' , 'bp-bb'),
                        'type' =>   'typography',
                        'responsive'    =>  true,
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper .team-member-message-wrapper p',
                            'important' =>  true,
                        )
                    ),
                    'message_padding'    =>  array(
                        'label' =>  __('Padding' , 'bp-bb'),
                        'type'  =>  'dimension',
                        'responsive'    =>  true,
                        'units' =>  [
                            '%',
                            'px',
                        ],
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper .team-member-message-wrapper',
                            'property'  =>  'padding',
                        ),
                    ),
                    'message_margin'    =>  array(
                        'label' =>  __('Margin' , 'bp-bb'),
                        'type'  =>  'dimension',
                        'responsive'    =>  true,
                        'units' =>  [
                            '%',
                            'px',
                        ],
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper .team-member-message-wrapper',
                            'property'  =>  'margin',
                        ),
                    ),
                ),
            ),
            'icon_style'    =>  array(
                'title' =>  __('Icon' , 'bp-bb'),
                'fields'    =>  array(
                    'icon_color_type'    => array(
                        'label' =>  __('Color Type' , 'bp-bb'),
                        'type'  =>  'select',
                        'options'    =>  array(
                            'official'   =>  __('Official Color' , 'bp-bb'),
                            'custom'    =>  __('Custom' , 'bp-bb')
                        ),
                        'default'   =>  'official',
                        'toggle'    =>  array(
                            'custom'    =>  array(
                                'fields'    =>  ['icon_color']
                            ),
                        ),
                    ),
                    'icon_color'    =>  array(
                        'label' =>  __('Color' , 'bp-bb'),
                        'type'  =>  'color',
                        'show_reset'    =>  true,
                        'show_alpha'    =>  true,
                        'default'   =>  '56002c',
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper .team-member-social-wrapper i',
                            'property'  =>  'color',
                        ),
                    ),
                    'icon_background_color'    =>  array(
                        'label' =>  __('Background Color' , 'bp-bb'),
                        'type'  =>  'color',
                        'show_reset'    =>  true,
                        'show_alpha'    =>  true,
                        'default'   =>  '',
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper .team-member-social-wrapper a',
                            'property'  =>  'background-color',
                        ),
                    ),
                    'icon_size' =>  array(
                        'label' =>  __('Size' , 'bp-bb'),
                        'type'  =>  'unit',
                        'responsive'    =>  array(
                            'default'   =>  array(
                                'default'   =>  '15',
                                'medium'    =>  '13',
                                'responsive'    =>  '20',
                            )
                        ),
                        'units'  =>  ['px' , '%'],
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper .team-member-social-wrapper a i',
                            'property'  =>  'font-size',
                        ),
                    ),
                    'icon_spacing' =>  array(
                        'label' =>  __('Space' , 'bp-bb'),
                        'type'  =>  'unit',
                        'responsive'    =>  array(
                            'default'   =>  array(
                                'default'   =>  '7',
                                'medium'    =>  '5',
                                'responsive'    =>  '8',
                            )
                        ),
                        'units'  =>  ['px' , '%'],
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper .team-member-social-wrapper a',
                            'property'  =>  'margin-right',
                        ),
                    ),
                    'icon_align'    =>  array(
                        'label' =>  __('Alignment' , 'bp-bb'),
                        'type'  =>  'align',
                        'default'    => 'center',
                        'responsive' => true,
                        'preview'    => array(
                            'type'     => 'css',
                            'property' => 'text-align',
                            'selector' => '.bp-grid-wrapper .team-member-wrapper .team-member-social-wrapper',

                        ),
                    ),

                    'icon_padding'    =>  array(
                        'label' =>  __('Padding' , 'bp-bb'),
                        'type'  =>  'unit',
                        'responsive'    =>  array(
                            'default'   =>  array(
                                'default'   =>  '5',
                                'medium'    =>  '5',
                                'responsive'    =>  '5',
                            ),
                        ),
                        'units' =>  [
                            'px',
                        ],
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper .team-member-social-wrapper a',
                            'property'  =>  'padding',
                        ),
                    ),

                    'icon_margin'    =>  array(
                        'label' =>  __('Margin' , 'bp-bb'),
                        'type'  =>  'dimension',
                        'responsive'    =>  true,
                        'units' =>  [
                            '%',
                            'px',
                        ],
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper .team-member-social-wrapper',
                            'property'  =>  'margin',
                        ),
                    ),
                    'icon_border'   =>  array(
                        'label' =>  __('Border' , 'bp-bb'),
                        'type'  =>  'border',
                        'responsive'    =>  true,
                        'unit'  =>  'px',
                        'preview'   =>  array(
                            'type'  =>  'css',
                            'selector'  =>  '.bp-grid-wrapper .team-member-wrapper .team-member-social-wrapper a',
                            'unit'  =>  'px',
                        ),
                    ),
                ),
            ),
        ),
    ),
));
FLBuilder::register_settings_form( 'teammembers', array(
    'title' => __( 'Add Team Members', 'bp-bb' ),
    'tabs'  => array(
        'general' => array(
            'title'    => __( 'General', 'bp-bb' ),
            'sections' => array(
                'general' => array(
                    'title'  => '',
                    'fields' => array(
                        'person_name' => array(
                            'type'        => 'text',
                            'label'       => __( 'Person ', 'bp-bb' ),
                            'default'     => 'XYZ',
                            'connections'   => array( 'text' ),
                        ),
                        'person_image' => array(
                            'label'   => __( 'Avatar', 'bp-bb' ),
                            'type'    => 'photo',
                            'connections'   => array( 'photo' ),
                            'show_remove'   =>  true,
                        ),
                        'designation'   =>  array(
                            'type'  =>  'text',
                            'label' =>  __('Designation' , 'bp-bb'),
                            'default'   =>  'ETC',
                            'connections'   => array( 'text' ),
                        ),
                        'message'   =>  array(
                            'type'  =>  'editor',
                            'label' =>  __('Message' , 'bp-bb'),
                            'default'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
                            'media_buttons' => true,
                            'wpautop'       => true,
                        ),
                        'social_profile_1'  =>  array(
                            'label' =>  __('Social Site' , 'bp-bb'),
                            'type'  =>  'select',
                            //'multiple'  =>  true,
                            'options'   =>  array(
                                'facebook'  =>  __('Facebook' , 'bp-bb'),
                                'twitter'   =>  __('Twitter' , 'bp-bb'),
                                'skype' =>  __('Skype' , 'bp-bb'),
                                'google-plus-g'   =>  __('Google Plus' , 'bp-bb'),
                                'instagram' =>  __('Instagram' , 'bp-bb'),
                                'linkedin'  =>  __('Linkedin' , 'bp-bb')

                            ),
                            'default'   =>  'facebook',
                        ),
                        'social_link_1' =>  array(
                            'label'   => __( 'Link', 'bp-bb' ),
                            'type'    => 'link',
                            'default' => '#',
                            'connections'   => array( 'url' ),
                            //'multiple'  =>  true,
                        ),
                        'social_profile_2'  =>  array(
                            'label' =>  __('Social Site' , 'bp-bb'),
                            'type'  =>  'select',
                            //'multiple'  =>  true,
                            'options'   =>  array(
                                'facebook'  =>  __('Facebook' , 'bp-bb'),
                                'twitter'   =>  __('Twitter' , 'bp-bb'),
                                'skype' =>  __('Skype' , 'bp-bb'),
                                'google-plus-g'   =>  __('Google Plus' , 'bp-bb'),
                                'instagram' =>  __('Instagram' , 'bp-bb'),
                                'linkedin'  =>  __('Linkedin' , 'bp-bb')

                            ),
                            'default'   =>  'twitter',
                        ),
                        'social_link_2' =>  array(
                            'label'   => __( 'Link', 'bp-bb' ),
                            'type'    => 'link',
                            'default' => '#',
                            'connections'   => array( 'url' ),
                            //'multiple'  =>  true,
                        ),
                        'social_profile_3'  =>  array(
                            'label' =>  __('Social Site' , 'bp-bb'),
                            'type'  =>  'select',
                            //'multiple'  =>  true,
                            'options'   =>  array(
                                'facebook'  =>  __('Facebook' , 'bp-bb'),
                                'twitter'   =>  __('Twitter' , 'bp-bb'),
                                'skype' =>  __('Skype' , 'bp-bb'),
                                'google-plus-g'   =>  __('Google Plus' , 'bp-bb'),
                                'instagram' =>  __('Instagram' , 'bp-bb'),
                                'linkedin'  =>  __('Linkedin' , 'bp-bb')

                            ),
                            'default'   =>  'skype',
                        ),
                        'social_link_3' =>  array(
                            'label'   => __( 'Link', 'bp-bb' ),
                            'type'    => 'link',
                            'default' => '#',
                            'connections'   => array( 'url' ),
                            //'multiple'  =>  true,
                        ),
                        'social_profile_4'  =>  array(
                            'label' =>  __('Social Site' , 'bp-bb'),
                            'type'  =>  'select',
                            //'multiple'  =>  true,
                            'options'   =>  array(
                                'facebook'  =>  __('Facebook' , 'bp-bb'),
                                'twitter'   =>  __('Twitter' , 'bp-bb'),
                                'skype' =>  __('Skype' , 'bp-bb'),
                                'google-plus-g'   =>  __('Google Plus' , 'bp-bb'),
                                'instagram' =>  __('Instagram' , 'bp-bb'),
                                'linkedin'  =>  __('Linkedin' , 'bp-bb')

                            ),
                            'default'   =>  'instagram',
                        ),
                        'social_link_4' =>  array(
                            'label'   => __( 'Link', 'bp-bb' ),
                            'type'    => 'link',
                            'default' => '#',
                            'connections'   => array( 'url' ),
                            //'multiple'  =>  true,
                        ),
                        'social_profile_5'  =>  array(
                            'label' =>  __('Social Site' , 'bp-bb'),
                            'type'  =>  'select',
                            //'multiple'  =>  true,
                            'options'   =>  array(
                                'facebook'  =>  __('Facebook' , 'bp-bb'),
                                'twitter'   =>  __('Twitter' , 'bp-bb'),
                                'skype' =>  __('Skype' , 'bp-bb'),
                                'google-plus-g-g'   =>  __('Google Plus' , 'bp-bb'),
                                'instagram' =>  __('Instagram' , 'bp-bb'),
                                'linkedin'  =>  __('Linkedin' , 'bp-bb')

                            ),
                            'default'   =>  'linkedin',
                        ),
                        'social_link_5' =>  array(
                            'label'   => __( 'Link', 'bp-bb' ),
                            'type'    => 'link',
                            'default' => '#',
                            'connections'   => array( 'url' ),
                            //'multiple'  =>  true,
                        ),
                        'social_profile_6'  =>  array(
                            'label' =>  __('Social Site' , 'bp-bb'),
                            'type'  =>  'select',
                            //'multiple'  =>  true,
                            'options'   =>  array(
                                'facebook'  =>  __('Facebook' , 'bp-bb'),
                                'twitter'   =>  __('Twitter' , 'bp-bb'),
                                'skype' =>  __('Skype' , 'bp-bb'),
                                'google-plus-g'   =>  __('Google Plus' , 'bp-bb'),
                                'instagram' =>  __('Instagram' , 'bp-bb'),
                                'linkedin'  =>  __('Linkedin' , 'bp-bb')

                            ),
                            'default'   =>  'google-plus-g',
                        ),
                        'social_link_6' =>  array(
                            'label'   => __( 'Link', 'bp-bb' ),
                            'type'    => 'link',
                            'default' => '#',
                            'connections'   => array( 'url' ),
                            //'multiple'  =>  true,
                        ),

                    )
                ),
            )
        ),
    )
) );

