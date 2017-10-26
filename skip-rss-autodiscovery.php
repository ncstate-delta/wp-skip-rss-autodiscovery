<?php
/*
Plugin Name: Skip RSS Autodiscovery
Plugin URI: https://github.com/ncsu-delta/wp-skip-rss-autodiscovery/
Description: Skips SimplePie RSS feed autodiscovery. Instead, users must link to the feed directly.
Author: Jonathan Champ, NC State University - DELTA
Version: 1.0
Author URI: https://github.com/ncsu-delta/wp-skip-rss-autodiscovery
*/

// Set the autodiscovery level.
function skip_rss_autodiscovery( $feed, $url ) {
	$feed->set_autodiscovery_level( SIMPLEPIE_LOCATOR_NONE );
}

add_action( 'wp_feed_options', 'skip_rss_autodiscovery', 10, 2 );
