	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Camport Camera Accessories Home</title>

	<meta name="description" content="camport camera accessories" />
	<meta name="keywords" content="camport camera accessories" />
    <link rel="stylesheet" type="text/css" href="style.css" />
	 <link rel="stylesheet" type="text/css" href="/themes/base/ui.all.css" />    

    <link rel="stylesheet" type="text/css" href="http://jqueryui.com/themes/base/jquery.ui.all.css" />    
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/mootools/1.2.4/mootools-yui-compressed.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="/mopBox/mopBox-2.5.css" />
	<script type="text/javascript" src="/mopBox/jquery.pngFix.js"></script>
	<script type="text/javascript" src="/mopBox/mopBox-2.5.js"></script>

<style type="text/css">
<!--
@import url("tablestyle.css");
-->
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
		.toc					{ position:absolute; right:10px; bottom:2px; z-index:2; display:block; width:20px; background:#FFF; color:#FFF; text-align:center; padding:3px; text-decoration:none; }
		.toc-active				{ background:#999; color:#999999; }
	//	#next					{ position:absolute; bottom:2px; right:10px; z-index:2; display:block; width:20px; background:#FFF; color:#999999; text-align:center; padding:3px; text-decoration:none; }
	//	#previous				{ position:absolute; bottom:2px; right:40px; z-index:2; display:block; width:20px; background:#FFF; color:#999999; text-align:center; padding:3px; text-decoration:none; }
/*
	.mb {
		height: 400px;
		width: 250px;
		text-align: right;
		padding: 10px;
	}
	.mbimg { margin-left: auto; margin-right: auto; display:block; border: 3px solid #eee; padding: 1px; max-width:580px; max-height:380px}
	.mb td, .mb th {vertical-align:top; text-align: left }
	*/
	.prod_img {    border: 3px solid #eee; margin: 0px 5px 5px 0px; left:50%; }
	.imagecenter { text-align: center;} 
</style>

<script type="text/javascript">
	
	// slideshow
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
							right: 155-((i + 1) * (this.options.tocWidth + 10))
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
			/*var next = new Element('a',{
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
			*/
		}
	});
	
	/* usage */
	window.addEvent('domready',function() {
		jq("#mopbox").mopBox({'target':'#prod_detail','w':1000,'h':400});
	
	/* jq(document).bind("contextmenu",function(e){
        return false;
    });*/

		var slideshow = new SimpleSlideshow('slideshow-container','#slideshow-container img');
		slideshow.start();
	});
	
	function show_mopbox(divId) {
		jq("#" + divId).click();
	}
	
	function prod_click(product_id){
		jq("#prod_detail").load("/products/mopbox_form?product_id=" + product_id,
			function(){
				jq("#mopbox").click();
			}
		);
	}
 
function checkout()
{
location.href="checkout.php";
}

 	function checkout2()
{
location.href="checkout2.php";
}
function checkout3()
{
location.href="checkout3.php";
}
 	
function paypal()
{
location.href="http://paypal.com";
}

 
</script>

<script type="text/javascript"  src="jquery-ui-1.8rc1.custom.min.js"></script>
	<script type="text/javascript" src="/ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="/ui/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="/ui/jquery.ui.accordion.js"></script>
		<script type="text/javascript" src="/ui/jquery.ui.button.js"></script>
<script type="text/javascript">
	 var jq18 = jQuery.noConflict();
	jq18(function() {
		var icons = {
			header: "ui-icon-circle-arrow-e",
			headerSelected: "ui-icon-circle-arrow-s"
		};
		jq18( "#accordion" ).accordion({
			icons: icons
		});
		jq18( "#toggle" ).button().toggle(function() {
			jq18( "#accordion" ).accordion( "option", "icons", false );
		}, function() {
			jq18( "#accordion" ).accordion( "option", "icons", icons );
		});
	});
	 
</script>
<script type="text/javascript">
jq18(document).ready(function(){

	jq18(".rounded-img, .rounded-img2").load(function() {
		jq18(this).wrap(function(){
			return '<span class="' + $(this).attr('class') + '" style="background:url(' + $(this).attr('src') + ') no-repeat center center; width: ' + $(this).width() + 'px; height: ' + $(this).height() + 'px;" />';
		});
		jq18(this).css("opacity","0");
	});

});
</script>
 <script type="text/javascript"  src="/js/jquery.insetBorderEffect.js"></script>
  <script type="text/javascript">
 
	 
	  jq18(document).ready(function(){ 
    jq18("input[name$='del']").click(function() {
	var test = jq18(this).val();
		if (test=="address"){
		 	jq18(".desc").hide();
			jq18("#address").show();
			jq18("#postmethod1").show();
		}else{
			jq18("#address").hide();
			jq18("#postmethod1").hide();
			jq18("#postmethod2").hide();
		}
		jq18("#country").change(function() {
			var test= jq18(this).val();
			 
			if (test == "HK"){
			jq18("#postmethod1").show();
			jq18("#postmethod2").hide();
			}else{
			jq18("#postmethod2").show();
			jq18("#postmethod1").hide();
			}
		});
		}); 
	});
</script>