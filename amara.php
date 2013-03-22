<?php
/*
        Plugin Name: Amara
        Description: Embed Amara-subtitled videos.
        Version: 0.1
        Author: Charles Fulton
        License: GPL2
*/

function render_amara ( $atts ) {
        extract( shortcode_atts( array(
                'url' => ''
        ), $atts ) );

        if( empty( $url ) ) return '';

        return "<script type=\"text/javascript\" src=\"http://s3.amazonaws.com/s3.www.universalsubtitles.org/embed.js\">({\"video_url\": \"$url\"})</script>";

}

add_shortcode( 'amara', 'render_amara' );
