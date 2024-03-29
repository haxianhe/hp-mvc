<?php
/**
 * Created by PhpStorm.
 * User: haxianhe
 * Date: 2018/9/29
 * Time: 下午8:32
 */

namespace core;

use core\Config;    //使用配置类
use core\Parser;    //使用模板解析类

/**
 * 视图类
 */
class View
{
    //模板变量
    public $vars = [];

    function __construct($vars = [])
    {
        if (!is_dir(Config::get('cache_path')) || !is_dir(Config::get('compile_path')) || !is_dir(Config::get('view_path'))) {
            exit('The directory does not exist');
        }
        $this->vars = $vars;
    }

    //展示模板
    public function display($file)
    {
        //模板文件
        $tpl_file = Config::get('view_path') . $file . Config::get('view_suffix');
        if (!file_exists($tpl_file)) {
            exit('Template file does not exist');
        }
        //编译文件(文件名用 MD5 加密加上原始文件名)
        $parser_file = Config::get('compile_path') . md5("$file") . $file . '.php';
        //缓存文件(缓存前缀加原始文件名)
        $cache_file = Config::get("cache_path") . Config::get("cache_prefix") . $file . '.html';
        //是否开启了自动缓存
        if (Config::get('auto_cache')) {
            if (file_exists($cache_file) && file_exists($parser_file)) {
                if (filemtime($cache_file) >= filemtime($parser_file) && filemtime($parser_file) >= filemtime($tpl_file)) {
                    return include $cache_file;
                }
            }
        }
        //是否需要重新编译模板
        if (!file_exists($parser_file) || filemtime($parser_file) < filemtime($tpl_file)) {
            $parser = new Parser($tpl_file);
            $parser->compile($parser_file);
        }


        //若开启了自动缓存则缓存模板
        if (Config::get('auto_cache')) {
            ob_start();
            include $parser_file;    //引入编译文件
            file_put_contents($cache_file, ob_get_contents());
            ob_flush();
            ob_end_clean();
        } else {
            include $parser_file;    //引入编译文件
            var_dump($parser_file);exit;
        }
    }
}