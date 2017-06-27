<html>
<head>
<meta name="google-site-verification" content="OEfN4Q3UvxmT4qGAO-UvhZjtBIcgShmt_AUOdNTa_n4" />
<title> Sitemap </title>
</head> 
<body>
<?php foreach($categories as $cate):?>
 
  <a href="<?php echo site_url("category/".create_slug($cate->catename)) . "-" . $cate->id . ".html" ?>">  <?php echo site_url("category/".create_slug($cate->catename)) . "-" . $cate->id . ".html" ?></a><br/>
  
<?php endforeach;?>
 
<br/> 
<?php foreach($maincontents as $content):?>
  <a href="<?php echo site_url(create_slug($content->title))."-".$content->id.".html" ?>"><?php echo site_url(create_slug($content->title))."-".$content->id.".html" ?></a><br/> 
<?php endforeach;?>
 
<br/>
<?php echo $paging;?>
</body>
</html>

 