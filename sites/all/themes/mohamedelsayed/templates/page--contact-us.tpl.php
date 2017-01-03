<?php /**
 * @author Author "Mohamed Elsayed"  
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2015 Programming by "http://www.mohamedelsayed.net"
 */?>
<?php $base_url_with_lang = elsayed_get_base_url_with_lang();
$arg1 = arg(1);
$node = node_load($arg1);
$actual_link = elsayed_get_actual_link();?>
<?php include_once 'header.php';?>
<div id="product-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section">
                    <h2>
                        <?php $field_sub_title = elsayed_get_node_field_value('field_sub_title', $node);
                        echo $field_sub_title;?>
                    </h2>
                    <img src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/images/under-heading.png" alt="" >
                </div>
            </div>
        </div>
        <div id="contact-us">
            <div class="container">
                <div class="row">
                    <div class="product-item col-md-12">
                        <div class="row">
                            <div class="col-md-8">  
                                <div class="message-form">
                                    <form class="send-message" id="contact-form" onsubmit="return validate_contact_us_form();" action="<?php echo $base_url_with_lang.'/contact-us-form';?>" method="post">
                                        <div class="row">
                                            <div class="name col-md-4">
                                                <input type="text" name="name" id="name" placeholder="<?php echo t('Name');?>" />
                                            </div>
                                            <div class="email col-md-4">
                                                <input type="text" name="email" id="email" placeholder="<?php echo t('Email');?>" />
                                            </div>
                                            <div class="subject col-md-4">
                                                <input type="text" name="subject" id="subject" placeholder="<?php echo t('Subject');?>" />
                                            </div>
                                        </div>
                                        <div class="row">        
                                            <div class="text col-md-12">
                                                <textarea id="message" name="text" placeholder="<?php echo t('Message');?>"></textarea>
                                            </div>   
                                        </div>                              
                                        <div class="send">
                                            <button type="submit"><?php echo t('Send');?></button>
                                        </div>
                                        <input type="hidden" name="url" value="<?php echo $actual_link;?>" />
                                        <input type="hidden" name="nid" value="<?php echo $arg1;?>" />
                                    </form>
                                    <div class="ajax_result_sendmail">        
                                        <div id="sendmail_ajaxLoading"></div>
                                        <div id="sendmail_result"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <p>
                                        <?php $body = elsayed_get_node_field_value('body', $node);
                                        echo $body;?>
                                    </p>
                                    <ul>
                                        <li><i class="fa fa-phone"></i>
                                            <?php $field_phone = elsayed_get_node_field_value('field_phone', $node);
                                            echo $field_phone;?>
                                        </li>
                                        <li><i class="fa fa-globe"></i>
                                            <?php $field_address = elsayed_get_node_field_value('field_address', $node);
                                            echo strip_tags($field_address);?>
                                        </li>
                                        <?php $field_email = '';
                                        if(isset($node->field_email[LANGUAGE_NONE][0]['email'])){
                                            $field_email = $node->field_email[LANGUAGE_NONE][0]['email'];
                                        }?>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            <a href="mailto:<?php $field_email;?>">
                                                <?php echo $field_email;?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>          
<?php include_once 'footer.php';?>