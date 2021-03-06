<?php global $sitelang; ?>
<?php if (!empty($projects)) { ?>
    <?php
    foreach ($projects as $key => $project) {
        $project_title = $project->title;
        $project_url = elsayed_get_node_url_by_id($project->nid);
        $project_description = '';
        if (isset($project->body[LANGUAGE_NONE][0]['value'])) {
            $project_description = elsayed_cut_string($project->body[LANGUAGE_NONE][0]['value'], 250);
        }
        $image = $GLOBALS['default_image'];
        if (isset($project->field_images[LANGUAGE_NONE][0]['uri'])) {
            $image = image_style_url('thumbnail', $project->field_images[LANGUAGE_NONE][0]['uri']);
        }
        ?>
        <div class="view_1 view_1-eighth filimg col-md-3 col-sm-4 col-xs-6 listing_item" style="">
            <a class="b-link-stripe b-animate-go swipebox"  title="<?php echo $project_title; ?>">
                <a hreflang="<?php echo $sitelang; ?>" class="b-link-stripe b-animate-go swipebox" href="<?php echo $project_url; ?>">
                    <img src="<?php echo $image; ?>" alt="<?php echo $project_title; ?>" class="img-responsive">
                    <div class="mask">
                        <h4 class="title_project"><?php echo $project_title; ?></h4>
                        <p class="project_p"><?php echo $project_description; ?></p>

                    </div>
                </a>
            </a>
        </div>
    <?php } ?>
    <?php
    $paging = elsayed_draw_paging($page_count, $page);
    echo $paging;
    ?>
<?php } else { ?>
    <div style="width:100%;text-align:center;float:left"><?php echo __('No results found'); ?></div>
    <?php
}?>