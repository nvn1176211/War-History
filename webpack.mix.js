const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

const resources = 'resources/assets/';
const dest = 'public/';
mix.js(resources + 'js/app.js', dest + 'js');
mix.copyDirectory(resources + 'css', dest + 'css');
mix.copyDirectory(resources + 'img', dest + 'img');