// webpack.mix.js

let mix = require('laravel-mix');

mix.js('src/app.js', 'js')
.vue({ version: 2 })
.sass('src/style.scss', 'css')
.setPublicPath('assets');