=== Simple YouTube Responsive ===
Contributors: Eirudo
Donate link: https://www.paypal.me/Eirudo
Tags: youtube, player, embed, responsive, shortcode
Requires at least: 2.5
Tested up to: 6.9.1
Stable tag: 3.2.6
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html


Easily embed responsive YouTube videos using a simple shortcode. Lazy load included.

== Description ==

A lightweight plugin to embed YouTube videos while keeping the correct aspect ratio — all with a simple shortcode.

* Very simple shortcode. Use it in posts or widgets.
* Uses the default YouTube iframe embed, but fully responsive.
* Custom aspect ratio if you want a different video size.
* Automatically centered, so your video always looks neat in your content.
* Lazy load support to improve performance.
* 100% free — no ads, no trackers, no funny business.


== Installation ==

1. Install the plugin from **Plugins > Add New**
2. Activate the plugin
3. Done 🎉
4. Insert the shortcode into your post or widget (multiple shortcodes are supported).


== Screenshots ==

https://eirudo.com/files/simple-youtube-responsive-screenshot-1.jpg
https://eirudo.com/files/simple-youtube-responsive-screenshot-2.jpg
https://eirudo.com/files/simple-youtube-responsive-screenshot-3.jpg
https://eirudo.com/files/simple-youtube-responsive-screenshot-4.jpg


== Changelog ==

= 3.2.6 =
* Updated to the new YouTube iframe embed code. Some adjustments were needed to fully follow the official YouTube embed.
* Added a new filter: simple_yt_responsive_html, in case you want to modify the HTML output yourself.
* Fixed the YouTube thumbnail size options. Some URLs had changed, causing thumbnails to no longer display.

= 3.2.5 =
* Small fix for cover alt attributes when the title="" attribute is used

= 3.2.4 =
* Added title="" attribute to the iframe

= 3.2.3 =
* Fixed shortcode documentation (thanks dbrossa!)

= 3.2.2 =
* Tested up to WordPress 6.5.2

= 3.2.1 =
* Small HTML fix (missing double quotes)

= 3.2 =
* Fixed missing inline CSS attributes

= 3.1 =
* Removed double slashes from JavaScript links

= 3.0 =
* Improved security by preventing XSS via shortcode (Thanks to Darius Sveikauskas and yuyudhn from Patchstack for the report!)
* Database usage optimization

= 2.5 =
* Fixed an issue where lazy-loaded videos were sometimes not full width (caused by Elementor CSS)

= 2.4 =
* Fixed video alignment issue on mobile devices

= 2.3 =
* Added support for custom YouTube parameters per shortcode (advanced users) Full list: https://developers.google.com/youtube/player_parameters#Parameters

= 2.2.2 =
* Added more parameters: loop, fullscreen, controls, start time, end time

= 2.2.1 =
* Minor cleanup and removed unnecessary code

= 2.2.0 =
* Fixed an issue that could break WordPress after updating

= 2.1.0 =
* Fixed JavaScript conflicts with other plugins. Big thanks to @jkeasley2 for the help!

= 2.0.1 =
* Fixed AMP-related issues
* Added troubleshooting options for JavaScript placement
* Fixed typo in shortcode guide (use center="" for auto centering)
* Stylesheet is now loaded in the header instead of the footer

= 2.0.0 =
* Added plugin settings page in the admin menu
* Lazy load support
* Custom thumbnails for lazy-loaded videos

= 1.2.6 =
* Fixed typos in ReadMe and description

= 1.2.5 =
* Minor bug fixes
* New contributor
* New documentation link

= 1.2.4 =
* Fixed an issue where posts could break if AMP was not installed

= 1.2.3 =
* Added Google AMP support

= 1.2.2 =
* Added alias attributes for YouTube ID ("video" or "v")

= 1.2.1 =
* Fixed PHP division-by-zero error
* Removed default max width (600px)

= 1.2 =
* Fixed mixed-content issues on HTTPS sites (oops 😅)

= 1.1 =
* Fixed installation issues
* Minor typos

= 1.0 =
* First release 🚀


== Upgrade Notice ==

* Just update or install the plugin as usual.
* If you’re upgrading from version 1.x.x, please reactivate the plugin manually.


== Arbitrary section ==


== A brief Markdown Example ==

Pros:
1. Simple and lightweight — one shortcode per video
2. Lazy load support
3. Extra parameters available for advanced users

Cons:
1. Designed for simple embeds only (no playlist support, one video per shortcode)
