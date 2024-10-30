<?php

use BP_BB\Helper;

$icon_html = Helper::instance()->bp_icon_html( $module, $settings, 'ts' );

$module->add_render_attribute( 'bp-ts-wrapper', 'class', 'bp-ts-wrapper' );
$module->add_render_attribute( 'bp-ts-wrapper', 'class', 'bp-ts-' . $settings->bp_alignment );

$module->add_render_attribute( 'bp-ts-icon-wrapper', 'class', 'bp-ts-' . $settings->ts_icon_align );

?>

<div <?php echo $module->get_render_attribute_string( 'bp-ts-wrapper' ); ?>>

    <div class="bp-ts-sep-holder sep-left">
        <div class="bp-ts-sep-lines"></div>
    </div>

	<?php if ( ! empty( $settings->ts_icon ) && $settings->ts_icon_align == 'before' ) { ?>
		<?php echo $icon_html; ?>
	<?php } ?>

	<?php if(!empty ($settings->title)){ ?>
        <div class="bp-ts-title">
            <<?php echo $settings->html_tag; ?> class="bp-ts-heading-title">
                <span><?php echo $settings->title; ?></span>
            </<?php echo $settings->html_tag; ?>>
        </div>
    <?php } ?>

<?php if ( ! empty( $settings->ts_icon ) && $settings->ts_icon_align == 'after' ) { ?>
	<?php echo $icon_html; ?>
<?php } ?>

<div class="bp-ts-sep-holder sep-right">
    <div class="bp-ts-sep-lines"></div>
</div>

</div>