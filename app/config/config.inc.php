<?php
/***
 * Anbient Variables
 *
 */

ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

define('WWW_ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);

require_once 'autoload.php';

define('DEBUG', FALSE);
define("LOG", 'FALSE');

define("DATABASETYPE", "mysql"); //pgsql,josn,xml,nosql
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "123");
define("DB_NAME", "vcard_db");
