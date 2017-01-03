<?php $slider_widget = elsayed_get_slider_widget();
if(!empty($slider_widget)){?>
    <div class="banner">
	    <div class="slider_top callbacks_container"> 
	    	<div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto; width: 1140px; height: 442px; overflow: hidden;"> 
	    		<div u="loading" style="position: absolute; top: 0px; left: 0px;">
	    			<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;"></div>
	    			<div style="position: absolute; display: block; background: url(<?php echo $base_url.'/'.path_to_theme();?>/img/loading.gif) no-repeat center center;top: 0px; left: 0px;width: 100%;height:100%;"></div>
				</div>
				<div class="rslides" u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1140px; height: 442px;overflow: hidden;">			
	                <?php foreach ($slider_widget as $key => $slider) {
	                    $slider_image = $slider->field_image[LANGUAGE_NONE][0]['uri'];
	                    $image = image_style_url('default_size', $slider_image);
	                    $slider_title = $slider->title;
						$slider_link = '';
						if(isset($slider->field_link[LANGUAGE_NONE][0]['value'])){
							$slider_link = $slider->field_link[LANGUAGE_NONE][0]['value'];
						}
						$slider_blank = 0;
						if(isset($slider->field_blank[LANGUAGE_NONE][0]['value'])){
							$slider_blank = $slider->field_blank[LANGUAGE_NONE][0]['value'];
						}
						$href_code = '';
						if(trim($slider_link) != ''){
							$blank_code = '';
							if($slider_blank){
								$blank_code = ' target="_blank" ';								
							}	
							$href_code = ' href="'.$slider_link.'" '.$blank_code;					
						}?>
	                    <div>
	                    	<a <?php echo $href_code;?>>
		                    	<img alt="<?php echo $slider_title;?>" title="<?php echo $slider_title;?>" class="img-responsive" u="image" src2="<?php echo $image;?>" />
	                    	</a>
	                	</div>
	                <?php }?>
            	</div>
				<div u="navigator" class="jssorb05" style="bottom: 16px; right: 6px;">
					<div u="prototype"></div>
				</div>
				<span u="arrowright" class="jssora11l"></span> 
				<span u="arrowleft" class="jssora11r"></span>
			</div>
		</div>
	</div>
<?php }?>