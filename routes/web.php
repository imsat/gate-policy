<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('subscribe', function () {
//    if(auth()->user()->subscribe){
//        return "You are a subscriber";
//    }
//    return "You are not a subscriber";

    if (Gate::allows('subscribe-only', Auth::user())) {
        return view('subscribe');
    }
    return "You are not a subscriber";

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
