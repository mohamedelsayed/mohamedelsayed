<?php /**
 * @author Author "Mohamed Elsayed"  
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2015 Programming by "http://www.mohamedelsayed.net"
 */?>
<?php $base_url_with_lang = elsayed_get_base_url_with_lang();
$arg1 = arg(1);
$actual_link = elsayed_get_actual_link();?>
<?php include_once 'header.php';?>
<div id="products-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="product-heading">
                    <?php if($arg1 == "") { ?>
                         <h2><?php echo t('Enter keword to search for !');?></h2>
                    <?php } else { ?>
                        <h2><?php echo t('Search results of keyword : ').$arg1 ;?></h2>                    
                    <?php } ?>
                    <img src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/images/under-heading.png" alt="" >
                </div>
            </div>
        </div>
        <?php   
        $tag = '';        
        if($arg1 != ''){
            $tag = $arg1;
        }     
        $limit = 12;
        $page = 1;
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }
        $return = ellabd_get_search_results($tag, $limit, $page);
        if(isset($return['page_count']) && isset($return['items'])) {
            $page_count = $return['page_count'];
            $products = $return['items'];
        }
        ?>
        <?php include_once 'list_products.php';?>
    </div>
</div>
<?php include_once 'footer.php';?>