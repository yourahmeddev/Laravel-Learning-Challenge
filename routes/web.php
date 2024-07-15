<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});
// first route in laravel
Route::get('greeting', function () {
    return 'Hello world';
});
// parameterized Route in laravel
Route::get('/user/{id}', function ($id) {
    return 'User Id:' . $id;
});
// optional parameterized Route
Route::get('/users/{name?}', function ($name = null) {
    return 'Users name: ' . $name;
});
// Route contraints in laravel
Route::get('/employee/{name}', function ($name) {
    return 'Employee Name:' . $name;
})->where('name', '[A-Za-z]+');
// How to add redirect from one route to another route
Route::redirect('/greeting', '/');
// How to open route list in laravel
// php artisan route:list
// how to open without list of packages routes
// php artisan route:list --except-vendor
// how to open route using href in laravel
Route::get('/teacher', function () {
    return '<a href="/greeting">Greeting</a>';
});
// how to open view file through routes first method
Route::get('first-view/{name}', function ($name) {
    return view('greeting', compact('name'));
});
// how to open view file through routes 2nd method
Route::get('first-view/{name}', function ($name) {
    return view('greeting', ['name' => $name]);
});
// how to open view file through routes 3rd method
Route::get('first-view/{name}', function ($name) {
    return view('greeting')->with('name', $name);
});
// how to open nested blade files in laravel
Route::get('/inside', function () {
    return view('main.inside');
});
// how to clear view cache in laravel
// php artisan view:clear
// lets make master blade layouts in laravel
Route::get('/home', function () {
    return view('home');
});
// opening view from the controller in laravel
Route::get('/user', [UserController::class, 'Index']);
Route::get('/user/show/{id}', [UserController::class, 'show']);
// how to make route for resource controller route list
// Route::resource('Posts', PostController::class);
// check route list:
// php artisan route:list --except-vendor
// Route::get('/testing/{id}', function ($id) {
//     // Post::create([
//     //     'title' => 'Laravel 9',
//     //     'description' => 'Laravel 9 Content',
//     //     'is_publish' => false,
//     //     'is_active' => false
//     // ]);
//     // fetching the data from database
//     // ::all()
//     // find()
//     // findorfail()
// //    $posts = Post::where(['title'=>'Laravel 1' ,'is_publish'=>'0'])->get();
// // return $posts;
//     // return 'Inserted Success';
//     // $post = Post::where('title','Laravel 2')->first();
//     // $post = Post::findOrFail(2);
//     // $post->update([
//     //     'title'=>'Laravel new 2'
//     // ]);
//     // return 'Title Updated Successfully';
//     // $post = Post::findOrFail($id);
//     // $post->delete();
//     // return 'Post'.$id.'Deleted Sucessfully';
// });
// opening the posts through models but only from controller
// Route::get('posts' , [PostController::class, 'index']);
// Route::get('posts/store' , [PostController::class, 'store']);
// Route::get('posts/update' , [PostController::class, 'update']);
// Route::get('posts/destroy' , [PostController::class , 'destroy']);
// creating resource routes
Route::resource('posts' , PostController::class);
