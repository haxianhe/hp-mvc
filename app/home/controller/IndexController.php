<?php

/**
 * Created by PhpStorm.
 * User: haxianhe
 * Date: 2018/9/29
 * Time: 下午9:10
 */
namespace home\controller;

use core\Controller;
/**
 * index控制器
 */
class IndexController extends Controller
{
    public function index()
    {
        $this->assign('hello','Hello World!');    //模板变量赋值
        $this->display();    //模板展示
    }
}