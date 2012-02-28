<?php

// Getting Theme and Child Theme Data
// Credits: Joern Kretzschmar

$themeData = get_theme_data(TEMPLATEPATH . '/style.css');
$thm_version = trim($themeData['Version']);
if(!$thm_version)
    $thm_version = "unknown";

$ct=get_theme_data(STYLESHEETPATH . '/style.css');
$templateversion = trim($ct['Version']);
if(!$templateversion)
    $templateversion = "unknown";

// set theme constants
define('THEMENAME', $themeData['Title']);
define('THEMEAUTHOR', $themeData['Author']);
define('THEMEURI', $themeData['URI']);
define('THEMATICVERSION', $thm_version);

// set child theme constants
define('TEMPLATENAME', $ct['Title']);
define('TEMPLATEAUTHOR', $ct['Author']);
define('TEMPLATEURI', $ct['URI']);
define('TEMPLATEVERSION', $templateversion);


// set feed links handling
// If you set this to TRUE, thematic_show_rss() and thematic_show_commentsrss() are used instead of add_theme_support( 'automatic-feed-links' )
if (!defined('THEMATIC_COMPATIBLE_FEEDLINKS')) {	
	if (function_exists('comment_form')) {
		define('THEMATIC_COMPATIBLE_FEEDLINKS', false); // WordPress 3.0
	} else {
		define('THEMATIC_COMPATIBLE_FEEDLINKS', true); // below WordPress 3.0
	}
}

// set comments handling for pages, archives and links
// If you set this to TRUE, comments only show up on pages with a key/value of "comments"
if (!defined('THEMATIC_COMPATIBLE_COMMENT_HANDLING')) {
	define('THEMATIC_COMPATIBLE_COMMENT_HANDLING', false);
}

// set body class handling to WP body_class()
// If you set this to TRUE, Thematic will use thematic_body_class instead
if (!defined('THEMATIC_COMPATIBLE_BODY_CLASS')) {
	define('THEMATIC_COMPATIBLE_BODY_CLASS', false);
}

// set post class handling to WP post_class()
// If you set this to TRUE, Thematic will use thematic_post_class instead
if (!defined('THEMATIC_COMPATIBLE_POST_CLASS')) {
	define('THEMATIC_COMPATIBLE_POST_CLASS', false);
}
// which comment form should be used
if (!defined('THEMATIC_COMPATIBLE_COMMENT_FORM')) {
	if (function_exists('comment_form')) {
		define('THEMATIC_COMPATIBLE_COMMENT_FORM', false); // WordPress 3.0
	} else {
		define('THEMATIC_COMPATIBLE_COMMENT_FORM', true); // below WordPress 3.0
	}
}

// Check for WordPress mu or WordPress 3.0
define('THEMATIC_MB', function_exists('get_blog_option'));

// Create the feedlinks
if (!(THEMATIC_COMPATIBLE_FEEDLINKS)) {
	add_theme_support( 'automatic-feed-links' );
}

// Check for WordPress 2.9 add_theme_support()
if ( apply_filters( 'thematic_post_thumbs', TRUE) ) {
	if ( function_exists( 'add_theme_support' ) )
	add_theme_support( 'post-thumbnails' );
}

// Load jQuery
wp_enqueue_script('jquery');

// Path constants
define('THEMELIB', TEMPLATEPATH . '/library');

// Create Theme Options Page
require_once(THEMELIB . '/extensions/theme-options.php');

// Load legacy functions
require_once(THEMELIB . '/legacy/deprecated.php');

// Load widgets
require_once(THEMELIB . '/extensions/widgets.php');

// Load custom header extensions
require_once(THEMELIB . '/extensions/header-extensions.php');

// Load custom content filters
require_once(THEMELIB . '/extensions/content-extensions.php');

// Load custom Comments filters
require_once(THEMELIB . '/extensions/comments-extensions.php');
 
// Load custom discussion filters
require_once(THEMELIB . '/extensions/discussion-extensions.php');

// Load custom Widgets
require_once(THEMELIB . '/extensions/widgets-extensions.php');

// Load the Comments Template functions and callbacks
require_once(THEMELIB . '/extensions/discussion.php');

// Load custom sidebar hooks
require_once(THEMELIB . '/extensions/sidebar-extensions.php');

// Load custom footer hooks
require_once(THEMELIB . '/extensions/footer-extensions.php');

// Add Dynamic Contextual Semantic Classes
require_once(THEMELIB . '/extensions/dynamic-classes.php');

// Need a little help from our helper functions
require_once(THEMELIB . '/extensions/helpers.php');

// Load shortcodes
require_once(THEMELIB . '/extensions/shortcodes.php');

// Adds filters for the description/meta content in archives.php
add_filter( 'archive_meta', 'wptexturize' );
add_filter( 'archive_meta', 'convert_smilies' );
add_filter( 'archive_meta', 'convert_chars' );
add_filter( 'archive_meta', 'wpautop' );

// Remove the WordPress Generator - via http://blog.ftwr.co.uk/archives/2007/10/06/improving-the-wordpress-generator/
function thematic_remove_generators() { return ''; }
if (apply_filters('thematic_hide_generators', TRUE)) {  
    add_filter('the_generator','thematic_remove_generators');
}

