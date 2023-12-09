/*import { createRequire } from 'module';
const require = createRequire(import.meta.url);*/

var elixir = require('laravel-elixir'); 

/*
/--------------------------------
/ Elixir Asset Management
/--------------------------------
/
/ Elixir provides a clean, fluent API for definiting some basic Gulp task
/ for your Laravel application. Be default, we are compiling tha Sas
/ file for our application, as well as publishing vendor resources.
/
 */
elixir(function(mix){
	mix.sass('app.scss');
});
