<?php
$media_breakpoints = $module->media_breakpoint();
$responsive_breakpoint = $media_breakpoints->responsive_breakpoint;
$medium_breakpoint = $media_breakpoints->medium_breakpoint;

?>

.fl-node-<?php echo $id; ?>.fl-module-bp-after-before-image .mode-horizontal .bp-after-image {
    border-right-style: solid;
    border-right-width: <?php echo $settings->separator_width;?>px;
    border-right-color: <?php echo FLBuilderColor::hex_or_rgb($settings->separator_color);?>;
}

.fl-node-<?php echo $id; ?>.fl-module-bp-after-before-image .mode-vertical .bp-after-image {
    border-bottom-style: solid;
    border-bottom-width: <?php echo $settings->separator_width;?>px;
    border-bottom-color: <?php echo FLBuilderColor::hex_or_rgb($settings->separator_color);?>;
}

/** Typography css **/
<?php
if ( ! empty( $settings->label_color ) ) : ?>
.fl-node-<?php echo $id; ?>.fl-module-bp-after-before-image .bp-text {
    color: <?php echo FLBuilderColor::hex_or_rgb( $settings->label_color ); ?>;
}

<?php endif; ?>

<?php FLBuilderCSS::typography_field_rule( array(
	'settings'		=> $settings,
	'setting_name' 	=> 'label_typography',
	'selector' 		=>  ".fl-node-$id.fl-module-bp-after-before-image .bp-text",
) );

FLBuilderCSS::border_field_rule(array(
    'settings'  =>  $settings,
    'setting_name'  =>  'label_border',
    'selector'      =>  ".fl-node-$id.fl-module-bp-after-before-image .bp-text"
));

// Padding
FLBuilderCSS::dimension_field_rule( array(
    'settings'		=> $settings,
    'setting_name' 	=> 'label_padding',
    'selector' 		=> ".fl-node-$id.fl-module-bp-after-before-image .bp-text",
    'props'			=> array(
        'padding-top' 		=> 'label_padding_top',
        'padding-right' 	=> 'label_padding_right',
        'padding-bottom' 	=> 'label_padding_bottom',
        'padding-left' 		=> 'label_padding_left',
    ),
    'unit'  =>  'px',
) );
//Margin
FLBuilderCSS::dimension_field_rule( array(
    'settings'		=> $settings,
    'setting_name' 	=> 'label_margin',
    'selector' 		=> ".fl-node-$id.fl-module-bp-after-before-image .bp-text",
    'props'			=> array(
        'margin-top' 		=> 'label_margin_top',
        'margin-right' 	    => 'label_margin_right',
        'margin-bottom' 	=> 'label_margin_bottom',
        'margin-left' 		=> 'label_margin_left',
    ),
    'unit'  =>  'px',
) );
?>

.fl-node-<?php echo $id; ?>.fl-module-bp-after-before-image .bp-img-comp-container .bp-text {
    background-color: <?php echo FLBuilderColor::hex_or_rgb($settings->label_background_color); ?>;
}

.fl-node-<?php echo $id; ?>.fl-module-bp-after-before-image .mode-horizontal .bp-text-before {
    right: 0px;
    <?php if($settings->position_horizontal=='bottom'){?>
        bottom: 10px;
    <?php } ?>

    <?php if($settings->position_horizontal=='top'){?>
        top: 0px;
    <?php } ?>
}

.fl-node-<?php echo $id; ?>.fl-module-bp-after-before-image .mode-horizontal .bp-text-after {
    left: 0px;
    <?php if($settings->position_horizontal=='bottom'){?>
        bottom: 10px;
    <?php } ?><?php if($settings->position_horizontal=='top'){?>
        top: 0px;
    <?php } ?>
}

.fl-node-<?php echo $id; ?>.fl-module-bp-after-before-image .mode-vertical .bp-text-before {
    bottom: 0px;
    <?php if($settings->position_vertical === 'left'){?>
        left : 0px;
    <?php } ?>

    <?php if($settings->position_vertical === 'right'){?>
        right : 0px;
    <?php } ?>

    <?php if($settings->position_vertical === 'diagonal'){?>
        left : 0px;
    <?php } ?>
}

