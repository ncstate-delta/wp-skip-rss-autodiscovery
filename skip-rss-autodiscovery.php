<?php
/**
 * Plugin Name: Skip RSS Autodiscovery
 * Plugin URI: https://github.com/ncsu-delta/wp-skip-rss-autodiscovery/
 * Description: Skips SimplePie RSS feed autodiscovery. Instead, users must link to the feed directly.
 * Author: Jonathan Champ, NC State University - DELTA
 * Version: 1.0
 * Author URI: https://github.com/ncsu-delta/wp-skip-rss-autodiscovery
 *
 * @package skip_rss_autodiscovery
 */

/**
 * Set the autodiscovery level.
 *
 * @param SimplePie       $feed SimplePie feed object.
 * @param string|string[] $url URL of feed or array of URLs of feeds.
 */
function skip_rss_autodiscovery( $feed, $url ) {
	$feed->set_autodiscovery_level( SIMPLEPIE_LOCATOR_NONE );
}

add_action( 'wp_feed_options', 'skip_rss_autodiscovery', 10, 2 );
