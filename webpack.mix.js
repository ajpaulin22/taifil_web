const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

 const style = [
    'resources/css/bootstrap.min.css',
    'resources/css/animate.css',
    'resources/css/all.min.css',
    'resources/css/swiper.min.css',
    'resources/css/lightcase.css',
    'resources/css/style.css'
];

const jst = [
    'resources/js/vendor/jquery-3.6.0.min.js',
	'resources/js/vendor/modernizr-3.11.2.min.js',
	'resources/js/isotope.pkgd.min.js',
	'resources/js/swiper.min.js', 
	'resources/js/wow.js',
	'resources/js/counterup.js',
	'resources/js/jquery.countdown.min.js',
	'resources/js/lightcase.js',
	'resources/js/waypoints.min.js',
	'resources/js/vendor/bootstrap.bundle.min.js',
	'resources/js/plugins.js',
	'resources/js/main.js'
];

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    .scripts(jst,"public/js/app.js")
    .styles(style,"public/css/app.css")

    .scripts(['resources/js/onepage.js'],"public/js/onepage.js")

    .scripts('resources/js/biodata/biodata.js',"public/js/biodata/biodata.js")
    .scripts('resources/js/admin/ManagementRegistration.js','public/js/admin/ManagementRegistration.js')
    .scripts('resources/js/admin/MasterMaintenance.js','public/js/admin/MasterMaintenance.js')

    .styles(["public/css/app.css",],'public/css/admin/Admin.css')

    .scripts(["public/js/app.js",
              "resources/js/admin/Admin.js"
    ],'public/js/admin/Admin.js');

    

