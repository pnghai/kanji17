const { mix } = require('laravel-mix');
const dotenv = require('dotenv').config({ path: '.env' }).parsed;

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
if (!mix.inProduction()) {
  mix.browserSync(dotenv.APP_URL).sourceMaps();
}

mix.autoload({})
  .js('resources/assets/js/app.js', 'public/js')
  .webpackConfig({
    resolve: {
      alias: {
        pace: 'pace-progress',
      },
    },
  })
  .extract([
    //'select2',
    'axios',
    'moment',
    'clipboard',
    'noty',
    //'slick-carousel',
    'pace-progress',
  ])
  .sass('resources/assets/sass/app.scss', 'public/css');

if (mix.inProduction()) {
  mix.version();
}
