<?php

use BP_BB\Helper;


$icon_html      = Helper::instance()->bp_icon_html( $module, $settings, 'front_box' );
$back_icon_html = Helper::instance()->bp_icon_html( $module, $settings, 'back_box' );
$button_html    = Helper::instance()->bp_button_html( $module, $settings, 'action' );

$module->add_render_attribute( 'bp-flipbox-wrapper', 'class', 'bp-flipbox-wrapper' );
$module->add_render_attribute( 'bp-flipbox-wrapper', 'class', 'bp-flipbox-animate-' . $settings->animation_style );

$module->add_render_attribute( 'bp-flipbox-inner', 'class', 'bp-flipbox-inner' );



?>
<div <?php echo $module->get_render_attribute_string( 'bp-flipbox-wrapper' ); ?>>

    <div <?php echo $module->get_render_attribute_string( 'bp-flipbox-inner' ); ?>>
        <div class="bp-flipbox-front">
            <?php if($settings->front_background == 'image'){?>
                <div class="bp-flipbox-front-overlay"></div>
            <?php } ?>
            <div class="bp-flipbox-front-content">
				<?php echo $icon_html; ?>
				<?php if (/*!empty($settings->front_box_title) &&*/
					$settings->front_title == 'enable' ) : ?>
                    <div class="front-title-wrapper">
                        <span class="front-title"> <?php echo $settings->front_box_title; ?> </span>
                    </div>
				<?php endif; ?>
				<?php if (/*!empty($settings->front_box_description) &&*/
					$settings->front_description == 'enable' ) : ?>
                    <div class="front-description-wrapper">
                        <span class="front-description"> <?php echo do_shortcode($settings->front_box_description); ?> </span>
                    </div>
				<?php endif; ?>
            </div>
        </div>
        <div class="bp-flipbox-back">
            <?php if($settings->back_background == 'image'){ ?>
                <div class="bp-flipbox-back-overlay"></div>
            <?php } ?>
            <div class="bp-flipbox-back-content">
				<?php echo $back_icon_html; ?>
				<?php if ( $settings->back_title == 'enable' ) : ?>
                    <div class="back-title-wrapper">
                        <span class="back-title"> <?php echo $settings->back_box_title; ?> </span>
                    </div>
				<?php endif; ?>
				<?php if ( $settings->back_description == 'enable' ) : ?>
                    <div class="back-description-wrapper">
                        <span class="back-description"> <?php echo do_shortcode($settings->back_box_description); ?> </span>
                    </div>
				<?php endif; ?>
				<?php if ( ! empty( $settings->action_button_text ) && $settings->action_is_button == 'enable' ) { ?>
					<?php echo $button_html; ?>
				<?php } ?>
            </div>
        </div>
    </div>
</div>
