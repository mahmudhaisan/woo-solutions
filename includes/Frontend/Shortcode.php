<?php


namespace Woo\Solutions\Frontend;

/**
 * Shortcode Handler Class
 */
class Shortcode {

    /**
     * Initializes The Class
     */
    function __construct() {
        add_shortcode('woo-shortcodes', [$this, 'render_shortcode']);
    }

    /**
     * Shortcode Handler Function
     *
     * @param [type] $atts
     * @param string $content
     * 
     * @return void
     */
    public function render_shortcode($atts, $content = '') { ?>
        <form action="/action.php">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" value="Mike"><br><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" value="Walker"><br><br>
            <input type="submit" value="Submit">
        </form>
<?php  }
}
