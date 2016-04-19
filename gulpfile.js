/**
* @Author: Daven
* @Date:   2016-04-19T09:41:41-07:00
* @Email:  daven1919@gmail.com
* @Last modified by:   Daven
* @Last modified time: 2016-04-19T13:09:58-07:00
*/



var elixir = require('laravel-elixir');

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
    var bootstrapPath = 'node_modules/bootstrap-sass/assets';
    mix.sass('app.scss').copy(bootstrapPath + '/fonts', 'public/fonts').copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'public/js');
});
