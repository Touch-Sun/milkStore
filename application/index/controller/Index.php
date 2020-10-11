<?php


namespace app\index\controller;

use think\Controller;

/**
 * Class Index
 *
 * @package app\index\controller
 */
class Index extends Controller
{
    /**
     * This method will jump to the main interface of the foreground.
     *
     * @return mixed
     */
    public function index(){
        return $this->fetch('index/index');
    }

}