// Translate, if applicable
load_theme_textdomain('thematic', THEMELIB . '/languages');

$locale = get_locale();
$locale_file = THEMELIB . "/languages/$locale.php";
if ( is_readable($locale_file) )
	require_once($locale_file);


// Post Types

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'staff',
		array(
			'labels' => array(
				'name' => __( 'Staff Members' ),
				'singular_name' => __( 'Staff Member' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
		)
	);
	register_post_type( 'board',
		array(
			'labels' => array(
				'name' => __( 'Advisory Board Members' ),
				'singular_name' => __( 'Advisory Board Member' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
		)
	);
	register_post_type( 'slider',
		array(
			'labels' => array(
				'name' => __( 'Slider Content' ),
				'singular_name' => __( 'Slider Content' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'thumbnail' )
		)
	);
}


// Post Thumbnails

/****** Add Thumbnails in Manage Posts/Pages List ******/
if ( !function_exists('AddThumbColumn') && function_exists('add_theme_support') ) {
    // for post and page
    add_theme_support('post-thumbnails', array( 'post', 'page', 'slider', 'staff', 'board' ) );
    add_image_size( 'staff', 300, 300, true );
    function AddThumbColumn($cols) {
        $cols['thumbnail'] = __('Thumbnail');
        return $cols;
    }
    function AddThumbValue($column_name, $post_id) {
            $width = (int) 60;
            $height = (int) 60;
            if ( 'thumbnail' == $column_name ) {
                // thumbnail of WP 2.9
                $thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );
                // image from gallery
                $attachments = get_children( array('post_parent' => $post_id, 'post_type' => 'attachment', 'post_mime_type' => 'image') );
                if ($thumbnail_id)
                    $thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
                elseif ($attachments) {
                    foreach ( $attachments as $attachment_id => $attachment ) {
                        $thumb = wp_get_attachment_image( $attachment_id, array($width, $height), true );
                    }
                }
                    if ( isset($thumb) && $thumb ) {
                        echo $thumb;
                    } else {
                        echo __('None');
                    }
            }
    }
    // for posts
    add_filter( 'manage_posts_columns', 'AddThumbColumn' );
    add_action( 'manage_posts_custom_column', 'AddThumbValue', 10, 2 );
    // for pages
    add_filter( 'manage_pages_columns', 'AddThumbColumn' );
    add_action( 'manage_pages_custom_column', 'AddThumbValue', 10, 2 );
}

// Excerpts

//function new_excerpt_more($more) {
//       global $post;
//	return ' ... <div class="more_butt"> <a href='.get_permalink($post->ID).'  onclick="location.replace(\''.get_permalink($post->ID).'\'); return false;">read more</a></div>';
//}
//add_filter('excerpt_more', 'new_excerpt_more');

//function custom_excerpt_length( $length ) {
//	return 28;
//}
//add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more($more) {
       global $post;
	return ' ... <div class="more_butt" onclick="location.href=\''.get_permalink($post->ID).'\'" style="cursor:pointer;"> <a href='.get_permalink($post->ID).'>read more</a></div>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length( $length ) {
	return 28;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

remove_filter('the_content','ec3_filter_the_content',20);
remove_filter('get_the_excerpt', 'ec3_get_the_excerpt');
add_filter('get_the_excerpt', 'wp_trim_excerpt');

// New Walker

class Description_Walker extends Walker_Nav_Menu
{
    /**
     * Start the element output.
     *
     * @param  string $output Passed by reference. Used to append additional content.
     * @param  object $item   Menu item data object.
     * @param  int $depth     Depth of menu item. May be used for padding.
     * @param  array $args    Additional strings.
     * @return void
     */
    function start_el(&$output, $item, $depth, $args)
    {
        $classes     = empty ( $item->classes ) ? array () : (array) $item->classes;

        $class_names = join(
            ' '
        ,   apply_filters(
                'nav_menu_css_class'
            ,   array_filter( $classes ), $item
            )
        );

        ! empty ( $class_names )
            and $class_names = ' class="'. esc_attr( $class_names ) . '"';

        $output .= "<li id='menu-item-$item->ID' $class_names>";

        $attributes  = '';

        ! empty( $item->attr_title )
            and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
        ! empty( $item->target )
            and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
        ! empty( $item->xfn )
            and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
        ! empty( $item->url )
            and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';
       // ! empty( $item->url )
       //     and $attributes .= ' onclick="location.replace(\''   . esc_attr( $item->url        ) .'\'); return false";"';

        // insert description for top level elements only
        // you may change this
        $description = ( ! empty ( $item->description ) and 0 == $depth )
            ? '<small class="nav_desc">' . esc_attr( $item->description ) . '</small>' : '';

        $title = apply_filters( 'the_title', $item->title, $item->ID );

        $item_output = $args->before
            . "<a $attributes>"
            . $args->link_before
            . $title
            . '</a> '
            . $args->link_after
            . $description
            . $args->after;

        // Since $output is called by reference we don't need to return anything.
        $output .= apply_filters(
            'walker_nav_menu_start_el'
        ,   $item_output
        ,   $item
        ,   $depth
        ,   $args
        );
    }
}
?>