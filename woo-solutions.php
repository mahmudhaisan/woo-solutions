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
    die;
}

/**
 * The Main Plugin Class
 */

final class Woo_Solutions_Class {

    /**
     * Class Constructor
     */

    private function __construct() {

    }

    /**
     * Initialize Singleton Instance
     */

    static function init() {
        static $instance = false;

        if (!$instance) {
            $instance = new self();
        }

        return $instance;
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