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

/**
* Make About Hero customizable through CFS field
*/
function hero_background_set(){
	if(! is_page_template('about.php')){
		return;}
	$hero_url = CFS()->get( 'about_hero' );
	if(! $hero_url){
		return;
	}
	$hero_css = ".page-template-about .entry-header{
		background-image: url($hero_url);
		background-size: cover, cover;
		height: 100vh;
		display: flex;
    justify-content: center;
    align-items: center;
    color: white;
		font-size: 30px;
	}";
	wp_add_inline_style('inhabitent-style', $hero_css);
}
add_action('wp_enqueue_scripts', 'hero_background_set');

/**
* Make Front Page Hero customizable through CFS field
*/
function front_hero_background_set(){
	if(! is_page_template('front-page.php')){
		return;}
	$front_hero_url = CFS()->get( 'front_page_hero' );
	if(! $front_hero_url){
		return;
	}
	$front_hero_css = ".page-template-front-page .entry-header{
		background-image: url($front_hero_url);
		background-size: cover, cover;
		height: 100vh;
		display: flex;
    justify-content: center;
    align-items: center;
    color: white;
		font-size: 30px;
	}";
	wp_add_inline_style('inhabitent-style', $front_hero_css);
}
add_action('wp_enqueue_scripts', 'front_hero_background_set');
