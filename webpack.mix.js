const mix = require('laravel-mix');
require('laravel-mix-imagemin');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles('resources/css/costume/frontend.css', 'public/css/frontend.min.css')
    .imagemin('images/**/**.*',
    {
        context: 'resources',
    },
    {
        optipng: {
            optimizationLevel: 9
        },
        jpegtran: null,
        
        plugins: [
            require('imagemin-mozjpeg')({
                quality: 100,
                progressive: true,
            }),
        ],
    }
    );
