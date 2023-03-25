    /*
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.
    You should have received a copy of the GNU General Public License
    along with this program. If not, see https://www.gnu.org/licenses/.
    */

function bt_enqueue_scripts() {
    wp_enqueue_style('icon-bt', plugin_dir_url(__FILE__) . 'fonts/icon-bt.css', array(), '1.0');
}
add_action('admin_enqueue_scripts', 'bt_enqueue_scripts()');

function bt_admin_menu() {
    // Check if the "Bibiai Tools" menu exists and create one if it does not exist.
    if (empty($GLOBALS['admin_page_hooks']['bibiai-tools'])) {
        add_menu_page(
            'Bibiai Tools',
            'Bibiai Tools',
            'manage_options',
            'bibiai-tools',
            '__return_empty_string',
            'dashicons-icon-btbibiai-tools'
        );
    }

    // Add the plugin panel as a sub-tab of "Bibiai Tools".
    add_submenu_page(
        'bibiai-tools',
        '/*Your Plugin*/',
        '/*Your Plugin*/',
        'manage_options',
        '/*your-plugin*/',
        '/*your-plugin-setting-page*/'
    );
}

add_action('admin_menu', 'bt_admin_menu');
