<?php
/**
 * Plugin Name: Old Jetpack Stats Link
 * Plugin URI: http://github.com/jeherve/jeherve-old-stats-link/
 * Description: Bring back the old Stats link in the Jetpack menu
 * Author: Jeremy Herve
 * Version: 1.0
 * Author URI: https://jeremy.hu
 */

/**
 * Add a Site Stats link to the Jetpack menu.
 */
function jeherve_old_stats_link() {
	$hook = add_submenu_page(
		'jetpack',
		__( 'Site Stats', 'jetpack' ),
		__( 'Site Stats', 'jetpack' ),
		'view_stats',
		'stats',
		'stats_reports_page'
	);
	add_action( "load-$hook", 'stats_reports_load' );
}
add_action( 'jetpack_admin_menu', 'jeherve_old_stats_link', 11 );
