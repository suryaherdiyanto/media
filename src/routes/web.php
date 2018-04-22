<?php

Route::group(
  ['namespace' => 'App\Http\Controllers',
  'prefix' => 'media'], function(){
  Route::get('/test', function(){
    return "Hello world";
  });
});
