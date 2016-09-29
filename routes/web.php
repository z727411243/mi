<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//进入前台首页
Route::get('index',function(){
    return view('home.index');
});

//进入后台首页
Route::get('admin',function(){
        if(session('adminuser')){
        return view('admin.index_time');
        }else{

        return view('admin.login');
        }
});
//前台登陆
Route::get('login',"Home\LoginController@index");
//前台用户注册
Route::get('register','Home\LoginController@register');
//登陆信息验证
Route::group(["prefix"=>"/index","middleware"=>"user"],
    function(){
            //登陆页面
    });
