/*info box icon */
<?php
    FLBuilderCSS::responsive_rule(array(
        'settings'      =>  $settings,
        'setting_name'  =>  'info_icon_size',
        'selector'      =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .info-icon-wrapper .info-icon-inner",
        'prop'          =>  'font-size',
        'unit'          => 'px',
    ) );
    FLBuilderCSS::responsive_rule(array(
        'settings'      =>  $settings,
        'enabled'       => in_array( $settings->info_icon_type, array( 'framed', 'stacked' )),
        'setting_name'  =>  'info_icon_padding',
        'selector'      =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .info-icon-wrapper .info-icon-inner",
        'prop'          =>  'padding',
        'unit'          =>  $settings->info_icon_padding_unit,
    ) );
?>
<?php
    if(!empty($settings->info_icon_color)){ ?>
        .fl-node-<?php echo $id; ?>.fl-module-bp-infobox .bp-infobox-wrapper .info-icon-wrapper .info-icon-inner i {
            color: <?php echo FLBuilderColor::hex_or_rgb( $settings->info_icon_color);?>;
        }

        .fl-node-<?php echo $id; ?>.fl-module-bp-infobox .bp-infobox-wrapper .info-icon-wrapper .info-icon-inner.framed {
            border-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->info_icon_color);?>;
        }

        .fl-node-<?php echo $id; ?>.fl-module-bp-infobox .bp-infobox-wrapper .info-icon-wrapper .info-icon-inner.stacked {
            background-color : <?php echo FLBuilderColor::hex_or_rgb( $settings->info_icon_color);?>;
        }

<?php } ?>

<?php
    if(!empty($settings->info_icon_background_color)){ ?>
        .fl-node-<?php echo $id; ?>.fl-module-bp-infobox .bp-infobox-wrapper .info-icon-wrapper .info-icon-inner.stacked i {
            color : <?php echo FLBuilderColor::hex_or_rgb( $settings->info_icon_background_color);?>;
        }

        .fl-node-<?php echo $id; ?>.fl-module-bp-infobox .bp-infobox-wrapper .info-icon-wrapper .info-icon-inner.framed {
            background-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->info_icon_background_color);?>;
        }
<?php } ?>

