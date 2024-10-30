<?php

namespace BP_BB\Admin\Settings;


$sm = new Settings_Manager();


// Section: Basic Settings.
$sm->add_section(
	array(
		'id'    => 'bpbb_basic',
		'title' => __( 'Basic', 'bp-bb' ),
	)
);


// Field: Text.
$sm->add_field(
	'bpbb_basic',
	array(
		'id'      => 'bpbb_gmap_key',
		'type'    => 'text',
		'name'    => __( 'Google Map API Key', 'bp-bb' ),
		'desc'    => __( '<a target="_blank" href="https://developers.google.com/maps/documentation/javascript/get-api-key">Click Here</a> to generate API Key', 'bp-bb' ),
		'default' => '',
	)
);
