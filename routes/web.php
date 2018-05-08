<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace' => 'User'], function() { //kada se postavi u grupu sa namespace User, ne mora se dodavati User\ na Controller

    Route::get('/', 'HomeController@index')->name('post.index');

    Route::get('/post', 'PostController@index')->name('post');
});

Route::get('/admin/home', 'Admin\HomeController@index')->name('admin.home');

Route::resource('/admin/post', 'Admin\PostController', [
    'names' => [ //imenovanje resource controllera umesto obicnog ->name('name')
        'index' => 'admin.post'
    ]
]);

Route::resource('/admin/tag', 'Admin\TagController', [
    'names' => [ //imenovanje resource controllera umesto obicnog ->name('name')
        'index' => 'admin.tag'
    ]
]);

Route::resource('/admin/category', 'Admin\CategoryController', [
    'names' => [ //imenovanje resource controllera umesto obicnog ->name('name')
        'index' => 'admin.category'
    ]
]);

Route::resource('/admin/user', 'Admin\UserController'); 