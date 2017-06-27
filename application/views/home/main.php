<div class="main_content floatleft">
    <div class="left_coloum floatleft">
        
        <div class="single_left_coloum_wrapper">
            <h2 class="title"><?php echo $paging; ?></h2>
            <a class="more" href="#">More</a>
            
            <?php foreach ($maincontents as $lastpost): ?>
                <div class="single_left_coloum floatleft"> 
                   <img alt="<?php echo $lastpost->title; ?>" src="<?php echo $lastpost->image_thumb ?>" />
                   <h3> <a href="<?php echo site_url(create_slug($lastpost->title)) . "-" . $lastpost->id . ".html" ?>" class="media-left"><?php echo $lastpost->title; ?></a></h3>
                    <p><?php echo $lastpost->des; ?></p>
                    <a class="readmore" href="<?php echo site_url(create_slug($lastpost->title)) . "-" . $lastpost->id . ".html" ?>">Xem thêm</a> 
                </div>
            <?php endforeach; ?>
<!--            <div class="single_left_coloum floatleft"> <img src="<?php echo base_url('template'); ?>/images/single_featured.png" alt="" />
                <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper 
                    dolor eu mattis.</p>
                <a class="readmore" href="#">read more</a> </div>
            <div class="single_left_coloum floatleft"> <img src="<?php echo base_url('template'); ?>/images/single_featured.png" alt="" />
                <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper 
                    dolor eu mattis.</p>
                <a class="readmore" href="#">read more</a> </div>-->
        </div>

        <!--        <div class="single_left_coloum_wrapper single_cat_left">
                    <h2 class="title">tech news</h2>
                    <a class="more" href="#">more</a>
                    <div class="single_cat_left_content floatleft">
                        <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit </h3>
                        <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...interdum</p>
                        <p class="single_cat_left_content_meta">by <span>John Doe</span> |  29 comments</p>
                    </div>
                    <div class="single_cat_left_content floatleft">
                        <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit </h3>
                        <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...interdum</p>
                        <p class="single_cat_left_content_meta">by <span>John Doe</span> |  29 comments</p>
                    </div>
                    <div class="single_cat_left_content floatleft">
                        <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit </h3>
                        <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...interdum</p>
                        <p class="single_cat_left_content_meta">by <span>John Doe</span> |  29 comments</p>
                    </div>
                    <div class="single_cat_left_content floatleft">
                        <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit </h3>
                        <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...interdum</p>
                        <p class="single_cat_left_content_meta">by <span>John Doe</span> |  29 comments</p>
                    </div>
                </div>-->
        <?php echo $paging; ?>
    </div>
    <?php $this->load->view('home/right_column');?>
</div>