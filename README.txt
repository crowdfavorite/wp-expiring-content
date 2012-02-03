=== CF Expiring Content Shortcode ===
Contributors: alexkingorg, crowdfavorite
Donate link: http://crowdfavorite.com/donate/
Tags: content, expiring, expire, expires, hide, show
Requires at least: 2.5
Tested up to: 3.0.1
Stable tag: 1.0.1


Allows designated content to be shown only until an expiration date/time.


== Description ==

Simply wrap your content in the shortcode and set the date/time you'd like it to expire - once that time is eclipsed, it will no longer appear.

The date format is anything that can be parsed by <a href="http://php.net/strtotime">PHP's strtotime function</a>. A few examples:

*	[expires on="2010-10-01"]Expires on October 1, 2010[/expires]
*	[expires on="Jan 3, 2011"]Expires on January 11, 2011[/expires]
*	[expires on="12/3/2012 23:16:00"]Expires on December 2, 2012 at 11:16pm[/expires]
*	[expires on="2015-01-01 + 15 days"]Expires on January 16, 2015[/expires]

Don't use relative times like 'today' or 'tomorrow', as they will be evaluated from the current time/date - not an anchored time/date.

A plugin by <a href="http://crowdfavorite.com">Crowd Favorite</a>; we build Big Things with WordPress.


== Installation ==

1. Use the built-in WordPress.org plugin installer

-OR-

1. Upload `expiring-content-shortcode.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress


== Changelog ==

= 1.0.1 =
* Addition of README

= 1.0 =
* First public release.
