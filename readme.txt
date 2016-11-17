=== SitePoint Base ===
Contributors: ahortin
Tags: one-column, two-columns, right-sidebar, custom-background, custom-header, custom-logo, custom-menu, editor-style, featured-image-header, featured-images, full-width-template, microformats, post-formats, sticky-post, theme-options, threaded-comments, translation-ready
Requires at least: 4.5
Tested up to: 4.6
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The SitePoint Base base theme is a clean, fast and simple platform for creating beautiful, responsive custom WordPress themes. It's a simple starter theme built on HTML5 & CSS3. At its core is a fluid, responsive grid based on percentages, making for a flexible layout. It incorporates a set of common templates, support for WordPress Post Formats and the gorgeous, retina friendly Font Awesome icon font. The SitePoint Base base theme is WooCommerce compatible, Multilingual Ready (WPML) and translateable. It's also compatible with a wide range of popular page builders such as Visual Composer, Beaver Builder, Divi Builder, SiteOrigin Page Builder and the Elementor Page Builder.


== Description ==

The SitePoint Base base theme is a clean, fast and simple platform for creating beautiful, responsive custom WordPress themes. It's a simple and elegant starter theme built on HTML5 & CSS3. At its core is a fluid, responsive grid based on percentages. This means not only is it flexible, it's extremely easy to customise.

If you do decide to use a child theme with Sitepoint Base, there's no need to use CSS @import or even enqueue the parent stylesheet. Sitepoint Base will automatically enqueue the parent stylesheet for you. Cool eh!

SitePoint's base is a fluid, responsive grid based on percentages. It uses [Normalize](https://github.com/necolas/normalize.css) to make sure that browsers render all elements more consistently and [Modernizr](http://modernizr.com) for detecting HTML5 and CSS3 browser capabilities along with some default stylings from HTML5 Boilerplate. It also incorporates the gorgeous [Font Awesome](http://fortawesome.github.io/Font-Awesome/) icon font by Dave Gandy.

The main navigation uses the standard WordPress menu. Support for dropdown menus is included by default. If you'd like to envoke a button toggle for the main navigation menu on small screens, simply uncomment the two lines from the sitepointbase_scripts_styles() function within functions.php to register and enqueue the necessary javascript file.

If you're looking to build an eCommerce website, Sitepoint Base supports the excellent WooCommerce plugin, straight out of the box.

Templates

SitePoint includes a set of your most common theme templates, including templates for Full-Width pages, Left Sidebar, Right Sidebar (default), Front-Page, Tag, Categories, Authors, Search, Posts Archive and 404.

If you're using one of the many page builder plugins that are available, such as Visual Composer, Beaver Builder, Divi Builder, SiteOrigin Page Builder or the Elementor Page Builder, try using the Page Builder Full-Width Template or the Page Builder Boxed Template. The Page Builder Full-Width Template is a true full browser width template while the Page Builder Boxed Template contains your content in a boxed layout. If you want a completely blank full-width page with no header or footer sections, such as for a landing page, then there is also a Page Builder Blank Template. Depending which Page Builder plugin that you're using, you may find that one template provides a better layout than the other.

Post Formats

All the standard WordPress Post Formats are supported. These include; Aside, Gallery, Link, Image, Quote, Status, Video, Audio, Chat and of course, your standard post.

Widgets

Widgets are a great way of adding extra content to your site and SitePoint Base has a whole assortment of them.

Main Sidebar: Appears in the sidebar on posts and pages
Blog Sidebar: Appears in the sidebar on the blog and archive pages only
Single Post Sidebar: Appears in the sidebar on single posts only
Page Sidebar: Appears in the sidebar on pages only

The Footer Widget areas are dynamic! You can use up to four of these and they'll magically space themselves out evenly. For example, if you only add widgets into the First Footer Widget Area, then it will expand the full width of the page. However, if you add widgets to all four Footer Widget Areas, they'll magically space themselves out over four equal columns.
First Footer Widget Area: Appears in the footer sidebar
Second Footer Widget Area: Appears in the footer sidebar
Third Footer Widget Area: Appears in the footer sidebar
Fourth Footer Widget Area: Appears in the footer sidebar

