<?php


namespace app\index\ServiceImpl;


use app\index\factory\UserFactory;
use app\index\service\UserService;
use think\db\exception\DataNotFoundException;
use think\db\exception\ModelNotFoundException;
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
     * @param $page
     * @param $limit
     * @return mixed json
     * @throws DbException
     * @throws DataNotFoundException
     * @throws ModelNotFoundException
     */
    public function allUser($page,$limit)
    {
        // TODO: Implement allUser() method.
        return UserFactory::getUserDao()->allUser($page,$limit);
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
     * @param $page
     * @param $limit
     * @param $keyword
     * @return mixed json
     * @throws DataNotFoundException
     * @throws DbException
     * @throws ModelNotFoundException
     */
    public function blurSearchByKey($page,$limit,$keyword)
    {
        // TODO: Implement blurSearchByKey() method.
        return UserFactory::getUserDao()->blurSearchByKey($page,$limit,$keyword);
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