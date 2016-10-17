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

//后台登陆页面
Route::get('admin/login','Admin\loginController@login');
//执行登陆
Route::post('admin/dologin','Admin\loginController@dologin');

//验证码
Route::get('admin/captcha/{tmp}',"Admin\loginController@captcha");

//后台界面
Route::group(["prefix"=>"admin","middleware"=>"user"],function(){
    //首页
    Route::get("index","Admin\IndexController@index");
    //退出登录
    Route::get('loginout',"Admin\loginController@loginout");
    //用户
    Route::resource("user","Admin\UserController");//用户信息管理
    //上传用户头像
    Route::post('/user/photo/{id}',"Admin\UserController@photo");
    //设置用户开关
   Route::get("/dodown/{id}","Admin\UserController@down");
   Route::get("/doopen/{id}","Admin\UserController@open");

   //商品
   Route::resource("goods","Admin\GoodsController");//商品管理

   //商品分类
   Route::resource("goodsclass","Admin\ClassController");//商品类别管理

   //商品版本管理
   Route::get('goods/version/{id}','Admin\GoodsController@version');
   //添加商品版本
   Route::post('goods/doversion',"Admin\GoodsController@doversion");
   //修改商品版本
   Route::post('goods/updateversion/{id}',"Admin\GoodsController@updateversion");
   //版本色彩
   Route::get('version/color/{id}','Admin\GoodsController@color');
   //添加版本色彩
   Route::post('version/color/{id}',"Admin\GoodsController@docolor");
   //获取版本信息的
   Route::get('version/change',"Admin\GoodsController@change");
       //商品类别
    Route::resource("goodsclass","Admin\ClassController");//商品类别信息管理
    //添加商品子类别
    Route::get("goodsclass/addson/{id?}","Admin\ClassController@create");
    //添加商品类别查询类别的ajax
    Route::get('/select/type',"Admin\ClassController@selectType");
    //添加子类别的ajax
    // Route::post('/addsontype',"Admin\ClassController@addsontype");
    //执行类别删除的ajax
    Route::post('ajax/del',"Admin\ClassController@del");
    //前台模块头部商品
    Route::get('template/top',"Admin\TemplateController@top");



});
Route::get('/aa/1',"Admin\ClassController@del");







//前台需要登录的页面
Route::group(["prefix"=>"home","middleware"=>"home"],function(){

//订单确认页
Route::get('home/order','Home\IndexController@order');

//支付页面
Route::get('home/pay','Home\IndexController@pay');

//用户信息页面
Route::get('home/user','Home\IndexController@user');

});


//不需要登录的页面

//前台主页
Route::get('/home/index','Home\IndexController@index');
/*
*注册
*/
//注册页面
Route::get('/home/regi','Home\RegiController@index');
//检查用户是否存在
Route::post('home/regi/checkUser', 'Home\RegiController@checkUser');
//验证码
Route::get('/home/code/{code}','Home\RegiController@code');
//执行注册 验证数据
Route::post("/home/doregi","Home\RegiController@doRegi");
/*
*登陆
*/
//登陆页面
Route::get('/home/login','Home\LoginController@index');
//执行登陆
Route::post('/home/dologin','Home\LoginController@dologin');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/head','Home\IndexController@head');

//商品选择页面
Route::get('home/goodsmessage','Home\IndexController@goodsmessage');

//购物车页面
Route::get('home/cart','Home\IndexController@cart');

//搜索页面
Route::get('home/search','Home\IndexController@search');







