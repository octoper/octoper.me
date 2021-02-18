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

mix.js("resources/js/site.js", "public/js/site.js")
    .sass("resources/css/main.scss", "public/css/main.css");

mix.options({
    postCss: [
        require('tailwindcss')('./tailwind.config.js'),
        require('autoprefixer'),
    ]
});

if (mix.inProduction()) {
    mix.version();
}
