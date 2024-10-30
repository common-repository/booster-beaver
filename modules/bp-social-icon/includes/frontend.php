<?php

$module->add_render_attribute( 'bp-social-icon-wrapper', 'class', 'bp-social-icon-wrapper' );
$module->add_render_attribute( 'bp-social-icon-wrapper', 'class', 'bp-social-icon-' . $settings->icon_shape );
$module->add_render_attribute( 'bp-social-icon-wrapper', 'class', 'bp-social-icon-' . $settings->icon_structure );

?>

<div <?php echo $module->get_render_attribute_string( 'bp-social-icon-wrapper' ); ?>>
    <ul class="bp-icons">
	<?php if ( count( $settings->social_icon_list ) ) { ?>
		<?php foreach ( $settings->social_icon_list as $social_icon ) {

			$icon = $social_icon->icon;
			$link = $social_icon->link;
			$module->add_render_attribute( $social_icon->icon . '-icon', 'class', 'bp-icon '.$settings->icon_view );
			?>
                <li class="bp-icon-block">
                    <a <?php echo $module->get_render_attribute_string( $social_icon->icon . '-icon' ); ?>
                            href="<?php echo $link; ?>" target="_blank">
                        <i class="<?php echo $icon; ?>"></i>
                    </a>
                </li>


		<?php } ?>

	<?php } ?>
    </ul>
</div>

