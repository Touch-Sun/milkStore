<?php


namespace app\index\factory;


use app\index\DaoImpl\UserDaoImpl;
use app\index\ServiceImpl\UserServiceImpl;

/**
 * Class UserFactory
 *
 * @package app\index\factory
 */
class UserFactory
{
    /**
     * 返回UserService对象的工厂
     *
     * @return UserServiceImpl
     */
    public static function getUserService()
    {
        return new UserServiceImpl();
    }

    /**
     * 返回UserDao对象的工厂
     *
     * @return UserDaoImpl
     */
    public static function getUserDao()
    {
        return new UserDaoImpl();
    }

}