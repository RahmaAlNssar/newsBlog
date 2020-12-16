<?php


// Route::get('/', function () {
//     return view('front.news');
// });


Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin','middleware' => 'auth'], function () {
Route::resource('roles','RoleController');
Route::resource('users','UserController');
});

Route::group(['namespace' => 'Admin'], function () {
    Route::get('index','CategoryController@index');
    Route::get('edit_category','CategoryController@edit');
    Route::post('store_category','CategoryController@store');
    Route::post('update_category','CategoryController@update');
    Route::post('delete_category/{id}','CategoryController@destroy');
    
  // Route::post('store_post','PostController@store');
  // Route::get('index','PostController@index');

 
   Route::get('/','PostController@show');
    Route::get('edit_posts','PostController@edit');
    Route::post('update_post','PostController@update');
    Route::post('delete_post/{id}','PostController@destroy');
    Route::get('posts','PostController@index');
    Route::post('store_post','PostController@store');
    Route::get('display_post_content/{id}','PostController@displayPosts');


    Route::get('show_activities','ActivityController@index');

});