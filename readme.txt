=== Dashboard Greetings ===
Contributors: ehasan28
Tags: dashboard, widget, motivation, quotes, admin
Requires at least: 6.0
Tested up to: 6.9
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A lightweight plugin that adds a Daily Motivation widget to the WordPress dashboard with random quotes and subtle styling.

== Description ==

Dashboard Greetings adds a clean, minimal "Daily Motivation" widget to the WordPress dashboard. Each page load shows a new quote along with its author, styled with a soft gradient background and legible typography.

Features:
- Random quote on each dashboard refresh
- Author displayed on its own line
- Subtle gradient background for visual variety
- Lightweight and admin-only (loads only on the Dashboard)

== Installation ==

1. Upload the `dashboard-greetings` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the "Plugins" menu in WordPress.
3. Visit the Dashboard to see the "Daily Motivation" widget.

== Frequently Asked Questions ==

= Where do the quotes come from? =
You can update the list of quotes in `inc/dg-widget-main.php`. Ensure you have rights to use any quotes you include.

= Can I add my own quotes? =
Yes. Add or edit the quotes array in `inc/dg-widget-main.php`.

= Can I customize the styling? =
Yes. Edit `assets/css/dg-style.css` to adjust fonts, sizes, and spacing.

== Screenshots ==

1. The "Daily Motivation" widget on the WordPress dashboard.

== Changelog ==

= 1.0.0 =
* Initial release.

== Upgrade Notice ==

= 1.0.0 =
Initial release.
