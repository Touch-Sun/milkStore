<?php


namespace app\index\controller;


use app\index\factory\UserFactory;
use think\Controller;
use think\db\exception\DataNotFoundException;
use think\db\exception\ModelNotFoundException;
use think\exception\DbException;
use think\Request;
use think\response\Json;

/**
 * Class UserController
 *
 * @package app\index\controller
 */
class UserController extends Controller
{
    /**
     * 登录验证控制方法 √
     *
     * @mapping /login
     * @return mixed
     * @throws DbException
     */
    function sign(){
        $data = input();
        return UserFactory::getUserService()->sign($data);
    }

    /**
     * 注册控制方法 √
     *
     * @mapping /register
     * @return mixed
     * @throws DbException
     */
    function register(){
        $data = input();
        return UserFactory::getUserService()->register($data);
    }

    /**
     * 通过ID获取一个用户控制方法 √
     *
     * @mapping /getUserByID
     * @return mixed | Json
     * @throws DbException
     */
    function getUserByID(){
        $data = input();
        $u_id = $data['u_id'];
        return UserFactory::getUserService()->getUserByID($u_id);
    }

    /**
     * 通过用户名来获取一个用户控制方法 √
     *
     * @mapping /getUserByName
     * @return mixed | Json
     * @throws DbException
     */
    function getUserByName(){
        $data = input();
        $u_name = $data['u_name'];
        return UserFactory::getUserService()->getUserByName($u_name);
    }

    /**
     * 通过用户ID来删除一个用户 √
     *
     * @mapping /delUserByID
     * @return mixed
     * @throws DbException
     */
    function delUserByID(){
        $data = input();
        $u_id = $data['u_id'];
        return UserFactory::getUserService()->delUserByID($u_id);
    }

    /**
     * 通过数组来更新用户的某列的数据项 √
     *
     * @mapping /alterUserByTerm
     * @return mixed | Json
     * @throws DbException
     */
    function alterUserByTerm(){
        $data = input();
        $term = $data;
        return UserFactory::getUserService()->alterUserByTerm($term);
    }

    /**
     * 获取所有用户控制方法 √
     *
     * @mapping /allUser
     * @return mixed
     * @throws DbException
     * @throws DataNotFoundException
     * @throws ModelNotFoundException
     */
    function allUser(){
        $page = Request::instance('page');
        $limit = Request::instance('limit');
        return UserFactory::getUserService()->allUser($page,$limit);
    }

    /**
     * 模糊查询用户控制方法 √
     *
     * @mapping /blurSearchUser
     * @return mixed
     * @throws DataNotFoundException
     * @throws DbException
     * @throws ModelNotFoundException
     */
    function blurSearchUser(){
        $keyword = input()['keyword'];
        $page = Request::instance('page');
        $limit = Request::instance('limit');
        return UserFactory::getUserService()->blurSearchByKey($page,$limit,$keyword);
    }


}