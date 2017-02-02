<?php /**
 * @author Author "Mohamed Elsayed"  
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2016 Programming by "http://www.mohamedelsayed.net"
 */?>
<?php 
if(isset($_POST['txn_id'])){
    $item_transaction = $_POST['txn_id'];// Paypal transaction ID
    ellabad_save_order($item_transaction);
    $base_url_with_lang = elsayed_get_base_url_with_lang();
    $actual_link = elsayed_get_actual_link();?>
    <?php include_once 'header.php';?>
    <div id="products-post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="product-heading">
                        <h2><?php echo t('Checkout with Paypal');?></h2>
                        <img src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/images/under-heading.png" alt="" >
                    </div>
                </div>
            </div>
            <div style="text-align: center;color: #cb0202;">
                <h1>Payment Successful, We will contact you as soon as possible</h1>
            </div>           
        </div>
    </div>
    <?php include_once 'footer.php';?>
<?php }else {
    $redirect = $GLOBALS['base_url'];
    drupal_goto("$redirect");  
    //drupal_access_denied();
}?>