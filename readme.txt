=== Date in a nice tone ===
Tags: posts, pages, date
Requires at least: 1.5
Tested up to: 2.7
Stable tag: 1.2

Displays the amount of time since a post or page was written in a friendly manner. Use `<? wp_date_in_a_nice_tone(); ?>`

== Description ==

This is a simple plugin which lets you know in words, roughly how long its been since a post was posted. Its based on the amount of time in seconds since the post was made. 

Simply use `<? wp_date_in_a_nice_tone(); ?>` to display the date in your theme.

The following messages are displayed according to how long its been since the post was made:

* if over 3 years = "quite a long while ago..."
* if over 2 years = "over two years ago"
* if over a year = "over a year ago"
* if over 355 days = "around a year ago"
* if over 9 months = "almost a year ago"
* if over 6 months = "about half a year ago"
* if over a month = "more than a month ago..."
* if over 28 days ago = "around a month ago"
* if equal to or more than 8 days ago = "in the last month"
* if equal to or more than 5 days ago = "around a week ago"
* if equal to or more than 3 days ago = "a few days ago"
* if equal to or more than 2 days ago = "a couple of days ago"
* if equal to or more than 1 day ago = "yesterday"
* if more than an hour ago = "freshly baked"
* if less than or equal to an hour ago = "in the last hour"

A month is assumed to be 31 days (therefore "more than a month" is always accurate, regardless of the month in question, and since from 28 days to 31 days we say "around a month ago", this is also accurate).

A year is assumed to be 366 days (therefore "over a year ago" is always accurate, etc).

See the plugin in action over at [ribot.co.uk](http://ribot.co.uk/category/articles/) - we use it in the left hand column

== Installation ==

1. [Download](http://downloads.wordpress.org/plugin/date-in-a-nice-tone.zip) the plugin.
2. Unzip the contents of the downloaded folder
3. Upload the `wp_date_in_a_nice_tone.php` file to the `/wp-content/plugins/` directory of your WordPress installation.
4. Log in to your Wordpress dashboard and activate the `wp_date_in_a_nice_tone` plugin that should now be visible in the list.
5. You can now insert `<? wp_date_in_a_nice_tone(); ?>` anywhere in The Loop in your WordPress theme.