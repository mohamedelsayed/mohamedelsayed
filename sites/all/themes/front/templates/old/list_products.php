<?php if(!empty($products)){?>
    <div class="row" id="Container">    
        <?php foreach ($products as $key => $product) {
            $product_title = $product->title;
            $product_url = elsayed_get_node_url_by_id($product->nid);
            $product_description = '';
            /*if(isset($product->body[LANGUAGE_NONE][0]['safe_value'])){
                $product_description = $product->body[LANGUAGE_NONE][0]['safe_value'];
            }*/
            $image = $GLOBALS['default_image'];
            $default_image = $GLOBALS['default_image'];
            $alt = '';
            if(isset($product->field_images[LANGUAGE_NONE][0]['uri'])){
                $image = image_style_url('thumbnail', $product->field_images[LANGUAGE_NONE][0]['uri']);
                $alt = $product->field_images[LANGUAGE_NONE][0]['alt'];
                $default_image = image_style_url('default_size', $product->field_images[LANGUAGE_NONE][0]['uri']);
            }
            $field_price = elsayed_get_product_price($product, 1);
            /*if(isset($product->field_category[LANGUAGE_NONE][0]['target_id'])){
                $category = node_load($product->field_category[LANGUAGE_NONE][0]['target_id']);
                $product_description = $category->title;
            }*/?>        
            <div class="col-md-3 col-sm-6 mix portfolio-item Pizza">       
                <div class="portfolio-wrapper">                
                    <div class="portfolio-thumb">
                        <img src="<?php echo $image;?>" alt="<?php echo $alt;?>" />
                        <div class="hover">
                            <div class="hover-iner">
                                <a class="fancybox" href="<?php echo $default_image;?>">
                                    <img src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/images/open-icon.png" alt="<?php echo $alt;?>" />
                                </a>                                    
                            </div>
                        </div>
                    </div>  
                    <div class="text-category products_list_price">
                        <?php echo $field_price;?>
                    </div>
                    <div class="label-text">
                        <h3 style="height: 40px;"><a href="<?php echo $product_url;?>"><?php echo $product_title;?></a></h3>
                        
                    </div>
                </div>          
            </div>
        <?php }?>         
    </div>
    <?php $paging = elsayed_draw_paging($page_count, $page);
    echo $paging;?>  
<?php }else{ ?>
    <div style="width:100%;text-align:center;float:left">No results found</div>
<?php }?>