<?php
    FLBuilderCSS::rule(array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .info-icon-wrapper .info-icon-inner.framed",
        'props'     =>  array(
            'border-color'  => $settings->info_icon_border_color,
            'border-style'  =>  $settings->info_icon_border_style,
        )
    ));

    FLBuilderCSS::rule(array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .info-icon-wrapper .info-icon-inner i",
        'props'     =>  array(
            'transform' => 'rotate('. $settings->info_icon_rotate .'deg)',
        )
    ));



    FLBuilderCSS::dimension_field_rule(array(
        'settings'      =>  $settings,
        'setting_name'  =>  'info_icon_border_width',
        'selector'      =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .info-icon-wrapper .info-icon-inner.framed",
        'props'         =>  array(
            'border-top-width'        =>  'info_icon_border_width_top',
            'border-right-width'      =>  'info_icon_border_width_right',
            'border-bottom-width'     =>  'info_icon_border_width_bottom',
            'border-left-width'       =>  'info_icon_border_width_left',
         ),
         'unit' =>  $settings->info_icon_border_width_unit,

    ));

    // Icon Spacing
    FLBuilderCSS::responsive_rule(array(
        'settings'      =>  $settings,
        'setting_name'  =>  'info_icon_spacing',
        'selector'      =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper.icon-pos-left .bp-infobox-icon-wrapper",
        'prop'          =>  'margin-right',
        'unit'          =>  'px',
    ));
    FLBuilderCSS::responsive_rule(array(
        'settings'      =>  $settings,
        'setting_name'  =>  'info_icon_spacing',
        'selector'      =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper.icon-pos-right .bp-infobox-icon-wrapper",
        'prop'          =>  'margin-left',
        'unit'          =>  'px',
    ));

    FLBuilderCSS::responsive_rule(array(
        'settings'      =>  $settings,
        'setting_name'  =>  'info_icon_spacing',
        'selector'      =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper.icon-pos-top .bp-infobox-icon-wrapper",
        'prop'          =>  'margin-bottom',
        'unit'          =>  'px',
    ));

    FLBuilderCSS::responsive_rule(array(
        'settings'      =>  $settings,
        'enabled'       => in_array( $settings->info_icon_type, array( 'framed', 'stacked' )),
        'setting_name'  =>  'info_icon_border_radius',
        'selector'      =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .info-icon-wrapper .info-icon-inner",
        'prop'          =>  'border-radius',
        'unit'          =>  $settings->info_icon_border_radius_unit,
    ));

    // Vertical Alignment
    FLBuilderCSS::rule(array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper.icon-pos-left .bp-infobox",
        'props'     =>  array(
            'align-items'  => $settings->vertical_content_align,
        )
    ));
    FLBuilderCSS::rule(array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper.icon-pos-right .bp-infobox",
        'props'     =>  array(
            'align-items'  => $settings->vertical_content_align,
        )
    ));

    //Content ALign
    FLBuilderCSS::rule(array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper.icon-pos-top .bp-infobox",
        'props'     =>  array(
            'text-align'  => $settings->content_align,
        )
    ));

     FLBuilderCSS::rule(array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper.icon-pos-left .bp-infobox .bp-infobox-content-wrapper",
        'props'     =>  array(
            'text-align'  => $settings->content_align,
        )
    ));

     FLBuilderCSS::rule(array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper.icon-pos-right .bp-infobox .bp-infobox-content-wrapper",
        'props'     =>  array(
            'text-align'  => $settings->content_align,
        )
    ));


     //Title
     FLBuilderCSS::rule(array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .bp-info-box-title",
        'props' =>  array(
            'color'  => $settings->info_title_color,
        )
    ));

     FLBuilderCSS::typography_field_rule(array(
             'settings'     => $settings,
             'setting_name' => 'info_title_typography',
             'selector'     =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .bp-info-box-title",
     ));

     FLBuilderCSS::rule(array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox:hover .bp-infobox-content-wrapper .bp-info-box-title",
        'props' =>  array(
            'color'  => $settings->info_title_color_hover,
        )
    ));

     FLBuilderCSS::dimension_field_rule(array(
        'settings'  =>  $settings,
        'setting_name'  =>  'info_title_padding',
        'selector'     =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .bp-info-box-title",
        'props'			=> array(
            'padding-top' 		=> 'info_title_padding_top',
            'padding-right' 	=> 'info_title_padding_right',
            'padding-bottom' 	=> 'info_title_padding_bottom',
            'padding-left' 		=> 'info_title_padding_left',
        ),
        'unit'  =>  'px',
    ) );

     FLBuilderCSS::dimension_field_rule(array(
        'settings'  =>  $settings,
        'setting_name'  =>  'info_title_margin',
        'selector'     =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .bp-info-box-title",
        'props'			=> array(
            'margin-top' 		=> 'info_title_margin_top',
            'margin-right' 	    => 'info_title_margin_right',
            'margin-bottom' 	=> 'info_title_margin_bottom',
            'margin-left' 		=> 'info_title_margin_left',
        ),
        'unit'  =>  'px',
    ) );

     //Content
     FLBuilderCSS::rule(array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .bp-info-box-content",
        'props' =>  array(
            'color'  => $settings->info_description_color,
        )
    ));

     FLBuilderCSS::typography_field_rule(array(
             'settings'     => $settings,
             'setting_name' => 'info_description_typography',
             'selector'     =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .bp-info-box-content",
     ));

     FLBuilderCSS::rule(array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox:hover .bp-infobox-content-wrapper .bp-info-box-content",
        'props' =>  array(
            'color'  => $settings->info_description_color_hover,
        )
    ));

     FLBuilderCSS::dimension_field_rule(array(
        'settings'  =>  $settings,
        'setting_name'  =>  'info_description_padding',
        'selector'     =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .bp-info-box-content",
        'props'			=> array(
            'padding-top' 		=> 'info_description_padding_top',
            'padding-right' 	=> 'info_description_padding_right',
            'padding-bottom' 	=> 'info_description_padding_bottom',
            'padding-left' 		=> 'info_description_padding_left',
        ),
        'unit'  =>  'px',
    ) );

     FLBuilderCSS::dimension_field_rule(array(
        'settings'  =>  $settings,
        'setting_name'  =>  'info_description_margin',
        'selector'     =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .bp-info-box-content",
        'props'			=> array(
            'margin-top' 		=> 'info_title_margin_top',
            'margin-right' 	    => 'info_title_margin_right',
            'margin-bottom' 	=> 'info_title_margin_bottom',
            'margin-left' 		=> 'info_title_margin_left',
        ),
        'unit'  =>  'px',
    ) );


     //Box Style
     // Background Gradient
    FLBuilderCSS::rule( array(
        'selector'  => ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox",
        'enabled'   => 'gradient' === $settings->infobox_background,
        'props' => array(
            'background-image' => FLBuilderColor::gradient( $settings->infobox_bg_gradient ),
        ),
    ) );

    FLBuilderCSS::rule( array(
        'selector'  => ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox:hover",
        'enabled'   => 'gradient' === $settings->infobox_background,
        'props'     => array(
            'background-image' => FLBuilderColor::gradient( $settings->infobox_bg_gradient_hover ),
        ),
    ) );

    FLBuilderCSS::rule( array(
        'selector'  => ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox",
        'enabled'   => 'color' === $settings->infobox_background,
        'props'     => array(
            'background-color' =>  $settings->infobox_bg_color,
        ),
    ) );

    FLBuilderCSS::rule( array(
        'selector'  => ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox:hover",
        'enabled'   => 'color' === $settings->infobox_background,
        'props'     => array(
            'background-color' =>  $settings->infobox_bg_color_hover,
        ),
    ) );

    FLBuilderCSS::rule( array(
        'selector'  => ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox",
        'enabled'   => 'image' === $settings->infobox_background,
        'props'     => array(
            'background-image'  => $settings->infobox_bg_photo_src,
            'background-size'   =>  $settings->infobox_bg_photo_size,
            'background-position'   =>  $settings->infobox_bg_photo_position,
            'background-repeat'   =>  $settings->infobox_bg_photo_repeat,
        ),
    ) );

    //Overlay Color
    FLBuilderCSS::rule( array(
        'selector'  => ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox .bp-infobox-overlay",
        'enabled'   => 'image' === $settings->infobox_background,
        'props'     => array(
            'background-color' => $settings->infobox_bg_overlay,
        ),
    ) );

    FLBuilderCSS::rule( array(
        'selector'  => ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox:hover .bp-infobox-overlay",
        'enabled'   => 'image' === $settings->infobox_background,
        'props'     => array(
            'background-color' => $settings->infobox_bg_overlay_hover,
        ),
    ) );

    FLBuilderCSS::dimension_field_rule(array(
        'settings'      =>  $settings,
        'setting_name'  =>  'infobox_padding',
        'selector'      => ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox",
        'props'			=> array(
            'padding-top' 		=> 'infobox_padding_top',
            'padding-right' 	=> 'infobox_padding_right',
            'padding-bottom' 	=> 'infobox_padding_bottom',
            'padding-left' 		=> 'infobox_padding_left',
         ),
        'unit'  =>  'px',
     ) );

    FLBuilderCSS::border_field_rule(array(
        'settings'      =>  $settings,
        'setting_name'  =>  'infobox_border',
        'selector'      =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox",
    ));

    FLBuilderCSS::border_field_rule(array(
        'settings'      =>  $settings,
        'setting_name'  =>  'infobox_border_hover',
        'selector'      =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox:hover",
    ));



