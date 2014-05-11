<?php /*
Plugin Name: WordPress Twitter Bot
Version: 1.1
Description: A plugin to have automatic Twitter on WordPress
Author: wp-plugin-dev
Author URI: http://www.wp-plugin-dev.com
*/




include("marketing-twitter-bot-msg.php");
include("marketing-twitter-bot-admin-page.php");
include("external.php");

add_action("init","fire_mtb_marketing_twitter_bot");
add_action("publish_post", "fire_mtb_marketing_twitter_bot_with_post");

?>