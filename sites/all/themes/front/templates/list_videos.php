<?php if(!empty($videos)){?>  
    <?php foreach ($videos as $key => $video) {
        $video_title = $video->title;
        //$video_url = elsayed_get_node_url_by_id($video->nid);
        /*$video_description = '';
        if(isset($video->body[LANGUAGE_NONE][0]['value'])){
            $video_description = elsayed_cut_string($video->body[LANGUAGE_NONE][0]['value'], 250);
        }*/
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
		<div id="myBtn" class="view_1 view_1-eighth filimg col-md-4 col-sm-4 col-xs-12" data-myorder="2">
			<a title="<?php echo $video_title;?>">
				<img src="<?php echo $image;?>" class="img-responsive" alt="<?php echo $video_title;?>" />
			</a>
			<div class="mask">
				<a title="<?php echo $video_title;?>" onclick="open_popup('video_item_hidden<?php echo $video->nid;?>', '<?php echo $video_title;?>');">
					<h4><?php echo $video_title;?></h4>
				</a>
			</div>                     
			<div class="video_item_hidden<?php echo $video->nid;?>" style="display: none;">
				<?php if($video_file != ''){?>
					<video style="object-fit: fill;max-height: 450px;" width="100%" height="100%" controls>
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
    <?php $paging = elsayed_draw_paging($page_count, $page);
    echo $paging;?>  
<?php }else{ ?>
    <div style="width:100%;text-align:center;float:left"><?php echo __('No results found');?></div>
<?php }?>