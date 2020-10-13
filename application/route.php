<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

//-------------------------------登录事务-----------------------------------------
/**
 *  用户登录
 *
 */
Route::post('/sign','index/UserController/sign');
/**
 * 用户注册
 *
 */
Route::post('/register','index/UserController/register');

//-------------------------------用户事务-----------------------------------------
/**
 * 通过ID获取用户
 *
 */
Route::get('/getUserByID','index/UserController/getUserByID');
/**
 * 通过用户名来获取用户
 *
 */
Route::get('/getUserByName','index/UserController/getUserByName');
/**
 * 通过用户的ID来删除一个用户
 *
 */
Route::delete('/delUserByID','index/UserController/delUserByID');
/**
 * 通过用户ID修改数组(修改字段，修改新值)来更新一个用户
 *
 */
Route::post('/alterUserByTerm','index/UserController/alterUserByTerm');
/**
 * 分页查询获取所有用户
 *
 */
Route::get('/allUser','index/UserController/allUser');
/**
 * 通过关键字模糊查询用户
 *
 */
Route::get('/blurSearchUser'.'index/UserController/blurSearchUser');
return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];
