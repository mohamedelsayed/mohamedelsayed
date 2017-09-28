<?php global $sitelang; ?>
<?php
global $base_url;
$arg0 = arg(0);
$active_class = 'active';
$menu_class1 = '';
$menu_class2 = '';
$menu_class3 = '';
$menu_class4 = '';
$menu_class5 = '';
$menu_class6 = '';
$is_front_page = drupal_is_front_page();
$link3 = $base_url . '/services';
$link6 = $base_url . '/certificates';
if ($is_front_page) {
    $link1 = '#home';
    $link2 = '#aboutme';
    $link4 = '#portfolio';
    $link5 = '#get-touch';
    $menu_class1 = $active_class;
} else {
    $link1 = $base_url . '#home';
    $link2 = $base_url . '/about-me';
    $link4 = $base_url . '/projects';
    $link5 = $base_url . '#get-touch';
    $uri = $_SERVER['REQUEST_URI'];
    if (strpos($uri, 'services') !== false) {
        $menu_class3 = $active_class;
    }
    if (strpos($uri, 'about-me') !== false) {
        $menu_class2 = $active_class;
    }
    if (strpos($uri, 'projects') !== false) {
        $menu_class4 = $active_class;
    }
    if (strpos($uri, 'certificates') !== false) {
        $menu_class6 = $active_class;
    }
    $arg1 = arg(1);
    if (is_numeric($arg1)) {
        $node = node_load($arg1);
        if (!empty($node)) {
            if (isset($node->type)) {
                if ($node->type == 'project') {
                    $menu_class4 = $active_class;
                }
                if ($node->type == 'certificate') {
                    $menu_class6 = $active_class;
                }
            }
        }
    }
}
$home_widgets = $GLOBALS['home_widgets'];
$about_title = '';
$portfolio_title = '';
$contact_title = '';
if (isset($home_widgets['about']) && !empty($home_widgets['about'])) {
    $item = $home_widgets['about'];
    if (isset($item->title)) {
        $about_title = $item->title;
    }
}
if (isset($home_widgets['portfolio']) && !empty($home_widgets['portfolio'])) {
    $item = $home_widgets['portfolio'];
    if (isset($item->title)) {
        $portfolio_title = $item->title;
    }
}
if (isset($home_widgets['contact']) && !empty($home_widgets['contact'])) {
    $item = $home_widgets['contact'];
    if (isset($item->title)) {
        $contact_title = $item->title;
    }
}
?>
<li class="<?php echo $menu_class1; ?>">
    <a hreflang="<?php echo $sitelang; ?>" href="<?php echo $link1; ?>"><?php echo ucwords(__('Home')); ?></a>
</li>
<li class="<?php echo $menu_class2; ?>">
    <a hreflang="<?php echo $sitelang; ?>" class="aboutme_btn" href="<?php echo $link2; ?>"><?php echo ucwords(__($about_title)); ?></a>
</li>
<li class="<?php echo $menu_class3; ?>">
    <a hreflang="<?php echo $sitelang; ?>" href="<?php echo $link3; ?>"><?php echo ucwords(__('Services')); ?></a>
</li>
<li class="<?php echo $menu_class6; ?>">
    <a hreflang="<?php echo $sitelang; ?>" href="<?php echo $link6; ?>"><?php echo ucwords(__('Certificates')); ?></a>
</li>
<li class="<?php echo $menu_class4; ?>">
    <a hreflang="<?php echo $sitelang; ?>" href="<?php echo $link4; ?>"><?php echo ucwords(__($portfolio_title)); ?></a>
</li>
<li class="<?php echo $menu_class5; ?>">
    <a hreflang="<?php echo $sitelang; ?>" href="<?php echo $link5; ?>"><?php echo ucwords(__($contact_title)); ?></a>
</li>