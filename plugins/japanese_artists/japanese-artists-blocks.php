<?php
/**
 * Plugin Name:     Japanese Artists Patterns
 * Plugin URI:      https://webpage.com/
 * Description:     This is a simple plugin with some common block patterns I’m using.
 * Version:         1.0.0
 * Author:          Miles Angels
 * Author URI:      https://webpage.com/
 * License:         GPL-3.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 *
 */
 
 // If this file is called directly, abort.
 if ( ! defined( 'WPINC' ) ) {
     die;
 }
 
 /**
  * Currently plugin version.
  */
 define( 'JAPANESE_ARTISTS_BLOCK', '1.0.0' );
 
require_once('inc/japanese-artists.php');
