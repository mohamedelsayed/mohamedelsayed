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
	$link1 = '#videoDiv';
	$link2 = '#about';
	$link3 = '#portfolio';	
	$link4 = '#service';
	$link5 = '#contact';
	$menu_class1 = $active_class;
}else{
	$link1 = $base_url.'#videoDiv';
	$link2 = $base_url.'#about';
	$link3 = $base_url.'/products';	
	$link4 = $base_url.'/videos';
	$link5 = $base_url.'#contact';
	if($arg0 == 'products'){
		$menu_class3 = $active_class;		
	}elseif($arg0 == 'videos'){
		$menu_class4 = $active_class;		
	}
}?>   
<header>
	<div class="center-container">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a title="<?php echo variable_get('site_name');?>"  class="navbar-brand" href="<?php echo $base_url;?>">
						<img alt="<?php echo variable_get('site_name');?>" src="<?php echo $base_url.'/'.path_to_theme();?>/img/logo.png" class="logo">
					</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li class="<?php echo $menu_class1;?>">
							<a href="<?php echo $link1;?>"><?php echo __('الرئيسية');?></a>
						</li>
						<li class="<?php echo $menu_class2;?>">
							<a href="<?php echo $link2;?>"><?php echo __('عن الشركة');?></a>
						</li>
						<li class="<?php echo $menu_class3;?>">
							<a href="<?php echo $link3;?>"><?php echo __('المنتجات');?></a>
						</li>
						<li class="<?php echo $menu_class4;?>">
							<a href="<?php echo $link4;?>"><?php echo __('مكتبة الفيديو');?></a>
						</li>
						<li class="<?php echo $menu_class5;?>">
							<a href="<?php echo $link5;?>"><?php echo __('اتصل بنا');?></a>
						</li>
					</ul>
					<a title="<?php echo variable_get('site_name');?>"  class="navbar-brand" href="<?php echo $base_url;?>">
						<img  alt="<?php echo variable_get('site_name');?>"  src="<?php echo $base_url.'/'.path_to_theme();?>/img/logo2.png" class="logo2">
					</a>
				</div>
			</div>
		</nav>
	</div>
</header>