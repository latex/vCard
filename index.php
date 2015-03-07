<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

//define('WWW_ROOT',dirname(__FILE__));
//define('DS', DIRECTORY_SEPARATOR);

//require_once(WWW_ROOT .DS. 'autoload.php');

require_once('lib/files/Files.php');

$f = new Files();
$f->filename="lib/config/config.conf.php";

if($f->exist()){
	echo "ok";
}
else{
	echo "no";
}
