// webpack.mix.js

let mix = require('laravel-mix');

//Compiling resources js and css into public js and css
mix.js('resources/js/app.js', 'public/js/app.js')
    .vue()
    .css('resources/css/app.css', 'public/css/app.css')
    .setPublicPath('public');