Custom Logo

The site logo can be easily changed using the site logo feature. You change this in Appearance > Customize > Site identity

Custom Header

The page header can be easily changed using the Custom Header feature. You change this in Appearance > Customize > Header Image

Custom Background

The background pattern can be changed using the Custom Background feature. You change this in Appearance > Customize > Background Image

Multilingual Ready (WPML)

Using the WordPress Multilingual Plugin (WPML) it's now easy to build multilingual sites. With WPML you can translate pages, posts, custom types, taxonomy, menus and even the theme’s texts.

WooCommerce Support

WooCommerce is a WordPress eCommerce toolkit that helps you sell anything. Beautifully. Turn your website into a powerful eCommerce site by installing the WooCommerce plugin by WooThemes.

== Installation ==

There are three ways to install your theme. It can be installed by manually uploading the files to the themes folder using an FTP application,it can be installed by downloading from the WordPress Theme Directory within the Dashboard or it can be installed by uploading the theme ZIP file that you downloaded.

Use the following instructions to install & activate Sitepoint Base using your preferred method.

Manual installation:

1. Unzip the files from the SitePoint Base zip file that you downloaded
2. Upload the Sitepoint Base folder to your /wp-content/themes/ directory
3. Click on the Appearance > Themes menu option in the WordPress Dashboard
4. Click the Activate link below the Sitepoint Base preview thumbnail

Install from the WordPress Theme Directory:

1. Click on the Appearance > Themes menu option in the WordPress Dashboard
2. Click the Install Themes tab at the top of the page
3. Type 'sitepoint-base' in the search field, without the quotes, and then click the Search button
4. Click the Install Now link below the Sitepoint Base preview thumbnail
5. Once the theme has been installed, click the Activate link

Install by uploading the theme zip file:

1. Click on the Appearance > Themes menu option in the WordPress Dashboard
2. Click the Install Themes tab at the top of the page
3. Click on the Upload link just below the two tabs at the top of the page
4. Click the Browse button, browse to the folder that contains the theme zip file, select it and then click the Open button
5. Click the Install Now button
6. Once the theme has been installed, click the Activate link


== Getting Started ==

Since SitePoint Base is a starter theme to kick off your own awesome theme, the first thing you want to do is copy the Sitepoint Base folder and change the name to something else. You'll then need to do a three-step find and replace on the name in all the templates.

1. Search for SitePoint Base inside single quotations to capture the text domain.
2. Search for sitepointbase_ to capture all the function names.
3. Search for Sitepoint Base with a space before it to replace all the occurrences of it in comments.
   (You'd replace this with the capitalized version of your theme name.)

or, to put it another way...

Search for:'sitepoint-base'
 Replace with:'yourawesomethemename'
Search for:sitepointbase_
 Replace with:yourawesomethemename_
Search for: Sitepoint Base
 Replace with: YourAwesomeThemeName

Lastly, update the stylesheet header in style.css and either update or delete this readme.txt file.


== License ==

SitePoint is licensed under the [GNU General Public License version 2](http://www.gnu.org/licenses/old-licenses/gpl-2.0.html).

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.


== Credits ==

SitePoint Base is packed full of the following wholesome goodness:

- [Unsemantic](http://unsemantic.com), which is licensed under GPL and MIT license
- [Modernizr](http://modernizr.com), which is licensed under the MIT license
- [Normalize.css](https://github.com/necolas/normalize.css), which is licensed under the MIT license
- [jQuery Validation](http://bassistance.de/jquery-plugins/jquery-plugin-validation) which is dual licensed under the MIT license and GPL licenses



SitePoint Base includes the following awesomeness:

- [Font Awesome](http://fortawesome.github.io/Font-Awesome) icon font, which is licensed under SIL Open Font License and MIT License
- [Open Sans font](https://fonts.google.com/specimen/Open+Sans), which is licensed under Apache License Version 2.0
- [Dosis](https://fonts.google.com/specimen/Dosis), which is licensed under SIL Open Font License 1.1


== Changelog ==

= 1.0 =
- Initial version
