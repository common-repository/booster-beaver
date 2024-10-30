<?php
use BP_BB\Helper;
//echo '<pre>'; print_r($settings); echo '</pre>';
$icon_html      = Helper::instance()->bp_icon_html( $module, $settings, 'info' );
$button_html    = Helper::instance()->bp_button_html( $module, $settings, 'action' );
$module->add_render_attribute( 'infobox_wrapper', 'class', 'bp-infobox-wrapper' );
$module->add_render_attribute( 'infobox_wrapper', 'class', 'icon-pos-'.$settings->info_icon_position);
?>

<div <?php echo $module->get_render_attribute_string( 'infobox_wrapper' ); ?>>
    <div class="bp-infobox">
        <?php if($settings->infobox_background == 'image'){?>
            <div class="bp-infobox-overlay"></div>
        <?php } ?>
        <div class="bp-infobox-icon-wrapper">
            <?php echo $icon_html; ?>
        </div>
        <div class="bp-infobox-content-wrapper">
            <h3 class="bp-info-box-title">
                <?php echo $settings->info_title; ?>
            </h3>
            <div class="bp-info-box-content"><span><?php echo $settings->info_content; ?></span></div>
            <?php if ( ! empty( $settings->action_button_text || $settings->action_icon) && $settings->action_is_button == 'enable' ) { ?>
                <?php echo $button_html; ?>
            <?php } ?>
        </div>
    </div>

</div>