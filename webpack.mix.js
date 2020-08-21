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

mix.
    styles([
        'resources/views/dash/vendors/bootstrap/dist/css/bootstrap.min.css',
        'resources/views/dash/vendors/font-awesome/css/font-awesome.min.css',
        'resources/views/dash/vendors/themify-icons/css/themify-icons.css',
        'resources/views/dash/vendors/flag-icon-css/css/flag-icon.min.css',
        'resources/views/dash/vendors/selectFX/css/cs-skin-elastic.css',
        'resources/views/dash/vendors/jqvmap/dist/jqvmap.min.css',
        'resources/views/dash/assets/css/style.css',
    ],'public/dash/assets/css/style.css')

    .options({
        processCssUrls: false
    })

    .scripts([
        'resources/views/dash/vendors/jquery/dist/jquery.min.js',
        'resources/views/dash/vendors/popper.js/dist/umd/popper.min.js',
        'resources/views/dash/vendors/bootstrap/dist/js/bootstrap.min.js',
        'resources/views/dash/assets/js/main.js',
        'resources/views/dash/vendors/chart.js/dist/Chart.bundle.min.js',
        'resources/views/dash/assets/js/dashboard.js',
        'resources/views/dash/assets/js/widgets.js',
        'resources/views/dash/vendors/jqvmap/dist/jquery.vmap.min.js',
        'resources/views/dash/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js',
        'resources/views/dash/vendors/jqvmap/dist/maps/jquery.vmap.world.js',
    ],'public/dash/assets/js/script.js')

    .copy('resources/views/dash/images', 'public/dash/images')
    .copy('resources/views/dash/vendors/font-awesome/fonts', 'public/dash/assets/fonts')
    .copy('resources/views/dash/vendors/themify-icons/fonts', 'public/dash/assets/fonts')

   .version()