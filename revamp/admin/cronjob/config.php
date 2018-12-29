<?
$db_name ="camportco_db";
$server = "127.0.0.1";
$dbusername = "camportco";
$dbpassword = "camportco2010";

define('DB_HOST', $server);
define('DB_LOGIN', $dbusername);
define('DB_PASSWORD', $dbpassword);
define('DB_NAME', $db_name);

require_once 'DB.php';
$dsn = 'mysql://camportco:camportco2010@localhost/camportco_db';
$db = DB::connect($dsn);
$result=$db->query("SET NAMES 'UTF8'");


?>
