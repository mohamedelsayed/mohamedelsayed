<?php /**
 * @author Author "Mohamed Elsayed"  
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2015 Programming by "http://www.mohamedelsayed.net"
 */?>
<?php $base_url_with_lang = elsayed_get_base_url_with_lang();
$arg1 = arg(1);
$node = node_load($arg1);
$actual_link = elsayed_get_actual_link();?>
<?php include_once 'header.php';?>
<div id="products-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="product-heading">
                    <h2><?php echo t('News');?></h2>
                    <img src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/images/under-heading.png" alt="" >
                </div>
            </div>
        </div>
        <?php $limit = 10;
        $page = 1;
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }
        $return = elsayed_get_articles($limit, $page);
        $page_count = $return['page_count'];
        $articles = $return['items'];?>
        <?php if(!empty($articles)){?>
            <div class="container">            
                <div class="row">
                    <div class="searchable-container">
                        <?php foreach ($articles as $key => $article) {
                            $article_title = $article->title;
                            $article_url = elsayed_get_node_url_by_id($article->nid);
                            $article_description = '';
                            if(isset($article->body[LANGUAGE_NONE][0]['safe_value'])){
                                $article_description = $article->body[LANGUAGE_NONE][0]['safe_value'];
                            }
                            $image = $GLOBALS['default_image'];
                            $default_image = $GLOBALS['default_image'];
                            $alt = '';
                            if(isset($article->field_image[LANGUAGE_NONE][0]['uri'])){
                                $image = image_style_url('thumbnail', $article->field_image[LANGUAGE_NONE][0]['uri']);
                                $alt = $article->field_image[LANGUAGE_NONE][0]['alt'];
                                //$default_image = image_style_url('default_size', $article->field_image[LANGUAGE_NONE][0]['uri']);
                            }?>        
                            <div class="items col-xs-12 col-sm-6 col-md-6 col-lg-6 clearfix">
                                <div class="info-block block-info clearfix">
                                    <div class="square-box pull-left">
                                        <img src="<?php echo $image;?>" alt="<?php echo $alt;?>" />
                                    </div>                                    
                                    <h4><a href="<?php echo $article_url;?>"><?php echo $article_title;?></a></h4>
                                    <p><?php echo elsayed_string_format_view($article_description, 25);?></p>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <?php $paging = elsayed_draw_paging($page_count, $page);
            echo $paging;?>  
        <?php }?>
    </div>
</div>
<?php include_once 'footer.php';?>