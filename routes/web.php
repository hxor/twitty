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

Route::get('/', 'HomeController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['prefix' => 'profile'], function() {
//     Route::get('/{username}', function($username) {
//         return $username;
//     })->name('profile.user');
// });

Route::get('/{username}', function ($username) {
    return $username;
})->name('profile.user');

// POST Choose username
Route::post('/profile/username', 'HomeController@postUsername')->name('post.profile.username');