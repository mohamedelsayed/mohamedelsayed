<?php /**
 * @author Author "Mohamed Elsayed"  
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2016 Programming by "http://www.mohamedelsayed.net"
 */?>
<?php $base_url_with_lang = elsayed_get_base_url_with_lang();
$actual_link = elsayed_get_actual_link();?>
<?php include_once 'header.php';?>
<div id="products-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="product-heading">
                    <h2><?php echo t('Cart');?></h2>
                    <img src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/images/under-heading.png" alt="" >
                </div>
            </div>
        </div>        
        <?php $records = elsayed_get_cart();
        $current_currency = elsayed_get_current_currency();
        $field_value_versus_default = 0;    
        if(isset($current_currency->field_value_versus_default[LANGUAGE_NONE][0]['value'])){
            $field_value_versus_default = $current_currency->field_value_versus_default[LANGUAGE_NONE][0]['value'];
        }
        if(isset($current_currency->field_default[LANGUAGE_NONE][0]['value'])){
            if($current_currency->field_default[LANGUAGE_NONE][0]['value'] == 1){
                $field_value_versus_default = 1;
            }
        }
        $symbol = '';
        if(isset($current_currency->field_symbol[LANGUAGE_NONE][0]['value'])){
            $symbol = $current_currency->field_symbol[LANGUAGE_NONE][0]['value'];
        }
        $total_price = 0;
        if(!empty($records)){?>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-10 col-md-offset-1">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Total</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <form method="post" action="<?php echo $GLOBALS['base_url'].'/update_cart';?>">
                                <?php foreach ($records as $key => $record) {
                                    $quantity = $record->quantity;                                    
                                    $price = $record->price;
                                    $price = $price * $field_value_versus_default;
                                    $price_total_in = $quantity * $price;
                                    $total_price += $price_total_in;
                                    $product = node_load($record->nid);
                                    if(!empty($product)){
                                        $product_title = $product->title;
                                        $product_url = elsayed_get_node_url_by_id($product->nid);
                                        $image = $GLOBALS['default_image'];
                                        $default_image = $GLOBALS['default_image'];
                                        $alt = '';
                                        if(isset($product->field_images[LANGUAGE_NONE][0]['uri'])){
                                            $image = image_style_url('thumbnail', $product->field_images[LANGUAGE_NONE][0]['uri']);
                                            $alt = $product->field_images[LANGUAGE_NONE][0]['alt'];
                                            $default_image = image_style_url('default_size', $product->field_images[LANGUAGE_NONE][0]['uri']);
                                        }?>
                                        <tr>
                                            <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <a class="thumbnail pull-left" href="<?php echo $product_url;?>">
                                                    <img class="media-object" src="<?php echo $image;?>" style="width: 72px;">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading" style="margin-top: 30px;"><a href="<?php echo $product_url;?>"><?php echo $product_title;?></a></h4>
                                                </div>
                                            </div></td>
                                            <td class="col-sm-1 col-md-1" style="text-align: center">
                                            <input name="<?php echo $record->id;?>" type="number" class="form-control" id="exampleInputEmail1" value="<?php echo $quantity;?>">
                                            </td>
                                            <td class="col-sm-1 col-md-1 text-center" style="padding-top: 40px;"><strong><?php echo $price.$symbol;?></strong></td>
                                            <td class="col-sm-1 col-md-1 text-center" style="padding-top: 40px;"><strong><?php echo $price_total_in.$symbol;?></strong></td>
                                            <td class="col-sm-1 col-md-1" style="padding-top: 30px;">
                                            <button type="button" class="btn btn-danger" onclick="window.location='<?php echo $GLOBALS['base_url'].'/remove_from_cart/'.$record->nid;?>'">
                                                <span class=""></span> Remove
                                            </button></td>
                                        </tr>
                                    <?php }?>
                                <?php }?>
                                <?php /*<tr>
                                    <td>   </td>
                                    <td>   </td>
                                    <td>   </td>
                                    <td><h5>Subtotal</h5></td>
                                    <td class="text-right"><h5><strong>$24.59</strong></h5></td>
                                </tr>
                                <tr>
                                    <td>   </td>
                                    <td>   </td>
                                    <td>   </td>
                                    <td><h5>Estimated shipping</h5></td>
                                    <td class="text-right"><h5><strong>$6.94</strong></h5></td>
                                </tr>*/?>
                                <tr>
                                    <td>   </td>
                                    <td>   </td>
                                    <td>   </td>
                                    <td><h3>Total</h3></td>
                                    <td class="text-right"><h3><strong><?php echo $total_price.$symbol;?></strong></h3></td>
                                </tr>
                                <tr>
                                    <td>   </td>
                                    <td>   </td>
                                    <td>   </td>
                                    <td>
                                    <button name="continue" type="submit" class="btn btn-default">
                                        <span class=""></span> Continue Shopping
                                    </button></td>
                                    <td>
                                    <button name="checkout" type="submit" class="btn btn-success">
                                        Checkout <span class=""></span>
                                    </button></td>
                                </tr>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>
<?php include_once 'footer.php';?>