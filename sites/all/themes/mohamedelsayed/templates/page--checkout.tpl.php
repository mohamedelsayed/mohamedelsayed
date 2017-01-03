<?php /**
 * @author Author "Mohamed Elsayed"  
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2016 Programming by "http://www.mohamedelsayed.net"
 */?>
<?php $base_url_with_lang = elsayed_get_base_url_with_lang();
$actual_link = elsayed_get_actual_link();
if (user_is_logged_in()) {
    $cart_summary = elsayed_get_cart_summary();
    $last_order_info = elsayed_get_last_order_info();
    if($cart_summary['default_price'] == 0){
        $redirect = $GLOBALS['base_url'];
        drupal_goto("$redirect");          
    }?>
    <?php include_once 'header.php';?>
    <div id="products-post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="product-heading">
                        <img src="https://www.paypalobjects.com/webstatic/en_US/btn/btn_pponly_142x27.png" align="Paypal" title="Paypal" />
                        <h2><?php echo t('Checkout with Paypal');?></h2>
                        <img src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/images/under-heading.png" alt="" >
                    </div>
                </div>
            </div>
            <div>
                <?php $paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
                //$paypal_url = 'https://www.paypal.com/cgi-bin/webscr';
                $paypal_id = 'paypal-facilitator@mohamedelsayed.net'; // Business email ID
                $default_currency = elsayed_get_default_currency();  
                $symbol = '';
                if(isset($default_currency->field_symbol[LANGUAGE_NONE][0]['value'])){
                    $symbol = $default_currency->field_symbol[LANGUAGE_NONE][0]['value'];
                }
                global $user;
                $user_data = user_load($user->uid);
                $email = $user->mail;
                $field_first_name = '';
                if(isset($user_data->field_first_name[LANGUAGE_NONE][0]['value'])){
                    $field_first_name = $user_data->field_first_name[LANGUAGE_NONE][0]['value'];
                }
                $field_last_name = '';
                if(isset($user_data->field_last_name[LANGUAGE_NONE][0]['value'])){
                    $field_last_name = $user_data->field_last_name[LANGUAGE_NONE][0]['value'];
                }
                require_once DRUPAL_ROOT . '/includes/locale.inc';
                $options = country_get_list();
                $country_code = elsayed_ip_info("Visitor");                
                $current_currency = elsayed_get_current_currency();
                /*$symbol = '';
                if(isset($current_currency->field_symbol[LANGUAGE_NONE][0]['value'])){
                    $symbol = $current_currency->field_symbol[LANGUAGE_NONE][0]['value'];
                }*/
                $products_json = elsayed_get_cart_json();?>
                <form onsubmit="return validate_custom_checkout_form()" id="paypal_form" action="<?php echo $paypal_url;?>" method="post">
                    <?php /*<input type="hidden" name="no_shipping" value="1">
                    <input type="hidden" name="item_number" value="1">*//*?>
                    <input type="hidden" name="paypal_url" value="<?php echo $paypal_url;?>">*/?>                
                    <?php /*<input type="hidden" name="business" value="<?php echo $paypal_id;?>">                                
                    <input type="hidden" name="amount" value="<?php echo $cart_summary['default_price'];?>">
                    <input type="hidden" name="currency_code" value="<?php echo $symbol;?>">*/?>
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="item_name" value="<?php echo variable_get('site_name').' Products';?>">
                    <input type="hidden" name="first_name" value="<?php echo $field_first_name;?>">
                    <input type="hidden" name="last_name" value="<?php echo $field_last_name;?>">
                    <input type="hidden" name="email" value="<?php echo $email;?>">
                    <input type="hidden" name="cpp_header_image" value="<?php echo $GLOBALS['base_url'].'/'.path_to_theme().'/images/logo.jpg';?>">                                
                    <input type="hidden" name="handling" value="0">
                    <input type="hidden" name="cancel_return" value="<?php echo $GLOBALS['base_url'].'/cancel_payment';?>">
                    <input type="hidden" name="return" value="<?php echo $GLOBALS['base_url'].'/success_payment';?>">
                    <input type="text" placeholder="Phone" name="phone" value="<?php echo $last_order_info['phone'];?>" class="required_input"> 
                    <input type="text" placeholder="Address" name="address1" value="<?php echo $last_order_info['address1'];?>" class="required_input">
                    <input type="text" placeholder="Address 2" name="address2" value="<?php echo $last_order_info['address2'];?>">
                    <input type='hidden' name='rm' value='2'>
                    <div class="select_country">
                        <select name="country">
                            <?php foreach ($options as $key => $option) {
                                $checked = '';
                                if(trim($last_order_info['country']) != ''){
                                    if($key == $last_order_info['country']){
                                        $checked = ' selected="selected" ';                            
                                    }
                                }elseif($key == $country_code){
                                    $checked = ' selected="selected" ';                            
                                }?>
                                <option <?php echo $checked;?> value="<?php echo $key;?>"><?php echo $option;?></option>                        
                            <?php }?>                    
                        </seleZct>
                    </div>
                    <input type="text" placeholder="Zip Code" name="zip" value="<?php echo $last_order_info['zip'];?>" class="required_input">
                    <input type="text" placeholder="City" name="city" value="<?php echo $last_order_info['city'];?>" class="required_input">                
                    <div class="submit_paypal">
                        <img onclick="jQuery('#paypal_form').submit();" src="https://www.paypalobjects.com/en_US/i/btn/x-click-but6.gif" align="Paypal" title="Paypal" />
                    </div>
                </form>
            </div>                
        </div>
    </div>    
    <?php include_once 'footer.php';?>
    <script type="text/javascript">
    var paypal_id = "<?php echo $paypal_id;?>";    
    var amount = "<?php echo $cart_summary['default_price'];?>";
    var currency_code = "<?php echo $symbol;?>";
    var products_json = '<?php echo $products_json;?>';
    </script>
<?php }else{
    $redirect = $GLOBALS['base_url'];
    drupal_goto("$redirect");  
    //drupal_access_denied();
}?>