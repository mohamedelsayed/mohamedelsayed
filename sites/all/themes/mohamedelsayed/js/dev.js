/**
 * @author Author "Mohamed Elsayed"  
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2016 Programming by "http://www.mohamedelsayed.net"
 */
jQuery(document).ready(function(){
	jQuery("form#contact-form").submit(function(e){
		e.preventDefault();
	});
	jQuery("form.addToCart").submit(function(e){
		e.preventDefault();
	});
	jQuery('.sign-in').click(function(){ 
		open_signin_popup();
  	});
    jQuery('.sign-up').click(function(){ 
    	opensignuppopup();
  	});
  	jQuery('.closealert').click(function(){ 
  		close_mesage_pop();  		
  	});
  	jQuery('.mesage-pop-bg').click(function(){
  		close_mesage_pop();
  	});	
  	var href = jQuery(location).attr('href');
  	if(href.indexOf("#sign-in") > - 1){
  		open_signin_popup();
	}
	jQuery("#paypal_form input.required_input").on("change paste keyup", function() {
		validate_required_input(jQuery(this));
	});
	jQuery("form#search_form").submit(function(e){
		e.preventDefault();
		var key = jQuery("#search_key").val();
		window.location.href = base_url+'/search-results/'+key;
	});
});
// contactus form functions
function isValidEmailAddress(emailAddress){
	var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
};
function validate_contact_us_form(){
	var error = ''; 
	if(jQuery("#name").val().length === 0){
		error = error + 'You must enter your Name.<br />';
		jQuery("#name").addClass("required");
    }else{
    	jQuery("#name").removeClass("required");
	}
	if(!isValidEmailAddress(jQuery("#email").val())){
		error = error + 'You must enter valid Email.<br />';
		jQuery("#email").addClass("required");
	}else{
		jQuery("#email").removeClass("required");
	}
	if(jQuery("#subject").val().length === 0){
		error = error + 'You must enter your Subject.<br />';
		jQuery("#subject").addClass("required");
	}else{
		jQuery("#subject").removeClass("required");
	}
	if(jQuery("#message").val().length === 0){
		error = error + 'You must enter your Message.<br />';
		jQuery("#message").addClass("required");
	}else{
		jQuery("#message").removeClass("required");
	}	
	/*if(isNaN(jQuery("#phone").val()) || jQuery("#phone").val().length === 0){
		error = error + 'You must enter your Phone.<br />';
		jQuery("#phone").addClass("required");
	}else{
		jQuery("#phone").removeClass("required");
	}*/
	if(error.length !== 0){                         
	}else{  
		jQuery.ajax({
			url: base_url+'/contact-us-form',
            type: 'POST',
            data: jQuery('form#contact-form').serialize(),
            async: false,
            beforeSend: function(){
            	jQuery('#sendmail_result').hide();
                jQuery('#sendmail_ajaxLoading').show(); 
            },
            success:function(result){
            	jQuery('#sendmail_ajaxLoading').hide();
                jQuery('#sendmail_result').html(result).show();
                jQuery("form#contact-form")[0].reset();
            }
		});             
	}   
}
// sign in & sign up & forget password functions
function addValidationRegister(){
	var myform = jQuery('#ajaxuserregisterform');
	var formData = jQuery(myform).serialize();
	var flag = false;
	jQuery.ajax({
		type: 'POST',
		url: base_url+'/ajax_signup',
		async: false,
		data: formData,
		beforeSend: function(){
		},
		success: function(result){			
			//result = result.html.replace(/ /g, '');
			//result = result.trim();
			if(result.error == 0){
				//console.log('xxx');
				flag = true;
				//return true;
				//jQuery('#ajaxuserregisterform').submit();
			} else{
				flag = false;
				jQuery("#returndata").html(result.html);
				//flag = false;return false;
			}
		}
	});
	return flag;
}
function opensignuppopup(){
	close_mesage_pop();
	jQuery("#mesagepopboxregister").show();
	jQuery('body').addClass("mobile-menu-opend");
}
function openforgotpasswordpopup(){
	close_mesage_pop();
	jQuery("#mesagepopboxforgotpassword").show();
	jQuery('body').addClass("mobile-menu-opend");
}
function open_signin_popup(){
	close_mesage_pop();
	jQuery("#mesagepopboxlogin").show();                         
  	jQuery('body').addClass("mobile-menu-opend");    
}
function close_mesage_pop(){
	jQuery(".mesage-pop").hide(); 
  	jQuery('body').removeClass("mobile-menu-opend");  
}
//cart functions
function validate_quantity(e){ 
	var key = e.which || e.keyCode; 
	var flag = 0;	
	if(key == 8){
		flag = 1;		
	}
	if(e.charCode >= 48 && e.charCode <= 57){
		flag = 1;			
	}
    if(flag == 1){
    	return true;    	
    }else{
    	return false;
    }
}
function add_to_cart(form_id, nid){
	var quantity = jQuery('#quantity'+nid).val();
	if(quantity.length === 0){
		jQuery('#quantity'+nid).addClass("required");
	}else if(quantity == 0){
		jQuery('#quantity'+nid).addClass("required");
	}else{
		jQuery('#quantity'+nid).removeClass("required");
		jQuery.ajax({
			url: base_url+'/add_to_cart',
	        type: 'POST',
	        dataType: 'json',
	        data: jQuery('form#'+form_id).serialize(),
	        //async: false,
	        beforeSend: function(){
	        	jQuery('#cart_result'+nid).hide();
	            jQuery('#ajaxLoading').show(); 
	        },
	        complete:function(result){
	        	if(result.responseText.indexOf("login") > - 1){
			  		open_signin_popup();
				}
	        	jQuery('#ajaxLoading').hide();
	            jQuery('#cart_result'+nid).html(result.responseText).show();
	            jQuery('form#'+form_id)[0].reset();
	            refresh_cart_info_text();
	        }
		});  
	}           	
}
function refresh_cart_info_text(){
	jQuery.ajax({
		url: base_url+'/refresh_cart_info_text',
        type: 'POST',
        dataType: 'json',
        data: {},
        beforeSend: function(){
    	},
        complete:function(result){
        	jQuery('#cart_info_widget').html(result.responseText);
        }
	});  
}
function validate_required_input(obj){
	var val = obj.val();
	if (jQuery.trim(val).length !== 0){
		if(obj.hasClass('required')){
			obj.removeClass("required");			
		}
	}else{
		if(!(obj.hasClass('required'))){
			obj.addClass("required");			
		}			
	}
}
function isNumeric(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}
function validate_custom_checkout_form(){
	var custom_course_form_error = 0;
	var focused = 0;	
	jQuery("#paypal_form input.required_input").each(function(){
		validate_required_input(jQuery(this));
	});
	jQuery('input, select').each(function(){
		if(jQuery(this).hasClass('required')){ 
			custom_course_form_error = 1;
			if(focused == 0){
	    		focused = 1;
		    	jQuery(this).focus();
		    }
		}
	});
	if(custom_course_form_error === 0){		
		attach_hidden_input_to_paypal_form('business', paypal_id);
		attach_hidden_input_to_paypal_form('amount', amount);
		attach_hidden_input_to_paypal_form('currency_code', currency_code);		
		createCookie('cart_products', products_json);
		jQuery("#paypal_form input").each(function(){
			createCookie('cart_'+jQuery(this).attr('name'), jQuery(this).val());
		});
		jQuery("#paypal_form select").each(function(){
			createCookie('cart_'+jQuery(this).attr('name'), jQuery(this).val());
		});
		return true;
		//return false;
	}else{
		return false;
	}
}
function createCookie (name, value) {
	jQuery.cookie(name, value, {expires: 365, path: '/'});  
}
function attach_hidden_input_to_paypal_form (name, value) {
	var hidden_input = jQuery("<input>")
    .attr("type", "hidden")
    .attr("name", name)
    .attr("value", value);
    jQuery('#paypal_form').append(jQuery(hidden_input));  
}