<div class="single_sidebar"> <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- yoursmartiot_main_Blog1_1x1_as -->
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-2979805726071943"
                             data-ad-slot="7602262713"
                             data-ad-format="auto"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script></div>
<div class="single_sidebar">
    <div class="news-letter">
        <h2>Mục tin</h2>
         <p>
            <ul id="nav">
                 <?php foreach ($listmenu as $cate): ?>
                    <li>
                        <a href="<?php echo site_url(create_slug(trim(strtolower($cate->catename))) . '/' . $cate->id); ?>">
                            <?php echo $cate->catename; ?>
                        </a>
                    </li>   
                <?php endforeach ?>
            </ul>
         </p>
    </div>
</div>
<div class="single_sidebar">
    <div class="popular">
        <h2 class="title">Có thể bạn quan tâm</h2>
        <ul>
             <?php foreach($random_post as $post):?>
            <li>
                <div class="single_popular">
                    <p><?php echo $post->create_date?></p>
                    <h3><?php echo $post->title?>
                        <a href="<?php echo site_url(create_slug($post->title)) . "-" . $post->id . ".html" ?>" class="readmore">Chi tiết</a></h3>
                </div>
            </li>
             <?php endforeach; ?>
        </ul>
       </div>
</div>

<div class="single_sidebar">
    <h2 class="title">Quảng cáo</h2>
   <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,3786606,4,102,102,47,00000001']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3786606&101" alt="" border="0"></a></noscript>
<!-- Histats.com  END  -->
  
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- yoursmartiot_main_Blog1_1x1_as -->
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-2979805726071943"
                             data-ad-slot="7602262713"
                             data-ad-format="auto"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script> </div>
