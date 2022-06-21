<?php

/* containing backend route of category subcategory ,

 sub_sub_category and products */

Route::group(['prefix'=>'admin','middleware'=>['auth:admin','permission']],function(){


  Route::resource('category','Product\CategoryController');
  
  Route::post('category/update/{id}',[
   'as' => 'update.category',
   'uses' => 'Product\CategoryController@update',
  ]);  

  Route::get('category/delete/{id}',[
   'as' => 'delete.category',
   'uses' => 'Product\CategoryController@destroy',
  ]);

  Route::get('category-list','Product\CategoryController@categoryList');


  Route::resource('sub-category','Product\SubCategoryController');
  Route::resource('brand','Product\BrandController');
  Route::resource('sub-sub-category','Product\SubSubCategoryController');
  Route::resource('product','Product\ProductController');
  Route::resource('product-size','Product\SizeController');
  Route::resource('product-color','Product\ColorController');

  Route::resource('sub-category','Product\SubCategoryController');

  Route::post('sub-category/update/{id}',[
   'as' => 'update.subcategory',
   'uses' => 'Product\SubCategoryController@update',
  ]);  

  Route::get('sub-category/delete/{id}',[
   'as' => 'delete.subcategory',
   'uses' => 'Product\SubCategoryController@destroy',
  ]);

  Route::get('sub-category-list','Product\SubCategoryController@subCategoryList'); 

  Route::get('get-subcategory/{category_id}','Product\SubCategoryController@getSubCategory');
  

  Route::resource('brand','Product\BrandController');

  Route::post('brand/update/{id}',[
   'as' => 'update.brand',
   'uses' => 'Product\BrandController@update',
  ]);  

  Route::get('brand/delete/{id}',[
   'as' => 'delete.brand',
   'uses' => 'Product\BrandController@destroy',
  ]);

  Route::get('brand-list','Product\BrandController@brandList'); 

});