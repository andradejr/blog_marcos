=== Bootstrap ShortCodes for Content ===
Contributors: closemarketing
Tags: bootstrap, shortcodes, content, ui, bootstrap helper
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=ZYGC6AT5JFQVE
Requires at least: 3.0
Tested up to: 4.4
Stable tag: 1.2.4
Version: 1.2.4

This WordPress plugin extends shortcodes to use in Bootstrap themes.

== Description ==
This plugin give you a bunch of shortcodes that allows you to draw content using Bootstrap CSS and HTML.

Shortcodes:
[gridbox] - Allows you to show a grid with post types related.

Parameters:
- post_type -> slug of Post type that you want to show.
- posts_per_page ->
- col -> Columns that you want to show.
- date -> true or false. If you want to show in the grid.
- tax -> Show Taxonomy that the post in.
- size -> image size for post thumbnail

[gridtaxbox] - Allows you to show a grid with taxonomy related.

[imagepostslider] - Image Slider from Images attached in a post

[carouselcpt] - Multiple elements Carousel

- post_type -> slug of Post type that you want to show.
- tax -> Show Taxonomy that the post in.
- title -> Title that goes before
- type -> post or tax
- col -> Elements visibles
- titlep -> true or false. Show Title's post in carousel

[gallery] - Replaces the actual gallery from Wordpress

[links] - List of Links in Wordpress

Tabs - Allows you to show a tab panel. Ex:
[tabs type="tabs"]
[tab title="Home" active="true"]
...
[/tab]
[tab title="Profile"]
...
[/tab]
[tab title="Messages"]
...
[/tab]
[/tabs]

[imagescroll size="slug-image-size"] - Show all images attached as scroll.

[Official Repository Github](https://github.com/closemarketing/bootstrap-shortcodes-for-content) . Fork and add make suggestions to the plugin!

Others Plugins:
- [Gravity Forms CRM Addon](http://codecanyon.net/item/gravity-forms-crm-addon/10521695)
- [Gravity Forms in Spanish](https://wordpress.org/plugins/gravityforms-es/)
- [Clean HTML in Editor](https://wordpress.org/plugins/clean-html/)
- [Send SMS to Wordpress Users via Arsys](https://wordpress.org/plugins/send-sms-arsys/)

Made by [Closemarketing](https://www.closemarketing.es/)
Shortcodes forked from [WP3 Shortcodes GitHub project](https://github.com/filipstefansson/bootstrap-3-shortcodes)

== Installation ==

Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your
WordPress installation and then activate the Plugin from Plugins page.


== Developers ==
[Official Repository Github](https://github.com/closemarketing/bootstrap-shortcodes-for-content)

== Changelog ==

= 1.2.4 =
*   Fixed bugs with PHP7.
*   New widget Entries by category.

= 1.2.3 =
*   Added Contact widget.
*   Minor bugs shortcode imagepostslider.

= 1.2.2 =
*   Added property size in [imagepostslider].
*   Adde menu icon widget.

= 1.2.1 =
*   Added property ids and size in [imagepostslider].

= 1.2 =
*   Added Shortcode image-scroll.
*   Added Widget Child Menu.

= 1.1.1 =
*   Solved errors in date option of gridbox shortcode.
*   Solved JS problems in MCE Button.

= 1.1 =
* Order added gridbox
* Fixed classes for XS screens.
* Added widget social Icons from Yoast source.

= 1.0 =
*   Translation ready for mce button.
*   Latest news shortcode.
*   New Widgets: Button.
*   Add settings field: Phone.
*   Added Social Icons (gets URLs from Yoast SEO / Tab option).

= 0.9.2 =
*	Fixed imagepostslider and carouselcpt to show images.

= 0.9.1 =
*	Added shortcodes to Tinymce button.
*	Solved problems with tabs shortcode.

= 0.9.0 =
*	Added Tinymce Button.

= 0.4.0 =
*	Added Gallery Shortcode.

= 0.3 =
*	New shortcodes.

= 0.1.0 =
*	First released, created one shortcode.

== Links ==

*	[Closemarketing](https://www.closemarketing.es/)
