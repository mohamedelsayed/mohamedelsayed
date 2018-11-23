<?php global $sitelang; ?>
<?php if (variable_get('facebook_url') != '') { ?>
    <li>
        <a title="<?php echo __('Facebook'); ?>" hreflang="<?php echo $sitelang; ?>" target="_blank" href="<?php echo variable_get('facebook_url'); ?>">
            <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
    </li>
<?php } ?>
<?php if (variable_get('twitter_url') != '') { ?>
    <li>
        <a title="<?php echo __('Twitter'); ?>" hreflang="<?php echo $sitelang; ?>" target="_blank" href="<?php echo variable_get('twitter_url'); ?>">
            <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
    </li>
<?php } ?>
<?php if (variable_get('linkedin_url') != '') { ?>
    <li>
        <a title="<?php echo __('Linkedin'); ?>" hreflang="<?php echo $sitelang; ?>" target="_blank" href="<?php echo variable_get('linkedin_url'); ?>">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
        </a>
    </li>
<?php } ?>
<?php if (variable_get('codecademy_url') != '') { ?>
    <li>
        <a title="<?php echo __('Codecademy'); ?>" hreflang="<?php echo $sitelang; ?>" target="_blank" href="<?php echo variable_get('codecademy_url'); ?>">
            <i class="codecademy_icon" ></i>
        </a>
    </li>
<?php } ?>
<?php if (variable_get('mostaql_url') != '') { ?>
    <li>
        <a title="<?php echo __('Mostaql'); ?>" hreflang="<?php echo $sitelang; ?>" target="_blank" href="<?php echo variable_get('mostaql_url'); ?>">
            <i class="mostaql_icon" ></i>
        </a>
    </li>
<?php } ?>
<?php if (variable_get('hackerrank_url') != '') { ?>
    <li>
        <a title="<?php echo __('Hackerrank'); ?>" hreflang="<?php echo $sitelang; ?>" target="_blank" href="<?php echo variable_get('hackerrank_url'); ?>">
            <i class="fab fa-hackerrank" aria-hidden="true"></i>
        </a>
    </li>
<?php } ?>