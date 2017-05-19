<?php global $sitelang; ?>
<?php global $base_url; ?>
<html>
    <head>
        <title><?php print $head_title; ?></title>
        <?php print $head; ?>
        <?php print $styles; ?>
        <?php print $scripts; ?>
    </head>
    <body>
        <div class="container">
            <div class="maintenancelogo">
                <a hreflang="<?php echo $sitelang; ?>" href="<?php echo $base_url; ?>">
                    <img style="max-width: 240px;" alt="<?php echo variable_get('site_name'); ?>" src="<?php echo $base_url . '/' . path_to_theme() . '/images/common/logo.png'; ?>" />
                </a>
            </div>
            <div class="maintenancelogo">
                <a hreflang="<?php echo $sitelang; ?>" href="<?php echo $base_url; ?>">
                    <img alt="<?php echo variable_get('site_name'); ?>" src="<?php echo $base_url . '/' . path_to_theme() . '/img/under-construct.gif'; ?>" />
                </a>
            </div>
            <div class="maintenancetext">
                <div id="content" class="clearfix">
                    <?php /* if ($messages): ?>
                      <div id="console"><?php print $messages; ?></div>
                      <?php endif;?>
                      <?php if ($help): ?>
                      <div id="help">
                      <?php print $help; ?>
                      </div>
                      <?php endif; */ ?>
                    <?php print $content; ?>
                </div>
            </div>
        </div>
    </body>
</html>