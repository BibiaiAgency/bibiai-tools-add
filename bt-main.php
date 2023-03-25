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
