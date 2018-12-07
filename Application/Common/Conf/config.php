<?php
return array(
    //'配置项'=>'配置值'
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '', // 服务器地址
    'DB_NAME'               =>  '',     // 数据库名
    'DB_USER'               =>  '',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'DB_PREFIX' =>  'ela_',    // 数据库表前缀
	'HTML_FILE_SUPPIX'=>'.html',
	'LOAD_EXT_CONFIG'       => 'oauth', // 加载第三方登陆密钥及回调地址
	//*************************************第三方登录****************************************
	'QQ_APP_ID'             =>  '',     // QQ登录APP ID
	'QQ_APP_KEY'            =>  '',     // QQ登录APP KEY
	'WEIXIN_APP_ID'         =>  '',     // 微信登录APP ID
	'WEIXIN_SECRET'         =>  '',     // 微信登录SECRET
	'SINA_API_KEY'          =>  '',     // 新浪登录API KEY
	'SINA_SECRET'           =>  '',     // 新浪登录SECRET
	'DOUBAN_API_KEY'        =>  '',     // 豆瓣登录API KEY
	'DOUBAN_SECRET'         =>  '',     // 豆瓣登录SECRET
	'RENREN_API_KEY'        =>  '',     // 人人登录API KEY
	'RENREN_SECRET'         =>  '',     // 人人登录SECRET
	'KAIXIN_API_KEY'        =>  '',     // 开心网登录API KEY
	'KAIXIN_SECRET'         =>  '',     // 开心网登录SECRET
	'GITHUB_CLIENT_ID'      =>  '',     // github登录API KEY
	'GITHUB_CLIENT_SECRET'  =>  '',     // github登录SECRET
	'SOHU_API_KEY'          =>  '',     // 搜狐网登录API KEY
	'SOHU_SECRET'           =>  '',     // 搜狐网登录SECRT
	'GITHUB_API_UID'		=> '', //githu账号
	'MAILGUN_KEY'			=> '', //mailgun对应KEY_API
	'MAIlGUN_DOMAIN'		=> '', //mailgun对应域名
	'FROM_MAIlGUN_DOMAIN'		=> '', //mailgun对应发送邮件地址
	'SENDGRID_KEY'			=> '', //sendgrid对应KEY_API
	'FROM_SENDGRID_MAIL'		=> '', //mailgun对应发送邮件地址
	'CR_LOGIN_URL' =>'https://ebp-api-beta.elastos.org/api/user/login',
	'APPLY_TESTELA_SECRET' =>'',
	'APPLY_TESTELA_URL' =>'https://faucet-backend.elastos.org/ela/testCoin/issue',
);