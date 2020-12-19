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
    
   Route::get('/','PostController@show');

    Route::get('edit_posts','PostController@Edit');
    Route::post('update_post/{id}','PostController@update')->name('update_post');
    Route::post('delete_post/{id}','PostController@destroy')->name('delete_post');

    Route::get('posts','PostController@index');
    Route::post('store_post','PostController@store');
    Route::get('display_post_content/{id}','PostController@displayPosts');
    //Route::get('getId','PostController@getId');
 
  Route::get('socialMedia_post_create','PostController@get_links_from_socialMedia')->name('postMedia.get');
  Route::post('socialMedia_post_post','PostController@store_links_from_socialMedia')->name('postMedia.store');

  Route::get('fetch_links','PostController@fetch_links')->name('postLinks.fetch');

  Route::get('data_face','PostController@dataFace')->name('dataFromFacebook');

    Route::get('show_activities','ActivityController@index');

});