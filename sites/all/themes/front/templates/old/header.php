<?php $contact_us = elsayed_get_contact_us();
$currencies = elsayed_get_currencies();
$current_currency = elsayed_get_current_currency();
$actual_link = elsayed_get_actual_link();

$search_key = '';
if(arg(0)== 'search-results' && arg(1) != ''){
    $search_key = arg(1);
}
?>
<header>
    <div id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="home-account">
                        <a href="<?php echo $GLOBALS['base_url'];?>"><?php echo t('Home');?></a>
                        <?php if (!user_is_logged_in()) { ?>
                            <a id="sign-in" class="sign-in link" title="<?php echo t('Sign in'); ?>"><?php echo t('Sign in'); ?></a>
                            <a id="sign-up" class="sign-up link" title="<?php echo t('Sign up'); ?>"><?php echo t('Sign up'); ?></a>
                        <?php } else {
                            /*$user_image = $GLOBALS['base_url'].'/'.path_to_theme().'/images/default_user_thumbnail.png';
                            if (isset($userdata->picture->uri)) {
                                $user_image = image_style_url('thumbnail', $userdata->picture->uri);
                            }*/
                            global $user;
                            $userdata = user_load($user->uid);
                            if (isset($userdata->field_first_name[LANGUAGE_NONE][0]['value'])) {
                                $field_first_name = $userdata->field_first_name[LANGUAGE_NONE][0]['value'];
                            } else {
                                $field_first_name = $userdata->name;
                            }
                            $user_url = $GLOBALS['base_url'].'/user';?>                            
                            <a><?php echo t('Hello').' '.$field_first_name;?></a>
                            <a href="<?php echo $user_url;?>"><?php echo t('My account');?></a>
                            <a href="<?php echo $GLOBALS['base_url'].'/user/edit';?>"><?php echo t('Edit Profile');?></a>
                            <a href="<?php echo $GLOBALS['base_url'].'/my_orders';?>"><?php echo t('My Orders');?></a>
                            <a href="<?php echo $GLOBALS['base_url'].'/user/logout';?>"><?php echo t('Logout');?></a>
                        <?php }?>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="cart-info" id="cart_info_widget">
                        <?php echo elsayed_get_cart_info_text();?>                        
                    </div>
                </div>
                <div class="col-md-1">
                    <?php if(!empty($currencies)){?>
                        <form method="post" class="change_currency" id="change_currency" action="<?php echo $GLOBALS['base_url'].'/change_currency';?>" >
                            <input type="hidden" value="<?php echo $actual_link;?>" name="actual_link">
                            <select name="currency_select" onchange="jQuery('#change_currency').submit();" id="currency_select" class="currency_select">
                                <?php foreach ($currencies as $key => $currency) {
                                    $selected = '';
                                    if($currency->nid == $current_currency->nid){
                                        $selected = 'selected="selected"';                                                        
                                    }
                                    $symbol = $currency->title;
                                    if(isset($currency->field_symbol[LANGUAGE_NONE][0]['value'])){
                                        $symbol = $currency->field_symbol[LANGUAGE_NONE][0]['value'];
                                    }?>
                                    <option <?php echo $selected;?> value="<?php echo $currency->nid;?>">
                                        <?php echo $symbol;?>
                                    </option>
                                <?php }?>                            
                            </select>
                        </form>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <div id="main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <a title="<?php echo variable_get('site_name');?>" href="<?php echo $GLOBALS['base_url'];?>">
                            <img src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/images/logo.jpg" title="<?php echo variable_get('site_name');?>" alt="<?php echo variable_get('site_name');?>" >
                        </a>
                    </div>
                </div>
                <?php $non_branding_categories = ellabad_get_categories_by_type(0);
                $branding_categories = ellabad_get_categories_by_type(1);?>
                <div class="col-md-6">
                    <div class="main-menu">
                        <ul class="menu">
                            <li><a href="<?php echo $GLOBALS['base_url'];?>"><?php echo t('Home');?></a></li>
                            <li><a href="#"><?php echo t('About');?></a></li>
                            <li><a href="<?php echo $GLOBALS['base_url'].'/articles';?>"><?php echo t('News');?></a></li>
                            <li><a href="<?php echo $GLOBALS['base_url'].'/products';?>"><?php echo t('Products');?></a>
                                <?php if(!empty($non_branding_categories)){?>
                                    <ul style="width: auto;overflow: hidden;">
                                        <?php foreach ($non_branding_categories as $key => $value) {?>                                            
                                            <li class="submenu" style="width: 100%;padding: 0 5px;">
                                                <a style="width: auto;white-space: nowrap; min-width: 200px" href="<?php echo $GLOBALS['base_url'].'/products/'.$key;?>" >
                                                    <?php echo $value;?>
                                                </a>
                                            </li>
                                        <?php }?>
                                    </ul>
                                <?php }?>
                            </li>
                            <li><a href="<?php echo $GLOBALS['base_url'].'/branding';?>"><?php echo t('Branding');?></a>
                                <?php if(!empty($non_branding_categories)){?>
                                    <ul style="width: auto;overflow: hidden;">
                                        <?php foreach ($branding_categories as $key => $value) {?>                                            
                                            <li class="submenu" style="width: 100%;padding: 0 5px;">
                                                <a style="width: auto;white-space: nowrap; min-width: 200px" href="<?php echo $GLOBALS['base_url'].'/branding/'.$key;?>" >
                                                    <?php echo $value;?>
                                                </a>
                                            </li>
                                        <?php }?>
                                    </ul>
                                <?php }?>
                            </li>
                            <?php if(!empty($contact_us)){?>
                                <li>
                                    <a href="<?php echo elsayed_get_node_url_by_id($contact_us->nid);?>"><?php echo $contact_us->title;?></a>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="search-box">  
                        <form name="search_form" method="get" class="search_form" id="search_form" action="<?php echo $GLOBALS['base_url'];?>/search-results">
                            <input id="search_key" type="text" name="key" value="<?php echo $search_key ?>" placeholder="Search"/>
                            <input type="submit" id="search-button" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div id="mesagepopboxlogin" class="mesage-pop" >
    <div class="mesagecontent">
        <h4><?php echo t('Sign in');?><span class="closealert" id="closelogin">X</span></h4>
        <?php include('loginbox.php');?>       
    </div>
    <div class="mesage-pop-bg"></div>
</div>
<div id="mesagepopboxregister" class="mesage-pop" >
    <div class="mesagecontent">
        <h4><?php echo t('Sign up'); ?><span class="closealert" id="closeregister">X</span></h4>
        <?php include_once('registerbox.php'); ?>       
    </div>
    <div class="mesage-pop-bg"></div>
</div>
<div id="mesagepopboxforgotpassword" class="mesage-pop" >
    <div class="mesagecontent">
        <h4><?php echo t('Forgot password'); ?><span class="closealert" id="closeforgotpassword">X</span></h4>
        <?php include_once('forgotpasswordbox.php'); ?>     
    </div>
    <div class="mesage-pop-bg"></div>
</div>
<div id="messagestop">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php print '<div class="messagesdiv" style="">'.$messages.'</div>'; ?>
            </div>
        </div>
    </div>
</div>