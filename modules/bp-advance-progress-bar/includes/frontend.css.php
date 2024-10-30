<?php
FLBuilderCSS::rule(array(
        'settings'  =>  $settings,
        'selector'  =>  ".fl-node-$id.fl-module-bp-advance-progress-bar .bp-progress-bar .progress-bar__bar .progress-bar__bar-inner , .fl-node-$id.fl-module-bp-advance-progress-bar .bp-progress-bar .progress-bar__value--3",
        'props' =>  array(
                'background-color'  =>  $settings->bar_color,
        ),
));
FLBuilderCSS::rule(array(
        'settings'  =>  $settings,
        'selector'  =>  ".fl-node-$id.fl-module-bp-advance-progress-bar .bp-progress-bar .progress-bar__value--3:after , .fl-node-$id.fl-module-bp-advance-progress-bar .bp-progress-bar .progress-bar__bar-inner--3:after",
        'props' =>  array(
                'border-top-color'  =>  $settings->bar_color,
        ),
));
FLBuilderCSS::rule(array(
        'settings'  =>  $settings,
        'selector'  =>  ".fl-node-$id.fl-module-bp-advance-progress-bar .bp-progress-bar .progress-bar__bar-inner--4:after",
        'props' =>  array(
                'background-color'  =>  $settings->bar_color,
        ),
));
FLBuilderCSS::rule(array(
        'settings'  =>  $settings,
        'selector'  =>  ".fl-node-$id.fl-module-bp-advance-progress-bar .bp-progress-bar .progress-bar__bar",
        'props' =>  array(
                'background-color'  =>  $settings->bar_background_color,
        ),
));
FLBuilderCSS::rule(array(
        'settings'  =>  $settings,
        'selector'  =>  ".fl-node-$id.fl-module-bp-advance-progress-bar .bp-progress-bar .progress-bar__skill , .fl-node-$id.fl-module-bp-advance-progress-bar .bp-progress-bar .progress-bar__value",
        'props' =>  array(
                'color'  =>  $settings->text_color,
        ),
));
FLBuilderCSS::typography_field_rule(array(
        'settings'  =>  $settings,
        'setting_name'  =>  'text_typography',
        'selector'  =>   ".fl-node-$id.fl-module-bp-advance-progress-bar .bp-progress-bar .progress-bar__skill , .fl-node-$id.fl-module-bp-advance-progress-bar .bp-progress-bar .progress-bar__value",
));
?>
.fl-node-<?php echo $id; ?>.fl-module-bp-advance-progress-bar .bp-progress-bar .progress-bar__bar-inner--2{
    background-image : linear-gradient(to top, rgba(255, 255, 255, 0.15), rgba(0, 0, 0, 0.2)),linear-gradient(135deg, <?php echo FLBuilderColor::hex_or_rgb($settings->bar_gradient['colors'][0]) ?>  , <?php echo FLBuilderColor::hex_or_rgb($settings->bar_gradient['colors'][0]) ?> 33% , <?php echo FLBuilderColor::hex_or_rgb($settings->bar_gradient['colors'][1]) ?> 33% , <?php echo FLBuilderColor::hex_or_rgb($settings->bar_gradient['colors'][1]) ?> 66% , <?php echo FLBuilderColor::hex_or_rgb($settings->bar_gradient['colors'][0]) ?> 66%);
}
