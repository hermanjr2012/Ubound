<?php

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = 'cmb_';

	$meta_boxes[] = array(
		'id'         => 'custom_metabox',
		'title'      => 'Page Options',
		'pages'      => array( 'page', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
			
			array(
				'name'    => 'Template Style',
				'desc'    => 'Select Template style',
				'id'      => $prefix . 'template_style',
				'type'    => 'select',
				'options' => array(
					array( 'name' => '', 'value' => null, ),
					array( 'name' => 'General Template', 'value' => 'general', ),
					array( 'name' => 'Program Template', 'value' => 'program', ),
				),
			),
			
			array(
				'name'    => 'Color Scheme',
				'desc'    => 'Select Colors Schemes',
				'id'      => $prefix . 'select_theme',
				'type'    => 'select',
				'options' => array(
					array( 'name' => '', 'value' => null, ),
					array( 'name' => 'art', 'value' => 'art', ),
					array( 'name' => 'business', 'value' => 'business', ),
                                        array( 'name' => 'criminal_justice', 'value' => 'criminal_justice', ),
                                        array( 'name' => 'education', 'value' => 'education', ),
                                        array( 'name' => 'engineering', 'value' => 'engineering', ),
                                        array( 'name' => 'graduate', 'value' => 'graduate', ),
                                        array( 'name' => 'graduate_psychology', 'value' => 'graduate_psychology', ),
                                        array( 'name' => 'healthcare', 'value' => 'healthcare', ),
                                        array( 'name' => 'hospitality', 'value' => 'hospitality', ),
                                        array( 'name' => 'it', 'value' => 'it', ),
                                        array( 'name' => 'law', 'value' => 'law', ),
                                        array( 'name' => 'military', 'value' => 'military', ),
                                        array( 'name' => 'nursing', 'value' => 'nursing', ),
                                        array( 'name' => 'psychology', 'value' => 'psychology', ),
                                        array( 'name' => 'university_bound', 'value' => 'university_bound', ),
				),
			),
			
			array(
					'name' => 'Link Color(Hex)',
					'desc' => 'Put Color Value(Hex)',
					'id'   => $prefix . 'link_colors',
					'type' => 'text',
				),
			array(
					'name' => 'Page Headline',
					'desc' => 'Enter page headline here',
					'id'   => $prefix . 'page_headline',
					'type' => 'text',
				),
			array(
					'name' => 'Page Headline Color',
					'desc' => 'Put Color Value(Hex)',
					'id'   => $prefix . 'page_headline_color',
					'type' => 'text',
				),
			array(
					'name' => 'Post Title Color',
					'desc' => 'Put Color Value(Hex)',
					'id'   => $prefix . 'post_title_color',
					'type' => 'text',
				),
		),
	);
	
	$meta_boxes[] = array(
		'id'         => 'degree_meta',
		'title'      => 'Degree Search Page Options',
		'pages'      => array( 'page', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
			
			array(
					'name' => 'Tag line',
					'desc' => 'Enter Tag line',
					'id'   => $prefix . 'tag_line',
					'type' => 'text',
				),
		),
	);
	


	// Add other metaboxes as needed

	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';

}