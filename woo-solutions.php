<?php

/**
 * Plugin Name: Woo All In One Solutions
 * Plugin URI: https://github.com/mahmudhaisan/woo-solutions
 * Description: This plugin is based on listing search functionality including custom post type , popular search tags etc
 * Version: 1.0
 * Author: Mahmud haisan
 * Author URI: https://github.com/mahmudhaisan
 * Developer: Mahmud Haisan
 * Developer URI: https://github.com/mahmudhaisan
 * Text Domain: woosolutions493
 * Domain Path: /languages
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

if (!defined('ABSPATH')) {
    exit;
}

require_once __DIR__ . '/vendor/autoload.php';





/**
 * The Main Plugin Class
 */

final class Woo_Solutions_Class {

    /**
     * plugin version
     * @var string
     */

    const VERSION = '1.0';

    /**
     * Class Constructor
     */

    private function __construct() {

        $this->define_Plugin_comstants();
        register_activation_hook(__FILE__, [$this, 'activate']); // activation hook
        add_action('plugins_loaded', [$this, 'init_plugin']);
    }

    /**
     * Initialize Singleton Instance
     */

    public static function init() {
        static $instance = false;

        if (!$instance) {
            $instance = new self();
        }

        return $instance;
    }

    /**
     * Define Plugin Constants
     */

    public function define_Plugin_comstants() {

        define('WOO_SOLUTIONS_VERSION', self::VERSION);
        define('WOO_SOLUTIONS_FILE', __FILE__);
        define('WOO_SOLUTIONS_PATH', __DIR__);
        define('WOO_SOLUTIONS_URL', plugins_url('', WOO_SOLUTIONS_FILE));
        define('WOO_SOLUTIONS_ASSETS', WOO_SOLUTIONS_URL . '/assets');
    }




    /**
     * plugin activation callback function
     *
     * @return void
     */
    public function activate() {

        update_option('woo_solutions_version', WOO_SOLUTIONS_VERSION);
    }

    /**
     * plugins activity after activating the plugin
     *
     * @return plugins basic things
     */
    public function init_plugin() {

        new  Woo\Solutions\Admin\Menu(); // admin menu class initialize
    }
}




/**
 * Initialize Main Plugin
 *
 * @return \Woo_Solutions_Class
 */

function woo_solutions() {

    return Woo_Solutions_Class::init();
}

// calling the main class instance
woo_solutions();
