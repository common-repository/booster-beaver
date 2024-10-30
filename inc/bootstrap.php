<?php

namespace BP_BB;


class BP_BB {

	private static $_instance = null;

	public static function instance() {

		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	private function __construct() {
        add_action('admin_notices' , [$this , 'admin_notices']);

        add_action('wp_enqueue_scripts', [$this, 'bp_scripts']);

        $this->_includes();

		$this->init_hooks();

	}

	private function init_hooks() {

		add_action( 'init', [ $this, 'load_modules' ] );
	}

	private function _includes() {


		if ( is_admin() ) {

			require_once BP_BB_INC_PATH . '/admin/settings/settings-manager.php';
			require_once BP_BB_INC_PATH . '/admin/settings/settings-init.php';

		}
	}

	public function bp_scripts(){

		wp_enqueue_style('bp-src',BP_BB_ASSETS_URL.'css/global.css',array());

	}

    public function admin_notices()
    {
        if ( ! is_admin() ) {
            return;
        }
        else if ( ! is_user_logged_in() ) {
            return;
        }
        else if ( ! current_user_can( 'update_core' ) ) {
            return;
        }

        if ( !is_plugin_active( 'bb-plugin/fl-builder.php' ) ) {
                echo sprintf('<div class="notice notice-error"><p>%s</p></div>', __('Please install and activate <a href="https://www.wpbeaverbuilder.com/pricing/" target="_blank">Beaver Builder Pro / Agency</a> to use Booster Pack for Beaver Builder.', 'bp-bb'));
        }

    }

	public function load_modules() {

		// load your module files here
		if ( class_exists( 'FLBuilder' ) ) {

			require_once BP_BB_INC_PATH . '/base/module-base.php';
			require_once BP_BB_INC_PATH . '/helper.php';
            require_once BP_BB_PATH . '/fields/fields.php';
			//Load Modules
			require_once BP_BB_MODULE_PATH . '/bp-flipbox/bp-flipbox.php';
			require_once BP_BB_MODULE_PATH . '/bp-infobox/bp-infobox.php';
			require_once BP_BB_MODULE_PATH . '/bp-imagebox/bp-imagebox.php';
			require_once BP_BB_MODULE_PATH . '/bp-after-before-image/bp-after-before-image.php';
			require_once BP_BB_MODULE_PATH . '/bp-splittext/bp-splittext.php';
			require_once BP_BB_MODULE_PATH . '/bp-textseparator/bp-textseparator.php';
            require_once BP_BB_MODULE_PATH . '/bp-advance-progress-bar/bp-advance-progress-bar.php';
			require_once BP_BB_MODULE_PATH . '/bp-social-icon/bp-social-icon.php';
			require_once BP_BB_MODULE_PATH . '/bp-spacer/bp-spacer.php';
			require_once BP_BB_MODULE_PATH . '/bp-advanced-google-map/bp-advanced-google-map.php';
            //require_once BP_BB_MODULE_PATH . '/bp-testimonial/bp-testimonial.php';
            //require_once BP_BB_MODULE_PATH . '/bp-teammember/bp-teammember.php';
		}
	}

}

BP_BB::instance();