<?php $custom_settings = custom_settings_get_all(); ?>
<footer>
    <div class="container">
        <div class="top-footer">
            <div class="row">               
                <div class="col-md-9"> 
                    <?php /*
                    <div class="subscribe-form">
                        <span>Get in touch with us</span>
                        <form method="get" class="subscribeForm">
                            <input id="subscribe" type="text" />
                            <input type="submit" id="submitButton" />
                        </form>
                    </div>
                    */?>
                </div>
                <?php  ?>
                <?php  ?> 
                <?php if(isset($custom_settings['footer_facebook']) || isset($custom_settings['footer_twitter']) || isset($custom_settings['footer_rss']) ) {?>               
                <div class="col-md-3">
                    <div class="social-bottom">
                        <span>Follow us:</span>
                        <ul>
                            <?php if(isset($custom_settings['footer_facebook'])) {?>
                                <li><a target="_blank" href="<?php echo($custom_settings['footer_facebook']);?>" class="fa fa-facebook"></a></li>
                            <?php }?>
                            <?php if(isset($custom_settings['footer_twitter'])) {?>
                                <li><a target="_blank" href="<?php echo($custom_settings['footer_twitter']);?>" class="fa fa-twitter"></a></li>
                            <?php }?>
                            <?php if(isset($custom_settings['footer_rss'])) {?>
                                <li><a target="_blank" href="<?php echo($custom_settings['footer_rss']);?>" class="fa fa-rss"></a></li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
                <?php } ?> 
            </div>
        </div>
        <div class="main-footer">
            <div class="row">
                <?php if(isset($custom_settings['footer_about_evatuning'])) {?>
                    <div class="col-md-3">
                        <div class="about">
                            <h4 class="footer-title">About Evatuning</h4>
                            <p><?php echo($custom_settings['footer_about_evatuning']);?></p>
                        </div>
                    </div>
                <?php } ?>
                <!--<div class="col-md-3">
                    <div class="shop-list">
                        <h4 class="footer-title">Shop Categories</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i>New Grill Menu</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Healthy Fresh Juices</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Spicy Delicious Meals</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Simple Italian Pizzas</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Pure Good Yogurts</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Ice-cream for kids</a></li>
                        </ul>
                    </div>
                </div>-->
                 <?php 
                $articles = ellabad_get_footer_articles();
                if(!empty($articles)){
                    ?>
                <div class="col-md-3">                   
                    <div class="recent-posts">
                        <h4 class="footer-title">Recent News</h4>
                        <?php 
                            foreach ($articles as $nid => $article) {                               
                                $article_title = $article->title;
                                $article_url = elsayed_get_node_url_by_id($article->nid);

                               //$image = $GLOBALS['default_image'];
                               if(isset($article->field_image[LANGUAGE_NONE][0]['uri'])){
                                    $image = image_style_url('thumbnail', $article->field_image[LANGUAGE_NONE][0]['uri']);
                                    $alt = $article->field_image[LANGUAGE_NONE][0]['alt'];                                        
                                    //$default_image = image_style_url('default_size', $article->field_image[LANGUAGE_NONE][0]['uri']);
                                }
                                ?>
                                <div class="recent-post">
                                    <div class="recent-post-thumb">
                                        <img style="width:70px;" src="<?php echo $image ?>" alt="<?php echo $alt ?>">
                                    </div>
                                    <div class="recent-post-info">
                                        <h6><a href="<?php echo $article_url; ?>" target='_blank'> <?php echo $article_title ?> </a></h6>
                                    </div>
                                </div>
                          <?php }?>                        
                        <?php /*?>
                        <div class="recent-post">
                            <div class="recent-post-thumb">
                                <img src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/images/recent-post2.jpg" alt="">
                            </div>
                            <div class="recent-post-info">
                                <h6><a href="#">News  2</a></h6>
                                
                            </div>
                        </div>
                        <?php */?>
                    </div>
                </div>
                <?php } ?>
                <div class="col-md-3">
                    <div class="more-info">
                        <?php if(isset($custom_settings['footer_more_info'])) { ?>
                            <h4 class="footer-title">More info</h4>
                            <p><?php echo($custom_settings['footer_more_info']); ?></p>
                        <?php }?>
                        <?php if(isset($custom_settings['footer_phone']) || isset($custom_settings['footer_address']) || isset($custom_settings['footer_email']) ) {?>                        
                            <ul>
                                <?php if(isset($custom_settings['footer_phone'])) {?> 
                                    <li><i class="fa fa-phone"></i><?php echo($custom_settings['footer_phone']);?> </li>
                                <?php } if(isset($custom_settings['footer_address'])) {?>                       
                                    <li><i class="fa fa-globe"></i><?php echo($custom_settings['footer_address']); ?> </li>
                                <?php } if(isset($custom_settings['footer_email'])) {?>
                                    <li><i class="fa fa-envelope"></i><?php echo($custom_settings['footer_email']); ?></li>
                                <?php } ?>
                            </ul>
                        <?php } ?>                        

                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <p>
                <span>Copyright © <?php echo date('Y');?> <a target="_blank" href="http://itworldeg.com">IT World</a> 
            </p>
        </div>
        
    </div>
</footer>
<div id="Developer">
    Developed by <a href="http://www.mohamedelsayed.net" target="_blank">Mohamed Elsayed</a>
</div>