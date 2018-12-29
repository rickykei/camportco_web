
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("head.php");?>
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
		<div id="paging"></div>
		<div id="checkout_content">
		<div id="checkout_heading"><img src="images/items_on_cart.gif"/></div>
		<table  id="rounded-corner">
	 
		<thead>
		<tr><th scope="col" class="rounded-company">Product ID</th><th scope="col">Name</th><th scope="col">Price</th><th scope="col">Qty</th><th scope="col">Total</th><th scope="col" class="rounded-q4">Action</th></tr>
		<thead/>
		 <tbody>
		<tr>
		<td><a href="prod_detail.php"><img src="product_images/inserts/anycase/1.jpg" width="100"/><br/>ABCD1234</a></td>
		<td> Nikon </td>
		<td>$100</td>
		<td>
		<select id="qty">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		</select></td>
		<td>$100</td>
		<td><input type="button" value="delete"/></td>
		</tr>
		
		<tr><td colspan="4"></td><td >total items in cart 1pcs</td><td  align="right">$total amount $xxx</td></tr>
		
		<tr>
		<td align="left"><input type="button" value="continue"/></td>
		<td colspan="4">
		<td align="right"><input type="button" value="check out" onclick="checkout2()"/></td>
		</tr>
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