<?php
/**
 * Plugin Name: Videotape
 * Description: The videotape plugin allows users to experience the Videotape video editing platform to enhance content.
 * Version: 1.0.0
 * Author: Videotape
 * Author URI: http://videotape.co
 */

function vt_widget($attr = array()) {
	$width = (isset($attr['width']) && $attr['width']) ? $attr['width'] : '100%';

	$output = '<div style="width:' . $width . '">';

	if (isset($attr['video_url']) && $attr['video_url']) {
		$output .= '<video controls src="' . $attr['video_url'] . '" style="width:100%">Your browser does not support the <code>video</code> element.</video>';
	}

	$output .= '<div class="vt-jumpcut" data-source-url="' . ((isset($attr['source_url']) && $attr['source_url']) ? $attr['source_url'] : '') . '" data-video-url="' . ((isset($attr['video_url']) && $attr['video_url']) ? $attr['video_url'] : '') . '" data-pid="32"></div>';
	$output .= '<script type="text/javascript" async defer src="//videotape.co/js/videotapeit.js"></script>';
	$output .= '</div>';

	return $output;
}
add_shortcode('videotape', 'vt_widget');