<?php


namespace app\index\service;

/**
 * Interface UserService
 *
 * @package app\index\service
 */
interface UserService
{
    /**
     * 用户登录验证服务 √
     *
     * @param $data
     * @return mixed
     */
    function sign($data);

    /**
     * 用户注册服务 √
     *
     * @param $data
     * @return mixed json
     */
    function register($data);

    /**
     * 获取所有用户服务 √
     *
     * @param $page
     * @param $limit
     * @return mixed json
     */
    function allUser($page,$limit);

    /**
     * 通过ID获取一个用户服务 √
     *
     * @param $u_id
     * @return mixed json
     */
    function getUserByID($u_id);

    /**
     * 通过用户名获取用户信息服务 √
     *
     * @param $u_name
     * @return mixed json
     */
    function getUserByName($u_name);

    /**
     * 通过关键字查询用户服务 √
     *
     * @param $page
     * @param $limit
     * @param $keyword
     * @return mixed json
     */
    function blurSearchByKey($page,$limit,$keyword);

    /**
     * 通过用户ID删除用户服务 √
     *
     * @param $u_id
     * @return mixed json
     */
    function delUserByID($u_id);

    /**
     * 通过所传过来的数组来修改一个用户
     * 数组中包含，这个用户的id，要修改的列，以及要修改后的新值服务 √
     *
     * @param $term
     * @return mixed json
     */
    function alterUserByTerm($term);
}