<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/posts/{post}', function ($post) {

//     $posts = [
//         'my-first-post' => 'ewrtewtert',
//         'my-second-post' => 'ferttr4'
//     ];

//     if (! array_key_exists($post, $posts)) {
//         abort(404, 'Sorry, that post was not found.');
//     }

//     return view('post', [
//         'post' => $posts[$post]
//     ]);
// });

Route::get('posts/{post}', 'PostsController@show');

Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('payments/create', 'PaymentsController@create')->middleware('auth');
Route::post('payments', 'PaymentsController@store')->middleware('auth');
Route::get('notifications', 'UserNotificationsController@show')->middleware('auth');
