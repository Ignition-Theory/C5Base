C5Base - A theme framework for Concrete5
========================================

** Version 0.8.0 **

This is a theme developed specifically for the [Concrete5 CMS](http://concrete5.org). It currently requires version 5.5.0 or above.

Checkout the demo at [c5base.ignitiontheory.net](http://c5base.ignitiontheory.net).

The theme has been developed to be used as a foundation which can be modified and built upon. All the basic groundwork has already been covered and the theme is ready to be heavily modified and turned in to a specific project. 

As well as a solid theme that is easily modified, most blocks have one or more template overides that utilise styles and functionality provided by the theme package.

Core technologies integrated within this theme include:

-   [Twitter Bootstrap v2][]
-   [Slickmap][]
-   [CSSPIE][]
-   [jQuery Validation Engine][]
-   [Google Webfonts][]
-	Built on [HTML5 Boilerplate][] and [Initializer][].
-	Written in [PHP][], [jQuery][] & [LESS][].
-	Compiled using the [HTML5 Build Script][] & [LESS.app][].
-	Tested using [Total Validator Pro][].

  [Twitter Bootstrap v2]: http://twitter.github.com/bootstrap/index.html
  [Slickmap]: http://astuteo.com/slickmap/
  [CSSPIE]: http://css3pie.com/
  [jQuery Validation Engine]: https://github.com/posabsolute/jQuery-Validation-Engine
  [Google Webfonts]: http://www.google.com/webfonts
  [HTML5 Boilerplate]: http://html5boilerplate.com/
  [Initializer]: http://www.initializr.com/
  [PHP]: http://www.php.net/
  [jQuery]: http://jquery.com/
  [LESS]: http://lesscss.org/
  [HTML5 Build Script]: http://html5boilerplate.com/docs/Build-script/
  [LESS.app]: http://incident57.com/less/
  [Total Validator Pro]: http://www.totalvalidator.com/tools/protool.html


Theme Organisation
------------------

The following is a breakdown of the theme structure with notes on what to modify. '[]' indicates a folder.

### [] Theme Root (/themes/*theme_name*_dev)

Contains theme Page Types and misc files used by Concrete5 and all the folders listed below.

### [] build
Contains the build script files and configuration. See [https://github.com/h5bp/ant-build-script/wiki](https://github.com/h5bp/ant-build-script/wiki) for more info on running the script.

*Modify config/project.properties*
+	Update 'dir.publish' to match project name.
+	Add custom page types to 'file.pages'.

### [] css
Place compiled LESS files here. Specifically 'style.less' (style.css) as that is required by the build script when compiling the production theme.

### [] elements
Contains page elements that are global to the site or often re-used. Files are loaded in to page type via `$this->inc()`.

### [] fonts
Custom font files. Custom fonts are often used to render text as Icons for easier styling. Font files are referenced in CSS using `@fontface`.

### [] img
All images used within the theme. Also contains any images used within CSS frameworks. Contents are optimised in build script.

### [] intermediate
Used by build script to hold files whilst compiling.

### [] js
All javascript files go here. Any JS files placed directly in folder will be minified and concated by build script. JS Files in 'libs' folder will be left untouched.
Remember to reference JS files in 'elements/html_foot.php' so they are called in development theme.

### js/scripts.js
Application code. For any custom javascript written specifically for a project/theme.

### js/plugins.js
jQuery Plugin javascript. Include plugin initialisers scripts and any plugins that cannot be contained in stand alone file.

### [] less
All LESS files used within the theme. 'framework' contains CSS frameworks. Files prefixed with 'block_' are related to specific blocks. Files prefixed with 'theme_' are used to style theme pages and elements.

### [] scripts
Contains any miscellaneous scripts that aren't javascript, such as '.htc'. Currently contains only 'PIE.htc' which is not yet implemented within the theme.

### configurable_styles.css
Used by C5 to define configurable styles. Currently unused.

### typography.less
Used by the WYSIWYG editor within C5 (TinyMCE).

Building Production Theme
-------------------------

The theme folder suffixed with '_dev' is a development theme and should only be used on a testing/development website. The dev theme uses javascript to render LESS and references individual jQuery plugins.

To create a production ready theme, use the included ANT Build Script. This script will make a copy of the development theme in the '/themes' folder and optimise the code. JS + CSS is minified and concated, images are compressed and HTML is updated with new references. 'description.txt' and 'thumbnail.png' are also swapped with their '_production' counterparts.

*The script will not compile LESS files* - This must be done before running the script (see below).


Some Notes on the CSS
---------------------

This theme makes extensive use of LESS. Find more info about LESS at [http://lesscss.org](http://lesscss.org).

### Development Theme
LESS.js is used to compile LESS client side. Great during development, bad for live sites.

'styles.less' is the core LESS file. It references all other LESS files via `@import`. 
The only file not referenced is 'typography.less' on the themes root. This must be compiled seperately.

See the comments included in each file for more information about it's usage.

### Production Theme (use Build script)
This LESS file is pre-compiled using a local App and moved to the CSS folder. 
LESS.app is recommended - http://incident57.com/less/ (set to compile /less/styles.less in to adjacent /CSS/ folder.)
The theme will reference the new single CSS file after compilation via the build script.

### CSS Style Guide
The following are guidelines on how to write CSS to match with the rest of the code in this Theme.
Following this guide allows code to remain consistent and easy to read. 

CSS should be multiline and follow the below example format.

camelCaseElementName {
1.	size & display type
2.	layout & positioning controls (padding, width etc.)
2.	visual stuff (colors, fonts, backgrounds)
3.	CSS3 effects (split apart with a line between each if using vendor prefixes)
}

Block Template Overrides
------------------------

TODO

Miscellaneous Site Root Files
-----------------------------

TODO
