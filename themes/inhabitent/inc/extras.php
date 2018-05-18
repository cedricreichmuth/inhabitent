<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );

/**
 * Adds custom styles to login screen.
*/

function custom_login_header(){
	echo '<style type="text/css">
	h1 a {background-image: url('.get_template_directory_uri().'/images/logos/inhabitent-logo-text-dark.svg) !important;
	height: 100px !important; width: 320px !important; background-size: contain !important;}
	</style>';
}

add_action('login_head', 'custom_login_header');

/**
 * Changes href of link on logo.
*/

function login_url($url){
	return get_home_url();
}

add_filter('login_headerurl', 'login_url');

/**
 * Changes title on logo
*/

function login_logo_title(){
	return 'Inhabitent';
}
add_filter('login_headertitle', 'login_logo_title');
