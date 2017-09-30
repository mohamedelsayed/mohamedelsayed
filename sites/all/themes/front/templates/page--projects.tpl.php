<?php global $sitelang; ?>
<?php /**
 * @author Author "Mohamed Elsayed"
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2017 Programming by "http://www.mohamedelsayed.net"
 */ ?>
<?php global $base_url; ?>
<?php include_once 'common' . DS . 'header.php'; ?>
<?php
$page_title = __('Projects');
drupal_set_title($page_title);
?>
<div class="projects page_margin_bottom">
    <div class="container ">
        <h3 class="tittle"><?php echo $page_title; ?></h3>
        <?php
        $home = 0;
        $limit = $GLOBALS['limit'];
        $page = 1;
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }
        $return = elsayed_get_projects($home, $limit, $page);
        $page_count = $return['page_count'];
        $projects = $return['items'];
        ?>
        <?php include_once 'list_projects.php'; ?>
        <div class="clearfix"></div>
    </div>
</div>
<?php include_once 'common' . DS . 'footer.php'; ?>