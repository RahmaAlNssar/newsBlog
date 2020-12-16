<?php



//Route::get('/admin', function () {
//    return view('home');
//});


Route::group(['prefix' => 'admin','namespace' => 'Admin','middleware' => 'auth:web'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard.admin');
  
   

});


