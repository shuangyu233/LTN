<?php
error_reporting(0);
session_start();
date_default_timezone_set('PRC');
define('KEY','XXGMSG'); 
define('BASE_PATH',str_replace('\\','/',dirname(__FILE__))."/");
define('ROOT_PATH',str_replace('app/class/','',BASE_PATH));
define('DB',ROOT_PATH.'app/db/26ef72985d6d.db');
/*install-start*/
header("Content-type: text/html; charset=gb2312");
require_once 'install.txt';
/*install-end*/