<?php 
	// Services
	register_post_type( 'Services',
		// CPT Options
		array(
			'labels' => array(
			'name' => __( 'Services' ),
			"singular_name" => __( 'Service', 'Capital Street' ),
			"menu_name" => __( 'Services', 'Capital Street' ),
			"all_items" => __( 'All Services ', 'Capital Street' ),
			"add_new" => __( 'Add New Services ', 'Capital Street' ),
			"add_new_item" => __( 'Add New Services ', 'Capital Street' ),
			"edit_item" => __( 'Edit Services ', 'Capital Street' ),
			"new_item" => __( 'Services', 'Capital Street' ),
			"view_item" => __( 'View Services ', 'Capital Street' ),
			"search_items" => __( 'Search Services ', 'Capital Street' ),
			"not_found" => __( 'No Services  Found', 'Capital Street' ),
			"not_found_in_trash" => __( 'No Services  found in the Trash', 'Capital Street' ),
			"parent_item_colon" => __( 'Parent Services ', 'Capital Street' ),
			"archives" => __( 'Services ', 'Capital Street' ),
			"filter_items_list" => __( 'Filter Services  List', 'Capital Street' ),
			"items_list_navigation" => __( 'Services  Navigation', 'Capital Street' ),
			"items_list" => __( 'Services ', 'Capital Street' ),
			"parent_item_colon" => __( 'Parent Services ', 'Capital Street' ),
			),
			
			'public' => true,
			'has_archive' => false,
			'rewrite' => array('with_front'=> false,'slug' => 'services'),
			'supports' => array('thumbnail', "title", "editor"),
			'menu_icon' => 'dashicons-category',
		)
	);


	// Team
	register_post_type( 'Team',
		// CPT Options
		array(
			'labels' => array(
			'name' => __( 'Team' ),
			"singular_name" => __( 'Team', 'Capital Street' ),
			"menu_name" => __( 'Team', 'Capital Street' ),
			"all_items" => __( 'All Members ', 'Capital Street' ),
			"add_new" => __( 'Add New Member ', 'Capital Street' ),
			"add_new_item" => __( 'Add New Member ', 'Capital Street' ),
			"edit_item" => __( 'Edit Members ', 'Capital Street' ),
			"new_item" => __( 'Members', 'Capital Street' ),
			"view_item" => __( 'View Members ', 'Capital Street' ),
			"search_items" => __( 'Search Members ', 'Capital Street' ),
			"not_found" => __( 'No Members  Found', 'Capital Street' ),
			"not_found_in_trash" => __( 'No Members  found in the Trash', 'Capital Street' ),
			"parent_item_colon" => __( 'Parent Members ', 'Capital Street' ),
			"archives" => __( 'Members ', 'Capital Street' ),
			"filter_items_list" => __( 'Filter Members  List', 'Capital Street' ),
			"items_list_navigation" => __( 'Members  Navigation', 'Capital Street' ),
			"items_list" => __( 'Members ', 'Capital Street' ),
			"parent_item_colon" => __( 'Parent Members ', 'Capital Street' ),
			),
			
			'public' => true,
			'has_archive' => false,
			'rewrite' => array('with_front'=> false,'slug' => 'our-team'),
			'supports' => array('thumbnail', "title", "editor"),
			'menu_icon' => 'dashicons-category',
		)
	);
	
	
	// FAQ
	register_post_type( 'FAQ',
		// CPT Options
		array(
			'labels' => array(
			'name' => __( 'FAQ' ),
			"singular_name" => __( 'FAQ', 'Capital Street' ),
			"menu_name" => __( 'FAQ', 'Capital Street' ),
			"all_items" => __( 'All FAQs ', 'Capital Street' ),
			"add_new" => __( 'Add New FAQ ', 'Capital Street' ),
			"add_new_item" => __( 'Add New FAQ ', 'Capital Street' ),
			"edit_item" => __( 'Edit FAQs ', 'Capital Street' ),
			"new_item" => __( 'FAQs', 'Capital Street' ),
			"view_item" => __( 'View FAQs ', 'Capital Street' ),
			"search_items" => __( 'Search FAQs ', 'Capital Street' ),
			"not_found" => __( 'No FAQs  Found', 'Capital Street' ),
			"not_found_in_trash" => __( 'No FAQs  found in the Trash', 'Capital Street' ),
			"parent_item_colon" => __( 'Parent FAQs ', 'Capital Street' ),
			"archives" => __( 'FAQs ', 'Capital Street' ),
			"filter_items_list" => __( 'Filter FAQs  List', 'Capital Street' ),
			"items_list_navigation" => __( 'FAQs  Navigation', 'Capital Street' ),
			"items_list" => __( 'FAQs ', 'Capital Street' ),
			"parent_item_colon" => __( 'Parent FAQs ', 'Capital Street' ),
			),
			
			'public' => true,
			'has_archive' => false,
			'rewrite' => array('with_front'=> false,'slug' => 'faq'),
			'supports' => array('thumbnail', "title", "editor"),
			'menu_icon' => 'dashicons-category',
		)
	);
?>
