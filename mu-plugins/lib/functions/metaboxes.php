<?php
/**
 * Metaboxes
 *
 * This file registers any custom metaboxes
 *
 * @category	 Core Functionality
 * @package      Metaboxes
 * @author       Ryan Urban <ryan@fringewebdevelopment.com>
 * @copyright    Copyright (c) Ryan Urban
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @link         https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 */
 
add_filter( 'cmb_meta_boxes' , 'jigsaw_init_metaboxes' );
/**
 * Create Metaboxes
 * @param  array $meta_boxes
 * @return array
 * @since 1.0
 * @link http://www.billerickson.net/wordpress-metaboxes/
 */

$prefix = '_jigsaw_'; // Prefix for all fields
function jigsaw_init_metaboxes( $meta_boxes ) {
	
	global $prefix;
	$meta_boxes[] = array(
    	'id' => 'test_metabox',
	    'title' => 'Test Metabox',
	    'pages' => array('page'), 
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, 
		'fields' => array(
			array(
				'name' => 'Instructions',
				'desc' => 'Enter instructions here',
				'id' => $prefix . 'highlight_instructions',
				'type' => 'title',
			),
		),
	);
	
	return $meta_boxes;
}
 
 
/**
 * Initialize Metabox Class
 * @since 1.0
 * see /lib/metabox/example-functions.php for more information
 *
 */
  
function jigsaw_initialize_cmb_meta_boxes() {
    if ( !class_exists( 'cmb_Meta_Box' ) ) {
        require_once( JIGSAW_DIR . '/lib/metabox/init.php' );
    }
}
add_action( 'init', 'jigsaw_initialize_cmb_meta_boxes', 9999 );