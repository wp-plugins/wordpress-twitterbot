<?php

function marketing_twitter_bot_page(){
$page_title="WordPress Twitterbot";
$menu_title=$page_title;
$capability="manage_options";
$menu_slug="WordPress-Twitterbot";
add_submenu_page( 'tools.php', $page_title, $menu_title, $capability, $menu_slug, "show_marketing_twitter_bot" );
}

add_action("admin_menu","marketing_twitter_bot_page");

function show_marketing_twitter_bot(){

if($_POST['mtb']=="true"){
update_option('twitter_mtb_consumer_key',$_POST['twitter_mtb_consumer_key']);
update_option('twitter_mtb_consumer_secret',$_POST['twitter_mtb_consumer_secret']);
update_option('twitter_mtb_access_token',$_POST['twitter_mtb_access_token']);
update_option('twitter_mtb_access_token_secret',$_POST['twitter_mtb_access_token_secret']);
update_option('mtb_interval',$_POST['mtb_interval']);
update_option('mtb_tweetlist',$_POST['tweetlist']);

}else{}

$mtb_ck=get_option('twitter_mtb_consumer_key',true);
$mtb_cs=get_option('twitter_mtb_consumer_secret',true);
$mtb_at=get_option('twitter_mtb_access_token',true);
$mtb_ats=get_option('twitter_mtb_access_token_secret',true);
$mtb_i=get_option('mtb_interval',true);
$mtb_tweetlist=get_option('mtb_tweetlist',true);
$mtb_views=(int) get_option("mtb_views", true);
?>
<div class="wrap"><div id="icon-tools" class="icon32"></div>
<h2>WordPress Twitterbot</h2>
		
		<div class="wrap">
		<form method="post" >
		The WordPress TwitterBot should be registered as own App on <a href="https://dev.twitter.com/apps" >https://dev.twitter.com/apps</a>. The credentials you need to put here. (You should be a little careful with them. If somebody has access to your database he could read them.)
		<table>
		<tr><td>Consumer Key:</td><td><input class="regular-text" name="twitter_mtb_consumer_key" value="<?php echo $mtb_ck; ?>" type="password" size="500" /></td></tr>
		<tr><td>Consumer Secret:</td><td><input class="regular-text" name="twitter_mtb_consumer_secret" type="password" size="500"  value="<?php echo $mtb_cs; ?>" /></td></tr>
		<tr><td>Access Token:</td><td><input class="regular-text" name="twitter_mtb_access_token"  type="password" size="500" value="<?php echo $mtb_at; ?>" /></td></tr>
		<tr><td>Access Token Secret:</td><td><input class="regular-text" name="twitter_mtb_access_token_secret" type="password" size="500" value="<?php echo $mtb_ats; ?>" /></td></tr>
		</table>
		<hr>
		<h3>Here you can make a list of Random Tweets</h3>
				<i><b>Intervals:</b></i><br />
		
		Tweet every		<select name="mtb_interval">
		<?php
		$i=0; 
		while ($i<1000){
		echo "<option name=\"".$i."\"";
		if($mtb_i==$i){
		echo " selected ";
		}else{}
		
		echo ">".$i."</option>";
		$i++;
		} ?>
		</select> requests.<?php echo "(".$mtb_views." requests in total)"; ?>
		<hr>

		<textarea name="tweetlist" cols="100" style="height:400px;"><?php echo $mtb_tweetlist; ?></textarea><br />
		<input type="hidden" name="mtb" value="true" />
		<input type="submit" />
		</form>
		</div>	
		
</div><?php
	

}

?>