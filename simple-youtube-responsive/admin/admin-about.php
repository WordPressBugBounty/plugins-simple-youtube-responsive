<?php 
/**********************************************************
 * Simple YouTube Responsive
 * About Page, Since version 2.0.0
 *
 ***********************************************************/
if (!defined('ABSPATH')) {
    exit;
}

class eirudo_ytresponsive_plugin_about {
	
	
    public function __construct() {
		add_action( 'admin_menu', array( $this, 'menus' ) );
		//add_action( 'admin_init', array( $this, 'sections' ) );
		//add_action( 'admin_init', array( $this, 'fields' ) );
	}
	
	// Add Menu & Submenu
	public function menus() {
		// Add the menu item and page
		$parent_slug = 'eirudo_ytresponsive_options';
		$page_title = 'About Simple YouTube Responsive';
		$menu_title = 'About';
		$capability = 'manage_options';
		$slug = 'eirudo_ytresponsive_about';
		$callback = array( $this, 'option_page' );

		// Add sub menu
		add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $slug, $callback );
	}

	
	// Content of Option Page / Menu
	public function option_page() { ?>
	
<div class="wrap about-wrap full-width-layout">
		<h1>Simple YouTube Responsive</h1>

		<p class="about-text">
			Thanks for installing Simple YouTube Responsive!<br/>If you find this plugin useful, I’d really appreciate a <a href="https://wordpress.org/support/plugin/simple-youtube-responsive/reviews/" target="_blank">review</a> on the WordPress Plugin Directory.</p>

		<div class="wp-badge" style="background-image:url(https://ps.w.org/simple-youtube-responsive/assets/icon-256x256.png);background-color:#bb0000;">
			Version <?php echo EIRUDO_YTRESPONSIVE_VER; ?>		</div>


		<div class="changelog point-releases">
			<h3>Maintenance and Security Releases</h3>
<p>
<strong>Version 3.2.6</strong>
<ul>
<li>- Updated to the new YouTube iframe embed code. Some adjustments were needed to fully follow the official YouTube embed.</li>
<li>- Added a new filter: simple_yt_responsive_html, in case you want to modify the HTML output yourself.</li>
<li>- Fixed the YouTube thumbnail size options. Some URLs had changed, causing thumbnails to no longer display.</li>
</ul>
</p>		
<p>
<strong>Version 3.2.5</strong>
<ul>
<li>- Small fix for cover alt attributes when the title="" attribute is used</li>
</ul>
</p>
<p>
<strong>Version 3.2.4</strong>
<ul>
<li>- Added title="" attribute to the iframe</li>
</ul>
</p>	
<p>
<strong>Version 3.2.3</strong>
<ul>
<li>- Fixed shortcode documentation (thanks dbrossa!)</li>
</ul>
</p>	
<p>
<strong>Version 3.2.2</strong>
<ul>
<li>- Tested up to WordPress 6.5.2</li>
</ul>
</p>	
<p>
<strong>Version 3.2.1</strong>
<ul>
<li>- Small HTML fix (missing double quotes)</li>
</ul>
</p>
<p>
<strong>Version 3.2</strong>
<ul>
<li>- Fixed missing inline CSS attributes</li>
</ul>
</p>
<p>
<strong>Version 3.1</strong>
<ul>
<li>- Removed double slashes from JavaScript links</li>
</ul>
</p>
<p>
<strong>Version 3.0</strong>
<ul>
<li>- Improved security by preventing XSS via shortcode (thanks to <strong>Darius Sveikauskas</strong> and <strong>yuyudhn</strong> from Patchstack for notifying)</li>
<li>- Database usage optimization</li>
</ul>
</p>
<p>
<strong>Version 2.5</strong>
<ul>
<li>- Fixed an issue where lazy-loaded videos were sometimes not full width (caused by Elementor CSS)</li>
</ul>
</p>
<p>
<strong>Version 2.4</strong>
<ul>
<li>- Fixed video alignment issue on mobile devices</li>
</ul>
</p>
<p>
<strong>Version 2.3</strong>
<ul>
<li>- Added support for custom YouTube parameters per shortcode (advanced users) .<br/>See <a href="https://developers.google.com/youtube/player_parameters#Parameters" target="_blank">https://developers.google.com/youtube/player_parameters#Parameters</a> for complete list parameters.</li>
</ul>
</p>
<p>
<strong>Version 2.2.2</strong>
<ul>
<li>- Added more parameters: loop, fullscreen, controls, start time, end time</li>
</ul>
</p>
<p>
<strong>Version 2.2.1</strong>
<ul>
<li>- Minor cleanup and removed unnecessary code</li>
</ul>
</p>
<p>
<strong>Version 2.2.0</strong>
<ul>
<li>- Fixed an issue that could break WordPress after updating</li>
</ul>
</p>
<p>
<strong>Version 2.1.0</strong>
<ul>
<li>- Fixed JavaScript conflicts with other plugins. Big thanks to <a href="https://wordpress.org/support/users/jkeasley2/" target="_blank">@jkeasley2</a> for the help!</li>
</ul>
</p>
<p>
<strong>Version 2.0.1</strong>
<ul>
<li>- Fixed AMP-related issues</li>
<li>- Added troubleshooting options for JavaScript placement</li>
<li>- Fixed typo in shortcode guide (use center="" for auto centering)</li>
<li>- Stylesheet is now loaded in the header instead of the footer</li>
</ul>
        </p>
			<p>
				<strong>Version 2.0.0</strong> -  Plugin options page and Lazy Load mode!</p>
        
		</div>

		<h3 class="aligncenter">New on Simple YouTube Responsive</h3>

		<div class="has-2-columns">
			<div class="column aligncenter">
				<h4>Plugin Options</h4>
				<p>Choose a default settings for YouTube embed. All these settings always can be overided using custom attributes on your shortcodes.</p>
			</div>
			<div class="column aligncenter">
				<h4>Lazy Load</h4>
				<p>Lazy Load supported. Make your site load faster even you placing multiple YouTube videos on single page.</p>
			</div>
		</div>

		<hr>


	</div>	

 <?php
	}

}

// Run Option Page
new eirudo_ytresponsive_plugin_about();