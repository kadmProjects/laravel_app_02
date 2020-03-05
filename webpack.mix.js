const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/login.js', 'public/js/login.js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/login.scss', 'public/css/login.css');
