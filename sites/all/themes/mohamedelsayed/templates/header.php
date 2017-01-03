<?php global $base_url;
$site_name = variable_get('site_name');
$header_menu = elsayed_get_header_menu();?>
<div class="top-nav header">
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header navbar-left">
				<div class="wow slideInLeft animated" data-wow-delay=".1s" style="visibility: visible; -webkit-animation-delay: .1s;">
					<a title="<?php echo $site_name;?>" href="<?php echo $base_url;?>">
						<img src="<?php echo $base_url.'/'.path_to_theme();?>/images/logo.png" alt="<?php echo $site_name;?>" class="img-responsive" />
					</a>
				</div>
			</div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            	<span class="sr-only">Toggle navigation</span>
            	<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<?php if(!empty($header_menu)){?>
				<div class="collapse navbar-collapse navbar-right wow slideInRight animated" id="bs-example-navbar-collapse-1" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<ul class="nav navbar-nav navbar-left">
						<?php foreach ($header_menu as $key => $value) {?>
							<li class="hvr-bounce-to-bottom <?php echo $value['class'];?>">
								<a href="<?php echo $value['link'];?>"><?php echo $value['title'];?></a>
							</li>
						<?php }?>
					</ul>	
					<div class="clearfix"> </div>
				</div>
			<?php }?>
		</div>	
	</nav>		
</div>	