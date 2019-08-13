<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'cflc';

global $meta_boxes;

$meta_boxes = array();

//Staff meta boxes
$meta_boxes[] = array(
	//// Meta box id, UNIQUE per meta box. Optional since 4.1.5
	'id' => 'staff',

	// Meta box title - Will appear at the drag and drop handle bar. Required.
	'title' => __( 'Staff Details', 'rwmb' ),

	// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
	'pages' => array( 'staff' ),

	// Where the meta box appear: normal (default), advanced, side. Optional.
	'context' => 'normal',

	// Order of meta box: high (default), low. Optional.
	'priority' => 'high',

	// Auto save: true, false (default). Optional.
	'autosave' => true,

	// List of meta fields
	'fields' => array(
		// TEXT
		array(
			'name'  => __( 'Name', 'rwmb' ),
			'id'    => "{$prefix}Name",
			'desc'  => __( 'Enter the name of staff member', 'rwmb' ),
			'type'  => 'text',
		),
		// TEXT
		array(
			'name'  => __( 'Title', 'rwmb' ),
			'id'    => "{$prefix}Title",
			'desc'  => __( 'Enter the title of staff member', 'rwmb' ),
			'type'  => 'text',
		),
		// TEXTAREA
		array(
			'name' => __( 'Bio', 'rwmb' ),
			'desc' => __( 'Enter a bio for staff member', 'rwmb' ),
			'id'   => "{$prefix}Bio",
			'type' => 'textarea',
			'cols' => 20,
			'rows' => 3,
		),
		// IMAGE ADVANCED (WP 3.5+)
		array(
			'name' => __( 'Profile Image', 'rwmb' ),
			'desc' => __( 'Upload a profile image for this staff member. NOTE: IMAGE SHOULD BE 200px by 200px', 'rwmb' ),
			'id' => "{$prefix}ProfileImage",
			'type' => 'image_advanced',
			'max_file_uploads' => 1,
		)
	),
	'validation' => array(
		'rules' => array(
			"{$prefix}Name" => array(
				'required' => true,
			),
			"{$prefix}Title" => array(
				'required' => true,
			),
			"{$prefix}Bio" => array(
				'required'  => true,
			),
			"{$prefix}ProfileImage" => array(
				'required'  => true,
			),
		),
		// optional override of default jquery.validate messages
		'messages' => array(
			"{$prefix}Name" => array(
				'required'  => __( 'Please enter a name for this staff member', 'rwmb' ),
			),
			"{$prefix}Title" => array(
				'required'  => __( 'Please enter a title for this staff member', 'rwmb' ),
			),
			"{$prefix}Bio" => array(
				'required' => __( 'Please enter a bio for this staff person', 'rwmb' ),
			),
			"{$prefix}ProfileImage" => array(
				'required' => __( 'Please upload a profile picture for this staff member', 'rwmb' ),
			),
		)
	)
);


//Business Partners meta boxes
$meta_boxes[] = array(
	//// Meta box id, UNIQUE per meta box. Optional since 4.1.5
	'id' => 'businessPartners',

	// Meta box title - Will appear at the drag and drop handle bar. Required.
	'title' => __( 'Business Partner Details', 'rwmb' ),

	// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
	'pages' => array( 'businessPartners' ),

	// Where the meta box appear: normal (default), advanced, side. Optional.
	'context' => 'normal',

	// Order of meta box: high (default), low. Optional.
	'priority' => 'high',

	// Auto save: true, false (default). Optional.
	'autosave' => true,

	// List of meta fields
	'fields' => array(
		// TEXT
		array(
			'name'  => __( 'Business Name', 'rwmb' ),
			'id'    => "{$prefix}BusinessName",
			'desc'  => __( 'Enter the name of the Business', 'rwmb' ),
			'type'  => 'text',
		),
		// IMAGE ADVANCED (WP 3.5+)
		array(
			'name' => __( 'Business Logo', 'rwmb' ),
			'desc' => __( 'Upload a logo for this business. NOTE: IMAGE SHOULD BE 200px by 200px', 'rwmb' ),
			'id' => "{$prefix}BusinessLogo",
			'type' => 'image_advanced',
			'max_file_uploads' => 1,
		)
	),
	'validation' => array(
		'rules' => array(
			"{$prefix}BusinessName" => array(
				'required' => true,
			),
			"{$prefix}BusinessLogo" => array(
				'required'  => false,
			),
		),
		// optional override of default jquery.validate messages
		'messages' => array(
			"{$prefix}BusinessName" => array(
				'required'  => __( 'Please enter a name for this busines', 'rwmb' ),
			),
			"{$prefix}BusinessLogo" => array(
				'required' => __( 'Please upload a logo for this business', 'rwmb' ),
			),
		)
	)
);

