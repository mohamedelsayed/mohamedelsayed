<?php global $sitelang; ?>
<?php global $base_url; ?>
<?php
$title = __('contact me');
$body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent metus magna,malesuada porta elementum vitae.';
if (isset($home_widgets['contact']) && !empty($home_widgets['contact'])) {
    $item = $home_widgets['contact'];
    $title = '';
    $body = '';
    if (isset($item->title)) {
        $title = $item->title;
    }
    if (isset($item->body[LANGUAGE_NONE][0]['value'])) {
        $body = $item->body[LANGUAGE_NONE][0]['value'];
    }
}
?>
<div id="get-touch">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <div class="get-touch-heading">
                    <h2><?php echo $title; ?></h2>
                    <div><?php echo $body; ?></div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="row">
                <div id="sendmessage"><?php echo __('Thank you for your message. I will get back to you as soon as possible.'); ?></div>
                <div id="errormessage"><?php echo __('There is a problem in sending mail. Try again.'); ?></div>
                <form id="contact-form" onsubmit="return validate_contact_us_form();" action="<?php echo $base_url . '/contact-us-form'; ?>" method="post" role="form" class="form contactForm">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control text-field-box" placeholder="<?php echo __('Your Name'); ?>" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control text-field-box" name="email" id="email" placeholder="<?php echo __('Your Email'); ?>"  />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control text-field-box" name="subject" id="subject" placeholder="<?php echo __('Subject'); ?>"  />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control text-field-box" name="message" id="message" rows="5"  placeholder="<?php echo __('Message'); ?>"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6Ldz9gATAAAAAG0aaBDQYGT_qhdmC3sdS0iI1BJq"></div>
                        <div id="sendmail_ajaxLoading"></div>
                    </div>
                    <div class="submit">
                        <button class="btn btn-default" id="contact-submit" type="submit"><?php echo __('Send Now'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /* <!--contact-->
  <div id="contact">
  <div class="container">
  <div class="row">
  <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
  <div class="contact-heading">
  <h2>contact</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent metus magna,malesuada porta elementum vitae.</p>
  </div>
  </div>
  </div>
  </div>
  <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
  </div>
  <!--client-->
  <div id="client">
  <div class="container">
  <div class="row">
  <div class="col-sm-4 col-md-2">
  <span></span><img src="<?php echo $base_url.'/'.path_to_theme().'/images';?>/client/client1.png" alt="">
  </div>
  <div class="col-sm-4 col-md-2">
  <span></span><img src="<?php echo $base_url.'/'.path_to_theme().'/images';?>/client/client2.png" alt="">
  </div>
  <div class="col-sm-4 col-md-2">
  <span></span><img src="<?php echo $base_url.'/'.path_to_theme().'/images';?>/client/client3.png" alt="">
  </div>
  <div class="col-sm-4 col-md-2">
  <span></span><img src="<?php echo $base_url.'/'.path_to_theme().'/images';?>/client/client4.png" alt="">
  </div>
  <div class="col-sm-4 col-md-2">
  <span></span><img src="<?php echo $base_url.'/'.path_to_theme().'/images';?>/client/client5.png" alt="">
  </div>
  <div class="col-sm-4 col-md-2">
  <span></span><img src="<?php echo $base_url.'/'.path_to_theme().'/images';?>/client/client6.png" alt="">
  </div>
  </div>
  </div>
  </div> */ ?>
<style type="text/css">
    .g-recaptcha{
        float: left;
        width: 100%;
        margin-bottom:10px;
    }
</style>