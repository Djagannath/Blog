const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/admin/js/app.js', 'public/admin/js')
  .sass('resources/admin/sass/app.scss', 'public/admin/css');

// for production add version for css and js
if (mix.inProduction()) {
  mix.version();
}

if (!mix.inProduction()) {
  mix.browserSync('127.0.0.1');
}