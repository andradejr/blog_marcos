<?php
/**
 * This file has all the main shortcode functions
 * @package Twitter Bootstrap Shortcodes Plugin
 * @since 1.0
 * @author David Perez : https://www.closemarketing.es
 * @copyright Copyright (c) 2013, David Perez
 * @link http://bragthemes.com
 * @License: GNU General Public License version 3.0
 * @License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 */

function bsc_add_mce_button() {
	// check user permissions
	if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
		return;
	}
	// check if WYSIWYG is enabled
	if ( 'true' == get_user_option( 'rich_editing' ) ) {
		add_filter( 'mce_external_plugins', 'bsc_add_tinymce_plugin' );
		add_filter( 'mce_buttons', 'bsc_register_mce_button' );
        add_filter( 'mce_external_languages', 'bsc_mce_button_lang');
	}
}
add_action('admin_head', 'bsc_add_mce_button');


function bsc_add_tinymce_plugin( $plugin_array ) {
	$plugin_array['bsc_mce_button'] = plugins_url( '/bsc_shortcodes_tinymce.js', __FILE__ );

	return $plugin_array;
}


function bsc_register_mce_button( $buttons ) {
	array_push( $buttons, 'bsc_mce_button' );

	return $buttons;
}

function bsc_mce_button_lang($locales) {
    $locales['bsc_mce_button'] = plugin_dir_path ( __FILE__ ) . 'translations.php';

    return $locales;
}
