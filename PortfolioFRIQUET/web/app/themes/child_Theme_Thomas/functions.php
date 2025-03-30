<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 * 
 * 
 * 
 * 
 * 
 * Elle charge d'abord le style du thème parent (parent-style)
 * Elle charge ensuite le style du thème enfant (child-style) avec une dépendance au style parent
 * La dépendance assure que le style enfant est chargé après le style parent
 * 
 */  
add_action( 'wp_enqueue_scripts', 'thomas_child_style' );
				function thomas_child_style() {
					wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
					wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
				}




require_once get_stylesheet_directory() . '/cpt-portfolio.php';



// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

	if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
		function chld_thm_cfg_locale_css( $uri ){
			if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
				$uri = get_template_directory_uri() . '/rtl.css';
			return $uri;
		}
	endif;
	add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
	
	// END ENQUEUE PARENT ACTION

	
	