<?php

if ( ! class_exists( 'BP_Custom_Field_Scripts' ) ) {
    class BP_Custom_Field_Scripts {
        function __construct() {
            add_filter( 'fl_builder_custom_fields', array( $this, 'bp_ui_fields' ), 10, 1 );
        }

        public function bp_ui_fields( $fields ) {

            $fields['bp-editor']        = BP_BB_PATH . '/fields/bp-editor/bp-editor.php';

            return $fields;
        }
    }

    $BP_Custom_Field_Scripts = new BP_Custom_Field_Scripts();
}
