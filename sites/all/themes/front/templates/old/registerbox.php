<?php if(!user_is_logged_in()){
    $actual_link = elsayed_get_actual_link();?>
	<div id="validationuserregister" class="validationuserregister"></div>
	<?php //print drupal_render(drupal_get_form('user_register_form'));?>
	<form onsubmit="return addValidationRegister()" class="user-info-from-cookie" enctype="multipart/form-data" action="<?php echo $GLOBALS['base_url'].'/register-form';?>" method="post" id="ajaxuserregisterform" accept-charset="UTF-8" >
		<div>
			<?php /*<div class="block-tit clearfix">
				<h2 class="block-title">Sign up</h2>
			    <div class="block-tit-line"></div>
			</div>*/?>
			<div class="settings clearfix">
				<div>
					<div class="form-wrapper">
						<div class="form-item form-type-textfield form-item-name">
                        	<!--[if IE]>
			<label><?php echo t('Username');?></label>
		<![endif]-->	<label for="name" class="lable-hidden">username</label>
							<input class="username form-text " placeholder="<?php echo t('Username');?>" type="text" id="name" name="name" value="" size="60" maxlength="60"/>
							<div id="validationuserregistername" class="validationuserregister validationuserregistername"></div>
						</div>
						<div class="form-item form-type-textfield form-item-mail">
							<!--[if IE]>
			<label><?php echo t('E-mail address');?></label>
		<![endif]-->         <label for="mail" class="lable-hidden">email</label>
                            <input placeholder="<?php echo t('E-mail address');?>" type="text" name="mail" id="mail" value="" size="60" maxlength="254" class="form-text "/>
							<div id="validationuserregistermail" class="validationuserregister validationuserregistermail"></div>
						</div>
						<div class="form-item form-type-password form-item-pass-pass1 ">
                        	<!--[if IE]>
			<label><?php echo t('Password');?></label>
		<![endif]-->		<label for="edit-pass-pass1" class="lable-hidden">password</label>				
							<input class="password-field form-text  password-processed" type="password" id="edit-pass-pass1" name="pass1"  size="25" maxlength="128" placeholder="<?php echo t('Password');?>"/>
							<div id="validationuserregisterpass" class="validationuserregister validationuserregisterpass"></div>
						</div>
						<div class="form-item form-type-password form-item-pass-pass2 ">
                        <!--[if IE]>
			<label><?php echo t('Confirm password');?></label>
		<![endif]--><label for="edit-pass-pass2" class="lable-hidden">password confirm</label>
							<input class="password-field form-text " type="password" id="edit-pass-pass2" name="pass2" size="25" maxlength="128" placeholder="<?php echo t('Confirm password');?>"/>
						</div>
						<div class="field-type-text field-name-field-first-name field-widget-text-textfield form-wrapper" id="edit-field-first-name">
							<div id="field-first-name-add-more-wrapper">
								<div class="form-item form-type-textfield form-item-field-first-name-und-0-value">
									<!--[if IE]>
			<label><?php echo t('First Name');?></label>
		<![endif]--> <label for="edit-field-first-name-und-0-value" class="lable-hidden">first name</label>
                                    <input class="text-full form-text " type="text" id="edit-field-first-name-und-0-value" name="field_first_name" value="" size="60" maxlength="255" placeholder="<?php echo t('First Name');?>"/>
									<div id="validationuserregisterfname" class="validationuserregister validationuserregisterfname"></div>
								</div>
							</div>
						</div>
						<div class="field-type-text field-name-field-last-name field-widget-text-textfield form-wrapper" id="edit-field-last-name">
							<div id="field-last-name-add-more-wrapper">
								<div class="form-item form-type-textfield form-item-field-last-name-und-0-value">
                                <!--[if IE]>
			<label><?php echo t('Last Name');?></label>
		<![endif]-->				<label for="edit-field-last-name-und-0-value" class="lable-hidden">last name</label>
									<input class="text-full form-text " type="text" id="edit-field-last-name-und-0-value" name="field_last_name" value="" size="60" maxlength="255" placeholder="<?php echo t('Last Name');?>"/>
									<div id="validationuserregisterlname" class="validationuserregister validationuserregisterlname"></div>
								</div>
							</div>
						</div>
						<div class="form-actions form-wrapper">
							<label for="registersubmit" class="lable-hidden">register button</label>
							<input type="submit" id="registersubmit" name="op" value="<?php echo t('Create new account');?>" class="form-submit"/>
						</div>						
					</div>
				</div>
			</div>
			<div id="returndata"></div>
		</div>
	</form>
<?php } ?>