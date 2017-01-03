<?php /**
 * @author Author "Mohamed Elsayed"  
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2016 Programming by "http://www.mohamedelsayed.net"
 */?>
<?php include_once 'header.php';?>
<?php $nid = arg(1);
$product = node_load($nid);
if(!empty($product)){
    $product_title = $product->title;
    //$product_url = elsayed_get_node_url_by_id($product->nid);
    $product_description = '';
    if(isset($product->body[LANGUAGE_NONE][0]['value'])){
        $product_description = $product->body[LANGUAGE_NONE][0]['value'];
    }
    $image = $GLOBALS['default_image'];
    $default_image = $GLOBALS['default_image'];
    $alt = '';
    if(isset($product->field_images[LANGUAGE_NONE][0]['uri'])){
        $image = image_style_url('large', $product->field_images[LANGUAGE_NONE][0]['uri']);
        $alt = $product->field_images[LANGUAGE_NONE][0]['alt'];
        $default_image = image_style_url('default_size', $product->field_images[LANGUAGE_NONE][0]['uri']);
    }
    $field_price = elsayed_get_product_price($product, 1);
    //$price = elsayed_get_product_price($product, 0);
    $price = 0;
    if(isset($product->field_price[LANGUAGE_NONE][0]['value'])){
        $price = $product->field_price[LANGUAGE_NONE][0]['value'];
    }
    $field_category = '';
    if(isset($product->field_category[LANGUAGE_NONE][0]['target_id'])){
        $category = node_load($product->field_category[LANGUAGE_NONE][0]['target_id']);
        $field_category = $category->title;
    }?>
    <div id="product-post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="product-heading" style="padding: 0px;margin-bottom: 30px;">
                        <h2><?php echo $product_title;?></h2>
                        <img src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/images/under-heading.png" alt="<?php echo $product_title;?>" >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6 product_item">
                        <img style="width: 100%;" src="<?php echo $image;?>" alt="<?php echo $alt;?>" />
                        <div class="hover">
                            <div class="hover-iner">
                                <a class="fancybox" href="<?php echo $default_image;?>">
                                    <img src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/images/open-icon.png" alt="<?php echo $alt;?>" />
                                </a>                                    
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <h4><?php echo t('Price:').' '.$field_price;?></h4>                        
                        </div>
                        <div>
                            <h4><?php echo t('Category:').' '.$field_category;?></h4>                        
                        </div>
                        <div>
                            <h4><?php echo t('Product description:');?></h4>
                            <?php echo $product_description;?>
                        </div>     
                        <div>
                            <form method="post" class="addToCart" id="addItemToCart<?php echo $nid;?>" >
                                <input type="hidden" value="<?php echo $nid;?>" name="nid">
                                <input type="hidden" value="<?php echo $price;?>" name="price">
                                <input onkeypress="return validate_quantity(event);" type="text" id="quantity<?php echo $nid;?>" name="quantity" placeholder="<?php echo t('Quantity');?>" />
                                <input onclick="add_to_cart('addItemToCart<?php echo $nid;?>', <?php echo $nid;?>);" type="submit" class="cta button green-button text-center" value="Add to cart">
                                <div id="ajaxLoading"></div>
                                <div class="cart_result" id="cart_result<?php echo $nid;?>"></div>
                            </form>
                        </div>               
                    </div>
                </div>            
            </div>
        </div>
    </div>
<?php }?>
<?php include_once 'footer.php';?>