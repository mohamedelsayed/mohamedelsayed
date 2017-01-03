<?php
/**
 * @author Author "Mohamed Elsayed"  
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2016 Programming by "http://www.mohamedelsayed.net"
 */
$social_image = '';
$GLOBALS['meta_description'] = '';
$GLOBALS['meta_keywords'] = '';
$sitelang = elsayed_get_language_from_url();
$base_url_with_lang = elsayed_get_base_url_with_lang();?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Collective Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<?php print $scripts;?>
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<script>
			 new WOW().init();
		</script>
	    <meta charset="utf-8">
	    <title><?php echo $head_title;?></title>
	    <meta property="og:image" content="<?php echo $social_image; ?>">
	    <meta name="twitter:image" content="<?php echo $social_image; ?>">
	    <meta name="description" content="<?php echo $GLOBALS['meta_description']; ?>">
	    <meta name="keywords" content="<?php echo $GLOBALS['meta_keywords']; ?>">
	    <meta name="author" content="Mohamed Elsayed">
	    <script type="text/javascript">
	        var base_url_with_lang = '<?php echo $base_url_with_lang;?>';
	        var base_url = '<?php echo $GLOBALS['base_url'];?>';
	    </script>
	    <?php print $styles;?> 
	    <link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	</head>    
    <body class="<?php print $classes;?>" <?php print $attributes; ?>>    
        <?php print $page_top; ?>
        <?php print $page; ?>
        <?php print $page_bottom;?>           
        <?php /*$google_analytics_propertyid = get_domain_google_analytics_fields(); ?>
        <?php if ($google_analytics_propertyid != '') { ?>		
            <script type = "text/javascript">
                (function(i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function() {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                            m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
                ga('create', '<?php echo $google_analytics_propertyid; ?>', 'auto');
                ga('send', 'pageview');
            </script>	
        <?php }*/?>        
    </body>
</html>