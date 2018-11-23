<?php
/**
 * @author Author "Mohamed Elsayed"
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2017 Programming by "http://www.mohamedelsayed.net"
 */
global $base_url;
if (!isset($GLOBALS['social_image'])) {
    $GLOBALS['social_image'] = $base_url . '/' . path_to_theme() . '/img/logo.png';
}
if (!isset($GLOBALS['meta_description'])) {
    $GLOBALS['meta_description'] = '';
}
if (!isset($GLOBALS['meta_keywords'])) {
    $GLOBALS['meta_keywords'] = '';
}
$sitelang = elsayed_get_language_from_url();
$base_url_with_lang = elsayed_get_base_url_with_lang();
?>
<?php global $sitelang; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title><?php echo $head_title; ?></title>
        <meta property="og:image" content="<?php echo $GLOBALS['social_image']; ?>">
        <meta name="twitter:image" content="<?php echo $GLOBALS['social_image']; ?>">
        <meta name="description" content="<?php echo $GLOBALS['meta_description']; ?>">
        <meta name="keywords" content="<?php echo $GLOBALS['meta_keywords']; ?>">
        <meta name="author" content="Mohamed Elsayed">
        <script type="text/javascript">
            var base_url_with_lang = '<?php echo $base_url_with_lang; ?>';
            var base_url = '<?php echo $GLOBALS['base_url']; ?>';
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">
        <link href="<?php echo $base_url . '/' . path_to_theme(); ?>/img/favicon.png" type="image/x-icon" rel="icon">
        <?php print $styles; ?>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/v4-shims.css">
        <?php print $scripts; ?>
    </head>
    <?php
    $additional_body_classes = '';
    $is_admin = elsayed_is_user_admin();
    if ($is_admin) {
        //$additional_body_classes .= ' admin ';
    }
    ?>
    <body id="top" data-spy="scroll" class="<?php print $classes . $additional_body_classes; ?>" <?php print $attributes; ?>>
        <?php print $page_top; ?>
        <?php print $page; ?>
        <?php print $page_bottom; ?>
        <?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false) { ?>
            <script src='https://www.google.com/recaptcha/api.js'></script>
            <?php if (variable_get('google_analytics_propertyid') != '') { ?>
                <script type = "text/javascript">
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', '<?php echo variable_get('google_analytics_propertyid'); ?>', 'auto');
            ga('send', 'pageview');
                </script>
            <?php } ?>
        <?php } ?>
    </body>
</html>