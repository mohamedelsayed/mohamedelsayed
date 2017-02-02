<?php if(isset($home_widgets['home_video']) && !empty($home_widgets['home_video'])){
	$item = $home_widgets['home_video'];
	$title = '';$body = '';$video_file = '';
	if(isset($item->title)){
		$title = $item->title;
	}	
	if(isset($item->body[LANGUAGE_NONE][0]['value'])){
		$body = $item->body[LANGUAGE_NONE][0]['value'];
	}
	if(isset($item->field_video_file[LANGUAGE_NONE][0]['uri'])){
		$video_file = file_create_url($item->field_video_file[LANGUAGE_NONE][0]['uri']);
	}?>
	<div id="videoDiv">
		<div id="videoBlock">
			<video width="100%" preload="preload" id="video" autoplay="autoplay" loop="loop">
				<source src="<?php echo $video_file;?>" type="video/mp4"></source>
			</video>		
		</div>
		<div class="container">
			<div class="row">
				<div class="jumbotron">
					<h1 class="small"><?php echo $title;?></h1>
					<div class="big">
						<?php echo $body;?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php }?>