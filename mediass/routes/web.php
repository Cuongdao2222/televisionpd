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


Route::get('/', function () {
    return view('frontend.index');
});



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index');

Route::get('/category/{slug}', 'Frontend\categoryController@index')->name('category-product');

Route::get('/{slug}', 'Frontend\categoryController@details')->name('details');



Route::group(['prefix' => 'admins','middleware' => 'auth'], function() {

    Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');

    Route::resource('metaSeos', 'metaSeoController');

    Route::resource('menus', 'menuController');

    Route::resource('posts', 'postController');

    Route::resource('banners', 'bannerController');

    Route::resource('categories', 'categoryController');

    Route::resource('groupProducts', 'groupProductController');

    Route::resource('makers', 'makerController');

    Route::resource('products', 'productController');

    Route::resource('images', 'imageController');

    Route::post('find-product', 'productController@FindbyNameOrModel')->name('find-product');

    Route::get('category/{category_id}', 'productController@selectProductByCategory')->name('select-category');

    //ajax

    Route::post('add-hot-product', 'AjaxController@addHotProduct')->name('add-hot-product');

    Route::post('remove-hot-product', 'AjaxController@removeHotProduct')->name('remove-hot-product');

    Route::post('add-sale-product', 'AjaxController@addSaleProduct')->name('add-sale-product');

    Route::post('remove-sale-product', 'AjaxController@removeSaleProduct')->name('remove-sale-product');

});



