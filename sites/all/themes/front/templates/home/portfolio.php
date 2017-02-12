<?php global $base_url;$home = 1;$limit = 8;$page = 1;
$return = elsayed_get_projects($home, $limit, $page);
$projects = $return['items'];?>
<div id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				<div class="portfolio-heading">
					<h2><?php echo __('portfolio');?></h2> 
					<?php /*<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent metus magna,malesuada porta elementum vitae.</p>*/?>
				</div>
			</div>

		</div>   	
	</div>
	<?php if(!empty($projects)){?>
		<div class="portfolio-thumbnail">
			<div class="container-fluid">
				<div class="row">
					<?php foreach ($projects as $key => $project) {
						$project_title = $project->title;
				        $project_url = elsayed_get_node_url_by_id($project->nid);
				        $project_description = '';
				        if(isset($project->body[LANGUAGE_NONE][0]['value'])){
				            $project_description = elsayed_cut_string($project->body[LANGUAGE_NONE][0]['value'], 250);
				        }
				        $image = $GLOBALS['default_image'];
				        if(isset($project->field_images[LANGUAGE_NONE][0]['uri'])){
				            $image = image_style_url('medium', $project->field_images[LANGUAGE_NONE][0]['uri']);
				        }
						$project_link = '';
						if(isset($project->field_link[LANGUAGE_NONE][0]['value'])){
							$project_link = $project->field_link[LANGUAGE_NONE][0]['value'];
						}?>
						<div class="col-xs-6 col-sm-3 col-md-3">
							<div class="item">
								<a href="<?php echo $project_url;?>">
									<img src="<?php echo $image;?>" alt="<?php echo $project_title;?>">
									<div class="caption">
			                       		<i class="fa fa-search" aria-hidden="true"></i>
			                       		<p><?php echo $project_title;?></p>
			                    	</div>
		                    	</a>
							</div>
						</div>
					<?php }?>
					<div class="view_more">
                        <a href="<?php echo $base_url.'/projects';?>" class="btn btn-default view_more_btn" ><?php echo __('View More');?></a>
                    </div>
				</div>
			</div>
		</div>
	<?php }?>
</div>