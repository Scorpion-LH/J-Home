<?php
	
//框架的入口文件
header("Content-Type:text/html;charset=utf-8");	
	
//1.指定当前应用的目录名称
define("APP_PATH", "./J-home/");

//开启调试模式
define('APP_DEBUG',true); 

//2.导入TP框架的主入口文件
require("./ThinkPHP/ThinkPHP.php");	
	
?>