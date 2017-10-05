let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js');

/**
 * CSS
 */
mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css');
mix.copyDirectory('node_modules/bootstrap/dist/fonts', 'public/fonts');

mix.copy('node_modules/font-awesome/css/font-awesome.min.css', 'public/css/font-awesome.min.css');
mix.copyDirectory('node_modules/font-awesome/fonts', 'public/fonts');

mix.copy('node_modules/ionicons/dist/css/ionicons.min.css', 'public/css/ionicons.min.css');
mix.copyDirectory('node_modules/ionicons/dist/fonts', 'public/fonts');

mix.copy('node_modules/jvectormap/jquery-jvectormap.css', 'public/css/jquery-jvectormap.css');
mix.copy('node_modules/admin-lte/dist/css/AdminLTE.min.css', 'public/css/AdminLTE.min.css');
mix.copy('node_modules/admin-lte/dist/css/skins/_all-skins.min.css', 'public/css/_all-skins.min.css');
mix.copy('node_modules/admin-lte/plugins/iCheck/square/blue.css', 'public/css/blue.css');
mix.copy('node_modules/admin-lte/plugins/iCheck/square/blue.png', 'public/css/blue.png');

/**
 * JS
 */
mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');
mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');
mix.copy('node_modules/fastclick/lib/fastclick.js', 'public/js/fastclick.js');
mix.copy('node_modules/admin-lte/dist/js/adminlte.min.js', 'public/js/adminlte.min.js');
mix.copy('node_modules/jquery-sparkline/jquery.sparkline.min.js', 'public/js/jquery.sparkline.min.js');
mix.copy('node_modules/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js', 'public/js/jquery-jvectormap-1.2.2.min.js');
mix.copy('node_modules/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js', 'public/js/jquery-jvectormap-world-mill-en.js');
mix.copy('node_modules/jquery-slimscroll/jquery.slimscroll.min.js', 'public/js/jquery.slimscroll.min.js');
mix.copy('node_modules/chart.js/Chart.min.js', 'public/js/Chart.min.js');
mix.copy('node_modules/admin-lte/dist/js/pages/dashboard2.js', 'public/js/dashboard2.js');
mix.copy('node_modules/admin-lte/dist/js/demo.js', 'public/js/demo.js');
mix.copy('node_modules/admin-lte/plugins/iCheck/icheck.min.js', 'public/js/icheck.min.js');

/**
 * Images
 */
mix.copyDirectory('node_modules/admin-lte/dist/img', 'public/img');