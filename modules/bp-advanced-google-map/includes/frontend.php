<?php
//echo "<pre>";print_r($settings); echo "</pre>";

$markers = $settings->markers;
$styles = json_encode($settings->snazzy_style);

$module->add_render_attribute('wrapper', 'class', 'bp-markers');
$module->add_render_attribute('wrapper', 'data-zoom', $settings->zoom);
$module->add_render_attribute('wrapper', 'data-style', $styles);
$module->add_render_attribute('wrapper', 'data-animate' , 'animate-'.$settings->animate);
$module->add_render_attribute('wrapper', 'data-cluster' , $settings->cluster);
if($settings->cluster == 'enable'){
	$module->add_render_attribute('wrapper', 'data-cluster-style' , $settings->cluster_style);
}

if (count($markers)){
?>

<div <?php echo $module->get_render_attribute_string('wrapper');  ?>>
	<?php

        $i = 0;

        foreach($markers as $marker){

            $i++;

            $module->add_render_attribute('marker'.$i, 'class', 'marker');
            $module->add_render_attribute('marker'.$i, 'data-lng', $marker->bp_lng);
            $module->add_render_attribute('marker'.$i, 'data-lat', $marker->bp_lat);
            $module->add_render_attribute('marker'.$i, 'data-icon', $marker->bp_icon_src);
            $module->add_render_attribute('marker'.$i, 'data-icon-size', $marker->bp_icon_size);
            $module->add_render_attribute('marker'.$i, 'data-info-window', $marker->bp_info_on_load);
		    ?>

            <div <?php echo $module->get_render_attribute_string('marker'.$i)?>>
                <?php echo $marker->bp_address; ?>
            </div>

	<?php } ?>


</div>

<?php }

