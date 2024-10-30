<?php
// Alignment
FLBuilderCSS::rule( array(
	'settings'		=> $settings,
	'selector'		=> ".fl-node-$id.fl-module-bp-social-icon .bp-social-icon-wrapper.bp-social-icon-horizontal .bp-icons",
	'props'			=> array(
	        'justify-content' => $settings->icon_align
	),
) );
FLBuilderCSS::rule( array(
	'settings'		=> $settings,
	'selector'		=> ".fl-node-$id.fl-module-bp-social-icon .bp-social-icon-wrapper.bp-social-icon-vertical .bp-icons",
	'props'			=> array(
	        'align-items' => $settings->icon_align
	),
) );
?>

<?php if(!empty($settings->social_icon_color)){?>
    .fl-node-<?php echo $id; ?>.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon i {
        color: <?php echo FLBuilderColor::hex_or_rgb($settings->social_icon_color);?>;
    }
    .fl-node-<?php echo $id; ?>.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon.framed {
        border-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->social_icon_color);?>;
    }
    .fl-node-<?php echo $id; ?>.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon.stacked {
        background-color : <?php echo FLBuilderColor::hex_or_rgb( $settings->social_icon_color);?>;
    }
<?php } ?>

<?php if(!empty($settings->social_icon_background_color)){?>
    .fl-node-<?php echo $id; ?>.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon.stacked i {
        color: <?php echo FLBuilderColor::hex_or_rgb($settings->social_icon_background_color);?>;
    }

    .fl-node-<?php echo $id; ?>.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon.framed {
        background-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->social_icon_background_color);?>;
    }
<?php } ?>

<?php if(!empty($settings->social_icon_hover_color)){?>
    .fl-node-<?php echo $id; ?>.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon:hover i{
        color : <?php echo FLBuilderColor::hex_or_rgb($settings->social_icon_hover_color);?>;
    }
    .fl-node-<?php echo $id; ?>.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon.framed:hover {
        border-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->social_icon_hover_color);?>;
    }
    .fl-node-<?php echo $id; ?>.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon.stacked:hover {
        background-color : <?php echo FLBuilderColor::hex_or_rgb( $settings->social_icon_hover_color);?>;
    }
<?php } ?>

<?php if(!empty($settings->social_icon_background_hover_color)){?>
    .fl-node-<?php echo $id; ?>.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon.stacked:hover i {
        color: <?php echo FLBuilderColor::hex_or_rgb($settings->social_icon_background_hover_color);?>;
    }

    .fl-node-<?php echo $id; ?>.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon.framed:hover {
        background-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->social_icon_background_hover_color);?>;
    }
<?php } ?>

<?php if(count($settings->social_icon_list)){
    foreach( $settings->social_icon_list as $i => $social_icon){
        if(!empty($social_icon->icon_color)){?>
            .fl-node-<?php echo $id; ?>.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon-block:nth-child(<?php echo $i + 1; ?>) .bp-icon i {
                color: <?php echo FLBuilderColor::hex_or_rgb($social_icon->icon_color);?>;
            }
            .fl-node-<?php echo $id; ?>.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon-block:nth-child(<?php echo $i + 1; ?>) .bp-icon.framed {
                border-color: <?php echo FLBuilderColor::hex_or_rgb( $social_icon->icon_color);?>;
            }
            .fl-node-<?php echo $id; ?>.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon-block:nth-child(<?php echo $i + 1; ?>) .bp-icon.stacked {
                background-color : <?php echo FLBuilderColor::hex_or_rgb( $social_icon->icon_color);?>;
            }

        <?php } ?>

        <?php if(!empty($social_icon->icon_background_color)){?>
            .fl-node-<?php echo $id; ?>.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon-block:nth-child(<?php echo $i + 1; ?>) .bp-icon.stacked i {
                color: <?php echo FLBuilderColor::hex_or_rgb($social_icon->icon_background_color);?>;
            }
            .fl-node-<?php echo $id; ?>.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon-block:nth-child(<?php echo $i + 1; ?>) .bp-icon.framed {
                background-color: <?php echo FLBuilderColor::hex_or_rgb( $social_icon->icon_background_color);?>;
            }

        <?php } ?>

        <?php if(!empty($social_icon->icon_hover_color)){?>
            .fl-node-<?php echo $id; ?>.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon-block:nth-child(<?php echo $i + 1; ?>) .bp-icon:hover i{
                color: <?php echo FLBuilderColor::hex_or_rgb($social_icon->icon_hover_color);?>;
            }
            .fl-node-<?php echo $id; ?>.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon-block:nth-child(<?php echo $i + 1; ?>) .bp-icon.framed:hover {
                border-color: <?php echo FLBuilderColor::hex_or_rgb( $social_icon->icon_hover_color);?>;
            }
            .fl-node-<?php echo $id; ?>.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon-block:nth-child(<?php echo $i + 1; ?>) .bp-icon.stacked:hover {
                background-color : <?php echo FLBuilderColor::hex_or_rgb( $social_icon->icon_hover_color);?>;
            }

        <?php } ?>

        <?php if(!empty($social_icon->icon_background_hover_color)){?>
            .fl-node-<?php echo $id; ?>.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon-block:nth-child(<?php echo $i + 1; ?>) .bp-icon.stacked:hover i {
                color: <?php echo FLBuilderColor::hex_or_rgb($social_icon->icon_background_hover_color);?>;
            }
            .fl-node-<?php echo $id; ?>.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon-block:nth-child(<?php echo $i + 1; ?>) .bp-icon.framed:hover {
                background-color: <?php echo FLBuilderColor::hex_or_rgb( $social_icon->icon_background_hover_color);?>;
            }
        <?php } ?>
    <?php } ?>
<?php } ?>

