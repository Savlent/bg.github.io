<?php

namespace ffshortcodes;

use ffshortcodes\helper\utils;
use ffshortcodes\model\database;
use ffshortcodes\view\view;

class core {

	/** @var  $instance - self */
	private static $instance;

	public $model;
	public $view;
	public $controller;

	public $shortcodes 				= array();
	public $links 						= array();
	public $pro_shortcodes 		= array();

	public $is_pro_version_active;
	public $plugin_base;
	public $plugin_path;
	public $plugin_url;
	public $shortcodes_dir;
	public $gutenberg_blocks_dir;
	public $assets_dir;
	public $cache_time;
	public $dev_mode;

	/**
	 * @return core , Singleton
	 */
	public static function getInstance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	private function __construct() {
	}

	private function __clone() {
	}

	/**
	 * Run the plugin
	 **/
	public function run() {

		$this->links = array(
			'docs' 					=> 'https://shortcodes.fruitfulcode.com/shortcodes/',
			'support' 			=> 'https://support.fruitfulcode.com/hc/en-us',
			'pro_plugin' 		=> 'https://shortcodes.fruitfulcode.com/get-pro/',
		);

		$this->is_pro_version_active 	= in_array( 'fruitful-shortcodes-pro/ff-shortcodes-pro.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) );
		$this->plugin_base 						= plugin_basename( _FF_SHORTCODES_PLUGIN_FILE_ );
		$this->plugin_path 						= plugin_dir_path( _FF_SHORTCODES_PLUGIN_FILE_ );
		$this->plugin_url 						= plugin_dir_url( _FF_SHORTCODES_PLUGIN_FILE_ );
		$this->shortcodes_dir 				= '/core/shortcodes/';
		$this->gutenberg_blocks_dir 	= '/core/gutenberg_blocks/';
		$this->assets_dir 						= '/assets/shared/';
		$this->cache_time 						= '071120180241';
		$this->dev_mode 							= defined( 'FF_SHORTCODES_DEBUG') && FF_SHORTCODES_DEBUG;

		// internationalization
		load_plugin_textdomain( 'ff_shortcodes', false, $this->plugin_path . '/languages' );

		$this->pro_shortcodes = array(
			'fruitful_benefits' => array(
				'title' => __( 'Benefits', 'ff_shortcodes'),
				'desc' => __( 'Add benefits grid', 'ff_shortcodes'),
			),
			'fruitful_box' => array(
				'title' => __( 'Box', 'ff_shortcodes'),
				'desc' => __( 'Add a box', 'ff_shortcodes'),
			),
			'fruitful_chart' => array(
				'title' => __( 'Chart', 'ff_shortcodes'),
				'desc' => __( 'Add a pie chart', 'ff_shortcodes'),
			),
			'fruitful_countdown' => array(
				'title' => __( 'Countdown', 'ff_shortcodes'),
				'desc' => __( 'Add a countdown', 'ff_shortcodes'),
			),
			'fruitful_counters' => array(
				'title' => __( 'Counters', 'ff_shortcodes'),
				'desc' => __( 'Add counters', 'ff_shortcodes'),
			),
			'fruitful_logos_carousel' => array(
				'title' => __( 'Logos carousel', 'ff_shortcodes'),
				'desc' => __( 'Add logos carousel', 'ff_shortcodes'),
			),
			'fruitful_odometer' => array(
				'title' => __( 'Odometer', 'ff_shortcodes'),
				'desc' => __( 'Add an odometer', 'ff_shortcodes'),
			),
			'fruitful_parallax' => array(
				'title' => __( 'Parallax', 'ff_shortcodes'),
				'desc' => __( 'Add a parallax', 'ff_shortcodes'),
			),
			'fruitful_pricing_tables' => array(
				'title' => __( 'Pricing Tables', 'ff_shortcodes'),
				'desc' => __( 'Add a pricing table', 'ff_shortcodes'),
			),
			'fruitful_quote' => array(
				'title' => __( 'Quote', 'ff_shortcodes'),
				'desc' => __( 'Add a quote', 'ff_shortcodes'),
			),
			'fruitful_separator' => array(
				'title' => __( 'Separator 2', 'ff_shortcodes'),
				'desc' => __( 'Add separator', 'ff_shortcodes'),
			),
			'fruitful_slider' => array(
				'title' => __( 'Slider', 'ff_shortcodes'),
				'desc' => __( 'Add slider', 'ff_shortcodes'),
			),
			'fruitful_social_icons' => array(
				'title' => __( 'Social Icons', 'ff_shortcodes'),
				'desc' => __( 'Add social icons', 'ff_shortcodes'),
			),
			'fruitful_team_members' => array(
				'title' => __( 'Team Members', 'ff_shortcodes'),
				'desc' => __( 'Add team grid', 'ff_shortcodes'),
			),
			'fruitful_testimonials' => array(
				'title' => __( 'Testimonials', 'ff_shortcodes'),
				'desc' => __( 'Add testimonials grid', 'ff_shortcodes'),
			),
			'fruitful_timeline' => array(
				'title' => __( 'Timeline', 'ff_shortcodes'),
				'desc' => __( 'Add timeline', 'ff_shortcodes'),
			),
			'fruitful_ttt' => array(
				'title' => __( 'Tabs / Toggle', 'ff_shortcodes'),
				'desc' => __( 'Add tabs / tour or toggles', 'ff_shortcodes'),
			),
		);

		// load core classes
		$this->_dispatch();

		do_action( 'ff_shortcodes_plugin_core_loaded');

		// load shortcodes configs
		$this->_load_shortcodes_cfg();

	}

	/**
	 * Load shortcodes config
	**/
	private function _load_shortcodes_cfg() {

		$shortcodes = glob( $this->plugin_path . $this->shortcodes_dir . '*' , GLOB_ONLYDIR );

		foreach( $shortcodes as $shortcode ) {

			$shortcode_name = str_replace( '-', '_', basename( $shortcode ));
			$path = $this->plugin_path . $this->shortcodes_dir . $shortcode_name;
			$cfg_path = $path . '/config.php';

			if( in_array( $shortcode_name, $shortcodes ) || !file_exists( $cfg_path ) ) {
				continue;
			}

			include_once $cfg_path;

			$this->shortcodes[ $shortcode_name ] = array(
				'path' => $path,
				'url' => $this->plugin_url . $this->shortcodes_dir . $shortcode_name,
				'icon' => $this->plugin_url . $this->assets_dir . $shortcode_name . '/img/admin-icon.svg',
				'title' => $cfg['title'],
				'desc' => $cfg['desc'],
				'is_pro' => false
			);
		}

        //dd($this->shortcodes);

		/**
		 * Ads for Pro version (of Pro version is not active)
		**/
		if( ! in_array( 'fruitful-shortcodes-pro/ff-shortcodes-pro.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
			foreach( $this->pro_shortcodes as $shortcode_name => $data ) {
				$this->shortcodes[ $shortcode_name ] = array(
					'path' => '',
					'url' => '',
					'icon' => $this->plugin_url . '/assets/img/pro/' . $shortcode_name . '.svg',
					'title' => $data['title'],
					'desc' => $data['desc'],
					'is_pro' => true
				);
			}
		}

		$this->shortcodes = apply_filters( 'ff_shortcodes_list', $this->shortcodes );

	}

	/**
	 * Load and instantiate all application
	 * classes neccessary for this plugin
	**/
	private function _dispatch() {

    $this->model = new \stdClass();
    $this->controller = new \stdClass();
    $this->view = new view();

		// Autoload models
		$this->_load_modules( 'model', '/' );

		// Autoload controllers
		$this->_load_modules( 'controller', '/' );

		// Autoload helpers
		$this->_load_modules( 'helper', '/', false );

		// Autoload shortcodes
		utils::autoload_dir( $this->plugin_path . $this->shortcodes_dir, 1, 'init.php' );

		if( utils::is_gutenberg() && file_exists( $this->plugin_path . $this->shortcodes_dir ) ) {
			// Autoload gutenberg blocks
			utils::autoload_dir( $this->plugin_path . $this->gutenberg_blocks_dir, 1, 'init.php' );
		}

	}

	/**
	 * Autoload core modules in a specific directory
	 *
	 * @param string
	 * @param string
	 * @param bool
	 **/
	private function _load_modules( $layer, $dir = '/', $init_class = true ) {

		$directory = $this->plugin_path . '/core/' . $layer . $dir;
		$handle    = opendir( $directory );

		while ( false !== ( $file = readdir( $handle ) ) ) {

			if ( is_file( $directory . $file ) ) {
				// Figure out class name from file name
				$class = str_replace( '.php', '', $file );

				// Avoid recursion
				if ( $init_class && $class !== get_class( $this ) ) {
					$classPath            = "\\ffshortcodes\\{$layer}\\{$class}";
					$this->$layer->$class = new $classPath();
				}

			}
		}

	}

}
