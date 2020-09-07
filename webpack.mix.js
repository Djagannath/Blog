const mix = require('laravel-mix');

mix.js('resources/admin/js/app.js', 'public/admin/js')
  .sass('resources/admin/sass/app.scss', 'public/admin/css');

// for production add version for css and js
if (mix.inProduction()) {
  mix.version();
}

if (!mix.inProduction()) {
  mix.browserSync('127.0.0.1:8081');
}
