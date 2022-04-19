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
mix.sass('resources/scss/app.scss', 'public/assets/css', [
    //
]);
mix.sass('resources/scss/animation.scss', 'public/assets/css', [
    //
]);
mix.minify(['public/assets/css/app.css', 'public/assets/css/animation.css', 'public/assets/js/animation.js', 'public/assets/js/app.js'])