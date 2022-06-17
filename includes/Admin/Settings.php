<?php

namespace Woo\Solutions\Admin;

/**
 * Woo Solutions Settings Class
 */
class Settings {
    /**
     * Settings Page
     *
     * @return void
     */
    public function settings_page() { ?>

        <div class="wrap">
            <form action="" method="post">
                <input type="text" name="first_name" class="">
                <input type="text" name="last_name" class="">
                <input type="email" name="email" class="">
                <input type="submit" value="Submit">
            </form>

        </div>


<?php }
}
