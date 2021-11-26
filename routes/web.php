<?php

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verify');

Route::get('/' ,function(){
    return 'home';

});

Route::get('/dashpoard', function(){



});