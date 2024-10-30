/** Front Box **/

.fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-front {
<?php if($settings->front_background == 'color' ){?> background-color: <?php echo FLBuilderColor::hex_or_rgb($settings->front_background_color); ?>;
<?php } ?><?php if($settings->front_background == 'image' && !empty($settings->front_background_image_src)){?> background-image: url("<?php echo $settings->front_background_image_src; ?>");
<?php } ?><?php if($settings->front_background == 'gradient'){?> background-image: <?php echo FLBuilderColor::gradient($settings->front_background_gradient); ?>;
<?php } ?>
}

/*front box title align  */
<?php
 FLBuilderCSS::responsive_rule(array(
        'settings'  =>  $settings,
        'setting_name' =>  'front_box_align',
        'selector'  =>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-front",
        'prop'  =>  'text-align',
) );
 ?>

/** Typography css **/
<?php
if ( ! empty( $settings->front_box_title_color ) ) : ?>
.fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-front .front-title {
    color: <?php echo FLBuilderColor::hex_or_rgb( $settings->front_box_title_color ); ?>;
}

<?php endif; ?>

<?php FLBuilderCSS::typography_field_rule( array(
	'settings'		=> $settings,
	'setting_name' 	=> 'front_box_title_typography',
	'selector' 		=>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-front .front-title",
) );
?>

<?php
if ( ! empty( $settings->front_box_description_color ) ) : ?>
.fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-front .front-description {
    color: <?php echo FLBuilderColor::hex_or_rgb( $settings->front_box_description_color ); ?>;
}

<?php endif; ?>

<?php FLBuilderCSS::typography_field_rule( array(
	'settings'		=> $settings,
	'setting_name' 	=> 'front_box_description_typography',
	'selector' 		=>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-front .front-description",
) );
?>

/*front box icon */
<?php
FLBuilderCSS::responsive_rule(array(
        'settings'  =>  $settings,
        'setting_name' =>  'front_box_icon_size',
        'selector'  =>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .front_box-icon-wrapper .front_box-icon-inner
        ",
        'prop'  =>  'font-size',
        'unit'  => 'px',
) );
FLBuilderCSS::responsive_rule(array(
        'settings'  =>  $settings,
        'setting_name' =>  'front_box_icon_padding',
        'selector'  =>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .front_box-icon-wrapper .front_box-icon-inner",
        'prop'  =>  'padding',
        'unit'  => $settings->front_box_icon_padding_unit,
) );
FLBuilderCSS::rule(array(
        'settings'  =>  $settings,
        'setting_name' =>  'front_box_icon_rotate',
        'selector'  =>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .front_box-icon-wrapper .front_box-icon-inner i",
        'props' =>  array(
                'transform'  => 'rotate('. $settings->front_box_icon_rotate.'deg)',
        )
) );
?>
<?php  if(!empty($settings->front_box_icon_color)){ ?>
    .fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .front_box-icon-wrapper .front_box-icon-inner i {
        color: <?php echo FLBuilderColor::hex_or_rgb( $settings->front_box_icon_color);?>;
    }

    .fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .front_box-icon-wrapper .front_box-icon-inner.framed {
        border-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->front_box_icon_color);?>;
    }

    .fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .front_box-icon-wrapper .front_box-icon-inner.stacked {
        background-color : <?php echo FLBuilderColor::hex_or_rgb( $settings->front_box_icon_color);?>;
    }

<?php } ?>

<?php if(!empty($settings->front_box_icon_background_color)){ ?>
    .fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .front_box-icon-wrapper .front_box-icon-inner.stacked i {
        color : <?php echo FLBuilderColor::hex_or_rgb( $settings->front_box_icon_background_color);?>;
    }

    .fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .front_box-icon-wrapper .front_box-icon-inner.framed {
        background-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->front_box_icon_background_color);?>;
    }
<?php } ?>

