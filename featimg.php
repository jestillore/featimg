<?php

 /*
    Plugin Name: FeatImg
    Plugin URI: https://github.com/jestillore/featimg
    Description: Get Featured Image by Post
    Author: Jillberth Estillore
    Version: 1.0
    Author URI: http://www.jillberthestillore.com
    */

function getFeaturedImage($atts) {
	$id = $atts['id'];
	return wp_get_attachment_url(get_post_thumbnail_id($id));
}

add_shortcode('featimg', 'getFeaturedImage');
