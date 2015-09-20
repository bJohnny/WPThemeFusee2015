# Fusee2015 WP Theme

This is a WordPress Theme for the [Fusee3d Website](http://fusee3d.org). It is based on Foundation 5 by Zurb, a powerful Frontend Framework with a small and handy toolbox that contains the essentials needed to build good designs.

## Requirements for Developers

**A brief explanation to the requirements** :

We use SASS to write our styles to avoid the clutter and confusion of large CSS files. SASS is a CSS pre-processor that allows you to write styles more effectively and tidy.

To compile SASS files into one style sheet, we use a tool called Grunt. In short, Grunt is a task runner that automates repetitive tasks like minification, compilation, linting, etc. Grunt and Grunt plugins are installed and managed via npm, the Node.js package manager. Before setting up Grunt ensure that your npm is up-to-date by running ```npm update -g npm``` (this might require ```sudo``` on certain systems)

Bower is a package manager used by Zurb to distribute Foundation. When you have Bower installed, you will be able to run ```foundation update``` in the terminal to update Foundation to the latest version. (After an upgrade you must run ```npm run build``` to recompile files).


**Okay, so you'll need to have [Node.js](http://nodejs.org) installed before continuing.**

**And that is it.**

## Quickstart

```bash
$ cd my-wordpress-folder/wp-content/themes/
$ git clone git@github.com:bJohnny/WPThemeFusee2015.git
$ cd WPThemeFusee2015

# will call:
# bower install && grunt build
# afterwards
# check `package.json` `scripts`
# for further information
$ npm install
```


While you're working on your project, run:

```bash
# will call:
# grunt watch
#
# predefined in `package.json`
$ npm run watch
```

For building all the assets, run:

```bash
# will call:
# grunt build
#
# predefined in `package.json`
$ npm run build
```

And you're set!

Wanna run a custom grunt task? Run:
```bash
# will call:
# grunt sass
$ npm run grunt -- sass

# will call:
# grunt copy
$ npm run grunt -- copy
```

### Stylesheet Folder Structure

  * `style.css`: Do not worry about this file. (For some reason) it's required by WordPress. All styling are handled in the Sass files described below

  * `scss/foundation.scss`: Imports for Foundation components and your custom styles.
  * `scss/config/_settings.scss`: Original Foundation 5 base settings
  * `scss/config/_custom-settings.scss`: Copy the settings you will modify to this file. Make it your own
  * `scss/site/*.scss`: Unleash your creativity and make it look perfect. Create the files you need (and remember to make import statements for all your files in scss/foundation.scss)

  * `css/foundation.css`: All Sass files are minified and compiled to this file
  * `css/foundation.css.map`: CSS source maps

### Script Folder Strucutre

  * `bower_components/`: This is the source folder where all Foundation components are located. `foundation update` will check and update scripts in this folder.

  * `js/custom`: This is where you put all your custom scripts. Every .js file you put in this directory will be minified and concatinated to [foundation.js](https://github.com/olefredrik/FoundationPress/blob/master/js/foundation.js)

  * `js/vendor`: Vendor scripts are copied from `bower_components/` to this directory. We use this path for enqueing the vendor scripts in WordPress.

  * Please note that you must run `npm run build` in your terminal for the script to be copied and concatinated. See [Gruntfile.js](https://github.com/olefredrik/FoundationPress/blob/master/Gruntfile.js) for details


## Documentation

* [Zurb Foundation Docs](http://foundation.zurb.com/docs/)
* [WordPress Codex](http://codex.wordpress.org/)
