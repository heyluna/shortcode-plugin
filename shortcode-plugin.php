<?php
/**
 * Plugin Name: Social Icons Shortcode
 * Plugin URI: https://github.com/heyluna/shortcode-plugin
 * Description: Display your social media icons with a shortcode, when using a Hey Luna theme.
 * Version: 1.0.0
 * Author: Hey Luna
 * Author URI: https://heyluna.co
 * License: GPL2
 *
 * @package heyluna-social-shortcode
 * @copyright Copyright (c) 2021, Hey Luna
 * @licence GPL2+
 */

/**
 * Shortcode for social media icons.
 *
 * @param $atts
 *
 * @return false|string
 */
function georgia_social_icons( $atts ) {
	ob_start();
	get_template_part( 'template-parts/social' );

	return ob_get_clean();
}

add_shortcode( 'social_icons', 'georgia_social_icons' );

