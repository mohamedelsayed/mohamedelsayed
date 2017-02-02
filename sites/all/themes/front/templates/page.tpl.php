<?php /**
 * @author Author "Mohamed Elsayed"  
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2015 Programming by "http://www.mohamedelsayed.net"
 */?>
<?php include_once 'common'.DS.'header.php';?>
<div id="page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php print render($page_content);?>  
            </div>
        </div>
    </div>
</div>
<?php include_once 'common'.DS.'footer.php';?>
<style type="text/css">
    .content{
        display: block;
    }
</style>