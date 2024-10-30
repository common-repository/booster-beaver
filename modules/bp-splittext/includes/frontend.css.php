<?php
// Alignment
FLBuilderCSS::responsive_rule( array(
	'settings'		=> $settings,
	'setting_name'	=> 'alignment',
	'selector'		=> ".fl-node-$id.fl-module-bp-splittext .bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title",
	'prop'			=> 'justify-content',
) );

/** Typography css **/
if ( ! empty( $settings->split_text_color ) ) : ?>
.fl-node-<?php echo $id; ?>.fl-module-bp-splittext .bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title .bp-st-split-text {
    color: <?php echo FLBuilderColor::hex_or_rgb( $settings->split_text_color ); ?>;
}

<?php endif; ?>

<?php FLBuilderCSS::typography_field_rule( array(
	'settings'		=> $settings,
	'setting_name' 	=> 'split_text_typography',
	'selector' 		=>  ".fl-node-$id.fl-module-bp-splittext .bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title .bp-st-split-text",
) );

FLBuilderCSS::border_field_rule(array(
    'settings'  =>  $settings,
    'setting_name'  =>  'split_text_border',
    'selector'      =>  ".fl-node-$id.fl-module-bp-splittext .bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title .bp-st-split-text"
));

// Split Text Padding
FLBuilderCSS::dimension_field_rule( array(
    'settings'		=> $settings,
    'setting_name' 	=> 'split_text_padding',
    'selector' 		=> ".fl-node-$id.fl-module-bp-splittext .bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title .bp-st-split-text",
    'props'			=> array(
        'padding-top' 		=> 'split_text_padding_top',
        'padding-right' 	=> 'split_text_padding_right',
        'padding-bottom' 	=> 'split_text_padding_bottom',
        'padding-left' 		=> 'split_text_padding_left',
    ),
    'unit'  =>  'px',
) );
//Split Text Margin
FLBuilderCSS::dimension_field_rule( array(
    'settings'		=> $settings,
    'setting_name' 	=> 'split_text_margin',
    'selector' 		=> ".fl-node-$id.fl-module-bp-splittext .bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title .bp-st-split-text",
    'props'			=> array(
        'margin-top' 		=> 'split_text_margin_top',
        'margin-right' 	    => 'split_text_margin_right',
        'margin-bottom' 	=> 'split_text_margin_bottom',
        'margin-left' 		=> 'split_text_margin_left',
    ),
    'unit'  =>  'px',
) );
// Background Gradient
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id.fl-module-bp-splittext .bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title .bp-st-split-text",
	'enabled' => 'gradient' === $settings->split_text_background,
	'props' => array(
		'background-image' => FLBuilderColor::gradient( $settings->split_text_gradient ),
	),
) );
?>

<?php if($settings->split_text_background == 'color' || $settings->split_text_background == 'image'){ ?>
.fl-node-<?php echo $id?>.fl-module-bp-splittext .bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title .bp-st-split-text {
<?php if($settings->split_text_background == 'color' && !empty($settings->split_text_background_color)){?>
    background-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->split_text_background_color ); ?>;
<?php } ?>

<?php if($settings->split_text_background == 'image' && !empty($settings->split_text_background_image_src)){?>
    background-image: url("<?php echo $settings->split_text_background_image_src;?>");
<?php } ?>

}

<?php } ?>
/** Rest Text **/

<?php

/** Typography css **/
if ( ! empty( $settings->rest_text_color ) ) : ?>
.fl-node-<?php echo $id; ?>.fl-module-bp-splittext .bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title div.bp-st-rest-text {
    color: <?php echo FLBuilderColor::hex_or_rgb( $settings->rest_text_color ); ?>;
}

<?php endif; ?>

<?php FLBuilderCSS::typography_field_rule( array(
	'settings'		=> $settings,
	'setting_name' 	=> 'rest_text_typography',
	'selector' 		=>  ".fl-node-$id.fl-module-bp-splittext .bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title div.bp-st-rest-text",
) );

FLBuilderCSS::border_field_rule(array(
    'settings'  =>  $settings,
    'setting_name'  =>  'rest_text_border',
    'selector'      =>  ".fl-node-$id.fl-module-bp-splittext .bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title div.bp-st-rest-text"
));

//  Padding
FLBuilderCSS::dimension_field_rule( array(
    'settings'		=> $settings,
    'setting_name' 	=> 'rest_text_padding',
    'selector' 		=> ".fl-node-$id.fl-module-bp-splittext .bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title div.bp-st-rest-text",
    'props'			=> array(
        'padding-top' 		=> 'rest_text_padding_top',
        'padding-right' 	=> 'rest_text_padding_right',
        'padding-bottom' 	=> 'rest_text_padding_bottom',
        'padding-left' 		=> 'rest_text_padding_left',
    ),
    'unit'  =>  'px',
) );
// Margin
FLBuilderCSS::dimension_field_rule( array(
    'settings'		=> $settings,
    'setting_name' 	=> 'rest_text_margin',
    'selector' 		=> ".fl-node-$id.fl-module-bp-splittext .bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title div.bp-st-rest-text",
    'props'			=> array(
        'margin-top' 		=> 'rest_text_margin_top',
        'margin-right' 	    => 'rest_text_margin_right',
        'margin-bottom' 	=> 'rest_text_margin_bottom',
        'margin-left' 		=> 'rest_text_margin_left',
    ),
    'unit'  =>  'px',
) );
// Background Gradient
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id.fl-module-bp-splittext .bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title div.bp-st-rest-text",
	'enabled' => 'gradient' === $settings->rest_text_background,
	'props' => array(
		'background-image' => FLBuilderColor::gradient( $settings->rest_text_gradient ),
	),
) );
?>

<?php if($settings->rest_text_background == 'color' || $settings->rest_text_background == 'image'){ ?>
.fl-node-<?php echo $id?>.fl-module-bp-splittext .bp-st-transform-text-wrapper .bp-st-transform-text .bp-st-transform-text-title div.bp-st-rest-text {
    <?php if($settings->rest_text_background == 'color' && !empty($settings->rest_text_background_color)){?>
        background-color: <?php echo FLBuilderColor::hex_or_rgb( $settings->rest_text_background_color ); ?>;
    <?php } ?>

    <?php if($settings->rest_text_background == 'image' && !empty($settings->rest_text_background_image_src)){?>
        background-image: url("<?php echo $settings->rest_text_background_image_src;?>");
    <?php } ?>
}
<?php } ?>