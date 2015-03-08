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


require_once 'lib/vcard/vCard.class.php';

$v = new VCard();

$v->vcard->nome ="antonio";
$v->vcard->carro = "gol";


$v->add();
$v->del();
echo "<br>";
echo "<br>";
echo "<br>";

//echo getcwd() . "\n";
require_once 'lib/user/User.class.php';

$u = new User();
if($u->login("latex","li98nux12"))
{
	echo "logado<br>";
}
else{
	echo "erro";
}

print_r($u->user);

echo "<br>";
echo "<br>";







$u->token();

print_r($u->token);







//print_r(unserialize($_SESSION["user"]));

//require_once 'lib/database/mysql/database.php';

//$r = new Database();
//$dbr = $r->select("login","user='latex and passwd='li98nux12'");

//print_r($r->result);





