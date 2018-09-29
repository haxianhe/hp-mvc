<?php
/**
 * Created by PhpStorm.
 * User: haxianhe
 * Date: 2018/9/29
 * Time: 上午11:54
 */
namespace core;     //定义命名空间


use core\Config;    //使用配置类
use core\Router;    //使用路由类

/**
 * 框架启动类
 */
class App
{
    public static $router;    //定义一个静态路由实例

    //启动
    public static function run()
    {

    }

    //路由分发
    public static function dispatch($url_array = [])
    {

    }
}