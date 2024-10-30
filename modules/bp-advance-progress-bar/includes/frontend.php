<?php
$module->add_render_attribute( 'wrapper', [
    'class'          => ['bp-advance-progress-bar-wrapper','bp-progress-bar','progress-bar--'.$settings->skin_type ],
    'data-effect'           => $settings->skin_type,
    'data-value'  =>     $settings->percent,
    'data-skill' =>  $settings->bar_title
] );
$module->add_render_attribute( 'prg-value','class',['progress-bar__value','progress-bar__value--'.$settings->skin_type ]);
if($settings->skin_type == '2' || '3') {
    $module->add_render_attribute( 'prg-value','class','progress-bar__value--aligned-value');
}
$module->add_render_attribute( 'prg-bar','class',['progress-bar__bar','progress-bar__bar--'.$settings->skin_type]);
$module->add_render_attribute( 'prg-bar-inner','class',['progress-bar__bar-inner','progress-bar__bar-inner--'.$settings->skin_type]);
$module->add_render_attribute( 'prg-skill','class',['progress-bar__skill','progress-bar__skill--'.$settings->skin_type]);


?>
<div <?php echo $module->get_render_attribute_string( 'wrapper' ); ?>>
    <?php if($settings->show_percent == 'show'){?>
        <span <?php echo $module->get_render_attribute_string( 'prg-value' ); ?>><?php echo $settings->percent ; ?>%</span>
    <?php } ?>
            <div <?php echo $module->get_render_attribute_string( 'prg-bar' ); ?>>
                <div <?php echo $module->get_render_attribute_string( 'prg-bar-inner' ); ?>></div>
            </div>
    <?php if($settings->show_title == 'show'){?>
        <span <?php echo $module->get_render_attribute_string( 'prg-skill' ); ?>><?php echo $settings->bar_title ; ?></span>
    <?php } ?>
</div>

