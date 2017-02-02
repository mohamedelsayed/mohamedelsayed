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
                    <h2><?php echo t('Order Details');?></h2>
                    <img src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/images/under-heading.png" alt="" >
                </div>
            </div>
        </div>
        <?php
        if(user_is_logged_in()){
            $order_id = arg(1);
            global $base_url;
            global $user;
            //get order iformation
            $order = ellabad_get_order_details($order_id);
            if($order['info']->uid == $user->uid) {
                require_once DRUPAL_ROOT . '/includes/locale.inc';
                $options = country_get_list();
                $country_name = '';
                if(isset($options[$order['info']->country])) {
                    $country_name =$options[$order['info']->country];
                }
                ?>
                <br><b> Order basic info</b>
                <div class="container">
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>             
                                <tr>
                                    <th data-field="key" >ID</th>
                                    <th data-field="value"><?php echo $order['info']->id ?></th>
                                </tr>                   
                                <tr>
                                    <th data-field="key" >Status</th>
                                    <th data-field="value"><?php echo ellabad_get_order_status($order['info']->status) ?></th>
                                </tr>
                                <tr>
                                    <th data-field="key" >Phone</th>
                                    <th data-field="value"><?php echo $order['info']->phone ?></th>
                                </tr>
                                <tr>
                                    <th data-field="key" >Address</th>
                                    <th data-field="value"><?php echo $order['info']->address1  ?></th>
                                </tr>
                                <tr>
                                    <th data-field="key" >Address2</th>
                                    <th data-field="value"><?php echo $order['info']->address2  ?></th>
                                </tr>
                                <tr>
                                    <th data-field="key" >Country</th>
                                    <th data-field="value"><?php echo $country_name  ?></th>
                                </tr>
                                <tr>
                                    <th data-field="key" >City</th>
                                    <th data-field="value"><?php echo$order['info']->city  ?></th>
                                </tr>
                                <tr>
                                    <th data-field="key" >ZIP</th>
                                    <th data-field="value"><?php echo $order['info']->zip  ?></th>
                                </tr>
                                <tr>
                                    <th data-field="key" >Created</th>
                                    <th data-field="value"><?php echo date('Y-m-d H:i:s', $order['info']->created);  ?></th>
                                </tr>
                                <tr>
                                    <th data-field="key" >Paypal Transaction ID</th>
                                    <th data-field="value"><?php echo $order['info']->paypal_transaction_id;  ?></th>
                                </tr>
                                <tr>
                                    <th data-field="key" >Total Amount</th>
                                    <th data-field="value"><?php echo ellabad_order_total($order['info']->id);  ?></th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>                
               <br><b> Order items</b>
                <div class="container">
                    <div class="row">
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                          </tr>
                        </thead>
                        <tbody> 
                        <?php             
                        if(!empty($order['items'])){
                            foreach ($order['items'] as $key => $item) {
                            $product_url = elsayed_get_node_url_by_id($item->nid);
                            $product_link= '<a href="'.$product_url.'">'.$item->title.'</a>';
                        ?>
                        <tr>
                                <td><?php echo  $item->nid ?></td>
                                <td><?php echo$product_link ?></td>
                                <td><?php echo $item->quantity ?></td>
                                <td><?php echo$item->price ?></td>
                        </tr>
                        <?php
                            } 
                        }
                        ?>
                        <tr>
                            <td colspan="3">Total Amount</td>
                            <td><?php echo ellabad_order_total($order['info']->id)?></td>
                        </tr>  
                        </tbody>
                      </table>
                    </div>
                    </div>
                </div>
                
            <?php
            } else {
                return "You are not authorized to view this page";
            }            
        }?>
    </div>
</div>
<?php include_once 'footer.php';?>