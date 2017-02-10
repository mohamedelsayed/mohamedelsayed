<?php elsayed_redirect_user_to_admin();
global $base_url;
$arg0 = arg(0);
$active_class = 'active';
$menu_class1 = '';
$menu_class2 = '';
$menu_class3 = '';
$menu_class4 = '';
$menu_class5 = '';
$is_front_page = drupal_is_front_page();
if($is_front_page){
	$link1 = '#home';
	$link2 = '#about';
	$link3 = $base_url.'/services';	
	$link4 = '#portfolio';
	$link5 = '#contact';
	$menu_class1 = $active_class;
}else{
	$link1 = $base_url.'#home';
	$link2 = $base_url.'#about';
	$link3 = $base_url.'/services';
	$link4 = $base_url.'#portfolio';
	$link5 = $base_url.'#contact';
	$uri = $_SERVER[REQUEST_URI];
	if (strpos($uri, 'services') !== false) {
	//if($arg0 == 'services'){		
		$menu_class3 = $active_class;		
	}
}?>   
<header id="home">
	<section class="top-nav hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="top-left">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<?php /*<div class="top-right">
						<p>Location:<span>Main Street 2020, City 3000</span></p>
					</div>*/?>
				</div>
			</div>
		</div>
	</section>
	<div id="main-nav" style="margin-bottom: 10px;">
		<nav class="navbar">
			<div class="container">
				<div class="navbar-header">
					<a href="<?php echo $base_url;?>" class="navbar-brand" style="padding:0px;background-color:transparent;">
						<img src="<?php echo $base_url.'/'.path_to_theme().'/images/common/logo.png';?>" />
					</a>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftheme">
						<span class="sr-only"><?php echo __('Toggle');?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse" id="ftheme">
					<ul class="nav navbar-nav navbar-right">
						<li class="<?php echo $menu_class1;?>">
							<a href="<?php echo $link1;?>"><?php echo __('home');?></a>
						</li>
						<li class="<?php echo $menu_class2;?>">
							<a href="<?php echo $link2;?>"><?php echo __('About Me');?></a>
						</li>
						<li class="<?php echo $menu_class3;?>">
							<a href="<?php echo $link3;?>"><?php echo __('services');?></a>
						</li>
						<li class="<?php echo $menu_class4;?>">
							<a href="<?php echo $link4;?>"><?php echo __('portfolio');?></a>
						</li>
						<li class="<?php echo $menu_class5;?>">
							<a href="<?php echo $link5;?>"><?php echo __('contact');?></a>
						</li>
						<li class="hidden-sm hidden-xs">
							<a href="#" id="ss"><i class="fa fa-search" aria-hidden="true"></i></a>
						</li>
					</ul>
				</div>
				<div class="search-form">
					<form>
						<input type="text" id="s" size="40" placeholder="<?php echo __('Search');?>..." />
					</form>
				</div>
			</div>
		</nav>
	</div>
</header>