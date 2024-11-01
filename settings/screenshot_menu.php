<?php
// create custom plugin settings menu
add_action('admin_menu', 'sws_create_menu');

function sws_create_menu() {

	//create new top-level menu
	add_menu_page('Default Settings', 'SWS', '8', __FILE__, 'sws_settings_page',WP_PLUGIN_URL .'/wordpress-simple-website-screenshot/img/sws.png', '3');
    add_submenu_page(__FILE__, 'Simple Website Screenshot | Usage', 'Usage', 8, WP_PLUGIN_DIR .'/wordpress-simple-website-screenshot/doc/usage.php');
    //add_submenu_page(__FILE__, 'Simple Website Screenshot | Details', 'Details', 8, WP_PLUGIN_DIR .'/wordpress-simple-website-screenshot/doc/details.php');
    add_submenu_page(__FILE__, 'Simple Website Screenshot | Plugin Homepage', 'Plugin Homepage', 8, WP_PLUGIN_DIR .'/wp-simple-website-screenshot/plugin_page.php');
	//call register settings function
	add_action( 'admin_init', 'register_swssettings' );
}


function register_swssettings() {
	//register our settings
	register_setting( 'sws-settings-group', 'default_width' );
	register_setting( 'sws-settings-group', 'default_height' );
	register_setting( 'sws-settings-group', 'advanced_settings' );
	register_setting( 'sws-settings-group', 'powered_by' );
}

function sws_settings_page() {

?>
<div class="wrap">
<h2>Simple Website Screenshot | Settings Page</h2>
<p style="float:right;margin-left:15px"><form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="Z2HB86TG9VGLN">
<input type="hidden" name="lc" value="GB">
<input type="hidden" name="item_name" value="Pigi - Simple Website Screenshot">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHosted">
<input type="image" src="https://www.paypal.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypal.com/it_IT/i/scr/pixel.gif" width="1" height="1">
</form>
Please Donate to Remove<br /> 
"<b>Powereb By "Simple Website Plugin</b>"
</p>



In this Page you need to specify the default width and height of the screenshot. <br /> 
From this moment to edit your screenshot dimension <b>You must modify these values</b>.

<form method="post" action="options.php">
    <?php settings_fields( 'sws-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Default Screenshot Width</th>
        <td><input type="text" name="default_width" value="<?php echo get_option('default_width'); ?>" /></td>
        <td>Here You can Specify the WIDTH of your Screenshot</td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Default Screenshot Height</th>
        <td><input type="text" name="default_height" value="<?php echo get_option('default_height'); ?>" /></td>
        <td>Here You can Specify the HEIGHT of your Screenshot</td>
        </tr>
		<tr valign="top">
		<th scope="row"><?php _e('Advanced Settings', ''); ?></th>
		<td><input name="advanced_settings" id="advanced_settings" value='1' <?php if (get_option('advanced_settings') == '1') { echo "checked='checked'"; } ?> type="checkbox" /> <label for="advanced_settings"> <?php _e('Display Link?'); ?></label></td>
		</tr>
    </table>
    
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>

</form>

Please Click on "Usage" Tab to learn How to use Simple Website Screenshot
<h2>Live Screenshot Preview:</h2>
<br /><center>
<img src="http://s.wordpress.com/mshots/v1/http%3A%2F%2Fwww.digg-it.info" width="<?php echo get_option('default_width'); ?>" height="<?php echo get_option('default_height'); ?>"> <br />
<?php if (get_option('advanced_settings') == 1) { ?> <a href="http://www.digg-it.info" target="_blank">www.digg-it.info</a> <?php } ?></center>
</div>

<?php } ?>
