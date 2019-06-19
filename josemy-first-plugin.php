<?php
/**
 * @package JosemyFirstPlugin
 */

/*
 Plugin Name: Josemy Frist Plugin
 Plugin URI: http://www.josemy.com
 Description: First plugin description <b>negrita</b>
 Version: 1.0.0
 Author: Josemy
 Author URI: http://www.josemy.com
 LIcense: GPLv2 or later
 Text Domain: josemy-first
 */

 defined('ABSPATH') or die('You cant access to this file.');

class JosemyFirstPlugin {

    function __construct() {
        add_action('init', array($this, 'custom_post_type'));
    }

    /**
     * Register scripts (css and js) only for admin part.
     */
    function register_admin_scripts() {
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }

    /**
     * Register scripts (css and js).
     */
    function register_scripts() {
        add_action('wp_enqueue_scripts', array($this, 'enqueue'));
    }

    function activate() {
        //Generated a CPT
        $this->custom_post_type();
        //flush rewrite rules
        flush_rewrite_rules();
    }

    function deactivate() {
        //Work on database
    }

    function enqueue() {
        //Work on database
        wp_enqueue_style('myPluginstyle', plugins_url('/assets/mystyles.css', __FILE__));
        wp_enqueue_script('myPluginscript', plugins_url('/assets/myscript.js', __FILE__));
    }

    //Register new POST TYPE.
    function custom_post_type() {
        register_post_type('book', ['public' => true, 'label' => 'Books']);
    }
}

if (class_exists('JosemyFirstPlugin')) {
    $josemyFristPlugin = new JosemyFirstPlugin();
    $josemyFristPlugin->register_admin_scripts();
}

//activation
register_activation_hook(__FILE__, array($josemyFristPlugin, 'activate'));

//deactivation
register_deactivation_hook(__FILE__, array($josemyFristPlugin, 'deactivate'));

//uninstall
register_uninstall_hook(__FILE__, array($josemyFristPlugin, 'uninstall'));