//Community Partners meta boxes
$meta_boxes[] = array(
	//// Meta box id, UNIQUE per meta box. Optional since 4.1.5
	'id' => 'communityPartners',

	// Meta box title - Will appear at the drag and drop handle bar. Required.
	'title' => __( 'Community Partner Details', 'rwmb' ),

	// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
	'pages' => array( 'communityPartners' ),

	// Where the meta box appear: normal (default), advanced, side. Optional.
	'context' => 'normal',

	// Order of meta box: high (default), low. Optional.
	'priority' => 'high',

	// Auto save: true, false (default). Optional.
	'autosave' => true,

	// List of meta fields
	'fields' => array(
		// TEXT
		array(
			'name'  => __( 'Name or Family Name', 'rwmb' ),
			'id'    => "{$prefix}PartnerName",
			'desc'  => __( 'Enter the name of the supporter', 'rwmb' ),
			'type'  => 'text',
		)
	),
	'validation' => array(
		'rules' => array(
			"{$prefix}PartnerName" => array(
				'required' => true,
			),
		),
		// optional override of default jquery.validate messages
		'messages' => array(
			"{$prefix}PartnerName" => array(
				'required'  => __( 'Please enter a name for this supporter', 'rwmb' ),
			),
		)
	)
);

//Resources meta boxes
$meta_boxes[] = array(
	//// Meta box id, UNIQUE per meta box. Optional since 4.1.5
	'id' => 'resources',

	// Meta box title - Will appear at the drag and drop handle bar. Required.
	'title' => __( 'Resources', 'rwmb' ),

	// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
	'pages' => array( 'resources' ),

	// Where the meta box appear: normal (default), advanced, side. Optional.
	'context' => 'normal',

	// Order of meta box: high (default), low. Optional.
	'priority' => 'high',

	// Auto save: true, false (default). Optional.
	'autosave' => true,

	// List of meta fields
	'fields' => array(
		// TEXT
		array(
			'name'  => __( 'Name', 'rwmb' ),
			'id'    => "{$prefix}ResourceName",
			'desc'  => __( 'Enter the name of resource', 'rwmb' ),
			'type'  => 'text',
		),
		// TEXT
		array(
			'name'  => __( 'Website', 'rwmb' ),
			'id'    => "{$prefix}ResourceURL",
			'desc'  => __( 'Enter the website URL for this resource', 'rwmb' ),
			'type'  => 'text',
		),
		// TEXTAREA
		array(
			'name' => __( 'Description', 'rwmb' ),
			'desc' => __( 'Enter a description for this resource', 'rwmb' ),
			'id'   => "{$prefix}ResourceDescription",
			'type' => 'textarea',
			'cols' => 20,
			'rows' => 3,
		)
	),
	'validation' => array(
		'rules' => array(
			"{$prefix}ResourceName" => array(
				'required' => true,
			),
			"{$prefix}ResourceURL" => array(
				'required' => true,
			),
			"{$prefix}ResourceDescription" => array(
				'required'  => false,
			),
		),
		// optional override of default jquery.validate messages
		'messages' => array(
			"{$prefix}ResourceName" => array(
				'required'  => __( 'Please enter a name for this resource', 'rwmb' ),
			),
			"{$prefix}ResourceURL" => array(
				'required'  => __( 'Please enter a website URL for this resource', 'rwmb' ),
			)
		)
	)
);


//Slides meta boxes
$meta_boxes[] = array(
	//// Meta box id, UNIQUE per meta box. Optional since 4.1.5
	'id' => 'slides',

	// Meta box title - Will appear at the drag and drop handle bar. Required.
	'title' => __( 'Slides', 'rwmb' ),

	// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
	'pages' => array( 'slides' ),

	// Where the meta box appear: normal (default), advanced, side. Optional.
	'context' => 'normal',

	// Order of meta box: high (default), low. Optional.
	'priority' => 'high',

	// Auto save: true, false (default). Optional.
	'autosave' => true,

	// List of meta fields
	'fields' => array(
		// TEXT
		array(
			'name'  => __( 'ImageLink', 'rwmb' ),
			'id'    => "{$prefix}ImageLink",
			'desc'  => __( 'Enter a link where this slide should take you', 'rwmb' ),
			'type'  => 'text',
		),
		array(
			'name'  => __( 'Image', 'rwmb' ),
			'id'    => "{$prefix}Image",
			'desc'  => __( 'Upload an image', 'rwmb' ),
			'type'  => 'plupload_image',
		)
	),
	'validation' => array(
		'rules' => array(
			"{$prefix}ImageLink" => array(
				'required' => false,
			),
			'rules' => array(
			"{$prefix}Image" => array(
				'required' => true,
			),
		),
		// optional override of default jquery.validate messages
		'messages' => array(
			"{$prefix}ImageLink" => array(
				'required'  => __( 'Please enter a name for this resource', 'rwmb' ),
			),
			'messages' => array(
			"{$prefix}Image" => array(
				'required'  => __( 'Please upload an image for this slide', 'rwmb' ),
			)
))
		)
	)
);


/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function cflc_register_meta_boxes()
{
	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( !class_exists( 'RW_Meta_Box' ) )
		return;

	global $meta_boxes;
	foreach ( $meta_boxes as $meta_box )
	{
		new RW_Meta_Box( $meta_box );
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'cflc_register_meta_boxes' );
