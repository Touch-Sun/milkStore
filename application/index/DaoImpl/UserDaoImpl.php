<?php


namespace app\index\DaoImpl;


use app\index\dao\UserDao;
use app\index\model\User;
use think\Db;
use think\Exception;
use think\exception\DbException;
use think\exception\PDOException;
use think\response\Json;
use think\Session;

/**
 * Class UserDaoImpl
 *
 * @package app\index\DaoImpl
 */
class UserDaoImpl implements UserDao
{

    /**
     * 用户登录验证
     *
     * @param $data
     * @return mixed|Json
     * @throws DbException
     */
    public function sign($data)
    {
        // TODO: Implement sign() method.
        $datas = null;
        $status = null;
        $user = User::get(["username" => $data['username']]);
        if ($user == null){
            $status = 404;
        } else if ($user->password != $data['password']){
            $status = 500;
        } else {
            Session::set('token',$user->id);
            $status = 200;
        }
        $go = [
            "code"  =>  0,
            "msg"   =>  "ok",
            "status" => $status,
            "datas"  => $datas
        ];
        return json($go);
    }

    /**
     * @param $data
     * @return mixed|Json
     * @throws DbException
     */
    public function register($data)
    {
        // TODO: Implement register() method.
        $datas = null;
        $status = null;
        $user = User::get(["username" => $data['username']]);
        if ($user != null){
            $status = 500;
        } else {
            User::create([
                'username' => $data['username'],
                'password' => $data['password']
            ])->save();
            $status = 200;
        }
        $go = [
            "code"  =>  0,
            "msg"   =>  "ok",
            "status" => $status,
            "datas"  => $datas
        ];
        return json($go);
    }

    /**
     * 获取所有用户
     *
     * @return mixed json
     */
    public function allUser()
    {
        // TODO: Implement allUser() method.

    }

    /**
     * 通过ID获取一个用户
     *
     * @param $u_id
     * @return mixed|Json
     * @throws DbException
     */
    public function getUserByID($u_id)
    {
        // TODO: Implement getUserByID() method.
        $datas = null;
        $status = null;
        $user = User::get($u_id);
        if ($user == null){
            $status = 404;
        } else {
            $status = 200;
            $datas = $user;
        }
        $go = [
            "code" => 0,
            "msg" => 'ok',
            "status" => $status,
            "data" => $datas
        ];
        return json($go);
    }

    /**
     * 通过用户名获取用户信息
     *
     * @param $u_name
     * @return mixed | Json
     * @throws DbException
     */
    public function getUserByName($u_name)
    {
        // TODO: Implement getUserByName() method.
        $datas = null;
        $status = null;
        $user = User::get(['username' => $u_name]);
        if ($user == null){
            $status = 404;
        } else {
            $status = 200;
            $datas = $user;
        }
        $go = [
            "code" => 0,
            "msg" => "ok",
            "status" => $status,
            "data" => $datas
        ];
        return json($go);
    }

    /**
     * 通过关键字查询用户
     *
     * @param $keyword
     * @return mixed json
     */
    public function blurSearchByKey($keyword)
    {
        // TODO: Implement blurSearchByKey() method.
    }

    /**
     * 通过用户ID删除用户
     *
     * @param $u_id
     * @return mixed | Json
     * @throws DbException
     */
    public function delUserByID($u_id)
    {
        // TODO: Implement delUserByID() method.
        $datas = null;
        $status = null;
        $user = User::get($u_id);
        if ($user == null){
            $status = 404;
        } else {
            $user->delete();
            $status = 200;
        }
        $go = [
            "code" => 0,
            "msg" => "ok",
            "status" => $status,
            "data" => $datas
        ];
        return json($go);
    }

    /**
     * 通过所传过来的数组来修改一个用户
     * 数组中包含，这个用户的id，要修改的列，以及要修改后的新值
     *
     * @param $term
     * @return mixed | Json
     * @throws DbException
     */
    public function alterUserByTerm($term)
    {
        // TODO: Implement alterUserByTerm() method.
        $status = null;
        $datas = null;
        $msg = null;
        $user = User::get($term['id']);
        if ($user == null){
            $status = 404;
        } else {
            $alt = [
                $term['field'] => $term['value']
            ];
            try {
                Db::name('user')
                    ->where('id', '=', $term['id'])
                    ->update($alt);
            } catch (PDOException $e) {
                $status = 500;
                $msg = $e;
            } catch (Exception $e) {
                $status = 500;
                $msg = $e;
            }
        }
        $go = [
            "code" => 0,
            "msg" => $msg,
            "status" => $status,
            "data" => $datas
        ];
        return json($go);
    }

}