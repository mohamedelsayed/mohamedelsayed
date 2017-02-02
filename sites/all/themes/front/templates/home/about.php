<?php if(isset($home_widgets['about']) && !empty($home_widgets['about'])){
	$item = $home_widgets['about'];
	$title = '';$body = '';
	if(isset($item->title)){
		$title = $item->title;
	}	
	if(isset($item->body[LANGUAGE_NONE][0]['value'])){
		$body = $item->body[LANGUAGE_NONE][0]['value'];
	}?>
	<div id="about" class="cta-1">
		<div class="container">
			<div class="row text-center white">
				<h1 class="cta-title"><?php echo $title;?></h1>
				<p class="cta-sub-title"><?php echo $body;?></p>
			</div>
		</div>
	</div>
<?php }?>