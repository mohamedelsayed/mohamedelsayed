<?php /**
 * @author Author "Mohamed Elsayed"  
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2017 Programming by "http://www.mohamedelsayed.net"
 */?>
<?php global $base_url;?>    
<?php include_once 'common'.DS.'header.php';?>
<?php $arg1 = arg(1);
 if(is_numeric($arg1)){
    $category = $arg1;
}else{
    $category = 0;
}
$page_title = __('المنتجات');
if($category > 0){
	$category_data = node_load($category);
	$category_title = $category_data->title;
	$page_title = $category_title;	
}
drupal_set_title($page_title);?>
<div class="facilities">
	<div class="container">
		<h3 class="tittle"><?php echo $page_title;?></h3> 			
		<?php $home = 0;$limit = $GLOBALS['limit'];$page = 1;
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }
        $return = elsayed_get_products($category, $home, $limit, $page);
        $page_count = $return['page_count'];
        $products = $return['items'];?>
        <?php include_once 'list_products.php';?>
    	<script type="text/javascript">
    	jQuery(function($) {
    		jQuery(".swipebox").swipebox();
		});
		</script>
		<div class="clearfix"></div>
	</div>
</div>
<?php include_once 'common'.DS.'footer.php';?>