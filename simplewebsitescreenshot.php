<?php
/*
Plugin Name: Wordpress Simple Website Screenshot
Plugin URI: http://www.digg-it.info/wordpress-simple-website-screenshot-v-0-5
Description: Make simple website screenshot via shortcode without watermark.
Version: 0.5.2
Author: Pigi
Author URI: http://www.digg-it.info
License: GPL2
*/


/*  Copyright 2010  Pigi  (email : pigi.bari@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/



require_once('settings/screenshot_menu.php');



function screenshot($atts) {

	extract(shortcode_atts(array(
		"url" => 'www.'
	), $atts));

    	extract(shortcode_atts(array(
		"width" => 'width'
	), $atts));	
	
		extract(shortcode_atts(array(
		"height" => 'height'
	), $atts));
	

   $sc_default_width = get_option('default_width');
   $sc_default_height = get_option('default_height');


?>
<img src="http://s.wordpress.com/mshots/v1/http%3A%2F%2F<?php echo(''.$url.''); ?>" width="<?php echo(''.$sc_default_width.''); ?>" height="<?php echo(''.$sc_default_height.''); ?>" border="0"><br />

<?php if (get_option('advanced_settings') == 1) { ?> <a href="http://<?php echo(''.$url.''); ?>" target="_blank"><?php echo(''.$url.''); ?></a> <?php } ?>
<?php 
}
   add_shortcode('screenshot', 'screenshot');
?>