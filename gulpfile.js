var gulp = require("gulp");
var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('app.sass');
});
