let mix = require('laravel-mix');
let build = require('./tasks/build.js');
let tailwindcss = require('tailwindcss');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build/');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch([
            'config.php',
            'source/**/*.md',
            'source/**/*.txt',
            'source/**/*.php',
            'source/**/*.yaml',
            'source/**/*.yml',
            'source/**/*.scss',
        ]),
    ]
});

mix.js('source/_assets/js/main.js', 'js')
    .js('source/_assets/js/blog.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css/main.css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss()],
    })
    .extract()
    .version();
