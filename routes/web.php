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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('index');
});

//Route::get('/', ['as' => 'pages.home', 'uses' => 'PagesController@home']);

Route::get('/',['as'=>'pages.index','uses'=>'HomeController@index']);
Route::get('/opinion-rozana',['as'=>'pages.opinion_rozana','uses'=>'PagesController@opinion_rozana']);
// Route::get('/punjab-rozana',['as'=>'pages.punjab_rozana','uses'=>'PagesController@punjab_rozana']);
Route::get('/single/{slug?}/{cat_slug?}',['as'=>'pages.single','uses'=>'PagesController@single']);
Route::get('/video/single/{slug?}/{cat_slug?}',['as'=>'video.single.view','uses'=>'HomeController@videoView']);
// Route::get('/sports-rozana',['as'=>'pages.sports_rozana','uses'=>'PagesController@sports_rozana']);
Route::get('/video-rozana',['as'=>'pages.video_rozana','uses'=>'PagesController@video_rozana']);

Route::get('/category/{slug}', ['as' => 'homepage.category', 'uses' => 'PagesController@categoryNews']);
Route::get('/news/{slug}', ['as' => 'homepage.category.news', 'uses' => 'PagesController@newsByCategory']);
Route::get('/sports-rozana', ['as' => 'homepage.category.news', 'uses' => 'PagesController@sportsNews']);
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
	 // Authentication Routes...
	Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
	Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('login', 'Auth\LoginController@login');


	Route::group(['middleware' => ['auth']], function() {

		// Password Reset Routes...
		Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
		Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
		Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
		Route::post('password/reset', 'Auth\ResetPasswordController@reset');

		Route::get('/dashboard', ['as' => 'admin.dashboard', 'uses' => 'DashboardAdminController@index']);
		Route::get('/logout', ['as' => 'admin.logout', 'uses' => 'Auth\LoginController@logout']);

		// Posts
		Route::group(['prefix' => 'posts'], function() {
			Route::get('/', ['as' => 'admin.posts.index', 'uses' => 'PostsAdminController@index']);
			Route::get('/show/{id}', ['as' => 'admin.posts.view', 'uses' => 'PostsAdminController@show'])->where(['id' => '[0-9]+']);
			Route::get('/create', ['as' => 'admin.posts.create', 'uses' => 'PostsAdminController@create']);
			Route::get('/edit/{id}', ['as' => 'admin.posts.edit', 'uses' => 'PostsAdminController@edit'])->where(['id' => '[0-9]+']);
			Route::post('/store', ['as' => 'admin.posts.store', 'uses' => 'PostsAdminController@store']);
			Route::post('/update/{id}', ['as' => 'admin.posts.update', 'uses' => 'PostsAdminController@update'])->where(['id' => '[0-9]+']);
			Route::get('/delete/{id}', ['as' => 'admin.posts.delete', 'uses' => 'PostsAdminController@destroy'])->where(['id' => '[0-9]+']);
			Route::get('/status/toggle/{post}', ['as' => 'admin.posts.status.toggle', 'uses' => 'PostsAdminController@toggle_status'])->where(['id' => '[0-9]+']);
		});

		// Posts
		Route::group(['prefix' => 'videos'], function() {
			Route::get('/', ['as' => 'admin.videos.index', 'uses' => 'VideosAdminController@index']);
			Route::get('/show/{id}', ['as' => 'admin.videos.view', 'uses' => 'VideosAdminController@show'])->where(['id' => '[0-9]+']);
			Route::get('/create', ['as' => 'admin.videos.create', 'uses' => 'VideosAdminController@create']);
			Route::get('/edit/{id}', ['as' => 'admin.videos.edit', 'uses' => 'VideosAdminController@edit'])->where(['id' => '[0-9]+']);
			Route::post('/store', ['as' => 'admin.videos.store', 'uses' => 'VideosAdminController@store']);
			Route::post('/update/{id}', ['as' => 'admin.videos.update', 'uses' => 'VideosAdminController@update'])->where(['id' => '[0-9]+']);
			Route::get('/delete/{id}', ['as' => 'admin.videos.delete', 'uses' => 'VideosAdminController@destroy'])->where(['id' => '[0-9]+']);
			Route::get('/status/toggle/{video}', ['as' => 'admin.videos.status.toggle', 'uses' => 'VideosAdminController@toggle_status'])->where(['id' => '[0-9]+']);
		});

		Route::group(['prefix' => 'categories'], function() {
			Route::get('/', ['as' => 'admin.categories.index', 'uses' => 'CategoriesAdminController@index']);
			Route::get('/create', ['as' => 'admin.categories.create', 'uses' => 'CategoriesAdminController@create']);
			Route::post('/store', ['as' => 'admin.categories.store', 'uses' => 'CategoriesAdminController@store']);

			Route::get('/edit/{id}', ['as' => 'admin.categories.edit', 'uses' => 'CategoriesAdminController@edit'])->where(['id' => '[0-9]+']);
			Route::post('/update/{id}', ['as' => 'admin.categories.update', 'uses' => 'CategoriesAdminController@update'])->where(['id' => '[0-9]+']);
			Route::get('/delete/{id}', ['as' => 'admin.categories.delete', 'uses' => 'CategoriesAdminController@destroy'])->where(['id' => '[0-9]+']);
			Route::get('/status/toggle/{category}', ['as' => 'admin.category.status.toggle', 'uses' => 'CategoriesAdminController@toggle_status'])->where(['id' => '[0-9]+']);
		});
	});
});