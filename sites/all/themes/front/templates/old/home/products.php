<?php $return = elsayed_get_products(0, 1, 6, 1);
$products = $return['items'];
if(!empty($products)){?>
    <div id="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-section">
                        <h2><?php echo t('Our Products');?></h2>
                        <img src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/images/under-heading.png" alt="" >
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($products as $key => $product) {
                    $product_title = $product->title;
                    $product_url = elsayed_get_node_url_by_id($product->nid);
                    $product_description = '';
                    if(isset($product->body[LANGUAGE_NONE][0]['safe_value'])){
                        $product_description = $product->body[LANGUAGE_NONE][0]['safe_value'];
                    }
                    $image = $GLOBALS['default_image'];
                    $alt = '';
                    if(isset($product->field_images[LANGUAGE_NONE][0]['uri'])){
                        $image = image_style_url('medium', $product->field_images[LANGUAGE_NONE][0]['uri']);
                        $alt = $product->field_images[LANGUAGE_NONE][0]['alt'];
                    }
                    if(isset($product->field_category[LANGUAGE_NONE][0]['target_id'])){
                        $category = node_load($product->field_category[LANGUAGE_NONE][0]['target_id']);
                        $product_description = $category->title;
                    }?>
                    <div class="col-md-4 col-sm-6">
                        <div class="blog-post">
                            <div class="blog-thumb">
                                <img style="height: 253px;" src="<?php echo $image;?>" alt="<?php echo $alt;?>" />
                            </div>
                            <div class="blog-content">
                                <div class="content-show">
                                    <h4>
                                        <a href="<?php echo $product_url;?>">
                                            <?php echo $product_title;?>
                                        </a>
                                    </h4>                               
                                </div>
                                <div class="content-hide">
                                    <p>
                                        <?php echo strip_tags($product_description);?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>                    
            </div>
        </div>
    </div>
<?php }?>