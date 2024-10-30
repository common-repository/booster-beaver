<?php
use BP_BB\Helper;
//echo '<pre>'; print_r($settings); echo '</pre>';
$img = $settings->img_src;
$button_html    = Helper::instance()->bp_button_html( $module, $settings, 'action' );
$module->add_render_attribute( 'imgbox_wrapper', 'class', 'bp-imagebox-wrapper' );
$module->add_render_attribute( 'imgbox_wrapper', 'class', 'img-pos-'.$settings->img_position);
?>

<div <?php echo $module->get_render_attribute_string( 'imgbox_wrapper' ); ?>>
    <div class="bp-imagebox">
        <?php if($settings->imagebox_background == 'image'){?>
            <div class="bp-imagebox-overlay"></div>
        <?php } ?>
        <?php if(!empty($img)){?>
            <div class="bp-imagebox-image-wrapper">
                <img src="<?php echo $img ; ?>" class="bp-imagebox-img">
            </div>
        <?php } ?>

        <div class="bp-imagebox-content-wrapper">
            <h3 class="bp-image-box-title">
                <?php echo $settings->image_title; ?>
            </h3>
            <div class="bp-image-box-content"><span><?php echo $settings->image_content; ?></span></div>
            <?php if ( ! empty( $settings->action_button_text || $settings->action_icon ) && $settings->action_is_button == 'enable' ) { ?>
                <?php echo $button_html; ?>
            <?php } ?>
        </div>
    </div>
</div>