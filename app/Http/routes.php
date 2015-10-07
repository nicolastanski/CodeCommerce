<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('exemplo', 'Exemplo@index');


Route::pattern('id','[0-9]+');

//Rotas Categorias
Route::get('admin/categories', 'AdminCategoriesController@listar');
Route::get('admin/categories/adicionar', ['as' => 'adicionarCategoria', 'uses' => 'AdminCategoriesController@adicionar']);
Route::get('admin/categories/editar/{id?}', [
    'as' => 'editarCategoria',
    'uses' => 'AdminCategoriesController@editar'
]);
Route::get('admin/categories/excluir', ['as' => 'excluirCategoria', 'uses' => 'AdminCategoriesController@excluir']);

//Rotas Produtos
Route::get('admin/products', 'AdminProductsController@listar');
Route::get('admin/products', 'AdminProductsController@index');
Route::get('admin/products/adicionar', ['as' => 'adicionarProduto', 'uses' => 'AdminProductsController@adicionar']);
Route::get('admin/products/editar/{id?}', [
    'as' => 'editarProduto',
    'uses' => 'AdminProductsController@editar'
]);
Route::get('admin/products/excluir', ['as' => 'excluirProduto', 'uses' => 'AdminProductsController@excluir']);


