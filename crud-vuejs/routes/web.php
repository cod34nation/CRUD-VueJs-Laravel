<?php

//use Illuminate\Support\Facades\Route;
Route::resource('/', 'UserController');


Route::get('/api/users',function () {
	return App\User::all();
});

Route::post('/api/users',function(){
	return App\User::create(Request::all());
});
