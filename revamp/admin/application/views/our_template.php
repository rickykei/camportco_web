<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
 
<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
 
<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
    text-decoration: underline;
}
</style>
</head>
<body>
<!-- Beginning header -->
    <div>
	<a href='<?php echo site_url('main/invoice')?>'>invoice</a>| 
	<a href='<?php echo site_url('main/invoice_item')?>'>invoice_item</a>| 
        <a href='<?php echo site_url('main/product')?>'>product</a> | 
        <a href='<?php echo site_url('main/advertisement')?>'>advertisement</a> |
        <a href='<?php echo site_url('main/category')?>'>category</a> |
		  <a href='<?php echo site_url('main/sub_category')?>'> sub_category</a> |
        <a href='<?php echo site_url('main/company')?>'>company</a> |
		  <a href='<?php echo site_url('main/country')?>'>country</a> |
		<a href='<?php echo site_url('main/postal_fee')?>'>postal_fee</a> |
        <a href='<?php echo site_url('main/newslink')?>'>newslink</a> | 
        <a href='<?php echo site_url('main/slideshow')?>'>slideshow</a> |
        <a href='<?php echo site_url('main/import')?>' target="_blank">import</a>
 
    </div>
<!-- End of header-->
    <div style='height:20px;'></div>  
    <div>
        <?php echo $output; ?>
 
    </div>
<!-- Beginning footer -->
<div>Footer</div>
<!-- End of Footer -->
</body>
</html>