<?php


namespace app\index\ServiceImpl;


use app\index\factory\UserFactory;
use app\index\service\UserService;
use think\exception\DbException;
use think\response\Json;

/**
 * Class UserServiceImpl
 *
 * @package app\index\ServiceImpl
 */
class UserServiceImpl implements UserService
{
    /**
     * 用户登录验证服务
     *
     * @param $data
     * @return mixed
     * @throws DbException
     */
    public function sign($data)
    {
        // TODO: Implement sign() method.
        return UserFactory::getUserDao()->sign($data);
    }

    /**
     * 用户注册服务
     *
     * @param $data
     * @return mixed json
     * @throws DbException
     */
    public function register($data)
    {
        // TODO: Implement register() method.
        return UserFactory::getUserDao()->register($data);
    }

    /**
     * 获取所有用户服务
     *
     * @return mixed json
     */
    public function allUser()
    {
        // TODO: Implement allUser() method.
    }

    /**
     * 通过ID获取一个用户服务
     *
     * @param $u_id
     * @return mixed|Json
     * @throws DbException
     */
    public function getUserByID($u_id)
    {
        // TODO: Implement getUserByID() method.
        return UserFactory::getUserDao()->getUserByID($u_id);
    }

    /**
     * 通过用户名获取用户信息服务
     *
     * @param $u_name
     * @return mixed json
     * @throws DbException
     */
    public function getUserByName($u_name)
    {
        // TODO: Implement getUserByName() method.
        return UserFactory::getUserDao()->getUserByName($u_name);
    }

    /**
     * 通过关键字查询用户服务
     *
     * @param $keyword
     * @return mixed json
     */
    public function blurSearchByKey($keyword)
    {
        // TODO: Implement blurSearchByKey() method.
    }

    /**
     * 通过用户ID删除用户服务
     *
     * @param $u_id
     * @return mixed json
     * @throws DbException
     */
    public function delUserByID($u_id)
    {
        // TODO: Implement delUserByID() method.
        return UserFactory::getUserDao()->delUserByID($u_id);
    }

    /**
     * 通过所传过来的数组来修改一个用户
     * 数组中包含，这个用户的id，要修改的列，以及要修改后的新值服务
     *
     * @param $term
     * @return mixed json
     * @throws DbException
     */
    public function alterUserByTerm($term)
    {
        // TODO: Implement alterUserByTerm() method.
        return UserFactory::getUserDao()->alterUserByTerm($term);
    }
}