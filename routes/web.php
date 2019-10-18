<?php


Route::get('/', function () {
    return Redirect()->route('login');
});

Auth::routes(['verify' => true]);

Route::get('home','HomeController@index')->name('home');

Route::group(['middleware'=>'verified'],function(){
	Route::get('/inbox',function(){
		echo "Inbox";
	})->name('inbox');

	Route::get('/calendar',function(){
		echo "calendar";
	})->name('calendar');

	Route::get('/typography',function(){
		echo "typography";
	})->name('typography');
});


