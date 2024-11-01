=== Plugin Name ===
Contributors: Pigi
Donate link: http://www.wpcode.net/wordpress-simple-website-screenshot-0-6-5.html/
Tags: screenshot, website screenshot, no watermark, wordpress
Requires at least: 2.9.2
Tested up to: 3.1
Stable tag: 0.6.5

Use this plugin to make a website screenshot in your wordpress posts !!!NEW!!!

== Description ==

* Simple Website Screenshot on Facebook - http://goo.gl/lSnNO


Using this small plugin you'll be able to create a websites screenshots using shortcode and without every kindle of watermark.

This plugin uses a Wordpress.com server's function.

* "Bitpixel.com" Added
* "Wimg.ca" Screenshot Service Added
* "Link under screenshot" function Removed


You must specify the "url" like "www.example.com" (without "http://").
The right syntax is:

* [screenshot url="www.example.com"] (in this case you can float your image)
* Advanced Settings added, Display link available
* Now you can insert plugin DIRECTLY IN YOUR TEMPLATE adding 

<?php if (function_exists('simple_website_screenshot')) { simple_website_screenshot(); } ?> 

Add custom Field:
* key -> sws
* value -> www.yoursite.com

3/11/2010
All Problem Fixed
Powered By REMOVED

* Thumbnail height and width added for index and archives just add <?php if (function_exists('simple_website_screenshot')) { simple_website_screenshot(); } ?>


== Installation ==

Install this plugin is very simple:

1. Upload 'wp-simple-website-screenshot' folder to the `/wp-content/plugins/` directory
2. Activate "Wordpress Simple Website Screenshot" plugin through the 'Plugins' menu in WordPress
3. Edit "SWS Settings" in your Wordpress Dashboard
3. Place:

* [screenshot url="www.example.com"]

in your post to make a website screenshot

== Frequently Asked Questions ==

= I need to specify everytime the width and the height of the screenshot? =

No no, in the 0.5 version you have to setup width and height just one time in "SWS Setting".

= Why the screenshot haven't watermark =

Because this plugin use a Wordpress.com server's function. So Tell "Thanks" to our loved MAtt.

== Screenshots ==

Visit http://www.digg-it.info/wordpress-simple-website-screenshot to take screenshot

== Changelog ==

= 0.6.5 ?

* "Bitpixel.com" Added

= 0.6 =

* Wimg.ca Added
* Link Removed
* Starting Languages Domain

= 0.5.6 =

* Problem Fix, new function added, thumbnail support added

= 0.5.4 =

* Choose if you want to put a link to screenshoted website from image

= 0.5.3 =

* Now you can insert plugin DIRECTLY IN YOUR TEMPLATE VIEW USAGE link

= 0.5.2 =

* Advanced Settings added, Display link available

= 0.5 =

* Setup Tab to Specify screenshot's widht and height just one time
* "Usage" Tab 
* Live Screenshot Preview
* Link to website screenshoted

= 0.01b =

Sorry this is my first released plugin, so be patient please

== Upgrade Notice ==

= 0.7 =

* Styling Settings
* I hope Italian Translation
* Contact me to translate Simple website screenshot in your laguage

= 0.5 =

* No Needed Width and Height Parameters
* Other stuff

<?php code(); // goes in backticks ?>`

