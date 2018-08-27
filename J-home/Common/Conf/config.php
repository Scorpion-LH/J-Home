<?php
return array(
	//'配置项'=>'配置值'
	
	/* 数据库设置 */
    'DB_TYPE'               =>  'MySQL',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'jj_db',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'jj_',    // 数据库表前缀
    'DB_DEBUG'  			=>  TRUE, //开启调试模式
//  'DB_CHARSET' 			=> 'utf8'	//编码方式
	'URL_MODEL' 			=> '2',
    
    //设置模块访问列表
    'MODULE_ALLOW_LIST'    =>    array('Home','Admin'),  //只允许访问Home和Admin模块
    'DEFAULT_MODULE'       =>    'Home',	//默认为Home模块
    
    'TMPL_PARSE_STRING' => array(
        '__STATIC__' => __ROOT__ . '/Public/Static',
        '__IMG__'    => __ROOT__ . '/Public/img',
        '__CSS__'    => __ROOT__ . '/Public/css',
        '__JS__'     => __ROOT__ . '/Public/js',
        '__U__'     => __ROOT__ . '/Public/ueditor',
    ),
	
);