<?php

     FLBuilderCSS::rule(array(
            'selector'  =>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .front_box-icon-wrapper .front_box-icon-inner.framed",
            'props' =>  array(
                    'border-color'  => $settings->front_box_icon_border_color,
                    'border-style'  =>  $settings->front_box_icon_border_style,
            )
    ));

    FLBuilderCSS::dimension_field_rule(array(
            'settings'  =>  $settings,
            'setting_name'  =>  'front_box_icon_border_width',
            'selector'  =>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .front_box-icon-wrapper .front_box-icon-inner.framed",
            'props'  =>  array(
                    'border-top-width'      =>  'front_box_icon_border_width_top',
                    'border-right-width'      =>  'front_box_icon_border_width_right',
                    'border-bottom-width'      =>  'front_box_icon_border_width_bottom',
                    'border-left-width'      =>  'front_box_icon_border_width_left',
            ),
            'unit'  =>  'px',

    ));

    FLBuilderCSS::responsive_rule(array(
            'settings'  =>  $settings,
            'setting_name'  =>  'front_box_icon_border_radius',
            'selector'  =>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .front_box-icon-wrapper .front_box-icon-inner",
             'prop' =>  'border-radius',
             'unit' =>  FLBuilderCSS::get_unit('front_box_icon_border_radius' , $settings),
    ));
?>



<?php /*-------------------------------------------------------Flipbox Back side------------------------------*/?>

/** Back Box **/

.fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-back {
<?php if($settings->back_background == 'color' ){?> background-color: <?php echo FLBuilderColor::hex_or_rgb($settings->back_background_color); ?>;
<?php } ?><?php if($settings->back_background == 'image' && !empty($settings->back_background_image_src)){?> background-image: url("<?php echo $settings->back_background_image_src; ?>");
<?php } ?><?php if($settings->back_background == 'gradient'){?> background-image: <?php echo FLBuilderColor::gradient($settings->back_background_gradient); ?>;
<?php } ?>
}

<?php
 FLBuilderCSS::responsive_rule(array(
        'settings'  =>  $settings,
        'setting_name' =>  'back_box_align',
        'selector'  =>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-back",
        'prop'  =>  'text-align',
) );
 ?>

/** Typography css **/
<?php
if ( ! empty( $settings->back_box_title_color ) ) : ?>
.fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-back .back-title {
    color: <?php echo FLBuilderColor::hex_or_rgb( $settings->back_box_title_color ); ?>;
}

<?php endif; ?>

<?php FLBuilderCSS::typography_field_rule( array(
	'settings'		=> $settings,
	'setting_name' 	=> 'back_box_title_typography',
	'selector' 		=>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-back .back-title",
) );
?>

<?php
if ( ! empty( $settings->back_box_description_color ) ) : ?>
.fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-back .back-description {
    color: <?php echo FLBuilderColor::hex_or_rgb( $settings->back_box_description_color ); ?>;
}

<?php endif; ?>

<?php FLBuilderCSS::typography_field_rule( array(
	'settings'		=> $settings,
	'setting_name' 	=> 'back_box_description_typography',
	'selector' 		=>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-back .back-description",
) );
?>

/*back box icon */
<?php
FLBuilderCSS::responsive_rule(array(
        'settings'  =>  $settings,
        'setting_name' =>  'back_box_icon_size',
        'selector'  =>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .back_box-icon-wrapper .back_box-icon-inner",
        'prop'  =>  'font-size',
        'unit'  => 'px',
) );
FLBuilderCSS::responsive_rule(array(
        'settings'  =>  $settings,
        'setting_name' =>  'back_box_icon_padding',
        'selector'  =>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .back_box-icon-wrapper .back_box-icon-inner",
        'prop'  =>  'padding',
        'unit'  =>  $settings->back_box_icon_padding_unit,
) );
?>
<?php  if(!empty($settings->back_box_icon_color)){ ?>
.fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .back_box-icon-wrapper .back_box-icon-inner i {
    color: <?php echo FLBuilderColor::hex_or_rgb( $settings->back_box_icon_color);?>;
}

.fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .back_box-icon-wrapper .back_box-icon-inner.framed {
    border-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->back_box_icon_color);?>;
}

.fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .back_box-icon-wrapper .back_box-icon-inner.stacked {
    background-color : <?php echo FLBuilderColor::hex_or_rgb( $settings->back_box_icon_color);?>;
}

<?php } ?>

<?php if(!empty($settings->back_box_icon_background_color)){ ?>
.fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .back_box-icon-wrapper .back_box-icon-inner.stacked i {
    color : <?php echo FLBuilderColor::hex_or_rgb( $settings->back_box_icon_background_color);?>;
}

.fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .back_box-icon-wrapper .back_box-icon-inner.framed {
    background-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->back_box_icon_background_color);?>;
}
<?php } ?>

