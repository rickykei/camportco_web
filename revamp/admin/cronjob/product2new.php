<?
error_reporting(E_ALL);

include_once('./config.php');
require_once("./phpmailer/class.phpmailer.php");
$today= date('Y-m-d H:i:s');
$yestarday  =date('Y-m-d', mktime(0, 0, 0, date("m")  , date("d")-1, date("Y")));
$lastmonth = date('Y-m-d',mktime(0, 0, 0, date("m")-1, date("d"),   date("Y")));
$last3month  = date('Y-m-d',mktime(0, 0, 0, date("m")-3,   date("d"),   date("Y")));
$mailcontent="";

echo "\r\n".$today." ";
$i=0;
//loop product with gen_news = [Y]
 if (DB::isError($db))      die($db->getMessage());
        $sql=" SELECT *  FROM  `product`  WHERE gen_news =  'Y' ";
        $result=$db->query($sql);
        if (DB::isError($result))          die ($result->getMessage());
        else
	
while ( $row = $result->fetchRow(DB_FETCHMODE_ASSOC) )
{
 
   //insert into newslink table
	insertNewslinkTable($row);
	$i++;
	if ($i>=3){
	break;
	}
}
//loopnext

function insertNewslinkTable($row){
global $db;
echo $row["product_id"];
$url="/subcategory/product_detail/".$row["product_id"];
$content=$row["name"];
$content_tc=$row["name_tc"];
$display_seq="1";
$sql=" insert into  `newslink`  set url='".$url."' , content='".$content."' , content_tc='".$content_tc."' , display_seq='".$display_seq."'";
        $result=$db->query($sql);
        if (DB::isError($result))
			die ($result->getMessage());
		else{
			$sql=" update product set gen_news='N' where product_id='".$row['product_id']."'";
			$result=$db->query($sql);
			if (DB::isError($result))
			die ($result->getMessage());
			echo " [done]\r\n";
		}
}

function findProductName($pcd){
global $db;
 if (DB::isError($db))      die($db->getMessage());
        $sql=" SELECT *  FROM  `product`  WHERE product_id =  '".$pcd."' ";
        $result=$db->query($sql);
        if (DB::isError($result))          die ($result->getMessage());
        else
	
while ( $row = $result->fetchRow(DB_FETCHMODE_ASSOC) )
{
	return $row['name'];
}
	return "";
}
?>
