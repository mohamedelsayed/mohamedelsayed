<?php global $base_url;?>
<div id="contact" class="section-padding">
	<div class="container">
		<div class="row">
			<?php if(isset($home_widgets['contact']) && !empty($home_widgets['contact'])){
			$item = $home_widgets['contact'];
			$title = '';$body = '';
			if(isset($item->title)){
				$title = $item->title;
			}	
			if(isset($item->body[LANGUAGE_NONE][0]['value'])){
				$body = $item->body[LANGUAGE_NONE][0]['value'];
			}?>
				<div class="page-title text-center">
					<h1><?php echo $title;?></h1>
					<p><?php echo $body;?></p>
					<hr class="pg-titl-bdr-btm"></hr>
				</div>
			<?php }?>
            <div id="sendmessage"><?php echo __('شكرا لرسالتك. وسوف نعود اليكم في أقرب وقت ممكن.');?></div>
            <div id="errormessage"><?php echo __('هناك مشكلة في إرسال البريد الإلكتروني. حاول مرة اخرى.');?></div>            
			<div class="form-sec">
            	<form id="contact-form" onsubmit="return validate_contact_us_form();" action="<?php echo $base_url.'/contact-us-form';?>" method="post" role="form" class="contactForm">
                	<div class="col-md-4 form-group">
                        <input type="text" name="name" id="name" class="form-control text-field-box" placeholder="<?php echo __('الاسم');?>" />
                        <div class="validation"></div>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="text" class="form-control text-field-box" name="email" id="email" placeholder="<?php echo __('البريد الالكتروني');?>"  />
                        <div class="validation"></div>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="text" class="form-control text-field-box" name="subject" id="subject" placeholder="<?php echo __('موضوع');?>"  />
                        <div class="validation"></div>
                    </div>
                    <div class="col-md-12 form-group">
                        <textarea class="form-control text-field-box" name="message" id="message" rows="5"  placeholder="<?php echo __('الرسالة');?>"></textarea>
                        <div class="validation"></div> 
                        <div id="sendmail_ajaxLoading"></div>       
                        <button class="button-medium" id="contact-submit" type="submit" name="contact"><?php echo __('ارسال');?></button>
                    </div>
                </form>
            </div>
		</div>
	</div>
</div>