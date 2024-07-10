<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// first route in laravel
Route::get('greeting', function(){
return 'Hello world';
});
// parameterized Route in laravel
Route::get('/user/{id}', function($id){
return 'User Id:'.$id;
});
// optional parameterized Route
Route::get('/users/{name?}', function($name=null){
return 'Users name: '.$name;
});
// Route contraints in laravel
Route::get('/employee/{name}', function($name){
return 'Employee Name:'.$name;
})->where('name','[A-Za-z]+');
// How to add redirect from one route to another route
Route::redirect('/greeting', '/');
// How to open route list in laravel
// php artisan route:list
// how to open without list of packages routes
// php artisan route:list --except-vendor
// how to open route using href in laravel
Route::get('/teacher', function(){
return '<a href="/greeting">Greeting</a>';
});