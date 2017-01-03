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
                    <h2><?php echo t('My Orders');?></h2>
                    <img src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/images/under-heading.png" alt="" >
                </div>
            </div>
        </div>
        <?php
        global $user;
        if(user_is_logged_in() && $user->uid != 0){            
            $uid = $user->uid;
            global $base_url;
            $status = arg(1);
            $status_val = '';
            $class_all = '';
            $class_active = '';
            $class_pending = '';
            $class_all = 'active';
            if($status == 'all'){
                $class_all = 'active';
            }elseif($status == 'active'){
                $class_all = '';
                $status_val = 1;
                $class_active = 'active';
            } else if($status == 'pending') {
                $class_all = '';
                $class_pending = 'active';
                $status_val = 0;
            }
            $my_orders = ellabad_get_my_orders($uid, $status_val);
            ?>
            <ul class="action-links">
                <li><a class="<?php echo $class_all ?>" href="<?php echo $base_url ?>/my_orders/all">All</a></li>
                <li><a class="<?php echo $class_active ?>" href="<?php echo $base_url ?>/my_orders/active">Active</a></li>
                <li><a class="<?php echo $class_pending ?>" href="<?php echo $base_url ?>/my_orders/pending">Pending</a></li>
            </ul>            
            <div class="container">
                <div class="row">
                    <div class="table-responsive">                  
                    <?php 
                    if(!empty($my_orders)) {?>
                        <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <?php /*<th>User Name</th>*/?>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Total Amount</th>
                        <th>Operations</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($my_orders as $key => $order) {?>
                            <tr>
                                <td><?php echo $order->id  ?></td>                        
                                <?php /*<td><?php echo ellabad_get_user_realname($order->uid) ?></td>*/?>                        
                                <td><?php echo ellabad_get_order_status($order->status)   ?></td>                        
                                <td><?php echo date('Y-m-d H:i:s', $order->created)   ?></td>                        
                                <td><?php echo ellabad_order_total($order->id)  ?></td>                                 
                                <td><span class="label label-info"><a href="<?php echo $base_url.'/order_item/'.$order->id ?>">View</a></span></td>
                            </tr>
                    <?php 
                        }?>
                        </tbody>
                  </table>
                    <?php }else{?>
                        <div style="width:100%;text-align:center;float:left">No results found</div>
                        <?php }
                    ?>                    
                </div>
                </div>
            </div>
            <?php
        } else {
            $redirect = $GLOBALS['base_url'];
            drupal_goto("$redirect");
        } ?>
    </div>
</div>
<?php include_once 'footer.php';?>