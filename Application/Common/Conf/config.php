<?php
return array(
	// '数据库配置'
	'DB_HOST'   => 'localhost',
	'DB_NAME'   => 'bcedu',
	'DB_USER'   => 'root',
	'DB_PWD'    => 'root',
	'DB_PORT'   => '3306',
	'DB_PREFIX' => 'bc_',

	// '项目参数配置'
	'TMPL_TEMPLATE_SUFFIX' => '.tpl', // 修改模板后缀
	'TMPL_L_DELIM'         => '<%', // 修改左定界符
	'TMPL_R_DELIM'         => '%>', // 修改右定界符
	'URL_MODEL'            => 2, // URL模式为Rewrite模式

	//通用模板路径
	'COMMON_TPL_PATH'      => './Application/Common/Tpl/',
);