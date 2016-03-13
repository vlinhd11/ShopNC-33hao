<?php


$config = array();
$config['base_site_url'] 		= 'http://haoid.ys.haoid.cn';
$config['shop_site_url'] 		= 'http://haoid.ys.haoid.cn/shop';
$config['cms_site_url'] 		= 'http://haoid.ys.haoid.cn/cms';
$config['microshop_site_url'] 	= 'http://haoid.ys.haoid.cn/microshop';
$config['circle_site_url'] 		= 'http://haoid.ys.haoid.cn/circle';
$config['admin_site_url'] 		= 'http://haoid.ys.haoid.cn/admin';
$config['mobile_site_url'] 		= 'http://haoid.ys.haoid.cn/mobile';
$config['wap_site_url'] 		= 'http://haoid.ys.haoid.cn/wap';
$config['chat_site_url'] 		= 'http://haoid.ys.haoid.cn/chat';
$config['node_site_url'] 		= 'http://219.138.123.194:8090';
$config['delivery_site_url']    = 'http://haoid.ys.haoid.cn/delivery';
$config['upload_site_url']		= 'http://haoid.ys.haoid.cn/data/upload';
$config['resource_site_url']	= 'http://haoid.ys.haoid.cn/data/resource';
$config['version'] 		= '201601130001';
$config['setup_date'] 	= '2016-02-02 08:33:33';
$config['gip'] 			= 0;
$config['dbdriver'] 	= 'mysqli';
$config['tablepre']		= '33hao_';
$config['db']['1']['dbhost']       = 'localhost';
$config['db']['1']['dbport']       = '3306';
$config['db']['1']['dbuser']       = 'haoid';
$config['db']['1']['dbpwd']        = 'haoid.cn';
$config['db']['1']['dbname']       = 'haoid';
$config['db']['1']['dbcharset']    = 'UTF-8';
$config['db']['slave']                  = $config['db']['master'];
$config['session_expire'] 	= 3600;
$config['lang_type'] 		= 'zh_cn';
$config['cookie_pre'] 		= '035D_';
$config['thumb']['cut_type'] = 'gd';
$config['thumb']['impath'] = '';
$config['cache']['type'] 			= 'file';
//$config['redis']['prefix']      	= 'nc_';
//$config['redis']['master']['port']     	= 6379;
//$config['redis']['master']['host']     	= '127.0.0.1';
//$config['redis']['master']['pconnect'] 	= 0;
//$config['redis']['slave']      	    = array();
//$config['fullindexer']['open']      = false;
//$config['fullindexer']['appname']   = '33hao';
$config['debug'] 			= false;
$config['default_store_id'] = '1';
$config['url_model'] = false;
$config['subdomain_suffix'] = '';
//$config['session_type'] = 'redis';
//$config['session_save_path'] = 'tcp://127.0.0.1:6379';
$config['node_chat'] = true;
//流量记录表数量，为1~10之间的数字，默认为3，数字设置完成后请不要轻易修改，否则可能造成流量统计功能数据错误
$config['flowstat_tablenum'] = 3;
$config['sms']['gwUrl'] = 'http://sdkhttp.eucp.b2m.cn/sdk/SDKService';
$config['sms']['serialNumber'] = '';
$config['sms']['password'] = '';
$config['sms']['sessionKey'] = '';
$config['queue']['open'] = false;
$config['queue']['host'] = '127.0.0.1';
$config['queue']['port'] = 6379;
$config['cache_open'] = false;
$config['delivery_site_url']    = 'http://haoid.ys.haoid.cn/delivery';
return $config;