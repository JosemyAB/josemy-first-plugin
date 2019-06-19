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

if (! define ('ABSPATH')) {
     die;
 }

 defined('ABSPATH') or die('You cant access to this file.')

 if (! function_exists ('add_action')) {
     echo 'You cant access to this file.';
     exit;
 }
 