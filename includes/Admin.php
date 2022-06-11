<?php

namespace Woo\Solutions;


/**
 * The Admin Class
 */
class Admin {

    function __construct() {
        new Admin\Menu();
        new Frontend\Shortcode();
    }
}
