<?php
/*
Plugin Name: WP Talents oEmbed
Description: Adds oEmbed support for WPTalents.com
Version: 1.0
Author: Pascal Birchler
Author URI: http://pascalbirchler.com/
Contributors: swissspidy
*/

// If this file is called directly, abort.
defined( 'ABSPATH' ) or die();

// Add oEmbed provider
wp_oembed_add_provider( 'https://wptalents.com/*', 'https://wptalents.com/api/oembed' );