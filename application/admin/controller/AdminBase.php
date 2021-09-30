<?php
/**
 * Created by PhpStorm.
 * User: tanzhenxing
 * Date: 2018/5/21
 * Time: 10:19
 */
namespace app\admin\controller;

use think\Controller;

class AdminBase extends Controller
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        // 判断用户是否已经登录
        if(empty(session('admin_username'))){
            $this->error('您还未登录！','/admin/login/index');
        }
    }
}