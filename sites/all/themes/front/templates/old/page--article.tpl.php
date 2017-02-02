<?php /**
 * @author Author "Mohamed Elsayed"  
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2016 Programming by "http://www.mohamedelsayed.net"
 */?>
<?php include_once 'header.php';?>
<?php $nid = arg(1);
$article = node_load($nid);
if(!empty($article)){
    $article_title = $article->title;
    //$article_url = elsayed_get_node_url_by_id($article->nid);
    $article_description = '';
    if(isset($article->body[LANGUAGE_NONE][0]['value'])){
        $article_description = $article->body[LANGUAGE_NONE][0]['value'];
    }
    $image = $GLOBALS['default_image'];
    $default_image = $GLOBALS['default_image'];
    $alt = '';
    if(isset($article->field_image[LANGUAGE_NONE][0]['uri'])){
        $image = image_style_url('large', $article->field_image[LANGUAGE_NONE][0]['uri']);
        $alt = $article->field_image[LANGUAGE_NONE][0]['alt'];
        $default_image = image_style_url('default_size', $article->field_image[LANGUAGE_NONE][0]['uri']);
    }?>
    <div id="product-post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="product-heading" style="padding: 0px;margin-bottom: 30px;">
                        <h2><?php echo $article_title;?></h2>
                        <img src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/images/under-heading.png" alt="<?php echo $article_title;?>" >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6 article_item">
                        <img style="width: 100%;" src="<?php echo $image;?>" alt="<?php echo $alt;?>" />
                        <div class="hover">
                            <div class="hover-iner">
                                <a class="fancybox" href="<?php echo $default_image;?>">
                                    <img src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/images/open-icon.png" alt="<?php echo $alt;?>" />
                                </a>                                    
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <?php echo $article_description;?>
                        </div>                   
                    </div>
                </div>            
            </div>
        </div>
    </div>
<?php }?>
<?php include_once 'footer.php';?>