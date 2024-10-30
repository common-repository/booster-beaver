<?php
FLBuilderCSS::rule( array(
    'selector' => ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .bp-grid .bp-grid-container",
    'props' => array(
        'width'         => 'calc(100% / '.$settings->columns.')',
        'padding-left' => 'calc('.$settings->gutter.'px/2)',
        'padding-right'=> 'calc('.$settings->gutter.'px/2)',
        'margin-bottom'=> $settings->gutter.'px'
    ),
) );

FLBuilderCSS::rule( array(
    'media' => 'medium',
    'selector' => ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .bp-grid .bp-grid-container",
    'props' => array(
        'width'         => 'calc(100% / '.$settings->columns_medium.')',
        'padding-left' => 'calc('.$settings->gutter_medium.'px/2)',
        'padding-right'=> 'calc('.$settings->gutter_medium.'px/2)',
        'margin-bottom'=> $settings->gutter_medium.'px'
    ),
) );
FLBuilderCSS::rule( array(
    'media' => 'responsive',
    'selector' => ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .bp-grid .bp-grid-container",
    'props' => array(
        'width'         => 'calc(100% / '.$settings->columns_responsive.')',
        'padding-left' => 'calc('.$settings->gutter_responsive.'px/2)',
        'padding-right'=> 'calc('.$settings->gutter_responsive.'px/2)',
        'margin-bottom'=> $settings->gutter_responsive.'px'
    ),
) );

//Box Background Gradient
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper",
	'enabled' => 'gradient' === $settings->box_background,
	'props' => array(
		'background-image' => FLBuilderColor::gradient( $settings->box_background_gradient ),
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper",
	'enabled' => 'color' === $settings->box_background,
	'props' => array(
		'background-color' =>  $settings->box_background_color,
	),
) );

//Padding
 FLBuilderCSS::dimension_field_rule(array(
    'settings'  =>  $settings,
    'setting_name'  =>  'box_padding',
    'selector'  =>  ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper",
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
     'selector' =>  ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper",
      'units'   =>  'px',
 ));

/*-----------------Message-----------------*/



FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper .wrapper",
	'props' => array(
		'color' =>  $settings->message_color,
	),
 ));
 FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper .wrapper",
	'props' => array(
		'background-color' =>  $settings->message_background_color,
	),
 ));

 FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper.skin-1 .arrow , .fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper.skin-5 .arrow",
	'props' => array(
		'border-top-color' =>  $settings->message_background_color,
	),
 ));

 FLBuilderCSS::typography_field_rule( array(
	'settings'		=> $settings,
	'setting_name' 	=> 'message_typography',
	'selector' 		=>  ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper .wrapper",
	'unit'  =>  'px',
) );


 //Padding
 FLBuilderCSS::dimension_field_rule(array(
    'settings'  =>  $settings,
    'setting_name'  =>  'message_padding',
    'selector'  =>  ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper .wrapper",
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
    'selector'  =>  ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper .wrapper",
    'props'			=> array(
        'margin-top' 		=> 'message_margin_top',
        'margin-right' 	=> 'message_margin_right',
        'margin-bottom' 	=> 'message_margin_bottom',
        'margin-left' 		=> 'message_margin_left',
     ),
    'unit'  =>   $settings->message_margin_unit,
) );


 /*-----------------Title---------------*/
 FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper .detail-wrapper .title",
	'props' => array(
		'color' =>  $settings->name_color,
	),
 ));


 FLBuilderCSS::typography_field_rule( array(
	'settings'		=> $settings,
	'setting_name' 	=> 'name_typography',
	'selector' 		=>  ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper .detail-wrapper .title",
	'unit'  =>  'px',
) );

 //Margin
 FLBuilderCSS::dimension_field_rule(array(
    'settings'  =>  $settings,
    'setting_name'  =>  'name_margin',
    'selector'  =>  ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper .detail-wrapper .title-wrapper",
    'props'			=> array(
        'margin-top' 		=> 'name_margin_top',
        'margin-right' 	=> 'name_margin_right',
        'margin-bottom' 	=> 'name_margin_bottom',
        'margin-left' 		=> 'name_margin_left',
     ),
    'unit'  =>   $settings->name_margin_unit,
) );


  /*-----------------Company---------------*/
 FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper .detail-wrapper .company",
	'props' => array(
		'color' =>  $settings->company_color,
	),
 ));


 FLBuilderCSS::typography_field_rule( array(
	'settings'		=> $settings,
	'setting_name' 	=> 'company_typography',
	'selector' 		=>  ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper .detail-wrapper .company",
	'unit'  =>  'px',
  ) );

 //Margin
 FLBuilderCSS::dimension_field_rule(array(
    'settings'  =>  $settings,
    'setting_name'  =>  'company_margin',
    'selector'  =>  ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper .detail-wrapper .company-wrapper",
    'props'			=> array(
        'margin-top' 		=> 'company_margin_top',
        'margin-right' 	=> 'company_margin_right',
        'margin-bottom' 	=> 'company_margin_bottom',
        'margin-left' 		=> 'company_margin_left',
     ),
    'unit'  =>   $settings->company_margin_unit,
) );
  /*-----------------Rating---------------*/
 FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper .detail-wrapper .rating-wrapper i",
	'props' => array(
		'color' =>  $settings->rating_color,
	),
 ));

 FLBuilderCSS::responsive_rule( array(
	'settings'		=> $settings,
	'setting_name' 	=> 'rating_size',
	'selector' 		=>  ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper .detail-wrapper .rating-wrapper i",
	'prop'  =>  'font-size',
	'unit'  =>  'px',
  ) );

  FLBuilderCSS::responsive_rule(array(
     'settings' =>  $settings,
     'setting_name' =>  'rating_align',
     'selector' =>  ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper .detail-wrapper .rating-wrapper",
     'prop' =>  'text-align'
 ));
  //Margin
 FLBuilderCSS::dimension_field_rule(array(
    'settings'  =>  $settings,
    'setting_name'  =>  'rating_margin',
    'selector'  =>  ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper .detail-wrapper .rating-wrapper",
    'props'			=> array(
        'margin-top' 		=> 'rating_margin_top',
        'margin-right' 	=> 'rating_margin_right',
        'margin-bottom' 	=> 'rating_margin_bottom',
        'margin-left' 		=> 'rating_margin_left',
     ),
    'unit'  =>   $settings->rating_margin_unit,
) );

   /*-----------------Image---------------*/
 FLBuilderCSS::border_field_rule( array(
     'settings' =>  $settings,
	'setting_name'  =>  'image_border',
	'selector' => ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper img",
	'unit'  =>  'px'
 ));


 FLBuilderCSS::responsive_rule( array(
	'settings'		=> $settings,
	'setting_name' 	=> 'image_size',
	'selector' 		=>  ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper img",
	'prop'  =>  'width',
	'unit'  =>  $settings->image_size_unit,
  ) );

  FLBuilderCSS::responsive_rule(array(
     'settings' =>  $settings,
     'setting_name' =>  'image_align',
     'selector' =>  ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper .image-wrapper",
     'prop' =>  'text-align'
 ));
//Margin
 FLBuilderCSS::dimension_field_rule(array(
    'settings'  =>  $settings,
    'setting_name'  =>  'image_margin',
    'selector'  =>  ".fl-node-$id.fl-module-bp-testimonial .bp-grid-wrapper .testimonial-wrapper .image-wrapper",
    'props'			=> array(
        'margin-top' 		=> 'image_margin_top',
        'margin-right' 	=> 'image_margin_right',
        'margin-bottom' 	=> 'image_margin_bottom',
        'margin-left' 		=> 'image_margin_left',
     ),
    'unit'  =>   $settings->image_margin_unit,
) );