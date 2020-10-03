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
    return view('welcome');
});


Route::any('/admin/login',"Admin\LoginController@login");//登录
Route::any('/admin/logindo',"Admin\LoginController@logindo");//执行登录

Route::any('/admin/index',"Admin\IndexController@index");//首页

Route::any('/user/add',"Admin\UserController@add");//管理员
Route::any('/user/adddo',"Admin\UserController@adddo");//管理员
Route::any('/user/index',"Admin\UserController@index");//管理员
Route::any('/user/delete/{id}',"Admin\UserController@delete");//管理员

Route::any('/role/add',"Admin\RoleController@add");//角色
Route::any('/role/adddo',"Admin\RoleController@adddo");//角色
Route::any('/role/index',"Admin\RoleController@index");//角色

Route::any('/based/add',"Admin\BasedController@add");//权限