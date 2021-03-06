<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	<title>
		Camport Camera Accessories		Home	</title>

	<meta name="description" content="Small Corporation" />
	<meta name="keywords" content="small, corporation" />
    <link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    
    <link rel="stylesheet" type="text/css" href="themes/base/ui.all.css" />    
		<script type="text/javascript" src="mootools-1.2.4.js"></script>
	<script type="text/javascript" src="jquery-1.4.1.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.widget.js"></script>
    <!-- mopBox -->
<link rel="stylesheet" type="text/css" href="mopBox/mopBox-2.5.css" />
<script type="text/javascript" src="ui/jquery.ui.mouse.js"></script>
<script type="text/javascript" src="ui/jquery.ui.draggable.js"></script>
<script type="text/javascript" src="ui/jquery.ui.resizable.js"></script>
<script type="text/javascript" src="mopBox/jquery.pngFix.js"></script>
<script type="text/javascript" src="mopBox/mopBox-2.5.js"></script>

<style type="text/css">
		#slideshow-container	{ width:400px; height:250px; position:relative; }
		#slideshow-container img {
			width:400px;
			height:250px;
			display:block;
			position:absolute;
			top:0px;
			left:0px;
			z-index:1;
		}
		.toc					{ position:absolute; left:0; bottom:10px; z-index:2; display:block; width:20px; background:#FFF; color:#FFF; text-align:center; padding:3px; text-decoration:none; }
		.toc-active				{ background:#999; color:#999999; }
		#next					{ position:absolute; bottom:10px; right:20px; z-index:2; display:block; width:20px; background:#FFF; color:#999999; text-align:center; padding:3px; text-decoration:none; }
		#previous				{ position:absolute; bottom:10px; right:60px; z-index:2; display:block; width:20px; background:#FFF; color:#999999; text-align:center; padding:3px; text-decoration:none; }
		
		.mb {
			height: 400px;
			width: 620px;
			text-align: left;
			padding: 10px;
		}
		.mb img { margin-left: auto; margin-right: auto; display:block; border: 3px solid #eee; padding: 1px;}
</style>

<script type="text/javascript">
	var jq = jQuery.noConflict();
	var SimpleSlideshow = new Class({
		options: {
			showControls: true,
			showDuration: 3000,
			showTOC: true,
			tocWidth: 20,
			tocClass: 'toc',
			tocActiveClass: 'toc-active'
		},
		Implements: [Options,Events],
		initialize: function(container,elements,options) {
			//settings
			this.container = $(container);
			this.elements = $$(elements);
			this.currentIndex = 0;
			this.interval = '';
			if(this.options.showTOC) this.toc = [];
			
			//assign
			this.elements.each(function(el,i){
				if(this.options.showTOC) {
					this.toc.push(new Element('a',{
						text: i+1,
						href: '#',
						'class': this.options.tocClass + '' + (i == 0 ? ' ' + this.options.tocActiveClass : ''),
						events: {
							click: function(e) {
								if(e) e.stop();
								this.stop();
								this.show(i);
							}.bind(this)
						},
						styles: {
							left: ((i + 1) * (this.options.tocWidth + 10))
						}
					}).inject(this.container));
				}
				if(i > 0) el.set('opacity',0);
			},this);
			
			//next,previous links
			if(this.options.showControls) {
				this.createControls();
			}
			//events
			this.container.addEvents({
				mouseenter: function() { this.stop(); }.bind(this),
				mouseleave: function() { this.start(); }.bind(this)
			});

		},
		show: function(to) {
			this.elements[this.currentIndex].fade('out');
			if(this.options.showTOC) this.toc[this.currentIndex].removeClass(this.options.tocActiveClass);
			this.currentIndex = ($defined(to) ? to : (this.currentIndex < this.elements.length - 1 ? this.currentIndex + 1 : 0));
			this.elements[this.currentIndex].fade('in');
			if(this.options.showTOC) this.toc[this.currentIndex].addClass(this.options.tocActiveClass);
		},
		start: function() {
			this.interval = this.show.bind(this).periodical(this.options.showDuration);
		},
		stop: function() {
			$clear(this.interval);
		},
		//"private"
		createControls: function() {
			var next = new Element('a',{
				href: '#',
				id: 'next',
				text: '>>',
				events: {
					click: function(e) {
						if(e) e.stop();
						this.stop(); 
						this.show();
					}.bind(this)
				}
			}).inject(this.container);
			var previous = new Element('a',{
				href: '#',
				id: 'previous',
				text: '<<',
				events: {
					click: function(e) {
						if(e) e.stop();
						this.stop(); 
						this.show(this.currentIndex != 0 ? this.currentIndex -1 : this.elements.length-1);
					}.bind(this)
				}
			}).inject(this.container);
		}
	});
	
	

			window.addEvent('domready',function() {		
			
			//call Jquery 
			 jq('#a_prod_123').mopBox({'target':'#prod_123','w':640,'h':400,'speed':300,'step':5,'stepPx':5,'btnW':100,'startPage':1});
			 jq('#a_prod_107').mopBox({'target':'#prod_107','w':640,'h':400,'speed':300,'step':5,'stepPx':5,'btnW':100,'startPage':1});
			 jq('#a_prod_218').mopBox({'target':'#prod_218','w':640,'h':400,'speed':300,'step':5,'stepPx':5,'btnW':100,'startPage':1});
			 jq('#a_prod_126').mopBox({'target':'#prod_126','w':640,'h':400,'speed':300,'step':5,'stepPx':5,'btnW':100,'startPage':1});
			 
			 //slideshowStart
			 var slideshow = new SimpleSlideshow('slideshow-container','#slideshow-container img');
			slideshow.start();
				
				
			})
						
					

</script>	
    </head>
<body>
		<input type="hidden" name="webroot" id="webroot" value="" />

	<div id="container">
		<div id="content">
			<div id="header">
				<div id="top">
    <p>
        <a href="">Language</a>
        <a href="">FontSize</a>
        <a href="">Help</a>

    </p>
    <form id="search_engine" method="post" action="." accept-charset="UTF-8">
        <p><input class="searchfield ui-corner-all" name="search_query" type="text" id="keywords" value="Search Keywords" onfocus="document.forms['search_engine'].keywords.value='';" onblur="if (document.forms['search_engine'].keywords.value == '') document.forms['search_engine'].keywords.value='Search Keywords';" />
        <input class="searchbutton ui-corner-all" name="submit" type="submit" value="Search" /></p>
    </form>
</div>
    
<div id="logo">
	<a href=""><img src="images/logo.png" alt="" /></a>
</div>

<ul id="menu">
    <li><a href="">Home</a></li>
    <li><a href="categorys/menus">Product</a></li>
    <li><a href="companys/info">Contact Us</a> </li>
</ul>			</div>
			
			

<div id="main">
    <div id="slideshow-container">
        <img src="slideshow/cricci1.jpg" alt="" />
        <img src="slideshow/cricci2.jpg" alt="" />
        <img src="slideshow/cricci3.jpg" alt="" />
        <img src="slideshow/cricci4.jpg" alt="" />

        <img src="slideshow/cricci5.jpg" alt="" />
    </div>
<br />

</div>

<div id="ad">
	<p>advertising</p>
</div>

<div id="shortnews">
<div class="news">
    <h3><a href="#">S324234234234</a></h3>

    <p>3244444444444444444444444.</p>
</div>
<h3><a href="#">32434222ta</a></h3>
<p>34222222222222222222222222222222<br />
  2344444444444444444444
</p>
</div>

<div id="line"></div>

<div id="left" class="ui-corner-all">
<h3>News </h3>

    <ul>
        <li><a href="#">25-Jan Release</a></li>
        <li></li>
        <li></li>
    </ul>
</div>
        
<div id="right">	
<div id="rl">
    <table width="" border="0" cellpadding="10" cellspacing="0">

        <tr>
        	<td width=""><img src="images/accessories.png" alt="" width="250" height="25" /></td>
            <td><img src="images/inserts.png" alt="" width="250" height="25" /></td>
        </tr>
        <tr>
        	<td><a href="#"><img src="slideshow/cricci9.jpg" alt="" width="250" height="150" /></a></td>
            <td><a href="#"><img src="slideshow/cricci4.jpg" alt="" width="250" height="150" /></a></td>
        </tr>
        <tr>

        	<td>STUN BAG Large Black (Discontinued)</td>
            <td>HOLIDAY Large Beige <a href="%"></a></td>
        </tr>
        <tr>
        	<td align="right"><a id="a_prod_123" href="#">DETAIL</a></td>
            <td align="right"><a id="a_prod_107" href="#">DETAIL</a></td>
        </tr>

    </table>
        
    <table width="" border="0" cellpadding="10" cellspacing="0">
          <tr>
                <td width=""><img src="images/bags.png" alt="" width="250" height="25" /></td>
                 <td><a href="#"><img src="images/straps.png" alt="" width="250" height="25" /></a></td>
      </tr>
              <tr>
                <td><a href="#"><img src="slideshow/cricci9.jpg" alt="" width="250" height="150" /></a></td>
                <td><a href="#"><img src="slideshow/cricci4.jpg" alt="" width="250" height="150" /></a></td>

            </tr>
              <tr>
                <td>JIANISI Remote Switch ????? - Canon<a href="%">dfdsdfsdfsdf</a></td>
                <td>STUN BAG Medium Beige (Discontinued)<a href="%">dfdsdfsdfsdf</a></td>
            </tr>
              <tr>
                <td align="right"><a id="a_prod_218" href="#">DETAIL</a></td>

                <td align="right"><a id="a_prod_126" href="#">DETAIL</a></td>
            </tr>
  </table>
</div>

<p class="border">342344444444444 sdffffffffffffffffff
sdffffffffffffffffff
dsffffffffffffffffffffffffff
  <br />
</p>
</div>

<!-- For mopbox -->


<div class="hidden">
		        <div id="prod_123">
            <div class='mb'>
                <table width="620"><tr>
                    <td>
                        <img src="img/../product_images/accessories/annabel/1.jpg" alt="" />                    </td>
                    <td>
                    	<table>

                        	<tr><td>ID:</td><td>H82220</td></tr>
                        	<tr><td>Name:</td><td>STUN BAG Large Black (Discontinued)</td></tr>
                        	<tr><td>Description:</td><td></td></tr>
                        </table>
                    </td>
                </tr>

                </table>
            </div>
        </div>
                <div id="prod_107">
            <div class='mb'>
                <table width="620"><tr>
                    <td>
                        <img src="img/../product_images/accessories/annabel/1.jpg" alt="" />                    </td>

                    <td>
                    	<table>
                        	<tr><td>ID:</td><td>H00922</td></tr>
                        	<tr><td>Name:</td><td>HOLIDAY Large Beige </td></tr>
                        	<tr><td>Description:</td><td></td></tr>
                        </table>

                    </td>
                </tr>
                </table>
            </div>
        </div>
                <div id="prod_218">
            <div class='mb'>
                <table width="620"><tr>
                    <td>

                        <img src="img/../product_images/accessories/annabel/1.jpg" alt="" />                    </td>
                    <td>
                    	<table>
                        	<tr><td>ID:</td><td>RS-C1</td></tr>
                        	<tr><td>Name:</td><td>JIANISI Remote Switch ????? - Canon</td></tr>
                        	<tr><td>Description:</td><td>Canon350D/400D/450D/500D</td></tr>

                        </table>
                    </td>
                </tr>
                </table>
            </div>
        </div>
                <div id="prod_126">
            <div class='mb'>
                <table width="620"><tr>

                    <td>
                        <img src="img/../product_images/accessories/annabel/1.jpg" alt="" />                    </td>
                    <td>
                    	<table>
                        	<tr><td>ID:</td><td>H82081</td></tr>
                        	<tr><td>Name:</td><td>STUN BAG Medium Beige (Discontinued)</td></tr>

                        	<tr><td>Description:</td><td></td></tr>
                        </table>
                    </td>
                </tr>
                </table>
            </div>
        </div>
        </div>

            <div id="footer">
                <div id="fl">
                	<p>Copyright c 2010 Camport Camera Accessorie</p>
                </div>
            </div>
		</div> 
	</div>
	</body>
</html><!-- 1.6362s --><table class="cake-sql-log" id="cakeSqlLog_12659054914b742f538eb582_16071715" summary="Cake SQL Log" cellspacing="0" border = "0">
		
<caption>(default) 8 queries took 120 ms</caption>
<thead>
<tr><th>Nr</th><th>Query</th><th>Error</th><th>Affected</th><th>Num. rows</th><th>Took (ms)</th></tr>
</thead>
<tbody>
<tr><td>1</td><td>DESCRIBE `product`</td><td></td><td style = "text-align: right">21</td><td style = "text-align: right">21</td><td style = "text-align: right">3</td></tr>

<tr><td>2</td><td>DESCRIBE `category`</td><td></td><td style = "text-align: right">3</td><td style = "text-align: right">3</td><td style = "text-align: right">3</td></tr>
<tr><td>3</td><td>DESCRIBE `Make`</td><td></td><td style = "text-align: right">3</td><td style = "text-align: right">3</td><td style = "text-align: right">3</td></tr>
<tr><td>4</td><td>DESCRIBE `category_make`</td><td></td><td style = "text-align: right">2</td><td style = "text-align: right">2</td><td style = "text-align: right">3</td></tr>

<tr><td>5</td><td>SELECT `Product`.`id`, `Product`.`product_id`, `Product`.`make_id`, `Product`.`make_name`, `Product`.`model`, `Product`.`remark`, `Product`.`name`, `Product`.`pcs`, `Product`.`photo`, `Product`.`price`, `Product`.`sup`, `Product`.`colour`, `Product`.`location`, `Product`.`model_no`, `Product`.`year`, `Product`.`cat_id`, `Product`.`cat_name`, `Product`.`desc`, `Product`.`stock`, `Product`.`material`, `Product`.`display_seq`, `Category`.`id`, `Category`.`cat_name`, `Category`.`display_seq`, `Make`.`id`, `Make`.`make_name`, `Make`.`display_seq` FROM `product` AS `Product` LEFT JOIN `category` AS `Category` ON (`Product`.`cat_id` = `Category`.`id` AND `category`.`cat_name` = &#039;Camera Accessories&#039;) LEFT JOIN `Make` AS `Make` ON (`Product`.`make_id` = `Make`.`id`)  WHERE 1 = 1   ORDER BY RAND() ASC  LIMIT 1</td><td></td><td style = "text-align: right">1</td><td style = "text-align: right">1</td><td style = "text-align: right">29</td></tr>
<tr><td>6</td><td>SELECT `Product`.`id`, `Product`.`product_id`, `Product`.`make_id`, `Product`.`make_name`, `Product`.`model`, `Product`.`remark`, `Product`.`name`, `Product`.`pcs`, `Product`.`photo`, `Product`.`price`, `Product`.`sup`, `Product`.`colour`, `Product`.`location`, `Product`.`model_no`, `Product`.`year`, `Product`.`cat_id`, `Product`.`cat_name`, `Product`.`desc`, `Product`.`stock`, `Product`.`material`, `Product`.`display_seq`, `Category`.`id`, `Category`.`cat_name`, `Category`.`display_seq`, `Make`.`id`, `Make`.`make_name`, `Make`.`display_seq` FROM `product` AS `Product` LEFT JOIN `category` AS `Category` ON (`Product`.`cat_id` = `Category`.`id` AND `category`.`cat_name` = &#039;Camera Inserts&#039;) LEFT JOIN `Make` AS `Make` ON (`Product`.`make_id` = `Make`.`id`)  WHERE 1 = 1   ORDER BY RAND() ASC  LIMIT 1</td><td></td><td style = "text-align: right">1</td><td style = "text-align: right">1</td><td style = "text-align: right">30</td></tr>
<tr><td>7</td><td>SELECT `Product`.`id`, `Product`.`product_id`, `Product`.`make_id`, `Product`.`make_name`, `Product`.`model`, `Product`.`remark`, `Product`.`name`, `Product`.`pcs`, `Product`.`photo`, `Product`.`price`, `Product`.`sup`, `Product`.`colour`, `Product`.`location`, `Product`.`model_no`, `Product`.`year`, `Product`.`cat_id`, `Product`.`cat_name`, `Product`.`desc`, `Product`.`stock`, `Product`.`material`, `Product`.`display_seq`, `Category`.`id`, `Category`.`cat_name`, `Category`.`display_seq`, `Make`.`id`, `Make`.`make_name`, `Make`.`display_seq` FROM `product` AS `Product` LEFT JOIN `category` AS `Category` ON (`Product`.`cat_id` = `Category`.`id` AND `category`.`cat_name` = &#039;Camera Bags&#039;) LEFT JOIN `Make` AS `Make` ON (`Product`.`make_id` = `Make`.`id`)  WHERE 1 = 1   ORDER BY RAND() ASC  LIMIT 1</td><td></td><td style = "text-align: right">1</td><td style = "text-align: right">1</td><td style = "text-align: right">25</td></tr>

<tr><td>8</td><td>SELECT `Product`.`id`, `Product`.`product_id`, `Product`.`make_id`, `Product`.`make_name`, `Product`.`model`, `Product`.`remark`, `Product`.`name`, `Product`.`pcs`, `Product`.`photo`, `Product`.`price`, `Product`.`sup`, `Product`.`colour`, `Product`.`location`, `Product`.`model_no`, `Product`.`year`, `Product`.`cat_id`, `Product`.`cat_name`, `Product`.`desc`, `Product`.`stock`, `Product`.`material`, `Product`.`display_seq`, `Category`.`id`, `Category`.`cat_name`, `Category`.`display_seq`, `Make`.`id`, `Make`.`make_name`, `Make`.`display_seq` FROM `product` AS `Product` LEFT JOIN `category` AS `Category` ON (`Product`.`cat_id` = `Category`.`id` AND `category`.`cat_name` = &#039;Camera Straps&#039;) LEFT JOIN `Make` AS `Make` ON (`Product`.`make_id` = `Make`.`id`)  WHERE 1 = 1   ORDER BY RAND() ASC  LIMIT 1</td><td></td><td style = "text-align: right">1</td><td style = "text-align: right">1</td><td style = "text-align: right">24</td></tr>
</tbody></table>
