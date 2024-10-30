<?php
$media_breakpoints = $module->media_breakpoint();
$responsive_breakpoint = $media_breakpoints->responsive_breakpoint;
$medium_breakpoint = $media_breakpoints->medium_breakpoint;

?>

.fl-node-<?php echo $id; ?>.fl-module-bp-textseparator .bp-ts-wrapper {
    max-width: <?php echo $settings->divider_width . $settings->divider_width_unit; ?>;
    margin: <?php echo $settings->divider_alignment; ?>;
}

.fl-node-<?php echo $id; ?>.fl-module-bp-textseparator .bp-ts-wrapper .bp-ts-sep-holder .bp-ts-sep-lines {
    border-top: <?php echo $settings->divider_weight; ?>px <?php echo $settings->divider_style; ?> <?php echo FLBuilderColor::hex_or_rgb( $settings->divider_color ); ?>;
}

/** Typography css **/
<?php if ( ! empty( $settings->heading_color ) ) : ?>
.fl-node-<?php echo $id; ?>.fl-module-bp-textseparator .bp-ts-wrapper .bp-ts-title .bp-ts-heading-title {
    color: <?php echo FLBuilderColor::hex_or_rgb( $settings->heading_color ); ?>;
}

<?php endif; ?>

<?php FLBuilderCSS::typography_field_rule( array(
	'settings'		=> $settings,
	'setting_name' 	=> 'typography',
	'selector' 		=> ".fl-node-$id.fl-module-bp-textseparator .bp-ts-wrapper .bp-ts-title .bp-ts-heading-title",
) );
?>

/*framed stacked padding icon*/
<?php
FLBuilderCSS::responsive_rule(array(
        'settings'  =>  $settings,
        'setting_name' =>  'ts_icon_size',
        'selector'  =>  ".fl-node-$id.fl-module-bp-textseparator .bp-ts-wrapper .ts-icon-wrapper .ts-icon-inner",
        'prop'  =>  'font-size',
        'unit'  => 'px',
) );
FLBuilderCSS::responsive_rule(array(
        'settings'  =>  $settings,
        'enabled'   =>  'default' != $settings->ts_icon_type,
        'setting_name' =>  'ts_icon_padding',
        'selector'  =>  ".fl-node-$id.fl-module-bp-textseparator .bp-ts-wrapper .ts-icon-wrapper .ts-icon-inner",
        'prop'  =>  'padding',
        'unit'  => $settings->ts_icon_padding_unit,
) );
FLBuilderCSS::rule(array(
        'settings'  =>  $settings,
        'setting_name' =>  'ts_icon_rotate',
        'selector'  =>  ".fl-node-$id.fl-module-bp-textseparator .bp-ts-wrapper .ts-icon-wrapper .ts-icon-inner i",
        'props' =>  array(
                'transform'  => 'rotate('. $settings->ts_icon_rotate.'deg)',
        )
) );
?>
<?php if(!empty($settings->ts_icon_color)){ ?>
    .fl-node-<?php echo $id; ?>.fl-module-bp-textseparator .bp-ts-wrapper .ts-icon-wrapper .ts-icon-inner i {
        color: <?php echo FLBuilderColor::hex_or_rgb( $settings->ts_icon_color);?>;
    }
    .fl-node-<?php echo $id; ?>.fl-module-bp-textseparator .bp-ts-wrapper .ts-icon-wrapper .ts-icon-inner.framed {
        border-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->ts_icon_color);?>;
    }

    .fl-node-<?php echo $id; ?>.fl-module-bp-textseparator .bp-ts-wrapper .ts-icon-wrapper .ts-icon-inner.stacked {
        background-color : <?php echo FLBuilderColor::hex_or_rgb( $settings->ts_icon_color);?>;
    }

<?php } ?>
<?php if(!empty($settings->ts_icon_hover_color)){ ?>
    .fl-node-<?php echo $id; ?>.fl-module-bp-textseparator .bp-ts-wrapper .ts-icon-wrapper .ts-icon-inner:hover i {
        color: <?php echo FLBuilderColor::hex_or_rgb( $settings->ts_icon_hover_color);?>;
    }
    .fl-node-<?php echo $id; ?>.fl-module-bp-textseparator .bp-ts-wrapper .ts-icon-wrapper .ts-icon-inner.framed:hover {
        border-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->ts_icon_hover_color);?>;
    }

    .fl-node-<?php echo $id; ?>.fl-module-bp-textseparator .bp-ts-wrapper .ts-icon-wrapper .ts-icon-inner.stacked:hover {
        background-color : <?php echo FLBuilderColor::hex_or_rgb( $settings->ts_icon_hover_color);?>;
    }
