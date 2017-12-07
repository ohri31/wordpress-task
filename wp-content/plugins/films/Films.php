<?php
/*
   Plugin Name: Films Plugin
   Description: Codeline task Films plugin
   Version: 1.0.0
   Author: Mirza Ohranović
 */

  function create_films() {
  	 $labels = array(
	  	'name' => 'Films',
	    'singular_name' => 'Film',
	    'add_new' => 'Create new Film',
	    'add_new_item' => 'Create new Film item',
	    'edit' => 'Edit',
	    'edit_item' => 'Edit Film',
	    'new_item' => 'New Film',
	    'view' => 'View',
	    'view_item' => 'View Film',
	    'search_items' => 'Search Films',
	    'not_found' => 'Film - 404 not found',
	    'not_found_in_trash' => 'No deleted Films',
	    'parent' => 'Film'
	  );

	  $arguments = array(
	  	'labels' => $labels,
	  	'public' => true,
		'menu_position' => 5,
		'supports' => array('title', 'editor', 'comments', 'thumbnail', 'custom-fields'),
		'taxanomies' => array('Genre', 'Country', 'Year', 'Actors'),
		'has_archive' => true
	  );
	  
	  register_post_type('films', $arguments);
  }

  add_action('init', 'create_films');
?>