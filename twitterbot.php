<?php /*
Plugin Name: Marketing Twitter Bot
Version: 0.4
Description: A plugin to have automatic Twitter on WordPress
Author: wp-plugin-dev
*/




include("marketing-twitter-bot-msg.php");
include("marketing-twitter-bot-admin-page.php");
include("external.php");

add_action("init","fire_mtb_marketing_twitter_bot");
add_action("publish_post", "fire_mtb_marketing_twitter_bot_with_post");

?>