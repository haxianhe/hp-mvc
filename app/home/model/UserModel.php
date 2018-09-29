<?php

/**
 * Created by PhpStorm.
 * User: haxianhe
 * Date: 2018/9/29
 * Time: 下午9:51
 */
namespace home\model;

use core\Model;
/**
 *     用户模型
 */
class UserModel extends Model
{
    function __construct()
    {
        parent::__construct('user');
    }
}