?>

<?php
    if(!empty($settings->info_icon_hover_color)){ ?>
        .fl-node-<?php echo $id; ?>.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox:hover .info-icon-wrapper .info-icon-inner i {
            color: <?php echo FLBuilderColor::hex_or_rgb( $settings->info_icon_hover_color);?>;
        }

        .fl-node-<?php echo $id; ?>.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox:hover .info-icon-wrapper .info-icon-inner.framed {
            border-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->info_icon_hover_color);?>;
        }

        .fl-node-<?php echo $id; ?>.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox:hover .info-icon-wrapper .info-icon-inner.stacked {
            background-color : <?php echo FLBuilderColor::hex_or_rgb( $settings->info_icon_hover_color);?>;
        }

<?php } ?>

<?php
    if(!empty($settings->info_icon_background_hover_color)){ ?>
        .fl-node-<?php echo $id; ?>.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox:hover .info-icon-wrapper .info-icon-inner.stacked i {
            color : <?php echo FLBuilderColor::hex_or_rgb( $settings->info_icon_background_hover_color);?>;
        }

        .fl-node-<?php echo $id; ?>.fl-module-bp-infobox .bp-infobox-wrapper .info-icon-wrapper .info-icon-inner.framed:hover {
            background-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->info_icon_background_hover_color);?>;
        }
