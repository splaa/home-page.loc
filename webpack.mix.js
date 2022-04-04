const mix = require('laravel-mix');

mix.css('resources/css/style.css', 'public/css/style.css');

mix.copy('resources/img', 'public/img');


mix.js('resources/js/app.js', 'public/js')
    .vue()
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .alias({
        '@': 'resources/js',
    });

if (mix.inProduction()) {
    mix.version();
}

// mix.webpackConfig({
//     output: {
//         chunkFilename: "js/[name].js?id=[chunkhash]",
//     },
// });
