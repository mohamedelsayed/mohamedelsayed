<?php drupal_set_title('');
global $base_url;
$home_widgets = elsayed_get_home_widgets();
include_once 'common'.DS.'header.php';
include_once 'home'.DS.'slider.php';
include_once 'home'.DS.'about.php';
include_once 'home'.DS.'service.php';
include_once 'home'.DS.'portfolio.php';
include_once 'home'.DS.'contact.php';		
include_once 'common'.DS.'footer.php';?>