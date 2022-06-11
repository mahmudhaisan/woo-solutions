<?php

namespace Woo\Solutions\Admin;


/**
 * Menu class
 */
class Menu {
    public function __construct() {
        add_action('admin_menu', [$this, 'admin_menu_callback']);
    }

    public function admin_menu_callback() {
        add_menu_page(__('Woo Solutions', 'woosolutions493'), __('Woo Solutions', 'woosolutions493'), 'manage_options', __('woo-solutions'), [$this, 'plugin_page'], 'dashicons-saved');
    }

    public function plugin_page() {
        echo 'hello';
    }
}
