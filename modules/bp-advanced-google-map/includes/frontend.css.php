<?php

FLBuilderCSS::responsive_rule( array(
	'settings'		=> $settings,
	'setting_name'	=> 'height',
	'selector'		=> ".fl-node-$id.fl-module-bp-advanced-google-map .bp-markers",
	'prop'			=> 'height',
	'unit'          => 'px'
) );

FLBuilderCss::border_field_rule( array(
	'settings'      => $settings,
	'setting_name'  => 'border',
	'selector'      => ".fl-node-$id.fl-module-bp-advanced-google-map .bp-markers",
	'unit'          => 'px'
));
?>