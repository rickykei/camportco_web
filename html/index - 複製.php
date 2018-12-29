<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Camport Camera Accessories</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Small Corporation" />
	<meta name="keywords" content="small, corporation" />
    <link type="text/css" href="themes/base/ui.all.css" rel="stylesheet" />
	<link rel="stylesheet" href="style.css" type="text/css" />

	<script type="text/javascript" src="jquery-1.4.1.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.widget.js"></script>


<?php if ($page=="contactus"){ ?>
    <script type="text/javascript" src="ui/jquery.effects.core.js"></script>
	<script type="text/javascript" src="ui/jquery.effects.clip.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.mouse.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.resizable.js"></script>
	
    <style type="text/css">
	#resizableb {
	width: 550px;
	height: 250px;
	padding: 0.5em;
	}
	#resizable h3 { text-align: center; margin: 0; }
	</style>
<style type="text/css">
		.demo { width: 500px; height: 200px; }
		#button { padding: .5em 1em; text-decoration: none; }
		#resizableb {
	width: 760px;
	position: relative;
	font-style: normal;
	font-size: 18px;
	margin-left: 10px;
	height: 400px;
}
		#resizableb h3 {
	margin: 0;
	padding: 0.4em;
	text-align: left;
}
		.ui-effects-transfer { border: 2px dotted gray; } 
	</style>

	<script type="text/javascript">
	$(function() {
		$("#companyinfo").show('clip');
		$("#resizableb").resizable();
});
	

	</script>    
 <?php } ?>   
    
<?php if ($page=="product"){ ?>
    <script type="text/javascript" src="ui/jquery.ui.accordion.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.tabs.js"></script>
	<script type="text/javascript">
	$(function() {
		$("#tabs").tabs();
 	
	});
	$(document).ready(function() {	});


	</script>
<?php } ?>
<?php if ($page=="" || $page=="home"){ ?>
	<script type="text/javascript" src="mootools-1.2.4.js"></script>
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
	
</style>


	<script type="text/javascript">
		 jQuery.noConflict();
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
		
		/* usage */
		window.addEvent('domready',function() {
			
			var slideshow = new SimpleSlideshow('slideshow-container','#slideshow-container img');
			slideshow.start();
			
		});
	</script>
<?php } ?>
</head>
<body>
	<div id="content">
		<div id="top">
			<p><a href="">Language</a>
				<a href="">FontSize</a>
        <a href="">Help</a></p>
			<form id="search_engine" method="post" action="." accept-charset="UTF-8">
				<p><input class="searchfield ui-corner-all" name="search_query" type="text" id="keywords" value="Search Keywords" onfocus="document.forms['search_engine'].keywords.value='';" onblur="if (document.forms['search_engine'].keywords.value == '') document.forms['search_engine'].keywords.value='Search Keywords';" />
				<input class="searchbutton ui-corner-all" name="submit" type="submit" value="Search" /></p>
			</form>
		</div>
	
	  <div id="logo">
			<a href="index.html"><img src="images/logo.png" alt="" /></a>
			
		</div>

	  <ul id="menu">
	    <li><a href="?page=home">Home</a></li>
			<li>	<a href="?page=product">Product</a></li>
	      <li><a href="?page=contactus">Contact Us</a> </li>
		</ul>
           <?php 
		   if ($page=="" || $page=="home" ){
			   
			   include("home.php");
		   }else {
			   include($page.".php");
		   }
		   ?>
            
		<div id="footer" class="ui-corner-all">
		  <div id="fl">
		    <p>Copyright © 2010 Camport Camera Accessorie</p>
		    </div>
		</div>	
	</div>
</body>
</html>