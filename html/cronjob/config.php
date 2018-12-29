<?
$db_name ="camportco_demo_db";
$server = "127.0.0.1";
$dbusername = "camportco_demo";
$dbpassword = "98014380";

define('DB_HOST', $server);
define('DB_LOGIN', $dbusername);
define('DB_PASSWORD', $dbpassword);
define('DB_NAME', $db_name);

require_once 'DB.php';
$dsn = 'mysql://camportco_demo:98014380@localhost/camportco_demo_db';
$db = DB::connect($dsn);
$result=$db->query("SET NAMES 'UTF8'");


?>
