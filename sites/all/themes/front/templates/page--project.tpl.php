<?php global $sitelang; ?>
<?php /**
 * @author Author "Mohamed Elsayed"
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2017 Programming by "http://www.mohamedelsayed.net"
 */ ?>
<?php include_once 'common' . DS . 'header.php'; ?>
<?php
$nid = arg(1);
$project = node_load($nid);
if (!empty($project)) {
    $project_title = $project->title;
    //$project_url = elsayed_get_node_url_by_id($project->nid);
    $project_description = '';
    if (isset($project->body[LANGUAGE_NONE][0]['value'])) {
        $project_description = $project->body[LANGUAGE_NONE][0]['value'];
    }
    $image = $GLOBALS['default_image'];
    $default_image = $GLOBALS['default_image'];
    /* if(isset($project->field_images[LANGUAGE_NONE][0]['uri'])){
      $image = image_style_url('large', $project->field_images[LANGUAGE_NONE][0]['uri']);
      $default_image = image_style_url('default_size', $project->field_images[LANGUAGE_NONE][0]['uri']);
      } */
    $project_link = '';
    if (isset($project->field_link[LANGUAGE_NONE][0]['value'])) {
        $project_link = $project->field_link[LANGUAGE_NONE][0]['value'];
    }
    ?>
    <div id="project-post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="" style="position: absolute;right: 0;">
                        <div class="view_more" style="float: right;margin-right: 15px;">
                            <a hreflang="<?php echo $sitelang; ?>" class="btn btn-default view_more_btn" target="_blank" href="<?php echo $project_link; ?>">
                                <i class="fa fa-link" aria-hidden="true"></i>
                                <?php echo __('Project Link'); ?>
                            </a>
                        </div>
                    </div>
                    <div id="project-heading" style="padding: 0px;">
                        <h2><?php echo $project_title; ?></h2>
                    </div>
                    <div class="col-md-12">
                        <?php echo $project_description; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 30px;">
                    <?php
                    if (isset($project->field_images[LANGUAGE_NONE])) {
                        $images = $project->field_images[LANGUAGE_NONE];
                        if (!empty($images)) {
                            ?>
                            <ul class="bxslider">
                                <?php
                                foreach ($images as $key => $image) {
                                    $image_url = image_style_url('large', $image['uri']);
                                    $default_image_url = image_style_url('default_size', $image['uri']);
                                    if (trim($default_image_url) != '') {
                                        ?>
                                        <li>
                                            <img src="<?php echo $default_image_url; ?>" />
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                            <script type="text/javascript">
                                jQuery(document).ready(function () {
                                    jQuery('.bxslider').bxSlider({
                                        auto: true,
                                        adaptiveHeight: true,
                                        mode: 'fade'
                                    });
                                });
                            </script>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php include_once 'common' . DS . 'footer.php'; ?>