<?php
    FLBuilderCSS::rule(array(
    'selector'  =>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .back_box-icon-wrapper .back_box-icon-inner.framed",
    'props' =>  array(
    'border-color'  => $settings->back_box_icon_border_color,
    'border-style'  =>  $settings->back_box_icon_border_style,
)
));

FLBuilderCSS::dimension_field_rule(array(
    'settings'  =>  $settings,
    'setting_name'  =>  'back_box_icon_border_width',
    'selector'  =>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .back_box-icon-wrapper .back_box-icon-inner.framed",
    'props'  =>  array(
        'border-top-width'      =>  'back_box_icon_border_width_top',
        'border-right-width'      =>  'back_box_icon_border_width_right',
        'border-bottom-width'      =>  'back_box_icon_border_width_bottom',
        'border-left-width'      =>  'back_box_icon_border_width_left',
     ),
     'unit' =>  'px',

));

FLBuilderCSS::responsive_rule(array(
    'settings'  =>  $settings,
    'setting_name'  =>  'back_box_icon_border_radius',
    'selector'  =>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .back_box-icon-wrapper .back_box-icon-inner",
    'prop' =>  'border-radius',
    'unit' =>  FLBuilderCSS::get_unit('back_box_icon_border_radius' , $settings),
));
?>

<?php if(!empty($settings->back_box_icon_hover_color)){ ?>
.fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .back_box-icon-wrapper .back_box-icon-inner:hover i {
    color: <?php echo FLBuilderColor::hex_or_rgb( $settings->back_box_icon_hover_color);?>;
}

.fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .back_box-icon-wrapper .back_box-icon-inner.framed:hover {
    border-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->back_box_icon_hover_color);?>;
}

<?php } ?>

<?php if($settings->back_box_icon_type != 'default' && !empty($settings->back_box_icon_background_hover_color)){?>
.fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .back_box-icon-wrapper .back_box-icon-inner:hover {
    background-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->back_box_icon_background_hover_color);?>;
}

<?php } ?>


<?php if($settings->back_box_icon_type != 'default' && !empty($settings->back_box_icon_background_color)){?>
.fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .back_box-icon-wrapper .back_box-icon-inner {
    background-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->back_box_icon_background_color);?>;
}

<?php } ?>

/* Button*/
<?php
//Border
  FLBuilderCSS::border_field_rule(array(
        'settings'  =>  $settings,
        'setting_name'   =>  'action_border',
        'selector'  =>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-back .action-button-wrapper .action-button"
));
//Typography
  FLBuilderCSS::typography_field_rule(array(
        'settings'  =>  $settings,
        'setting_name' =>  'action_typography',
        'selector'  =>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-back .action-button-wrapper .action-button",
) );

//Icon Size
  FLBuilderCSS::responsive_rule( array(
	'settings'		=> $settings,
	'setting_name'	=> 'action_icon_size',
	'selector'		=> ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-back .action-button-wrapper i",
	'prop'			=> 'font-size',
	'unit'  =>  'px',
) );
//Padding
 FLBuilderCSS::dimension_field_rule(array(
    'settings'  =>  $settings,
    'setting_name'  =>  'action_button_padding',
    'selector'  =>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-back .action-button-wrapper .action-button",
    'props'			=> array(
        'padding-top' 		=> 'action_button_padding_top',
        'padding-right' 	=> 'action_button_padding_right',
        'padding-bottom' 	=> 'action_button_padding_bottom',
        'padding-left' 		=> 'action_button_padding_left',
     ),
    'unit'  =>  'px',
) );
?>

<?php if(!empty($settings->action_color)){?>
.fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-back .action-button-wrapper .action-button {
    color: <?php echo FLBuilderColor::hex_or_rgb($settings->action_color);?>;
}

<?php } ?>

/*action Color hover*/
<?php if(!empty($settings->action_hover_color)){?>
.fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-back .action-button-wrapper .action-button:hover {
    color: <?php echo FLBuilderColor::hex_or_rgb($settings->action_hover_color);?>;
}

<?php } ?>

