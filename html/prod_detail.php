<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	 <?php include("head.php");?>
	 </head>
<body>
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=192950614067755";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php include("header.php");?>
 

<div id="main"> 
	<div id="col1">
	<?php include("catmenu.php");?>
	<iframe width="240" height=" " src="http://www.youtube.com/embed/a6zvxuPLpQY" frameborder="0" allowfullscreen></iframe>
	<iframe width="240" height=" " src="http://www.youtube.com/embed/a6zvxuPLpQY" frameborder="0" allowfullscreen></iframe>
	<iframe width="240" height=" " src="http://www.youtube.com/embed/a6zvxuPLpQY" frameborder="0" allowfullscreen></iframe>
	</div>
	
	
	<div id="det_list">
		<div id="det_content">
			<div id="det_item"> 
				<div id="det_prod_img"><a href="prod_detail.php"><img src="product_images/inserts/anycase/1.jpg" width="340"/></a></div>
				<div id="det_prod_desc" class="alignRight">
				<table cellpadding="5" cellspacing="2" style="border:3px #006633 solid"  width="100%" height="215">
				<tr><td width="100" bgcolor="#CCCCCC">PID:</td><td bgcolor="#EFEFEF"> 1234125</td></tr>
				<tr><td bgcolor="#CCCCCC">NAME:</td><td bgcolor="#EFEFEF"> Nikon </td>
				<tr><td bgcolor="#CCCCCC">PRICE:</td><td bgcolor="#EFEFEF"><span class="linethrough">$11.0</span></td></tr>
				<tr><td bgcolor="#CCCCCC">SPECIAL OFFER:</td><td bgcolor="#EFEFEF">$9.0</td></tr>
				<tr><td bgcolor="#CCCCCC">GROSS WEIGHT:</td><td bgcolor="#EFEFEF">10kg</td></tr>
				<tr><td bgcolor="#CCCCCC">NET WEIGHT:</td><td bgcolor="#EFEFEF">10kg</td></tr>
				<tr><td bgcolor="#CCCCCC">QTY:</td><td bgcolor="#EFEFEF"> <select id="qty">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				</select></td></tr>
				<tr><td bgcolor="#CCCCCC">COLOR:</td><td bgcolor="#EFEFEF"><select id="color">
				<option>BLK</option>
				<option>RED</option>
				<option>BLU</option>
				</select></td></tr>
				<tr><td bgcolor="#EFEFEF" colspan="2" style="text-align:right"> 
				<div class="fb-like" data-href="http://camportco.com/" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
				 <input type="button" value="Buy+CheckOut" onclick="javascript:checkout();"/> 
				 <input type="button" value="Add to Cart"/></td></tr>
				</table>
				</div>
			</div>	
			 
			<div id="det_desc">
					<label>Description:	</label> Total length: 1135mm Strap length: 628mm Strap width: 20mm Adjutable strap width: 6mm <br/>
					<br/><label>Remark:	</label>	Materials: strap surface - PU leather / back - cotton polyester blend Max. Loading: 1kg Camera wires and rings are provided
			</div>
			 
				<div id="prod_det_img"> 
				 
				<img src="product_images/inserts/anycase/2.jpg" class="hover_img_borderColor" />
				 
				<img src="product_images/inserts/anycase/2.jpg" class="hover_img_borderColor" />
				 
				<iframe width="500" height="380" src="http://www.youtube.com/embed/a6zvxuPLpQY" frameborder="0" allowfullscreen></iframe>
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