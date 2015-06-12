=== Plugin Name ===
Contributors: proodos
Donate link: http://prood-os.com/
Tags: weather, current conditions
Requires at least: 3.0.1
Tested up to: 4.1
Stable tag: 4.1
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The weather plugin to show the current weather conditions in your city. Currently it renews the conditions every hour.

== Description ==

The weather plugin shows current conditions in your area. The plugin for weather data connects with Weather underground API and collects the data:
conditions string, icon, current temperature, feels like temperature, all in Fahrenheit and Celsius degrees.

To show the plugin datam first you have to setup the plugin on settings page. The settings are:

* Country - select your country, or the country for which you want to show the conditions.
* City - write the name of the city for which you want to show the conditions. As you start writing the list of locations woll be shown beside the "Select your location" option.
* Location - this is the measuring station that you/ll get the data from. You'll see the list of the stations for the entered City, and may choose one of them.
* Use icon set - Do you want to sho graphical presentation of the conditions, or not. Also if you want to use icon set provided by the weather underground api or weather font.
* Show feels like - show feels like temperatures (Fahrenheit or Celsius)
* Show weather label - show the weather conditions (i.e. Partly sunny, Clear, Snow ... )
* Preview - not an options, but shows how will your sweather snippet look like.

After setting up, simply echo pdsWeather() where you want the conditions to show.

Make sure the plugin is activated before echoing pdsWeather() otherwise it will throw an error.

== Installation ==

To manually install the extension:

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Setup the plugin on the settings page
4. Place `<?php echo pdsWeather(); ?>` in your templates

== Frequently Asked Questions ==

== Screenshots ==


== Changelog ==

= 1.0 =
* First version of the plugin.
* Weather conditions change once per hour.
* Shows conditions and feels like string.
* Uses WU icons and weather font.

= 1.1 =
* solved bug with showing of the countries
* added F and °C for temperature strings

= 1.1.1 =
* another little bug solved