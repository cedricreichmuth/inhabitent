<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Inhabitent Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );


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
		background: linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ), url($hero_url);
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
		background: linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ), url($front_hero_url);
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

/**
* Change titles for archive-product.php & taxonomy-product_type.php
*/
function title_change_shop($title){
	if(is_post_type_archive('products')){
		$title = 'SHOP STUFF';
	}elseif(is_post_type_archive('adventures')){
		$title = 'LATEST ADVENTURES';
	}elseif(is_tax('product_type')){
		$title = single_term_title();
	}
	return $title;
}
add_filter('get_the_archive_title', 'title_change_shop');

/**
 * Customize excerpt length and style.
 *
 * @param  string The raw post content.
 * @return string
 */
function inhabitent_wp_trim_excerpt( $text ) {
    $raw_excerpt = $text;
    if ( '' == $text ) {
        // retrieve the post content
        $text = get_the_content('');
        // delete all shortcode tags from the content
        $text = strip_shortcodes( $text );
        $text = apply_filters( 'the_content', $text );
        $text = str_replace( ']]>', ']]&gt;', $text );
        // indicate allowable tags
        $allowed_tags = '<p>,<a>,<em>,<strong>,<blockquote>,<cite>';
        $text = strip_tags( $text, $allowed_tags );
        // change to desired word count
        $excerpt_word_count = 50;
        $excerpt_length = apply_filters( 'excerpt_length', $excerpt_word_count );
        // create a custom "more" link
        $excerpt_end = '<span>[...]</span><p><a href="' . get_permalink() . '" class="read-more black-btn">Read more &rarr;</a></p>'; // modify excerpt ending
        $excerpt_more = apply_filters( 'excerpt_more', ' ' . $excerpt_end );
        // add the elipsis and link to the end if the word count is longer than the excerpt
        $words = preg_split( "/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY );
        if ( count( $words ) > $excerpt_length ) {
            array_pop( $words );
            $text = implode( ' ', $words );
            $text = $text . $excerpt_more;
        } else {
            $text = implode( ' ', $words );
        }
    }
    return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );
}
remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
add_filter( 'get_the_excerpt', 'inhabitent_wp_trim_excerpt' );
