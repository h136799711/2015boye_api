<?php
// .-----------------------------------------------------------------------------------
// | 
// | WE TRY THE BEST WAY
// | Site: http://www.gooraye.net
// |-----------------------------------------------------------------------------------
// | Author: 贝贝 <hebiduhebi@163.com>
// | Copyright (c) 2012-2014, http://www.gooraye.net. All Rights Reserved.
// |-----------------------------------------------------------------------------------

if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

define('BOYE_SYS_NAME',true);
define("PROJECT_NAME","2015boye_api");

// 插件目录
define('ADDON_PATH', './Addons/');

// 是否调试模式
define('APP_DEBUG',true);

// 运行时文件
define("APP_PATH","./Application/");

require_once(APP_PATH.'/Common/Conf/appmeta.php');

define('HTML_PATH',      './Html/'); // 应用静态目录
/**
 * 
 */

// 运行时文件
define("RUNTIME_PATH","../../Runtime/".PROJECT_NAME."/");

// 框架目录
define("THINK_PATH",realpath("../../thinkphp/thinkphp_clone/").'/');
// 加载
require "../../thinkphp/thinkphp_clone/ThinkPHP.php";