/*framed stacked padding icon*/
<?php
FLBuilderCSS::responsive_rule(array(
        'settings'  =>  $settings,
        'setting_name' =>  'social_icon_size',
        'selector'  =>  ".fl-node-$id.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon",
        'prop'  =>  'font-size',
        'unit'  => 'px',
) );
FLBuilderCSS::responsive_rule(array(
        'settings'  =>  $settings,
        'setting_name' =>  'social_icon_padding',
        'enabled'   =>  'default' != $settings->icon_view,
        'selector'  =>  ".fl-node-$id.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon",
        'prop'  =>  'padding',
        'unit'  => $settings->social_icon_padding_unit,
) );
FLBuilderCSS::rule(array(
        'settings'  =>  $settings,
        'setting_name' =>  'social_icon_rotate',
        'selector'  =>  ".fl-node-$id.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon i",
        'props' =>  array(
                'transform'  => 'rotate('. $settings->social_icon_rotate.'deg)',
        )
) );
?>

<?php
    FLBuilderCSS::dimension_field_rule(array(
            'settings'  =>  $settings,
            'setting_name'  =>  'social_icon_border_width',
            'selector'  =>  ".fl-node-$id.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon.framed",
            'props'  =>  array(
                    'border-top-width'      =>  'social_icon_border_width_top',
                    'border-right-width'      =>  'social_icon_border_width_right',
                    'border-bottom-width'      =>  'social_icon_border_width_bottom',
                    'border-left-width'      =>  'social_icon_border_width_left',
            ),
            'unit'  =>  $settings->social_icon_border_width_unit,
    ));
    FLBuilderCSS::responsive_rule(array(
        'settings'  =>  $settings,
        'setting_name'  =>  'social_icon_border_radius',
        'enabled' => 'default' != $settings->icon_view,
        'selector'  =>  ".fl-node-$id.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon",
        'prop'  =>  'border-radius',
        'unit'  =>  $settings->social_icon_border_radius_unit,
    ));

    FLBuilderCSS::responsive_rule(array(
            'settings'  =>  $settings,
            'setting_name'  =>  'social_icon_spacing',
            'enabled'   =>  'horizontal' === $settings->icon_structure,
            'selector'  =>  ".fl-node-$id.fl-module-bp-social-icon .bp-social-icon-wrapper.bp-social-icon-horizontal .bp-icon-block",
            'prop'  =>  'margin-right',
            'unit'  =>  'px',
    ));
    FLBuilderCSS::responsive_rule(array(
            'settings'  =>  $settings,
            'setting_name'  =>  'social_icon_spacing',
            'enabled'   =>  'vertical' === $settings->icon_structure,
            'selector'  =>  ".fl-node-$id.fl-module-bp-social-icon .bp-social-icon-wrapper.bp-social-icon-vertical .bp-icon-block",
            'prop'  =>  'margin-bottom',
            'unit'  =>  'px',
    ));
    FLBuilderCSS::rule(array(
            'settings'  =>  $settings,
            'enabled'   =>  'framed'   === $settings->icon_view,
            'selector'  =>  ".fl-node-$id.fl-module-bp-social-icon .bp-social-icon-wrapper .bp-icon.framed",
            'props' =>  array(
                    'border-color'  =>  $settings->social_icon_border_color,
                    'border-style'  =>  $settings->social_icon_border_style,
            ),
    ));
?>