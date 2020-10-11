<?php


namespace app\index\dao;

/**
 * Interface UserDao
 *
 * @package app\index\dao
 */
interface UserDao
{
    /**
     * 用户登录验证
     *
     * @param $data
     * @return mixed
     */
    function sign($data);

    /**
     * 用户注册
     *
     * @param $data
     * @return mixed json
     */
    function register($data);

    /**
     * 获取所有用户
     *
     * @return mixed json
     */
    function allUser();

    /**
     * 通过ID获取一个用户
     *
     * @param $u_id
     * @return mixed json
     */
    function getUserByID($u_id);

    /**
     * 通过用户名获取用户信息
     *
     * @param $u_name
     * @return mixed json
     */
    function getUserByName($u_name);

    /**
     * 通过关键字查询用户
     *
     * @param $keyword
     * @return mixed json
     */
    function blurSearchByKey($keyword);

    /**
     * 通过用户ID删除用户
     *
     * @param $u_id
     * @return mixed json
     */
    function delUserByID($u_id);

    /**
     * 通过所传过来的数组来修改一个用户
     * 数组中包含，这个用户的id，要修改的列，以及要修改后的新值
     *
     * @param $term
     * @return mixed json
     */
    function alterUserByTerm($term);
}