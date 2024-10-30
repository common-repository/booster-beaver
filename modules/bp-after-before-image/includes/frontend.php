<?php

$module->add_render_attribute( 'wrapper', 'class', 'bp-img-comp-container' );
$module->add_render_attribute( 'wrapper', 'class', 'mode-' . $settings->compare_style );
$module->add_render_attribute( 'wrapper', 'data-ab-style', $settings->compare_style );
$module->add_render_attribute( 'wrapper', 'data-slider-pos', $settings->slider_position );

$module->add_render_attribute( 'icon', 'class', 'icon-' . $settings->compare_style );
$module->add_render_attribute( 'icon', 'class', 'bp-img-comp-slider' );
?>
<div <?php echo $module->get_render_attribute_string( 'wrapper' ); ?> >
	<span class="bp-before-image">
		<?php if ( isset( $settings->before_image_src ) && $settings->before_image_src != "" ) { ?>
            <img class="bp-before-img" src="<?php echo $settings->before_image_src; ?>"/>
		<?php } ?>

		<?php if ( $settings->before_text !== "" ) { ?>
            <span class="bp-text bp-text-before"><?php echo $settings->before_text; ?></span>
		<?php } ?>
    </span>

    <div class="bp-after-image">
	    <?php if ( isset( $settings->after_image_src ) && $settings->after_image_src != "" ) { ?>
            <img class="bp-after-img" src="<?php echo $settings->after_image_src; ?>"/>
	    <?php } ?>
	    <?php if ( $settings->after_text !== "" ) { ?>
            <span class="bp-text bp-text-after"><?php echo $settings->after_text; ?></span>
	    <?php } ?>
    </div>

    <div class="bp-img-comp-img bp-img-comp-overlay"></div>

    <div <?php echo $module->get_render_attribute_string( 'icon' ); ?> >
        <i class="<?php echo $settings->slider_icon; ?> bp-slider-icon"></i>
    </div>

</div>