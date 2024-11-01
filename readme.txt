=== Plugin Name ===
Contributors: Mattiasgeniar
Tags: dash, double dash, single dash, replace, htmlcharacter, quotes, curly quote, single quote, double quote, ending quote, opening quote
Requires at least: 3.3
Tested up to: 3.3.1
Stable tag: 1.0

This plugin undoes some of the default formatting that gets applied to new posts created via Wordpress.

== Description ==

Wordpress applies default text formatting that replaces characters such as '-', '--', quotes, ... to pretty HTML characters. This plugin was created to revert that back. This is especially useful for tech-oriented blogs that need the original input because they may contain commands that need to be executed.

== Installation ==

1. upload the directory "undo_wordpress_default_formatting" to your wp-content/plugins directory
2. activate the plugin from your Wordpress 'Plugins' menu

== Frequently Asked Questions ==

= The characters get replaced to something else than my original, why is that? =

Wordpress changes a few characters to the same HTML entity character. I can not guess what the original character was, so I'm using a 'best effort' way of converting the HTML character back to the original one. Sometimes, it'll be wrong.

== Changelog ==
= 1.0 =
* First version of the Plugin, stable

== Upgrade Notice ==
= 1.0 =
There is only 1 version so far, no upgrade notices yet.


