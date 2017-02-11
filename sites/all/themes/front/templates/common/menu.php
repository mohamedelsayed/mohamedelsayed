<?php global $base_url;
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
	$link5 = '#get-touch';
	$menu_class1 = $active_class;
}else{
	$link1 = $base_url.'#home';
	$link2 = $base_url.'#about';
	$link3 = $base_url.'/services';
	$link4 = $base_url.'#portfolio';
	$link5 = $base_url.'#get-touch';
	$uri = $_SERVER[REQUEST_URI];
	if (strpos($uri, 'services') !== false) {
	//if($arg0 == 'services'){		
		$menu_class3 = $active_class;		
	}
}?>
<li class="<?php echo $menu_class1;?>">
	<a href="<?php echo $link1;?>"><?php echo ucwords(__('home'));?></a>
</li>
<li class="<?php echo $menu_class2;?>">
	<a href="<?php echo $link2;?>"><?php echo ucwords(__('about me'));?></a>
</li>
<li class="<?php echo $menu_class3;?>">
	<a href="<?php echo $link3;?>"><?php echo ucwords(__('services'));?></a>
</li>
<li class="<?php echo $menu_class4;?>">
	<a href="<?php echo $link4;?>"><?php echo ucwords(__('portfolio'));?></a>
</li>
<li class="<?php echo $menu_class5;?>">
	<a href="<?php echo $link5;?>"><?php echo ucwords(__('contact me'));?></a>
</li>