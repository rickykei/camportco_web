
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <?php include("head.php");?>
 <script>

</script>
	</head>
<body>
		 
 	<?php include("header.php");?>
<div id="main"><div>
	<div id="col1">
	<?php include("catmenu.php");?>
	<iframe width="240" height=" " src="http://www.youtube.com/embed/a6zvxuPLpQY" frameborder="0" allowfullscreen></iframe>
	<iframe width="240" height=" " src="http://www.youtube.com/embed/a6zvxuPLpQY" frameborder="0" allowfullscreen></iframe>
	<iframe width="240" height=" " src="http://www.youtube.com/embed/a6zvxuPLpQY" frameborder="0" allowfullscreen></iframe>
	</div>
	
	
	<div id="cat_list">
		 
		<div id="checkout_content">
		<div id="checkout_heading"><img src="images/checkout.gif"/></div>
		<table  id="rounded-corner">
	 
		<thead>
		<tr><th scope="col" class="rounded-company">Product ID</th><th scope="col">Name</th><th scope="col">Price</th><th scope="col">Qty</th><th scope="col" class="rounded-q4">Total</th> </tr>
		<thead/>
		 <tbody>
		<tr>
		<td><a href="prod_detail.php"><img src="product_images/inserts/anycase/1.jpg" width="100"/><br/>ABCD1234</a></td>
		<td> Nikon </td>
		<td>$100</td>
		<td>
		1</td>
		<td>$100</td>
		 
		</tr>
		
		<tr><td colspan="3"></td><td >total items in cart 1pcs</td><td colspan="2" align="right">$total amount $xxx</td></tr>
		
		<tr>
		<td align="left"><input type="button" value="<< back to cart"/></td>
		<td colspan="4">
		</tr>
		<tbody/>
		</table>
		</div> 
		
		<div id="checkout_step1">
		<div id="checkout_heading">Step 1: fill below form</div>
		<table  id="hor-minimalist-a">
	 
		<thead>
		<tr><th scope="col" class="rounded-company">送貨資料</th><th></th></tr>
		<thead/>
		<tbody>
		<tr><td width="25%"><label>收貨人<font color="red">*</font></label></td><td><input type="text"></td></tr>
		<tr><td><label>電郵地址<font color="red">*</font></label></td><td><input type="text"></td></tr>
		<tr><td><label>電話號碼<font color="red">*</font><label></td><td><input type="text"></td></tr>
		<tr><td><label>取貨方法<font color="red">*</font></label></td><td><input type="radio" name="del" val="" checked>到店鋪自取<input type="radio" name="del" value="address">郵寄</td></tr>
		<tr style="padding:0px 0px 0px 0px"><td colspan="2" style="padding:0px 0px 0px 0px">
		<div id="address" class="desc" style="display: none;">
		 <table id="hor-minimalist-b"><tr><td width="25%"><label>地址<font color="red">*</font></label> </td><td>  <textarea ></textarea> </td></tr>
		<tr><td> <label>國家<font color="red">*</font></label> </td><td><select name="country" id="country"><option value="HK">香港</option><option value="CN">中國</option></select> </td></tr>
		</table>
		</div>
		<div id="postmethod1" class="desc" style="display: none;">
		 <table id="hor-minimalist-b">
		 <tr><td width="25%">郵寄方法<font color="red">*</font></td><td><select name="postmethod"><option value="1">掛號平郵</option><option value="2">特快專遞</option></select></td></tr>
		</table>
		</div>
		<div id="postmethod2" class="desc" style="display: none;">
		 <table id="hor-minimalist-b">
		 		 <tr><td width="25%">郵寄方法</td><td><select name="postmethod"><option value="3">掛號空郵</option><option value="4">特快專遞</option></select></td></tr>
		
		</table>
		</div>
		</td></tr>
		
		<tbody/>
		</table>
		</div> 
		
		
	 <div id="checkout_step2">
		
	 <div id="checkout_heading"> </div>
	 <table  id="hor-minimalist-a">
		<thead>
		<tr><th scope="col" class="rounded-company">其它</th><th></th></tr>
		<thead/>
		<tbody>
		<tr><td width="25%"><label>付款方法<font color="red">*</font></label></td><td><select><option value="TT">銀行入賬/海外滙款</option><option value="PP">PayPal</option></td></tr>
	  	<tr><td><label>備註</label></td><td><textarea ></textarea></td></tr>
	    <tr><td ><label>郵費</label></td><td> $10</td></tr>
		<tr><td ><label>總金額</label></td><td> $110(PP + 4%)</td></tr>
		<tr><td></td><td align="right"><input type="submit" onclick="checkout3()"/><input type="button" value="重設"/></td></tr>
		<tbody/>
		</table>
		</div>
	</div>
	
   
 </div>
</div>

 
 
 
 
 
            <div id="footer">
                <div id="fl">
                	<p>Copyright c 2011 Camport Camera Accessories</p>
                </div>
            </div>
		</div> 
	</div>
	</body>
</html>
<!-- 0.3209s -->