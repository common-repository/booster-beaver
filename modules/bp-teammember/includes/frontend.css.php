<?php
FLBuilderCSS::rule( array(
            'selector' => ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .bp-grid .bp-grid-container",
            'props' => array(
                 'width'         => 'calc(100% / '.$settings->columns.')',
                 'padding-left' => 'calc('.$settings->gutter.'px/2)',
                'padding-right'=> 'calc('.$settings->gutter.'px/2)',
                'margin-bottom'=> $settings->gutter.'px'
            ),
) );

FLBuilderCSS::rule( array(
    'media' => 'medium',
    'selector' => ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .bp-grid .bp-grid-container",
    'props' => array(
         'width'         => 'calc(100% / '.$settings->columns_medium.')',
         'padding-left' => 'calc('.$settings->gutter_medium.'px/2)',
        'padding-right'=> 'calc('.$settings->gutter_medium.'px/2)',
        'margin-bottom'=> $settings->gutter_medium.'px'
    ),
) );
FLBuilderCSS::rule( array(
    'media' => 'responsive',
    'selector' => ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .bp-grid .bp-grid-container",
    'props' => array(
         'width'         => 'calc(100% / '.$settings->columns_responsive.')',
         'padding-left' => 'calc('.$settings->gutter_responsive.'px/2)',
          'padding-right'=> 'calc('.$settings->gutter_responsive.'px/2)',
          'margin-bottom'=> $settings->gutter_responsive.'px'
    ),
) );

//Box Background Gradient
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper",
	'enabled' => 'gradient' === $settings->box_background,
	'props' => array(
		'background-image' => FLBuilderColor::gradient( $settings->box_background_gradient ),
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper",
	'enabled' => 'color' === $settings->box_background,
	'props' => array(
		'background-color' =>  $settings->box_background_color,
	),
) );

