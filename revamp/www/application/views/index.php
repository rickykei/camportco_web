<? 
echo HTML::style("media/css/index_style.css");
echo HTML::script("media/js/index_js.js");
?>

<div id="col2">
	<div id="rl">
		<table width="" border="0" cellpadding="10" cellspacing="2">
			<tr>
				<td>
					<!-- Slide Show -->
					<div id="slideshow-container">
						<? foreach ($slideShows as $slideShow) {
							echo HTML::anchor($slideShow->url, HTML::image(IMG_ROOT.'slideshow/'.$slideShow->jpg));
						}?>
					</div>
				</td>
			</tr>
			
			<!-- Display Product -->
			
			<tr>
				<td><br/></td>
			</tr>

			<? 
			if (!empty($randomProducts)) {
				foreach ($randomProducts as $categoryId=>$product) {
					if ($product == NULL) {
						continue;
					}
					$subCategorylink = "/subcategory/product?cid=".Controller_Subcategory::getCategoryMenuSelectedIdx($categoryId).'&cat_id='.$categoryId;
			?>
					<tr>
						<td><? echo HTML::anchor($subCategorylink, GlobalFunction::subCategoryImageHTML($categoryId.'.png', array('width'=>250, 'height'=>25))); ?></td>
					</tr>
					<tr>
						<td>
						 	<? echo HTML::anchor($subCategorylink, '<div class="imagecenter">'.HTML::image(PRODUCT_IMAGE_PATH.$product->product_id.'_s.jpg', array('width'=>400,'height'=>250)).'</div>');
							?>
						 </td>
		 			</tr>
					
					<tr>
						<td></td>
					</tr>
					
					<tr>
						<td align="right"><? echo HTML::anchor($subCategorylink, __('index.label.detail')); ?></td>
					</tr>
			<? }}?>
		</table>
	</div>
</div>

<div id="col3">
	<div id="left" class="ui-corner-all">
		<h3><? echo __('title.news'); ?></h3>
		<? foreach ($newslinks as $newslink) {?>
			<div>
				<? echo HTML::anchor($newslink->url, $newslink->getContent()); ?>
			</div>
		<? }?>
	</div>
</div>

<script type="text/javascript">
	/*var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-17949120-3']);
	_gaq.push(['_trackPageview']);
	
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();*/
</script>
