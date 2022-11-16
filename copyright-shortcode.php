<?php
/**
 * Copyright Shortcode
 *
 * @package       COPYRIGHTS
 * @author        Kevin Steve Maningo
 * @version       1.4
 *
 * @wordpress-plugin
 * Plugin Name:   Copyright Shortcode
 * Plugin URI:    https://www.thesavvyinspector.com
 * Description:   Usage: [copyright] will display the whole Copyright, [copyright-only] will display the Copyright without the created by, [created-by] will display the Created by The Savvy Tech without the copyright.
 * Version:       1.4
 * Author:        THE SAVVY INSPECTOR | Kevin Steve Maningo
 * Author URI:    https://www.thesavvyinspector.com
 * Text Domain:   copyright-shortcode
 * Domain Path:   /languages
 * GitHub Plugin URI: kimpo0oy/tsi-copyright-shortcode
* Primary Branch: main
* Release Asset: true
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

// Add Shortcode
function get_copyright() {

    return '&copy; Copyright ' . date('Y') . ' ' . get_bloginfo('name') . '<br/>All Rights Reserved | Created By: <a href="https://getmemorehomeinspectionsnow.com/lead-generation-websites/" target="_blank" rel="noopener">THE SAVVY INSPECTOR</a>';

}
add_shortcode( 'copyright', 'get_copyright' );

function get_copyright_only() {

    return '&copy; Copyright ' . date('Y') . ' ' . get_bloginfo('name');

}

add_shortcode( 'copyright-only', 'get_copyright_only' );

function get_created_by() {

    return 'Created By: <a href="https://getmemorehomeinspectionsnow.com/lead-generation-websites/" target="_blank" rel="noopener">THE SAVVY INSPECTOR</a>';

}
add_shortcode( 'created-by', 'get_created_by' );
