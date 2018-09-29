<?php
/**
 * Created by PhpStorm.
 * User: haxianhe
 * Date: 2018/9/29
 * Time: 下午9:50
 */

namespace home\controller;

use core\Controller;
use home\model\UserModel;
/**
 * 用户控制器
 */
class UserController extends Controller
{
    public function index()
    {
        $model = new UserModel();
        /*if ($model->save(['name'=>'hello','password'=>'shiyanlou'])) {
            //$model->free();    //释放连接
            echo "Success";
        } else {
            //$model->free();    //释放连接
            echo 'Failed';
        }*/
        if ($model->save(['name'=>'hello',[]])){
            echo 'Success';
        }
    }
}