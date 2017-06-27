<div class="right_coloum floatright">
    <div class="single_right_coloum">
        <h2 class="title">Nhiều quan tâm</h2>
        <ul>
            <?php foreach($topcontent as $content):?>
            <li>
                <div class="single_cat_right_content">
                    <h3><?php echo $content->title; ?></h3>
                    <p><?php echo $content->des; ?></p>
                    <p class="single_cat_right_content_meta">
                        <a href="<?php echo site_url(create_slug($content->title)) . "-" . $content->id . ".html" ?>"><span>Xem thêm</span></a> <?php echo rand(1,5);?> giờ trước  
                    </p>
                </div>
            </li>
            <?php endforeach;?>
        </ul>
       </div>
    
        
        <div class="single_right_coloum">
        <h2 class="title">Nổi bật</h2>
        <?php foreach($random_post as $post):?>
        <div class="single_cat_right_content editorial"> 
            <a href="<?php echo site_url(create_slug($post->title)) . "-" . $post->id . ".html" ?>">
                <img   src="<?php echo $post->image_thumb ?>" alt="<?php echo $post->title;?>" />
            </a>
            <h3> <a href="<?php echo site_url(create_slug($post->title)) . "-" . $post->id . ".html" ?>"><?php echo $post->title;?></a></h3>
        </div>
        <?php endforeach; ?>
    </div>
</div>