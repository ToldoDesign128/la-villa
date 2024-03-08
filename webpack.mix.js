// webpack.mix.js

let mix = require('laravel-mix');
let minifier = require('minifier');

mix.sass('assets/scss/style.scss', 'style.css');
mix.minify(['script.js']);

mix.webpackConfig({
  watchOptions: {
    ignored: /node_modules/
  },
  stats: {
    children: true,
},
})

mix.then(() => {
    minifier.minify('style.css')
});
