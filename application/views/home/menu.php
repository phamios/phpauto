<ul id="nav">
  
     <?php foreach ($list_categories as $cate): ?>
        <li>
            <a href="<?php echo site_url(create_slug(trim(strtolower($cate->catename))) . '/' . $cate->id); ?>">
                <?php echo $cate->catename; ?>
            </a>
        </li>   
    <?php endforeach ?>
</ul>