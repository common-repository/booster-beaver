<?php
    //Image Spacing
    FLBuilderCSS::responsive_rule(array(
        'settings'      =>  $settings,
        'setting_name'  =>  'img_spacing',
        'selector'      =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper.img-pos-left .bp-imagebox .bp-imagebox-image-wrapper",
        'prop'          =>  'margin-right',
        'unit'          =>  'px',
    ));
    FLBuilderCSS::responsive_rule(array(
        'settings'      =>  $settings,
        'setting_name'  =>  'img_spacing',
        'selector'      =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper.img-pos-right .bp-imagebox .bp-imagebox-image-wrapper",
        'prop'          =>  'margin-left',
        'unit'          =>  'px',
    ));

    FLBuilderCSS::responsive_rule(array(
        'settings'      =>  $settings,
        'setting_name'  =>  'img_spacing',
        'selector'      =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper.img-pos-top .bp-imagebox .bp-imagebox-image-wrapper",
        'prop'          =>  'margin-bottom',
        'unit'          =>  'px',
    ));

    // Image Size
    FLBuilderCSS::responsive_rule(array(
        'settings'      =>  $settings,
        'setting_name'  =>  'image_size',
        'selector'      =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper.img-pos-left .bp-imagebox .bp-imagebox-image-wrapper img",
        'prop'          =>  'width',
        'unit'          =>  $settings->image_size_unit,
    ));
    FLBuilderCSS::responsive_rule(array(
        'settings'      =>  $settings,
        'setting_name'  =>  'image_size',
        'selector'      =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper.img-pos-right .bp-imagebox .bp-imagebox-image-wrapper img",
        'prop'          =>  'width',
        'unit'          =>  $settings->image_size_unit,
    ));

    FLBuilderCSS::responsive_rule(array(
        'settings'      =>  $settings,
        'setting_name'  =>  'image_size',
        'selector'      =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper.img-pos-top .bp-imagebox .bp-imagebox-image-wrapper img",
        'prop'          =>  'width',
        'unit'          =>  $settings->image_size_unit,
    ));
    
    FLBuilderCSS::responsive_rule( array(
		'settings'		=> $settings,
		'setting_name' 	=> 'img_border_radius',
		'selector' 		=> ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-image-wrapper img",
		'prop'          =>  'border-radius',
		'unit'          =>  $settings->img_border_radius_unit,
	));
    
    FLBuilderCSS::rule( array(
            'selector'  => ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .action-button-wrapper .action-button",
            'enabled'   => 'enable' === $settings->action_is_button,
            'props'     => array(
                'color' => $settings->action_color,
            ),
    ) );

    FLBuilderCSS::rule( array(
            'selector'  => ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox:hover .bp-imagebox-content-wrapper .action-button-wrapper .action-button",
            'enabled'   => 'enable' === $settings->action_is_button,
            'props'     => array(
                'color' => $settings->action_hover_color,
            ),
    ) );

    FLBuilderCSS::typography_field_rule(array(
         'settings'     =>  $settings,
         'setting_name' =>  'action_typography',
         'selector'  => ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .action-button-wrapper .action-button",
    ));


    FLBuilderCSS::rule( array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .action-button-wrapper .action-button",
        'enabled'   => 'gradient' === $settings->action_button_background,
        'props' => array(
            'background-image' => FLBuilderColor::gradient( $settings->action_background_gradient ),
        ),
    ) );

    FLBuilderCSS::rule( array(
        'selector'  => ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox:hover",
        'enabled'   => 'gradient' === $settings->action_button_background,
        'props'     => array(
            'background-image' => FLBuilderColor::gradient( $settings->imagebox_bg_gradient_hover ),
        ),
    ) );

    FLBuilderCSS::rule( array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .action-button-wrapper .action-button",
        'enabled'   => 'color' === $settings->action_button_background,
        'props'     => array(
            'background-color' =>  $settings->action_background_color,
        ),
    ) );

    FLBuilderCSS::rule( array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox:hover .bp-imagebox-content-wrapper .action-button-wrapper .action-button",
        'enabled'   => 'color' === $settings->action_button_background,
        'props'     => array(
            'background-image'  =>  'unset',
            'background-color'  =>  $settings->action_background_hover_color,
        ),
    ) );

     FLBuilderCSS::rule( array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .action-button-wrapper .action-button",
        'enabled'   => 'image' === $settings->action_button_background,
        'props'     => array(
            'background-image'  => $settings->action_background_image_src,
        ),
     ) );


     if($settings->action_button_background == 'image' ) {?>
        .fl-node-<?php echo $id; ?>.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .action-button-wrapper .action-button{
            <?php if(!empty($settings->action_background_opacity)){?>
                opacity: calc(<?php echo $settings->action_background_opacity;?> / 10);
            <?php } ?>
        }
    <?php } ?>
    <?php if($settings->action_button_background == 'image' ) {?>
        .fl-node-<?php echo $id; ?>.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .action-button-wrapper .action-button:hover{
            <?php if(!empty($settings->action_background_opacity)){?>
                opacity: calc(<?php echo $settings->action_background_hover_opacity;?> / 10);
            <?php } ?>
        }
    <?php } ?>
    <?php
    FLBuilderCSS::dimension_field_rule(array(
        'settings'  =>  $settings,
        'setting_name'  =>  'action_button_padding',
        'selector'  =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .action-button-wrapper .action-button",
        'props'			=> array(
            'padding-top' 		=> 'action_button_padding_top',
            'padding-right' 	=> 'action_button_padding_right',
            'padding-bottom' 	=> 'action_button_padding_bottom',
            'padding-left' 		=> 'action_button_padding_left',
        ),
        'unit'  =>  'px',
    ) );

    FLBuilderCSS::dimension_field_rule(array(
        'settings'  =>  $settings,
        'setting_name'  =>  'action_button_margin',
        'selector'  =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .action-button-wrapper .action-button",
        'props'			=> array(
            'margin-top' 		=> 'action_button_margin_top',
            'margin-right' 	    => 'action_button_margin_right',
            'margin-bottom' 	=> 'action_button_margin_bottom',
            'margin-left' 		=> 'action_button_margin_left',
        ),
        'unit'  =>  'px',
    ) );



    // Vertical Alignment
    FLBuilderCSS::rule(array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper.img-pos-left .bp-imagebox",
        'props'     =>  array(
            'align-items'  => $settings->vertical_content_align,
        )
    ));
    FLBuilderCSS::rule(array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper.img-pos-right .bp-imagebox",
        'props'     =>  array(
            'align-items'  => $settings->vertical_content_align,
        )
    ));

    //Content ALign
    FLBuilderCSS::rule(array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper.img-pos-top .bp-imagebox",
        'props'     =>  array(
            'text-align'  => $settings->content_align,
        )
    ));

     FLBuilderCSS::rule(array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper.img-pos-left .bp-imagebox .bp-imagebox-content-wrapper",
        'props'     =>  array(
            'text-align'  => $settings->content_align,
        )
    ));

     FLBuilderCSS::rule(array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper.img-pos-right .bp-imagebox .bp-imagebox-content-wrapper",
        'props'     =>  array(
            'text-align'  => $settings->content_align,
        )
    ));


     //Title
     FLBuilderCSS::rule(array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .bp-image-box-title",
        'props' =>  array(
            'color'  => $settings->image_title_color,
        )
    ));

     FLBuilderCSS::typography_field_rule(array(
             'settings'     => $settings,
             'setting_name' => 'image_title_typography',
             'selector'     =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .bp-image-box-title",
     ));

     FLBuilderCSS::rule(array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox:hover .bp-imagebox-content-wrapper .bp-image-box-title",
        'props' =>  array(
            'color'  => $settings->image_title_color_hover,
        )
    ));

     FLBuilderCSS::dimension_field_rule(array(
        'settings'  =>  $settings,
        'setting_name'  =>  'image_title_padding',
        'selector'  =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .bp-image-box-title",
        'props'			=> array(
            'padding-top' 		=> 'image_title_padding_top',
            'padding-right' 	=> 'image_title_padding_right',
            'padding-bottom' 	=> 'image_title_padding_bottom',
            'padding-left' 		=> 'image_title_padding_left',
        ),
        'unit'  =>  'px',
    ) );

     FLBuilderCSS::dimension_field_rule(array(
        'settings'  =>  $settings,
        'setting_name'  =>  'image_title_margin',
        'selector'  =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .bp-image-box-title",
        'props'			=> array(
            'margin-top' 		=> 'image_title_margin_top',
            'margin-right' 	    => 'image_title_margin_right',
            'margin-bottom' 	=> 'image_title_margin_bottom',
            'margin-left' 		=> 'image_title_margin_left',
        ),
        'unit'  =>  'px',
    ) );
     
     //Content
     FLBuilderCSS::rule(array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .bp-image-box-content",
        'props' =>  array(
            'color'  => $settings->image_description_color,
        )
    ));

     FLBuilderCSS::typography_field_rule(array(
             'settings'     => $settings,
             'setting_name' => 'image_description_typography',
             'selector'     =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .bp-image-box-content",
     ));

     FLBuilderCSS::rule(array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox:hover .bp-imagebox-content-wrapper .bp-image-box-content",
        'props' =>  array(
            'color'  => $settings->image_description_color_hover,
        )
    ));

     FLBuilderCSS::dimension_field_rule(array(
        'settings'  =>  $settings,
        'setting_name'  =>  'image_description_padding',
        'selector'  =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .bp-image-box-content",
        'props'			=> array(
            'padding-top' 		=> 'image_description_padding_top',
            'padding-right' 	=> 'image_description_padding_right',
            'padding-bottom' 	=> 'image_description_padding_bottom',
            'padding-left' 		=> 'image_description_padding_left',
        ),
        'unit'  =>  'px',
    ) );

     FLBuilderCSS::dimension_field_rule(array(
        'settings'  =>  $settings,
        'setting_name'  =>  'image_description_margin',
        'selector'  =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .bp-image-box-content",
        'props'			=> array(
            'margin-top' 		=> 'image_title_margin_top',
            'margin-right' 	    => 'image_title_margin_right',
            'margin-bottom' 	=> 'image_title_margin_bottom',
            'margin-left' 		=> 'image_title_margin_left',
        ),
        'unit'  =>  'px',
    ) );
    
     
     //Box Style
     // Background Gradient
    FLBuilderCSS::rule( array(
        'selector'  => ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox",
        'enabled'   => 'gradient' === $settings->imagebox_background,
        'props' => array(
            'background-image' => FLBuilderColor::gradient( $settings->imagebox_bg_gradient ),
        ),
    ) );

    FLBuilderCSS::rule( array(
        'selector'  => ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox:hover",
        'enabled'   => 'gradient' === $settings->imagebox_background,
        'props'     => array(
            'background-image' => FLBuilderColor::gradient( $settings->imagebox_bg_gradient_hover ),
        ),
    ) );

    FLBuilderCSS::rule( array(
        'selector'  => ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox",
        'enabled'   => 'color' === $settings->imagebox_background,
        'props'     => array(
            'background-color' =>  $settings->imagebox_bg_color,
        ),
    ) );

    FLBuilderCSS::rule( array(
        'selector'  => ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox:hover",
        'enabled'   => 'color' === $settings->imagebox_background,
        'props'     => array(
            'background-color' =>  $settings->imagebox_bg_color_hover,
        ),
    ) );

    FLBuilderCSS::rule( array(
        'selector'  => ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox",
        'enabled'   => 'image' === $settings->imagebox_background,
        'props'     => array(
            'background-image'  => $settings->imagebox_bg_photo_src,
            'background-size'   =>  $settings->imagebox_bg_photo_size,
            'background-position'   =>  $settings->imagebox_bg_photo_position,
            'background-repeat'   =>  $settings->imagebox_bg_photo_repeat,
        ),
    ) );
    
    //Overlay Color
    FLBuilderCSS::rule( array(
        'selector'  => ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-overlay",
        'enabled'   => 'image' === $settings->imagebox_background,
        'props'     => array(
            'background-color' => $settings->imagebox_bg_overlay,
        ),
    ) );

    FLBuilderCSS::rule( array(
        'selector'  => ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox:hover .bp-imagebox-overlay",
        'enabled'   => 'image' === $settings->imagebox_background,
        'props'     => array(
            'background-color' => $settings->imagebox_bg_overlay_hover,
        ),
    ) );

    FLBuilderCSS::dimension_field_rule(array(
        'settings'      =>  $settings,
        'setting_name'  =>  'imagebox_padding',
        'selector'      => ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox",
        'props'			=> array(
            'padding-top' 		=> 'imagebox_padding_top',
            'padding-right' 	=> 'imagebox_padding_right',
            'padding-bottom' 	=> 'imagebox_padding_bottom',
            'padding-left' 		=> 'imagebox_padding_left',
         ),
        'unit'  =>  'px',
     ) );

    FLBuilderCSS::border_field_rule(array(
        'settings'      =>  $settings,
        'setting_name'  =>  'imagebox_border',
        'selector'      =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox",
    ));

    FLBuilderCSS::border_field_rule(array(
        'settings'      =>  $settings,
        'setting_name'  =>  'imagebox_border_hover',
        'selector'      =>  ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox:hover",
    ));
    
     //Icon Size
  FLBuilderCSS::responsive_rule( array(
	'settings'		=> $settings,
	'setting_name'	=> 'action_icon_size',
	'selector'		=> ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .action-button-wrapper i",
	'prop'			=> 'font-size',
	'unit'  =>  'px',
) );
  
  FLBuilderCSS::rule( array(
	'selector'		=> ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .action-button-wrapper i",
	'props'			=> array(
	        'color' =>  $settings->action_icon_color
	),
  ) );

  FLBuilderCSS::border_field_rule(array(
        'settings'      =>  $settings,
        'setting_name'  =>  'action_border',
        'selector'		=> ".fl-node-$id.fl-module-bp-imagebox .bp-imagebox-wrapper .bp-imagebox .bp-imagebox-content-wrapper .action-button-wrapper .action-button",
    ));

