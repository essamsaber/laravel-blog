<?php
View::share('sitesettings', \App\Mainsetting::find(1));
View::share('sliders', \App\Slider::all());
View::composer('front.partials.sidebar', function($view){
	$view->with('cats', \App\Category::all());
	$view->with('latests', \App\Post::latest()->paginate(3));
	$view->with('archives', \App\Post::selectRaw('year (created_at) year, monthname(created_at) month, count(*) published')
		->groupBy('year', 'month')
		->orderByRaw('min(created_at) desc')
		->get()
		->toArray()
	);
});
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

/**
 * Admin Routes
 */

Route::get('/', 'FrontController@index');
Route::get('/posts/{slug}', 'FrontController@show');
Route::post('/posts/{slug}/comment', 'FrontController@store');
Route::get('/cat/{id}', 'FrontController@catPosts');
Route::get('/contact', 'FrontController@contactUs');

Route::get('/login', 'LoginController@showFormLogin');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

Route::group(['middleware' => 'UserAuth'], function(){	
	Route::get('/forbidden', function(){return view('back.permission');});

	Route::get('/admin', 'AdminController@index');
	Route::get('/admin/profile/{user}', 'AdminController@showProfile');
	Route::post('/admin/profile/{user}', 'AdminController@saveProfile');

	Route::get('/admin/mainsettings', 'MainsettingsController@main');
	Route::post('/admin/mainsettings', 'MainsettingsController@update');

	Route::get('/admin/mainsettings/slider', 'MainsettingsController@showSlider');
	Route::post('/admin/slider/{slide}/delete', 'MainsettingsController@deleteSlide');
	Route::post('admin/mainsettings/slider', 'MainsettingsController@uploadSlide');

	Route::resource('/admin/categories', 'CategoriesController');
	Route::resource('/admin/posts', 'PostsController');
	Route::resource('/admin/users', 'UsersController');
	Route::get('/admin/comments', 'CommentsController@index');
	Route::get('/admin/comments/{comment}/status', 'CommentsController@update');

	Route::post('/admin/comments/{comment}', 'CommentsController@deleteComment');


});



