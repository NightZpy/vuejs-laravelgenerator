var elixir = require('laravel-elixir');
elixir.config.sourcemaps = false;

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
    mix.styles([
        'vue-styles.css'
    ], 'public/app/css/vue-styles.css');

	mix.scripts(['models/provider-config.js'], 'public/app/js/models/provider-config.js')
       .browserify('crud.js', 'public/app/js/crud.js');        
});
