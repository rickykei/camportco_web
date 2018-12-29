<?
error_reporting(E_ALL);

include_once('./config.php');
require_once("./phpmailer/class.phpmailer.php");
$today= date('Y-m-d H:i:s');
$yestarday  =date('Y-m-d', mktime(0, 0, 0, date("m")  , date("d")-1, date("Y")));
$lastmonth = date('Y-m-d',mktime(0, 0, 0, date("m")-1, date("d"),   date("Y")));
$last3month  = date('Y-m-d',mktime(0, 0, 0, date("m")-3,   date("d"),   date("Y")));
$mailcontent="";
$total_qty=0;
$total_total=0;
echo "\r\n".$today;

$mailcontentorg = file_get_contents('camport_einvoice.html');
//loop invoice header with status [r]eady
 if (DB::isError($db))      die($db->getMessage());
        $sql=" SELECT *  FROM  `invoice`  WHERE email_sts =  'R' ";
        $result=$db->query($sql);
        if (DB::isError($result))          die ($result->getMessage());
        else
	
while ( $row = $result->fetchRow(DB_FETCHMODE_ASSOC) )
{
$total_qty=0;
$total_total=0;
	$mailcontent=$mailcontentorg;
	$mailcontent=prepare_mailcontent($row,$mailcontent);
 
	//prepare einvoice content header
	//prepare einvoice content items
	//prepare einvoice content footer


	//send by gmail smtp
		if(sendmail($mailcontent,$row["email"],$row["order_number"])==true){
			//update status to sent
			updateInvoiceSts($row["id"],"S");
		}else{
			//update status to error
			updateInvoiceSts($row["id"],"E");
		}

	
}
//loopnext

function updateInvoiceSts($inv_id,$sts){
global $db;

$sql=" update  `invoice`  set email_sts='".$sts."' WHERE id =  '".$inv_id."' ";

        $result=$db->query($sql);
        if (DB::isError($result))   die ($result->getMessage());
        
}
function prepare_mailcontent($row,$mailcontent){
global $db;
global $total_qty;
global $total_total;
	$pat[]='/zelda_order_number/';
	$rep[]=$row["order_number"];
echo "\n\r".$row["order_number"];
	$pat[]='/zelda_order_date/';
	$rep[]=$row["order_date"];

	$pat[]='/zelda_customer_name/';
	$rep[]=$row["customer_name"];
	
	$pat[]='/zelda_tel/';
	$rep[]=$row["tel"];
	
	$pat[]='/zelda_email/';
	$rep[]=$row["email"];
	
	$pat[]='/zelda_pick_up_method/';
	if($row["pick_up_method"]=="SE")
			$rep[]="到店鋪自取/Self Pickup at Store";
			else
			$rep[]="郵寄/Shipping";
			
	$pat[]='/zelda_address/';
	$rep[]=$row["address"]; 
	
	$pat[]='/zelda_country/';
	$rep[]=findCountry($row["country_code"]); 
	
	$pat[]='/zelda_delivery_method/';
	if ($row["delivery_method"]=='E')
	$rep[]="特快轉遞/EMS";
	else if ($row["delivery_method"]=='A')
	$rep[]="掛號空郵/Registered Air Mail";
	else if ($row["delivery_method"]=='L')
	$rep[]="掛號平郵/Local Registered Mail";
	else
	$rep[]="";
	
	$pat[]='/zelda_delivery_cost/';
	$rep[]=$row["delivery_cost"];
	

	
	$pat[]='/zelda_invoice_total/';
	$rep[]=$row["invoice_total"]; 
	
	$pat[]='/zelda_remark/';
	$rep[]=$row['remark'];
	
	
	
	$pat[]='/zelda_product_items/';
	$rep[]=prepare_invoice_items($row['id']);
	
		$pat[]='/zelda_payment_method/';
	if ($row["payment_method"]=="PP"){
		$rep[]="PayPal";
		$pat[]='/zelda_pp_charge/';
		$rep[]="<tr><td width='475' align='right'>PayPal手續費/PayPal Charge</td><td width='' align='right'>".number_format((ceil(($total_total+$row["delivery_cost"]) * 0.035 * 10)/10.0 ),2,'.','')."</td></tr>";
	}else{
		$rep[]="銀行入賬/Bank Transfer";
		$pat[]='/zelda_pp_charge/';
		$rep[]="";
	}
	
	$pat[]='/zelda_total_qty/';
	$rep[]=$total_qty;
	
	$pat[]='/zelda_total_total/';
	$rep[]=number_format($total_total,2,'.','');
	
	return preg_replace($pat,$rep,$mailcontent);
}

function prepare_invoice_items($inv_id){
global $db;
global $total_qty;
global $total_total;
$content="";
 $sql=" SELECT *  FROM  `invoice_item`  WHERE invoice_id =  '".$inv_id."' ";

        $result=$db->query($sql);
        if (DB::isError($result))   die ($result->getMessage());
        else{
		 
		while ( $row = $result->fetchRow(DB_FETCHMODE_ASSOC) )
		{
			$content.="<tr>";
			$content.="<td>".$row['product_cd'].$row['color']."</td>";
			$content.="<td>".findProductName($row['product_cd'])."</td>";
			$content.="<td  align='center'>".$row['qty']."</td>";
			$content.="<td  align='center'>".$row['unit_price']."</td>";
			$content.="<td align='right'>".number_format($row['qty']*$row['unit_price'],2,'.','')."</td>";
			$content.="</tr>";
			$total_total+=$row['qty']*$row['unit_price'];
			$total_qty+=$row['qty'];
		}
		}
		
		 
		return $content;
}
function findCountry($pcd){
global $db;
 if (DB::isError($db))      die($db->getMessage());
        $sql=" SELECT *  FROM  `country`  WHERE country_code =  '".$pcd."' ";
        $result=$db->query($sql);
        if (DB::isError($result))          die ($result->getMessage());
        else
	
while ( $row = $result->fetchRow(DB_FETCHMODE_ASSOC) )
{
	return $row['country_tc']."/".$row['country'];
}
	return "";
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
function sendmail($mailc,$custEmail,$invNo){
//send by gmail smtp
echo $custEmail;
$subject="Camport e-Invoice (Ref:".$invNo.")";
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure="ssl";
$mail->Host     = "smtp.gmail.com";
$mail->Port     ="465";
$mail->Username = "invoice2@camportco.com";
$mail->Password = "camport2012";
$mail->CharSet ="utf-8";
$mail->From = "invoice2@camportco.com";
$mail->FromName = "camport online shopping";
$mail->AddAddress("rickykei@gmail.com");
$mail->AddAddress($custEmail);
$mail->AddReplyTo("invoice2@camportco.com");
$mail->WordWrap = 50;
$mail->IsHTML(true);
$mail->Subject=$subject;
$mail->Body=$mailc;
if(!$mail->Send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
  return false;
} else {
  echo 'Message has been sent.';
  return true;
}
}
?>