<?php } ?>

<?php if(!empty($settings->ts_icon_background_color)){ ?>
    .fl-node-<?php echo $id; ?>.fl-module-bp-textseparator .bp-ts-wrapper .ts-icon-wrapper .ts-icon-inner.stacked i {
        color : <?php echo FLBuilderColor::hex_or_rgb( $settings->ts_icon_background_color);?>;
    }

    .fl-node-<?php echo $id; ?>.fl-module-bp-textseparator .bp-ts-wrapper .ts-icon-wrapper .ts-icon-inner.framed {
        background-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->ts_icon_background_color);?>;
    }
<?php } ?>

<?php if(!empty($settings->ts_icon_background_hover_color)){ ?>
    .fl-node-<?php echo $id; ?>.fl-module-bp-textseparator .bp-ts-wrapper .ts-icon-wrapper .ts-icon-inner.stacked:hover i {
        color : <?php echo FLBuilderColor::hex_or_rgb( $settings->ts_icon_background_hover_color);?>;
    }

    .fl-node-<?php echo $id; ?>.fl-module-bp-textseparator .bp-ts-wrapper .ts-icon-wrapper .ts-icon-inner.framed:hover {
        background-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->ts_icon_background_hover_color);?>;
    }
<?php } ?>




<?php if($settings->bp_alignment == 'left'){?>
.fl-node-<?php echo $id; ?>.fl-module-bp-textseparator .bp-ts-wrapper .sep-left {
    display: none;
}

<?php } ?>

<?php if($settings->bp_alignment == 'right'){?>
.fl-node-<?php echo $id; ?>.fl-module-bp-textseparator .bp-ts-wrapper .sep-right {
    display: none;
}
<?php }?>

<?php
    FLBuilderCSS::rule(array(
            'selector'  =>  ".fl-node-$id.fl-module-bp-textseparator .bp-ts-wrapper .ts-icon-wrapper .ts-icon-inner.framed",
            'props' =>  array(
                    'border-color'  => $settings->ts_icon_border_color,
                    'border-style'  =>  $settings->ts_icon_border_style,
            )
    ));

    FLBuilderCSS::dimension_field_rule(array(
            'settings'  =>  $settings,
            'setting_name'  =>  'ts_icon_border_width',
            'selector'  =>  ".fl-node-$id.fl-module-bp-textseparator .bp-ts-wrapper .ts-icon-wrapper .ts-icon-inner.framed",
            'props'  =>  array(
                    'border-top-width'      =>  'ts_icon_border_width_top',
                    'border-right-width'      =>  'ts_icon_border_width_right',
                    'border-bottom-width'      =>  'ts_icon_border_width_bottom',
                    'border-left-width'      =>  'ts_icon_border_width_left',
            ),
            'unit'  =>  $settings->ts_icon_border_width_unit,
    ));

    FLBuilderCSS::responsive_rule(array(
            'settings'  =>  $settings,
            'setting_name'  =>  'ts_icon_border_radius',
            'selector'  =>  ".fl-node-$id.fl-module-bp-textseparator .bp-ts-wrapper .ts-icon-wrapper .ts-icon-inner",
             'prop' =>  'border-radius',
             'unit' =>  $settings->ts_icon_border_radius_unit,
    ));
?>

/** Medium css **/
@media ( max-width: <?php echo $medium_breakpoint; ?>px ) {

<?php if($settings->bp_alignment_medium == 'left'){?>
    .fl-node-<?php echo $id; ?>.fl-module-bp-textseparator .bp-ts-wrapper .sep-left {
        display: none;
    }
<?php }?>

<?php if($settings->bp_alignment_medium == 'right'){?>
    .fl-node-<?php echo $id; ?>.fl-module-bp-textseparator .bp-ts-wrapper .sep-right {
        display: none;
    }
<?php }?>

}

/** Responsive CSS **/
@media ( max-width: <?php echo $responsive_breakpoint; ?>px ) {

<?php if($settings->bp_alignment_responsive == 'left'){?>
    .fl-node-<?php echo $id; ?>.fl-module-bp-textseparator .bp-ts-wrapper .sep-left {
        display: none;
    }
<?php }?>

<?php if($settings->bp_alignment_responsive == 'right'){?>
    .fl-node-<?php echo $id; ?>.fl-module-bp-textseparator .bp-ts-wrapper .sep-right {
        display: none;
    }
<?php }?>

}