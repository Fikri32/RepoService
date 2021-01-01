<?php
  Route::group(['namespace' => 'Admin'],function(){
    Route::resource('category','CategoryController');
    Route::resource('product','ProductController');
  });

?>