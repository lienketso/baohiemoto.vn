<?php
/**
 * Plugin Name: JetSmartFilters
 * Plugin URI:  https://crocoblock.com/plugins/jetsmartfilters/
 * Description: Adds easy-to-use AJAX filters to the pages built with Elementor which contain the dynamic listings.
 * Version:     3.0.4
 * Author:      Crocoblock
 * Author URI:  https://crocoblock.com/
 * Text Domain: jet-smart-filters
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die();
}

// If class `Jet_Smart_Filters` doesn't exists yet.
if ( ! class_exists( 'Jet_Smart_Filters' ) ) {
	/**
	 * Sets up and initializes the plugin.
	 */
	class Jet_Smart_Filters {

		/**
		 * Plugin version
		 */
		private $version = '3.0.4';

		/**
		 * Holder for base plugin URL
		 */
		private $plugin_url = null;

		/**
		 * Holder for base plugin path
		 */
		private $plugin_path = null;

		/**
		 * A reference to an instance of this class.
		 */
		private static $instance = null;

		/**
		 * Plugin base name
		 */
		public $plugin_name = null;

		/**
		 * Сlassic admin panel switcher
		 */
		public $is_classic_admin = null;

		/**
		 * Components
		 */
		public $framework;
		public $post_type;
		public $data;
		public $filter_types;
		public $providers;
		public $widgets;
		public $query;
		public $render;
		public $services;
		public $settings;
		public $indexer;
		public $rest_api;

		public $filters_not_used = true;

		/**
		 * Sets up needed actions/filters for the plugin to initialize.
		 */
		public function __construct() {

			$this->plugin_name = plugin_basename( __FILE__ );

			// Load framework
			add_action( 'after_setup_theme', array( $this, 'framework_loader' ), -20 );

			// Internationalize the text strings used.
			add_action( 'init', array( $this, 'lang' ), -999 );
			// Load files.
			add_action( 'init', array( $this, 'init' ), -999 );

			// Set that filters are used for editors
			add_action( 'elementor/preview/init', array( $this, 'set_filters_used' ) );
			add_action( 'enqueue_block_editor_assets', array( $this, 'set_filters_used' ) );

			// Register activation/deactivation/update hook.
			register_activation_hook( __FILE__, array( $this, 'plugin_activation' ) );
			register_deactivation_hook( __FILE__, array( $this, 'plugin_deactivation' ) );
			add_action( 'init', array( $this, 'plugin_update' ) );

			// Register assets
			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_assets' ) );
			add_action( 'enqueue_block_editor_assets', array( $this, 'enqueue_assets' ) );

			if ( is_admin() ) {
				// Jet Dashboard Init
				add_action( 'init', array( $this, 'jet_dashboard_init' ), -999 );

				// Admin Init
				add_action( 'init', array( $this, 'admin_init' ), -999 );
			}
		}

		/**
		 * Returns plugin version
		 */
		public function get_version() {

			return $this->version;
		}

		/**
		 * Load framework modules
		 */
		public function framework_loader() {

			require $this->plugin_path( 'framework/loader.php' );

			$this->framework = new Jet_Smart_Filters_CX_Loader(
				array(
					$this->plugin_path( 'framework/interface-builder/cherry-x-interface-builder.php' ),
					$this->plugin_path( 'framework/post-meta/cherry-x-post-meta.php' ),
					$this->plugin_path( 'framework/vue-ui/cherry-x-vue-ui.php' ),
					$this->plugin_path( 'framework/jet-dashboard/jet-dashboard.php' ),
					$this->plugin_path( 'framework/jet-elementor-extension/jet-elementor-extension.php' ),
					$this->plugin_path( 'framework/admin-bar/jet-admin-bar.php' ),
				)
			);
		}

		/**
		 * Manually init required modules.
		 */
		public function init() {

			if ( $this->has_bricks() && ! function_exists( 'jet_engine' ) ) {
				add_action( 'admin_notices', array( $this, 'required_plugins_notice' ) );
			}

			$this->load_files();

			$this->services     = new Jet_Smart_Filters_Services();
			$this->settings     = new Jet_Smart_Filters_Settings();
			$this->post_type    = new Jet_Smart_Filters_Post_Type();
			$this->query        = new Jet_Smart_Filters_Query_Manager();
			$this->render       = new Jet_Smart_Filters_Render();
			$this->data         = new Jet_Smart_Filters_Data();
			$this->filter_types = new Jet_Smart_Filters_Filter_Manager();
			$this->providers    = new Jet_Smart_Filters_Providers_Manager();
			$this->blocks       = new Jet_Smart_Filters_Blocks_Manager();
			$this->bricks       = new \Jet_Smart_Filters\Bricks_Views\Manager();
			$this->indexer      = new Jet_Smart_Filters_Indexer_Manager();
			$this->utils        = new Jet_Smart_Filters_Utils();
			$this->admin_bar    = Jet_Admin_Bar::get_instance();

			//Init Rest Api
			$this->rest_api     = new \Jet_Smart_Filters\Rest_Api();

			new Jet_Smart_Filters_Elementor_Manager();

			new Jet_Smart_Filters_Rewrite_Rules();
			new Jet_Smart_Filters_Compatibility();
			new Jet_Smart_Filters_Referrer_Manager();
			new Jet_Smart_Filters_Tax_Query_Manager();

			$admin_mode             = $this->settings->get( 'admin_mode', '$mode' );
			$this->is_classic_admin = $admin_mode === 'classic' ? true : false;

			do_action( 'jet-smart-filters/init', $this );
		}

		/**
		 * Load required files
		 */
		public function load_files() {

			require $this->plugin_path( 'includes/rest-api/manager.php' );
			require $this->plugin_path( 'includes/post-type.php' );
			require $this->plugin_path( 'includes/functions.php' );
			require $this->plugin_path( 'includes/data.php' );
			require $this->plugin_path( 'includes/elementor/manager.php' );
			require $this->plugin_path( 'includes/blocks.php' );
			require $this->plugin_path( 'includes/bricks/manager.php' );
			require $this->plugin_path( 'includes/query.php' );
			require $this->plugin_path( 'includes/render.php' );
			require $this->plugin_path( 'includes/referrer.php' );
			require $this->plugin_path( 'includes/filters/manager.php' );
			require $this->plugin_path( 'includes/providers/manager.php' );
			require $this->plugin_path( 'includes/settings.php' );
			require $this->plugin_path( 'includes/services/services.php' );
			require $this->plugin_path( 'includes/rewrite.php' );
			require $this->plugin_path( 'includes/compatibility.php' );
			require $this->plugin_path( 'includes/indexer/manager.php' );
			require $this->plugin_path( 'includes/utils.php' );
			require $this->plugin_path( 'includes/tax-query/manager.php' );
		}

		/**
		 * Register assets
		 */
		public function enqueue_assets() {

			$suffix = '.min';

			if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
				$suffix = '';
			}

			// register air datepicker
			wp_register_script(
				'air-datepicker',
				jet_smart_filters()->plugin_url( 'assets/vendors/air-datepicker/air-datepicker' . $suffix . '.js' ),
				array( 'jquery' ),
				'2.2.3'
			);

			wp_register_style(
				'air-datepicker',
				jet_smart_filters()->plugin_url( 'assets/vendors/air-datepicker/air-datepicker' . $suffix . '.css' ),
				array(),
				'2.2.3'
			);
		}

		/**
		 * Set that filters are used
		 */
		public function set_filters_used() {
			$this->filters_not_used = false;
		}

		/**
		 * Init the JetDashboard module
		 */
		public function jet_dashboard_init() {

			$jet_dashboard_module_data = $this->framework->get_included_module_data( 'jet-dashboard.php' );
			$jet_dashboard             = \Jet_Dashboard\Dashboard::get_instance();

			$jet_dashboard->init( array(
				'path'           => $jet_dashboard_module_data['path'],
				'url'            => $jet_dashboard_module_data['url'],
				'cx_ui_instance' => array( $this, 'jet_dashboard_ui_instance_init' ),
				'plugin_data'    => array(
					'slug'    => 'jet-smart-filters',
					'file'    => 'jet-smart-filters/jet-smart-filters.php',
					'version' => $this->get_version(),
					'plugin_links' => array(
						array(
							'label'  => esc_html__( 'Smart Filters', 'jet-smart-filters' ),
							'url'    => add_query_arg( array( 'post_type' => 'jet-smart-filters' ), admin_url( 'edit.php' ) ),
							'target' => '_self',
						),
						array(
							'label'  => esc_html__( 'Add New Filter', 'jet-smart-filters' ),
							'url'    => add_query_arg( array( 'post_type' => 'jet-smart-filters' ), admin_url( 'post-new.php' ) ),
							'target' => '_self',
						),
						array(
							'label'  => esc_html__( 'Settings', 'jet-smart-filters' ),
							'url'    => add_query_arg( array( 'page' => 'jet-dashboard-settings-page', 'subpage' => 'jet-smart-filters-general-settings' ), admin_url( 'admin.php' ) ),
							'target' => '_self',
						),
					),
				),
			) );
		}

		/**
		 * Get Vue UI Instance for JetDashboard module
		 */
		public function jet_dashboard_ui_instance_init() {

			$cx_ui_module_data = $this->framework->get_included_module_data( 'cherry-x-vue-ui.php' );

			return new CX_Vue_UI( $cx_ui_module_data );
		}

		/**
		 * Init Admin
		 */
		public function admin_init() {

			if ( $this->is_classic_admin ) {
				require jet_smart_filters()->plugin_path( 'admin/admin-classic/admin.php' );
				new Jet_Smart_Filters_Сlassic_Admin();
			} else {
				require $this->plugin_path( 'admin/admin.php' );
				new Jet_Smart_Filters_Admin();
			}
		}

		/**
		 * Check if theme has elementor
		 */
		public function has_elementor() {

			return defined( 'ELEMENTOR_VERSION' );
		}

		/**
		 * Register filter item for admin bar
		 */
		public function admin_bar_register_item( $filter_id ) {

			$href = $this->is_classic_admin
				? get_admin_url() . 'post.php?post=' . $filter_id . '&action=edit'
				: get_admin_url() . 'admin.php?page=jet-smart-filters#/' . $filter_id;
			
			$this->admin_bar->register_post_item( $filter_id, array(
				'href' => $href
			) );
		}

		/**
		 * Returns path to file or dir inside plugin folder
		 */
		public function plugin_path( $path = null ) {

			if ( ! $this->plugin_path ) {
				$this->plugin_path = trailingslashit( plugin_dir_path( __FILE__ ) );
			}

			return $this->plugin_path . $path;
		}
		/**
		 * Returns url to file or dir inside plugin folder
		 */
		public function plugin_url( $path = null ) {

			if ( ! $this->plugin_url ) {
				$this->plugin_url = trailingslashit( plugin_dir_url( __FILE__ ) );
			}

			return $this->plugin_url . $path;
		}

		/**
		 * Loads the translation files.
		 */
		public function lang() {

			load_plugin_textdomain(
				'jet-smart-filters',
				false,
				dirname( plugin_basename( __FILE__ ) ) . '/languages'
			);
		}

		/**
		 * Get the template path.
		 *
		 * @return string
		 */
		public function template_path() {

			return apply_filters( 'jet-smart-filters/template-path', 'jet-smart-filters/' );
		}

		/**
		 * Returns path to template file.
		 */
		public function get_template( $name = null ) {

			$template = locate_template( $this->template_path() . $name );

			if ( ! $template ) {
				$template = $this->plugin_path( 'templates/' . $name );
			}

			if ( file_exists( $template ) ) {
				return $template;
			} else {
				return false;
			}
		}

		/**
		 * Do some stuff on plugin activation
		 */
		public function plugin_activation() {

			require $this->plugin_path( 'includes/db.php' );
			Jet_Smart_Filters_DB::create_all_tables();
		}

		/**
		 * Do some stuff on plugin deactivation
		 */
		public function plugin_deactivation() {

			require $this->plugin_path( 'includes/db.php' );
			Jet_Smart_Filters_DB::drop_all_tables();

			delete_site_option( 'jet_smart_filters_version' );
		}

		/**
		 * Do some stuff on plugin update
		 */
		public function plugin_update() {

			if ( get_site_option( 'jet_smart_filters_version' ) === $this->version ) {
				return;
			}

			// Update plugin version option
			update_site_option( 'jet_smart_filters_version', $this->version );

			// Update indexer DB
			$this->indexer->index_filters();
		}

		/**
		 * Returns the instance.
		 */
		public static function get_instance() {

			// If the single instance hasn't been set, set it now.
			if ( null == self::$instance ) {
				self::$instance = new self;
			}
			return self::$instance;
		}

		/**
		 * Show recommended plugins notice.
		 *
		 * @return void
		 */
		public function required_plugins_notice() {
			$screen = get_current_screen();

			if ( isset( $screen->parent_file ) && 'plugins.php' === $screen->parent_file && 'update' === $screen->id ) {
				return;
			}

			$plugin = 'jet-engine/jet-engine.php';

			$installed_plugins      = get_plugins();
			$is_elementor_installed = isset( $installed_plugins[ $plugin ] );

			if ( $is_elementor_installed ) {
				if ( ! current_user_can( 'activate_plugins' ) ) {
					return;
				}

				$activation_url = wp_nonce_url( 'plugins.php?action=activate&amp;plugin=' . $plugin . '&amp;plugin_status=all&amp;paged=1&amp;s', 'activate-plugin_' . $plugin );

				$message = sprintf( '<p>%s</p>', esc_html__( 'JetSmartFilters requires JetEngine to be activated.', 'jet-smart-filters' ) );
				$message .= sprintf( '<p><a href="%s" class="button-primary">%s</a></p>', $activation_url, esc_html__( 'Activate JetEngine Now', 'jet-smart-filters' ) );
			} else {
				if ( ! current_user_can( 'install_plugins' ) ) {
					return;
				}

				$install_url = wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=elementor' ), 'install-plugin_elementor' );

				$message = sprintf( '<p>%s</p>', esc_html__( 'JetSmartFilters requires JetEngine to be installed.', 'jet-smart-filters' ) );
				$message .= sprintf( '<p><a href="%s" class="button-primary">%s</a></p>', $install_url, esc_html__( 'Install JetEngine Now', 'jet-smart-filters' ) );
			}

			printf( '<div class="notice notice-warning is-dismissible"><p>%s</p></div>', wp_kses_post( $message ) );
		}

		public function has_bricks() {
			return defined( 'BRICKS_VERSION' );
		}
	}
}

if ( ! function_exists( 'jet_smart_filters' ) ) {

	/**
	 * Returns instanse of the plugin class.
	 */
	function jet_smart_filters() {
		return Jet_Smart_Filters::get_instance();
	}
}

jet_smart_filters();