//Padding
 FLBuilderCSS::dimension_field_rule(array(
    'settings'  =>  $settings,
    'setting_name'  =>  'box_padding',
    'selector'  =>  ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper",
    'props'			=> array(
        'padding-top' 		=> 'box_padding_top',
        'padding-right' 	=> 'box_padding_right',
        'padding-bottom' 	=> 'box_padding_bottom',
        'padding-left' 		=> 'box_padding_left',
     ),
    'unit'  =>   $settings->box_padding_unit,
) );

 FLBuilderCSS::border_field_rule(array(
     'settings' => $settings,
     'setting_name' =>  'box_border',
     'selector' =>  ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper",
      'unit'   =>  'px',
 ));
 
 
 /*-----------------Message-----------------*/
 FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper .team-member-message-wrapper p",
	'props' => array(
		'color' =>  $settings->message_color,
	),
 ));

 FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper .team-member-message-wrapper",
	'props' => array(
		'background-color' =>  $settings->message_background_color,
	),
 ));

 FLBuilderCSS::typography_field_rule( array(
	'settings'		=> $settings,
	'setting_name' 	=> 'message_typography',
	'selector' 		=>  ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper .team-member-message-wrapper p",
	'unit'  =>  'px',
) );


 //Padding
 FLBuilderCSS::dimension_field_rule(array(
    'settings'  =>  $settings,
    'setting_name'  =>  'message_padding',
    'selector'  =>  ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper .team-member-message-wrapper",
    'props'			=> array(
        'padding-top' 		=> 'message_padding_top',
        'padding-right' 	=> 'message_padding_right',
        'padding-bottom' 	=> 'message_padding_bottom',
        'padding-left' 		=> 'message_padding_left',
     ),
    'unit'  =>   $settings->message_padding_unit,
) );

 //Margin
 FLBuilderCSS::dimension_field_rule(array(
    'settings'  =>  $settings,
    'setting_name'  =>  'message_margin',
    'selector'  =>  ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper .team-member-message-wrapper",
    'props'			=> array(
        'margin-top' 		=> 'message_margin_top',
        'margin-right' 	=> 'message_margin_right',
        'margin-bottom' 	=> 'message_margin_bottom',
        'margin-left' 		=> 'message_margin_left',
     ),
    'unit'  =>   $settings->message_margin_unit,
) );
 
 
   /*-----------------Image---------------*/
 FLBuilderCSS::border_field_rule( array(
     'settings' =>  $settings,
	'setting_name'  =>  'image_border',
	'selector' => ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper .team-member-avatar-wrapper img",
	'unit'  =>  'px'
 ));


 FLBuilderCSS::responsive_rule( array(
	'settings'		=> $settings,
	'setting_name' 	=> 'image_size',
	'selector' 		=>  ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper .team-member-avatar-wrapper img",
	'prop'  =>  'width',
	'unit'  =>  $settings->image_size_unit,
  ) );

  FLBuilderCSS::responsive_rule(array(
     'settings' =>  $settings,
     'setting_name' =>  'image_align',
     'selector' =>  ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper .team-member-avatar-wrapper",
     'prop' =>  'text-align'
 ));
  
  /*-----------------Title---------------*/
 FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper .team-member-name",
	'props' => array(
		'color' =>  $settings->name_color,
	),
 ));


 FLBuilderCSS::typography_field_rule( array(
	'settings'		=> $settings,
	'setting_name' 	=> 'name_typography',
	'selector' 		=>  ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper .team-member-name",
	'unit'  =>  'px',
) );

 FLBuilderCSS::dimension_field_rule(array(
    'settings'  =>  $settings,
    'setting_name'  =>  'name_margin',
    'selector'  =>  ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper .team-member-name-wrapper",
    'props'			=> array(
        'margin-top' 		=> 'name_margin_top',
        'margin-right' 	=> 'name_margin_right',
        'margin-bottom' 	=> 'name_margin_bottom',
        'margin-left' 		=> 'name_margin_left',
     ),
    'unit'  =>   $settings->name_margin_unit,
) );

 /*-----------------Designation---------------*/
 FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper .team-member-designation",
	'props' => array(
		'color' =>  $settings->designation_color,
	),
 ));
 FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper.skin-2 .team-member-designation-wrapper",
	'enabled'   =>  'skin-2'    == $settings->skin,
	'props' => array(
		'background-color' =>  $settings->skin2_destination_bg,
	),
 ));


 FLBuilderCSS::typography_field_rule( array(
	'settings'		=> $settings,
	'setting_name' 	=> 'designation_typography',
	'selector' 		=>  ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper .team-member-designation",
	'unit'  =>  'px',
) );

 FLBuilderCSS::dimension_field_rule(array(
    'settings'  =>  $settings,
    'setting_name'  =>  'designation_margin',
    'selector'  =>  ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper .team-member-designation-wrapper",
    'props'			=> array(
        'margin-top' 		=> 'designation_margin_top',
        'margin-right' 	=> 'designation_margin_right',
        'margin-bottom' 	=> 'designation_margin_bottom',
        'margin-left' 		=> 'designation_margin_left',
     ),
    'unit'  =>   $settings->designation_margin_unit,
) );

 /*-------------------------Icon-------------------*/
 FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper .team-member-social-wrapper i",
	'props' => array(
		'color' =>  $settings->icon_color,
	),
 ));
 FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper .team-member-social-wrapper a",
	'props' => array(
		'background-color' =>  $settings->icon_background_color,
	),
 ));


 FLBuilderCSS::responsive_rule( array(
	'settings'		=> $settings,
	'setting_name' 	=> 'icon_size',
	'selector' 		=>  ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper .team-member-social-wrapper a i",
	'prop'  =>  'font-size',
	'unit'  =>  $settings->icon_size_unit,
  ) );

 FLBuilderCSS::responsive_rule( array(
	'settings'		=> $settings,
	'setting_name' 	=> 'icon_spacing',
	'selector' 		=>  ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper .team-member-social-wrapper a",
	'prop'  =>  'margin-right',
	'unit'  =>  $settings->icon_spacing_unit,
  ) );
 FLBuilderCSS::responsive_rule( array(
	'settings'		=> $settings,
	'setting_name' 	=> 'icon_align',
	'selector' 		=>  ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper .team-member-social-wrapper ",
	'prop'  =>  'text-align',

  ) );
 FLBuilderCSS::responsive_rule( array(
	'settings'		=> $settings,
	'setting_name' 	=> 'icon_padding',
	'selector' 		=>  ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper .team-member-social-wrapper a",
	'prop'  =>  'padding',
	'unit'  =>  'px'
  ) );

 FLBuilderCSS::dimension_field_rule(array(
    'settings'  =>  $settings,
    'setting_name'  =>  'icon_margin',
    'selector'  =>  ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper .team-member-social-wrapper",
    'props'			=> array(
        'margin-top' 		=> 'icon_margin_top',
        'margin-right' 	=> 'icon_margin_right',
        'margin-bottom' 	=> 'icon_margin_bottom',
        'margin-left' 		=> 'icon_margin_left',
     ),
    'unit'  =>   $settings->icon_margin_unit,
) );

 FLBuilderCSS::border_field_rule(array(
     'settings' => $settings,
     'setting_name' =>  'icon_border',
     'selector' =>  ".fl-node-$id.fl-module-bp-teammember .bp-grid-wrapper .team-member-wrapper .team-member-social-wrapper a",
      'unit'   =>  'px',
 ));
