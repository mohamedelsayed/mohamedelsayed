<?php if (!user_is_logged_in()) { ?>
    <div class="login-box">
        <div class="login-box-data">
            <div class="login-box-email clearfix">             
                <div  class="validationuserlogin"></div>
                <?php $user_login_form = drupal_get_form('user_login');
                print drupal_render($user_login_form); ?>
                <div class="login-box-terms">
                    <a class="lostpassword link" onclick="openforgotpasswordpopup();" title="<?php echo t('Forgot password?'); ?>" ><?php echo t('Forgot password?'); ?></a>
                </div>
                <div class="login-box-reg"><?php echo t("Don't have an account"); ?> 
                    <a class="link" onclick="opensignuppopup();" title="<?php echo t('Sign up'); ?>"><?php echo t('Sign up'); ?></a>
                </div>
            </div>
        </div>
    </div>   
<?php } ?>
