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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/',function(){

// });

// Route::post('/admin/user/edit/{id}/{name}',['as'=>'aue','user'=>function($id,$name){
// 	echo"修改";
// 	// route('aue',['id'=>'10']);
// 	url('/admin/user/',['id'=>10]);
// 	return redirect();
// }])->where('id','')->where('name','');
//后台登陆页面
Route::get('/login',function(){
	echo '登陆页面';
});

//后台用户添加
Route::get('/admin/user/add',['middleware'=>'login',function(){
	// return "您放问的是admin模块用户管理";
	return view('uaer/add');
}]);
// Route::

Route::post('/admin/user/insert',function(){
	
	echo 'insert';
});