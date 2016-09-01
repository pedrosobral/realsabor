var elixir = require('laravel-elixir');

// paths
var p = {
    'jquery': './www/lib/jquery/dist/jquery.js',
    'bootstrap': './www/lib/bootstrap/',
    'select2': './node_modules/select2/dist/',
    'datatables': './www/lib/dataTables.net/',
    'datatables_bs': './www/lib/datatables.net-bs/',
    'toastr': './www/lib/toastr/'
};

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less')
        .copy(p.bootstrap + '/fonts/**', 'public/fonts')
        .copy('./fonts/Lato/*', 'public/fonts');

    mix.styles([
        p.select2 + 'css/select2.css',
        p.datatables_bs + 'css/dataTables.bootstrap.css',
        'app.css'
    ]);

    mix.scripts([
        p.jquery,
        p.bootstrap + 'dist/js/bootstrap.js',
        './www/lib/moment/min/moment-with-locales.js',
        p.datatables + 'js/jquery.dataTables.js',
        p.datatables_bs + 'js/dataTables.bootstrap.js',
        p.select2 + 'js/select2.full.js',
        p.toastr + 'toastr.js'
    ], 'public/js/vendor.js');

    mix.scripts([
        'datatables.js',
        'app.js',
    ]);

});
