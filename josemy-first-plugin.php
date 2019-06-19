<?php
/**
 * @package JosemyFirstPluggin
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
        
    }

    function activate() {
        //Work on database
    }

    function deactivate() {
        //Work on database
    }

    function uninstall() {
        //Work on database
    }
}

if (class_exists('JosemyFirstPlugin')) {
    $josemyFristPlugin = new JosemyFirstPlugin();
}

//activation
register_activation_hook(__FILE__, array($josemyFristPlugin, 'activate'));

//deactivation
register_deactivation_hook(__FILE__, array($josemyFristPlugin, 'deactivate'));

//uninstall