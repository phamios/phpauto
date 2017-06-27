<div class="main_content floatleft">
    <div class="left_coloum floatleft">
        <div class="single_left_coloum_wrapper" style="margin-left: 10px;">

            <?php if ($content_details): ?>
                <?php foreach ($content_details as $details): ?>
                    <h2 class="title"><?php echo $details->title; ?></h2>
                    <p> <span><i class="fa fa-calendar"></i><?php echo $details->create_date; ?></span></p>
                    <img class="img-center" src="<?php echo $details->image_link; ?>" alt="<?php echo $details->title ?>" width="90%"/>
                    <p><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- yoursmartiot_main_Blog1_1x1_as -->
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-2979805726071943"
                             data-ad-slot="7602262713"
                             data-ad-format="auto"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>

                    </p>
                    <p><?php echo $details->des ?></p>

                    <p><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- autosite -->
                        <ins class="adsbygoogle"
                             style="display:inline-block;width:728px;height:90px"
                             data-ad-client="ca-pub-2979805726071943"
                             data-ad-slot="7032658713"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </p>
                    <p><?php echo $details->content ?></p>


                <?php endforeach; ?>
            <?php endif; ?>

            <div class="social_link">
                <span class='st_sharethis_large' displayText='ShareThis'></span>
                <span class='st_facebook_large' displayText='Facebook'></span>
                <span class='st_twitter_large' displayText='Tweet'></span>
                <span class='st_linkedin_large' displayText='LinkedIn'></span>
                <span class='st_pinterest_large' displayText='Pinterest'></span>
                <span class='st_email_large' displayText='Email'></span> 
            </div>
        </div>
        <div class="single_left_coloum_wrapper single_cat_left">
            <?php foreach ($rand_next_posts as $rand): ?>
                <div class="single_cat_left_content floatleft">
                    <h3><a class="media-left" href="<?php echo site_url(create_slug($rand->title)) . "-" . $rand->id . ".html" ?>"><?php echo $rand->title; ?></a></h3>
                     <img class="img-center" src="<?php echo $rand->image_link; ?>" alt="<?php echo $rand->title ?>" width="100%"/> 
                    <p class="single_cat_left_content_meta">by <span><a target="_blank" rel="nofollow" href="http://github.com/phamios">Phamios</a></span> |  <?php echo rand(10, 100); ?> comments</p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
    <?php $this->load->view('home/right_column'); ?>
</div>