.fl-node-<?php echo $id; ?>.fl-module-bp-after-before-image .mode-vertical .bp-text-after {
    top: 0px;
    <?php if($settings->position_vertical=='left'){?>
        left: 0px;
    <?php } ?><?php if($settings->position_vertical =='right'){?>
        right: 0px;
    <?php } ?>
    <?php if($settings->position_vertical === 'diagonal'){?>
        right : 0px;
    <?php } ?>
}

<?php if(!empty($settings->icon_position) && ($settings->compare_style== 'horizontal')){?>
.fl-node-<?php echo $id; ?>.fl-module-bp-after-before-image .mode-horizontal .bp-img-comp-slider {
    top: <?php echo $settings->icon_position . '%';?> !important;
    <?php if(!empty($settings->icon_size)){?>
        padding: calc(<?php echo $settings->icon_size;?>px/2);
    <?php } ?>
}
<?php } ?>

<?php if(!empty($settings->icon_position) && ($settings->compare_style== 'vertical')){?>
.fl-node-<?php echo $id; ?>.fl-module-bp-after-before-image .mode-vertical .bp-img-comp-slider {
    left: <?php echo $settings->icon_position . '%';?> !important;
    <?php if(!empty($settings->icon_size)){?>
        padding: calc(<?php echo $settings->icon_size ;?>px/2);
    <?php } ?>
}
<?php } ?>

<?php if(!empty($settings->icon_background_color) || !empty($settings->icon_radius)){?>
.fl-node-<?php echo $id; ?>.fl-module-bp-after-before-image .bp-img-comp-slider {
    background-color: <?php echo FLBuilderColor::hex_or_rgb($settings->icon_background_color);?>;
    border-radius: <?php echo $settings->icon_radius . $settings->icon_radius_unit;?>;
}
<?php } ?>

.fl-node-<?php echo $id; ?>.fl-module-bp-after-before-image .bp-img-comp-slider .bp-slider-icon{
    <?php if(!empty($settings->icon_color)){?>
        color: <?php echo FLBuilderColor::hex_or_rgb($settings->icon_color);?>;
    <?php }?>
    font-size: <?php echo $settings->icon_size. 'px';?>;
}

/*--------------------------Medium Breakpoint-----------------------------*/
@media ( max-width: <?php echo $medium_breakpoint; ?>px ) {
    <?php if(!empty($settings->icon_position_medium) && ($settings->compare_style== 'horizontal')){?>
        .fl-node-<?php echo $id; ?>.fl-module-bp-after-before-image .mode-horizontal .bp-img-comp-slider {
            top: <?php echo $settings->icon_position_medium . '%';?> !important;
        }
    <?php } ?>
    <?php if(!empty($settings->icon_position_medium) && ($settings->compare_style== 'vertical')){?>
        .fl-node-<?php echo $id; ?>.fl-module-bp-after-before-image .mode-vertical .bp-img-comp-slider {
            left: <?php echo $settings->icon_position_medium . '%';?> !important;
        }
    <?php } ?>
}


/*--------------------------Responsive Breakpoint-----------------------------*/
@media ( max-width: <?php echo $responsive_breakpoint; ?>px ) {
    <?php if(!empty($settings->icon_position_responsive) && ($settings->compare_style== 'horizontal')){?>
        .fl-node-<?php echo $id; ?>.fl-module-bp-after-before-image .mode-horizontal .bp-img-comp-slider {
            top: <?php echo $settings->icon_position_responsive . '%';?> !important;
        }
    <?php } ?>
    <?php if(!empty($settings->icon_position_responsive) && ($settings->compare_style== 'vertical')){?>
        .fl-node-<?php echo $id; ?>.fl-module-bp-after-before-image .mode-vertical .bp-img-comp-slider {
            left: <?php echo $settings->icon_position_responsive . '%';?> !important;
        }
    <?php } ?>

}