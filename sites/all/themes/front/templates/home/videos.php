<div id="service" class="section-padding">
	<div class="container">
		<?php if(isset($home_widgets['videos']) && !empty($home_widgets['videos'])){
			$item = $home_widgets['videos'];
			$title = '';$body = '';
			if(isset($item->title)){
				$title = $item->title;
			}	
			if(isset($item->body[LANGUAGE_NONE][0]['value'])){
				$body = $item->body[LANGUAGE_NONE][0]['value'];
			}?>
			<div class="row">
				<div class="page-title text-center">
					<h1><?php echo $title;?></h1>
					<p><?php echo $body;?></p>
					<hr class="pg-titl-bdr-btm"></hr>
				</div>
			</div>
		<?php }?>
		<?php $category = 0;$home = 1;$limit = 3;$page = 1;
        $return = elsayed_get_videos($category, $home, $limit, $page);
        $videos = $return['items'];?>
		<div class="content-bottom">
			<script type="text/javascript">
			jQuery(document).ready(function () {
				jQuery('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true   // 100% fit in a container
				});
			});
			</script>
		   	<?php if(!empty($videos)){?>
		   		<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
		   			<ul class="resp-tabs-list">
		   				<?php $i = 0;
		   				foreach ($videos as $key => $video) {
		   					$video_title = $video->title;
							$image = $GLOBALS['default_image'];
					        if(isset($video->field_image[LANGUAGE_NONE][0]['uri'])){
					            $image = image_style_url('medium', $video->field_image[LANGUAGE_NONE][0]['uri']);
					        }?>
		   					<li class="resp-tab-item" aria-controls="tab_item-<?php echo $i++;?>" role="tab">
		   						<span>
		   							<img src="<?php echo $image;?>" class="img-responsive" alt="<?php echo $video_title;?>"/>
	   							</span>
	   							<p><?php echo $video_title;?></p>
   							</li>
						<?php }?>
						<div class="clear"></div>
		  			</ul>		
		  			<div class="resp-tabs-container" >
		  				<?php $i = 0;
		   				foreach ($videos as $key => $video) {
		   					$video_title = $video->title;
							$image = $GLOBALS['default_image'];
					        if(isset($video->field_image[LANGUAGE_NONE][0]['uri'])){
					            $image = image_style_url('thumbnail', $video->field_image[LANGUAGE_NONE][0]['uri']);
					        }
							$youtube_link = '';
					        if(isset($video->field_youtube_link[LANGUAGE_NONE][0]['value'])){
					        	$youtube_link = $video->field_youtube_link[LANGUAGE_NONE][0]['value'];
					        }
							$video_file = '';
							if(isset($video->field_video_file[LANGUAGE_NONE][0]['uri'])){
								$video_file = file_create_url($video->field_video_file[LANGUAGE_NONE][0]['uri']);
							}?>
			  				<div class="tab-<?php echo $i++;?> resp-tab-content" aria-labelledby="tab_item-<?php echo $i++;?>" style="">
			  					<div class="facts" style="">
			  						<?php if($video_file != ''){?>
			  							<video style="object-fit: fill;min-height: 532px;" width="100%" height="100%" controls>
											<source src="<?php echo $video_file;?>" type="video/mp4"></source>
										</video>	
									<?php }elseif($youtube_link != ''){
										parse_str( parse_url( $youtube_link, PHP_URL_QUERY ), $my_array_of_vars );
										$youtube_id = $my_array_of_vars['v'];?>
				  						<iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $youtube_id;?>" frameborder="0" allowfullscreen></iframe>
			  						<?php }?>
		  						</div>
	  						</div>		
  						<?php }?>	  						
		  			</div>
		  			<div class="col-md-12">
		            	<a class="inpt" href="<?php echo $base_url.'/'.'videos';?>"><?php echo __('المزيد');?></a>
		            </div>	
	  			</div>	
  			<?php }?>
	 	</div>
	</div>
</div>