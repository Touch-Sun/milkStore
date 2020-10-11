<?php


namespace app\index\controller;


use app\index\factory\UserFactory;
use think\Controller;
use think\exception\DbException;
use think\response\Json;

/**
 * Class UserController
 *
 * @package app\index\controller
 */
class UserController extends Controller
{
    /**
     * 登录验证控制方法
     *
     * @return mixed
     * @throws DbException
     */
    function sign(){
        $data = input();
        return UserFactory::getUserService()->sign($data);
    }

    /**
     * 注册控制方法
     *
     * @return mixed
     * @throws DbException
     */
    function register(){
        $data = input();
        return UserFactory::getUserService()->register($data);
    }

    /**
     * 通过ID获取一个用户控制方法
     *
     * @return mixed | Json
     * @throws DbException
     */
    function getUserByID(){
        $data = input();
        $u_id = $data['u_id'];
        return UserFactory::getUserService()->getUserByID($u_id);
    }

    /**
     * 通过用户名来获取一个用户控制方法
     *
     * @return mixed | Json
     * @throws DbException
     */
    function getUserByName(){
        $data = input();
        $u_name = $data['u_name'];
        return UserFactory::getUserService()->getUserByName($u_name);
    }


}