<?php } ?>

<?php    //Button Style

    FLBuilderCSS::rule( array(
            'selector'  => ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .action-button-wrapper .action-button",
            'enabled'   => 'enable' === $settings->action_is_button,
            'props'     => array(
                'color' => $settings->action_color,
            ),
    ) );

    FLBuilderCSS::rule( array(
            'selector'  => ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox:hover .bp-infobox-content-wrapper .action-button-wrapper .action-button",
            'enabled'   => 'enable' === $settings->action_is_button,
            'props'     => array(
                'color' => $settings->action_hover_color,
            ),
    ) );

    FLBuilderCSS::typography_field_rule(array(
         'settings'     =>  $settings,
         'setting_name' =>  'action_typography',
         'selector'  => ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .action-button-wrapper .action-button",
    ));


    FLBuilderCSS::rule( array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .action-button-wrapper .action-button",
        'enabled'   => 'gradient' === $settings->action_button_background,
        'props' => array(
            'background-image' => FLBuilderColor::gradient( $settings->action_background_gradient ),
        ),
    ) );

    FLBuilderCSS::rule( array(
        'selector'  => ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox:hover",
        'enabled'   => 'gradient' === $settings->action_button_background,
        'props'     => array(
            'background-image' => FLBuilderColor::gradient( $settings->infobox_bg_gradient_hover ),
        ),
    ) );

    FLBuilderCSS::rule( array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .action-button-wrapper .action-button",
        'enabled'   => 'color' === $settings->action_button_background,
        'props'     => array(
            'background-color' =>  $settings->action_background_color,
        ),
    ) );

    FLBuilderCSS::rule( array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox:hover .bp-infobox-content-wrapper .action-button-wrapper .action-button",
        //'enabled'   => 'color' === $settings->action_button_background,
        'props'     => array(
            'background-image'  =>  'unset',
            'background-color' =>  $settings->action_background_hover_color,
        ),
    ) );

     FLBuilderCSS::rule( array(
        'selector'  =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .action-button-wrapper .action-button",
        'enabled'   => 'image' === $settings->action_button_background,
        'props'     => array(
            'background-image'  => $settings->action_background_image_src,
        ),
     ) );


     if($settings->action_button_background == 'image' ) {?>
        .fl-node-<?php echo $id; ?>.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .action-button-wrapper .action-button{
            <?php if(!empty($settings->action_background_opacity)){?>
                opacity: calc(<?php echo $settings->action_background_opacity;?> / 10);
            <?php } ?>
        }

    <?php } ?>
    <?php
        if($settings->action_button_background == 'image' ) {?>
            .fl-node-<?php echo $id; ?>.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .action-button-wrapper .action-button:hover{
                <?php if(!empty($settings->action_background_opacity)){?>
                    opacity: calc(<?php echo $settings->action_background_hover_opacity;?> / 10);
                <?php } ?>
            }
    <?php } ?>
<?php
    FLBuilderCSS::dimension_field_rule(array(
        'settings'  =>  $settings,
        'setting_name'  =>  'action_button_padding',
        'selector'  =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .action-button-wrapper .action-button",
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
        'selector'  =>  ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .action-button-wrapper .action-button",
        'props'			=> array(
            'margin-top' 		=> 'action_button_margin_top',
            'margin-right' 	    => 'action_button_margin_right',
            'margin-bottom' 	=> 'action_button_margin_bottom',
            'margin-left' 		=> 'action_button_margin_left',
        ),
        'unit'  =>  'px',
    ) );
    //Icon Size
  FLBuilderCSS::responsive_rule( array(
	'settings'		=> $settings,
	'setting_name'	=> 'action_icon_size',
	'selector'		=> ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .action-button-wrapper i",
	'prop'			=> 'font-size',
	'unit'  =>  'px',
) );

  FLBuilderCSS::rule( array(
	'selector'		=> ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .action-button-wrapper i",
	'props'			=> array(
	        'color' =>  $settings->action_icon_color
	),

   ) );

  FLBuilderCSS::border_field_rule(array(
        'settings'      =>  $settings,
        'setting_name'  =>  'action_border',
        'selector'		=> ".fl-node-$id.fl-module-bp-infobox .bp-infobox-wrapper .bp-infobox .bp-infobox-content-wrapper .action-button-wrapper .action-button",
    ));
