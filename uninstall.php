<?php

/**
 * Trigger this file on Plugin uninstall
 * 
 * @package JosemyFirstPlugin
 */

 if (! defined('WP_UNINSTALL_PLUGIN')) {
     die;
 }

 //Clear database using WP method.
 $books = get_posts(array('post_type' => 'book', 'numberpost' => -1));

 foreach($books as $book) {
     wp_delete_post($book->ID, true);
 }

 //Access to database using global variable
 //global $wpdb;

 //$wpdb->query( "DELETE FROM WP_POSTS WHERE POST_TYPE = 'book'" );
 //$wpdb->query( "DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)" );
 //$wpdb->query( "DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT id FROM wp_posts)" );
