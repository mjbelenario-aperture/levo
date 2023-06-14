<?php
/**
 * ContentBerg Child Theme functions.php
 *
 * Please refer to contentberg/functions.php about framework setup.
 */

/**
 * Enqueue the CSS. Please note the CSS order is as follows:
 *
 *  - contentberg/style.css
 *  - contentberg/css/skin-XYZ.css
 *  - contentberg-child/style.css
 *  - Inline Custom CSS from Customize
 */
function my_ts_enqueue_parent() {

	wp_enqueue_style(
		'contentberg-core', 
		get_template_directory_uri() . '/style.css', 
		array(), 
		Bunyad::options()->get_config('theme_version')
	);
}

function my_ts_enqueue_child() {

	wp_enqueue_style(
		'contentberg-child', 
		get_stylesheet_uri(),
		Bunyad::options()->get_config('theme_version')
	);

	if(!is_admin() && !is_login()) {
		// remove
		wp_dequeue_script( 'superfish' );
		wp_dequeue_script( 'superfish-args' );
		wp_dequeue_script( 'skip-links' );
		wp_dequeue_script( 'jquery' );
		wp_dequeue_script( 'jquery-core' );
		wp_dequeue_script( 'hoverintent-js' );
		wp_dequeue_script( 'comment-reply' );
    	wp_dequeue_style( 'genesis-sample-gutenberg-css' );
		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'classic-theme-styles' );
		// add 
		
		wp_enqueue_style( 'flickity-style', get_stylesheet_directory_uri().'/src/css/flickity.min.css' );
		wp_enqueue_script( 'flickity-script', get_stylesheet_directory_uri() . '/src/js/flickity.pkgd.min.js', array(), '1.0', false );
	
		wp_enqueue_script( 'polyfill', 'https://polyfill.io/v3/polyfill.min.js?flags=gated&features=Object.fromEntries,es2019,Element.prototype.cloneNode,Event.focusin,IntersectionObserver,IntersectionObserverEntry,HTMLTemplateElement,HTMLCanvasElement.prototype.toBlob,HTMLCanvasElement.protoype.toBlob,String.prototype.replaceAll,scrollBy,scroll,scrollY,scrollX,scrollIntoView,smoothscroll,queueMicrotask', array(), '1.0', false );
		wp_enqueue_script( 'alpinejs-script', get_stylesheet_directory_uri() . '/src/js/alpine.pkgd.min.js', array(), '1.0', false );
		wp_enqueue_script( 'custom-jquery', 'https://code.jquery.com/jquery-3.6.1.min.js', array(), '1.0', true );
	}

	if(!is_user_logged_in()) {
		wp_deregister_style( 'dashicons' );
	}

}

// Enqueue parent CSS at priority 9 as skin and other CSS generates at priority 10
// add_action('wp_enqueue_scripts', 'my_ts_enqueue_parent', 9);

// Change 11 to 100 to make it enqueue AFTER Custom CSS from Customize
add_action('wp_enqueue_scripts', 'my_ts_enqueue_child', 11);

// Disable parent CSS enqueue
add_filter('bunyad_enqueue_core_css', '__return_false');

/*** CATEGORY PAGINATION FIX ***/
function remove_page_from_query_string($query_string){
	if( isset($query_string['page']) ){
		if ($query_string['name'] == 'page' ) {
			unset($query_string['name']);
			$query_string['paged'] = $query_string['page'];
		}
	}
	
		return $query_string;
	}
	add_filter('request', 'remove_page_from_query_string');
	function fix_category_pagination($qs){
	if(isset($qs['category_name']) && isset($qs['paged'])){
		$qs['post_type'] = get_post_types($args = array(
		'public' => true,
		'_builtin' => false
		));
		array_push($qs['post_type'],'post');
	}
	return $qs;
}
add_filter('request', 'fix_category_pagination');

function seo_framework_custom_robots( $meta, $args, $ignore ) {

	$meta['index']  = 'index';
	$meta['follow'] = 'follow';

	return $meta;
}
add_filter( 'the_seo_framework_robots_meta_array', 'seo_framework_custom_robots' , 10, 3 );




/*function remove_category( $string, $type )  {

	if ( $type != 'single' && $type == 'category' && ( strpos( $string, 'category' ) !== false ) )    {   
		$url_without_category = str_replace( 'category/', '/', $string ); 
		return trailingslashit( $url_without_category );   
	}

	return $string;  
}    
add_filter( 'user_trailingslashit', 'remove_category', 100, 2);*/
/*
function remove_category( $string, $type ) {
	if ( $type != 'single' && $type == 'category' && ( strpos( $string, 'category' ) !== false ) ) {
		$url_without_category = str_replace( 'category/', '', $string );
		return trailingslashit( $url_without_category );
	}

	return $string;
}
add_filter( 'user_trailingslashit', 'remove_category', 100, 2 );

function custom_rewrite_rules() {
	add_rewrite_rule(
		'^([^/]+)/([^/]+)/?$',
		'index.php?category_name=$matches[1]/$matches[2]',
		'top'
	);
}
add_action( 'init', 'custom_rewrite_rules' );

function custom_rewrite_rule_categories() {
	$categories = get_categories();

	foreach ( $categories as $category ) {
		add_rewrite_rule(
			'^' . $category->slug . '/([^/]+)/?$',
			'index.php?category_name=' . $category->slug . '/$matches[1]',
			'top'
		);
	}
}
add_action( 'init', 'custom_rewrite_rule_categories' );

function custom_redirect_rules() {
	if ( is_category() && ! is_category( 'uncategorized' ) ) {
		$category = get_queried_object();
		$parent_category = get_category( $category->parent );

		if ( $parent_category && $parent_category->slug ) {
			wp_redirect( home_url( $parent_category->slug . '/' . $category->slug ), 301 );
			exit;
		}
	}
}
add_action( 'template_redirect', 'custom_redirect_rules' );*/
