<?php $articles = elsayed_get_news_home();
if(!empty($articles)){?>
    <div id="testimonails">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-section">
                        <h2><?php echo t('NEWS');?></h2>
                        <img src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/images/under-heading.png" alt="" >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="testimonails-slider">
                        <ul class="slides">
                            <?php foreach ($articles as $key => $article) {
                                $article_title = $article->title;
                                $article_url = elsayed_get_node_url_by_id($article->nid);
                                $article_description = '';
                                if(isset($article->body[LANGUAGE_NONE][0]['safe_value'])){
                                    $article_description = $article->body[LANGUAGE_NONE][0]['safe_value'];
                                }
                                /*$image = $GLOBALS['default_image'];
                                $alt = '';
                                if(isset($article->field_image[LANGUAGE_NONE][0]['uri'])){
                                    $image = image_style_url('medium', $article->field_image[LANGUAGE_NONE][0]['uri']);
                                    $alt = $article->field_image[LANGUAGE_NONE][0]['alt'];
                                }*/?>
                                <li>
                                    <div class="testimonails-content">
                                        <a href="<?php echo $article_url;?>">
                                            <h3 style="text-align: center;"><?php echo $article_title;?></h3>
                                        </a>
                                        <p><?php echo elsayed_string_format_view($article_description, 40);?></p>
                                    </div>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>