/*Back Button Backgound color*/
<?php
// Background Gradient
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-back .action-button-wrapper .action-button",
	'enabled' => 'gradient' === $settings->action_button_background,
	'props' => array(
		'background-image' => FLBuilderColor::gradient( $settings->action_background_gradient ),
	),
) );
?>
<?php if($settings->action_button_background == 'color' || $settings->action_button_background == 'image' ) {?>
.fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-back .action-button-wrapper .action-button {

<?php if(!empty($settings->action_background_color) && $settings->action_button_background == 'color'){?>
    background-color: <?php echo FLBuilderColor::hex_or_rgb($settings->action_background_color);?>;
<?php } ?>

<?php if(!empty($settings->action_background_image_src) && $settings->action_button_background == 'image'){?>
    background-image: url("<?php echo $settings->action_background_image_src ;?>");
<?php } ?>

<?php if(!empty($settings->action_background_opacity) && $settings->action_button_background == 'image'){?>
    opacity: <?php echo $settings->action_background_opacity;?>;
<?php } ?>

}

<?php } ?>

<?php if($settings->action_button_background == 'color' || $settings->action_button_background == 'image' ) {?>
.fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-back .action-button-wrapper .action-button:hover {
<?php if(!empty($settings->action_background_hover_color)  && $settings->action_button_background == 'color'){?>
    background-color: <?php echo FLBuilderColor::hex_or_rgb($settings->action_background_hover_color);?>;
<?php } ?>

<?php if(!empty($settings->action_background_hover_opacity) && $settings->action_button_background == 'image'){?>
    opacity: <?php echo $settings->action_background_hover_opacity;?>;
<?php } ?>
}

<?php } ?>

<?php if(!empty($settings->action_icon_color)){?>
.fl-node-<?php echo $id; ?>.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-back .action-button-wrapper i {
    color: <?php echo FLBuilderColor::hex_or_rgb($settings->action_icon_color);?>;
}

<?php }?>

<?php //general settings?>

<?php
FLBuilderCSS::responsive_rule( array(
	'settings'		=> $settings,
	'setting_name'	=> 'box_height',
	'selector'		=> ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-inner",
	'prop'			=> 'height',
	'unit'            => 'px'
) );

FLBuilderCSS::border_field_rule(array(
    'settings'  =>  $settings,
    'setting_name'  =>  'flipbox_border',
    'selector'      =>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-inner > div"
));
//Padding
 FLBuilderCSS::dimension_field_rule(array(
    'settings'  =>  $settings,
    'setting_name'  =>  'front_box_padding',
    'selector'  =>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-front .bp-flipbox-front-content",
    'props'			=> array(
        'padding-top' 		=> 'front_box_padding_top',
        'padding-right' 	=> 'front_box_padding_right',
        'padding-bottom' 	=> 'front_box_padding_bottom',
        'padding-left' 		=> 'front_box_padding_left',
     ),
    'unit'  =>  'px',
) );

FLBuilderCSS::dimension_field_rule(array(
    'settings'  =>  $settings,
    'setting_name'  =>  'back_box_padding',
    'selector'  =>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-back .bp-flipbox-back-content",
    'props'			=> array(
        'padding-top' 		=> 'back_box_padding_top',
        'padding-right' 	=> 'back_box_padding_right',
        'padding-bottom' 	=> 'back_box_padding_bottom',
        'padding-left' 		=> 'back_box_padding_left',
     ),
    'unit'  =>  'px',
) );

 FLBuilderCSS::rule(array(
         'enabled'  =>  'image' === $settings->front_background,
         'selector' =>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-front .bp-flipbox-front-overlay",
         'props' =>  array(
                 'background-color' =>  $settings->front_background_overlay_color,
         )
 ));
 FLBuilderCSS::rule(array(
         'enabled'  =>  'image' === $settings->back_background,
         'selector' =>  ".fl-node-$id.fl-module-bp-flipbox .bp-flipbox-wrapper .bp-flipbox-inner .bp-flipbox-back .bp-flipbox-back-overlay",
         'props' =>  array(
                 'background-color' =>  $settings->back_background_overlay_color,
         )
 ));
?>

.bp-flipbox-back-overlay , .bp-flipbox-front-overlay {
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
}


